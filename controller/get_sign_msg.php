<?php
    /*
     * 前端html调用计算签名方法的示例，仅直连网银使用
     *
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
    //计算签名值
    $sign['sign'] = $weibopay->getSignMsg($sParaTemp, $sParaTemp['sign_type'],$sParaTemp['_input_charset']);
    echo json_encode($sign,true);
?>