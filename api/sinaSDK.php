<?php
@include_once (dirname ( __File__ ) . "/weibopay.class.php");
class sinaSDK{
        public static $mas_url = "https://testgate.pay.sina.com.cn/mas/gateway.do";//联调地址，商户切换生产以后请换为文档要求的地址;
        public static $mgs_url = "https://testgate.pay.sina.com.cn/mgs/gateway.do";//联调地址，商户切换生产以后请换为文档要求的地址;
        //交易类的接口请使用这个方法
        public function mas_sdk($sParaTemp)
        {
            $mas_result = $this->send_tool($sParaTemp, sinaSDK::$mas_url);
            return $mas_result;
        }
        //会员类的接口请使用这个方法
        public function mgs_sdk($sParaTemp)
        {
            $mgs_result = $this->send_tool($sParaTemp, sinaSDK::$mgs_url);
            return $mgs_result;
        }
        public function send_tool($ParaTemp, $send_url)
        {
        	$weibopay = new Weibopay();
        	$weibopay ->write_log("开始进入SDK 传入的参数是：".json_encode($ParaTemp,JSON_UNESCAPED_UNICODE));
        	try
            { 
            foreach ($ParaTemp as $k =>$v)
            {
                if (($k == "risk_info") || ($k == "device_info"))
                {
                    $sParaTemp[$k] = json_encode($v);
                }
                else if ((($ParaTemp["service"] == "create_batch_pay2bank") && ($k == "detail_list")) || ($k == "split_list"))
                {
                    $sParaTemp[$k]="";
                    $splittemp = $v;
                    for ($i = 0; $i < count($splittemp); $i++)
                    {
                        for ($j = 0; $j < count($splittemp[$i]); $j++)
                        {
                             $sParaTemp[$k] = ($j == 0)  ?
                                $sParaTemp[$k] . $splittemp[$i][$j] :
                                $sParaTemp[$k] . "^" . $splittemp[$i][$j];
                        }
                        if ($i < count($splittemp) - 1) { $sParaTemp[$k] = $sParaTemp[$k] . "|"; }
                    }
                }
                else if (($ParaTemp["service"] == "create_batch_pay2account") && ($k == "detail_list"))
                {
                    $sParaTemp[$k]="";
                    $splittemp = $v;
                    for ($i = 0; $i < count($splittemp); $i++)
                    {
                        for ($j = 0; $j < count($splittemp[$i]); $j++)
                        {
                             $sParaTemp[$k] = ($j == 0)  ?
                                $sParaTemp[$k] . $splittemp[$i][$j] :
                                $sParaTemp[$k] . "~" . $splittemp[$i][$j];
                        }
                        if ($i < count($splittemp) - 1) { $sParaTemp[$k] = $sParaTemp[$k] . "$"; }
                    }
                }
                else {
                    $sParaTemp[$k] = $v;
                }
            }
                //排序
	            ksort($sParaTemp);
	            //接受到外部来的参数以后，判断是有有需要加密的数组，若有就先加密
			    $sParaTemp = $weibopay -> Encryption_sParaTemp($sParaTemp);
			    //计算签名，在将签名追加sParaTemp数组中
			    $sParaTemp['sign'] = $weibopay->getSignMsg($sParaTemp, $sParaTemp['sign_type'],$sParaTemp['_input_charset']);
			    // 调用createcurl_data创建模拟表单需要的数据
			    $data = $weibopay->createcurl_data($sParaTemp);
			    // 使用模拟表单提交进行数据提交
			    $result = $weibopay->curlPost($send_url, $data,$sParaTemp['_input_charset']);
	            $weibopay ->write_log("SDK获得网关数据是：".$result);
	            //尝试解析是否json报文，
	        	$splitdata = json_decode($result, true);
	        	$checkSignresult = $weibopay->checkSignMsg($splitdata, $splitdata['sign_type'], $splitdata['_input_charset']);
	            if($checkSignresult){
	            //验签成功。可信任数据
	            $weibopay ->write_log("验签成功。可信任数据：".$result);
	            return $splitdata;
		        }else{
		            //签名验证错误，正常情况下不会出现签名验证错误
		            $splitdata["SDK_Check_Sign_error"] = "响应报文验签失败，请检查KEY或者报文";
		            $weibopay ->write_log("验证同步响应签名失败。不可信任数据或者KEY使用不正确。报文是:".json_encode($splitdata,JSON_UNESCAPED_UNICODE));
		            return $splitdata;
		        }
            	}catch (Exception $e){
	             	$splitdata["SDK_Exception"]= "捕获异常" . $e;
	            	$weibopay ->write_log("捕获异常:" . $e);
	                return $splitdata;
                }
	        }
		}
    
?>