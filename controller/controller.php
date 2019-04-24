<?php
    /*
     * $sParaTemp,最原始的参数KEY/VALUE,商户可以置入该数组进行测试参考。
     * $result，网关返回的结果
     */
    include_once("../api/weibopay.class.php");
    include_once("../config/conf.php");
    $weibopay = new Weibopay();
    $sParaTemp = array();
    //获得外部数据$sParaTemp，进行空值剔除处理
        foreach($_POST as $k => $v){
            if( ($v !=null) || ($v != '')){
                $sParaTemp[$k]=$v;
            }
        }
    ksort($sParaTemp);
    //接受到外部来的参数以后，判断是有有需要加密的数组，若有就先加密
    $sParaTemp = $weibopay -> Encryption_sParaTemp($sParaTemp);
    //计算签名，在将签名追加sParaTemp数组中
    $sParaTemp['sign'] = $weibopay->getSignMsg($sParaTemp, $sParaTemp['sign_type'],$sParaTemp['_input_charset']);
    // 调用createcurl_data创建模拟表单需要的数据
    $data = $weibopay->createcurl_data($sParaTemp);
    // 使用模拟表单提交进行数据提交
    $result = $weibopay->curlPost($weibopay->get_url($sParaTemp["service"]), $data,$sParaTemp['_input_charset']);
    try{
        //尝试解析是否json报文，否则直接前端输出新浪响应的form表单
        $splitdata = json_decode($result, true);
        //对返回数据进行排序
        ksort($splitdata);
        //验证新浪响应的签名是否正确
        if($weibopay->checkSignMsg($splitdata, $splitdata['sign_type'], $splitdata['_input_charset'])){
            //验签成功。可信任数据
            echo $result;
        }else{
            //签名验证错误，正常情况下不会出现签名验证错误
            echo $result;
        }
    }catch(Exception $e){
        //若不是json数据，视为表单输出
        echo $result;
    }
?>