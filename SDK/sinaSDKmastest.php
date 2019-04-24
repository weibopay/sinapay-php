<?php
header("content-type:text/html;charset=utf-8"); 
//测试sdk文件
include_once ("../config/conf.php");
include_once ("../api/sinaSDK.php");
//createB2cOrder();
//createBatchPay2account();
createBatchPay2bank();
	function createB2cOrder()
	{
        $risk_info["goods_code"]="100101";
        $risk_info["goods_name"]="商品";
        $risk_info["mobile"]="00wZtIwJYRZIEhFMUsVfhb9";
        $device_info["device_id"]="76:31:c1:c3:10:dc";
        $device_info["device_type"]="PC";
        $split_list = array( 
        array ("10014542","UID","BASIC","10015543","UID","BASIC","3.00","备注"),
        array ("10014543","UID","BASIC","10015544","UID","BASIC","3.00","备注"),
        array ("10014544","UID","BASIC","10015545","UID","BASIC","3.00","备注"),
        );
        $sParaTemp["service"]="create_b2c_order";
		$sParaTemp["seller_account_type"]="BASIC";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["buyer_identity_type"]="UID";
		$sParaTemp["reported_identity_id"]="";
		$sParaTemp["settlement_time"]="";
		$sParaTemp["product_desc"]="";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000918888";
        $sParaTemp["split_list"]=$split_list;
		$sParaTemp["return_url"]="http://XXX.com/return";
		$sParaTemp["risk_info"]=$risk_info;
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["extend_param"]="";
		$sParaTemp["amount"]="10";
		$sParaTemp["seller_identity_type"]="UID";
		$sParaTemp["pay_method"]="online_bank^10^SINAPAY,DEBIT,C";
		$sParaTemp["notify_url"]="http://XXX.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["payer_ip"]="192.168.1.4";
		$sParaTemp["out_trade_no"]="collecttrade20190409110849";
        $sParaTemp["device_info"]=$device_info;
		$sParaTemp["buyer_identity_id"]="20181012100627";
		$sParaTemp["reported_identity_type"]="UID";
		$sParaTemp["trade_close_time"]="";
		$sParaTemp["seller_identity_id"]="20181012100705";
        $sinaSDK = new sinaSDK();
        $sinaSDK_result = $sinaSDK -> mas_sdk($sParaTemp);
    }
	
	function payOrder()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="pay_order";
		$sParaTemp["device_id"]="";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["pay_method"]="online_bank^20^SINAPAY,DEBIT,C";
		$sParaTemp["notify_url"]="http://XXX.com/Notify";
		$sParaTemp["out_pay_no"]="paytrade20190409111242";
		$sParaTemp["version"]="1.2";
		$sParaTemp["payer_ip"]="192.168.1.4";
		$sParaTemp["request_time"]="20190409111242";
		$sParaTemp["partner_id"]="20000918888";
		$sParaTemp["out_trade_no"]="withdraw20190319110821";
		$sParaTemp["return_url"]="http://XXX.com/return";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mas_sdk($sParaTemp);
		
	}
	
	function advanceHostingPay()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="advance_hosting_pay";
		$sParaTemp["user_ip"]="101.231.34.38";
		$sParaTemp["ticket"]="324e3bfecb3b4ffb94c9000bf73021ba";
		$sParaTemp["validate_code"]="025689";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://XXX.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409111330";
		$sParaTemp["partner_id"]="20000918888";
		$sParaTemp["out_advance_no"]="advance20190409111330";
		$sParaTemp["return_url"]="http://XXX.com/return";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["extend_param"]="";
		$sinaSDK_result = $sinaSDK -> mas_sdk($sParaTemp);
		
	}
	
	function settleB2cOrder()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="settle_b2c_order";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://XXX.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409111725";
		$sParaTemp["partner_id"]="20000918888";
		$sParaTemp["out_trade_no"]="collecttrade20190409110849";
		$sParaTemp["return_url"]="http://XXX.com/return";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["out_request_no"]="request20190409111725";
		$sParaTemp["extend_param"]="";
		$sinaSDK_result = $sinaSDK -> mas_sdk($sParaTemp);
		
	}
	
	function closeB2cOrder()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="close_b2c_order";
		$sParaTemp["summary"]="交易关闭";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://XXX.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409111746";
		$sParaTemp["partner_id"]="20000918888";
		$sParaTemp["out_trade_no"]="collecttrade20190409110849";
		$sParaTemp["return_url"]="http://XXX.com/return";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["out_request_no"]="request20190409111746";
		$sParaTemp["extend_param"]="";
		$sinaSDK_result = $sinaSDK -> mas_sdk($sParaTemp);
		
	}
	
	function cancelB2cOrder()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="cancel_b2c_order";
		$sParaTemp["summary"]="交易撤销";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://XXX.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409111806";
		$sParaTemp["partner_id"]="20000918888";
		$sParaTemp["out_trade_no"]="collecttrade20190409110849";
		$sParaTemp["return_url"]="http://XXX.com/return";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["out_request_no"]="request20190409111806";
		$sParaTemp["extend_param"]="";
		$sinaSDK_result = $sinaSDK -> mas_sdk($sParaTemp);
		
	}
	
	function extendSettleTime()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="extend_settle_time";
		$sParaTemp["summary"]="延长交易结算时间";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://XXX.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["extend_time"]="15d";
		$sParaTemp["request_time"]="20190409111828";
		$sParaTemp["partner_id"]="20000918888";
		$sParaTemp["out_trade_no"]="collecttrade20190409110849";
		$sParaTemp["return_url"]="http://XXX.com/return";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["out_request_no"]="request20190409111828";
		$sParaTemp["extend_param"]="";
		$sinaSDK_result = $sinaSDK -> mas_sdk($sParaTemp);
		
	}
	
	function queryHostingTrade()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="query_hosting_trade";
		$sParaTemp["identity_id"]="20190409104630";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["end_time"]="20190409111906";
		$sParaTemp["memo"]="";
		$sParaTemp["page_no"]="";
		$sParaTemp["notify_url"]="http://XXX.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["start_time"]="20190409111906";
		$sParaTemp["request_time"]="20190409111906";
		$sParaTemp["partner_id"]="20000918888";
		$sParaTemp["out_trade_no"]="collecttrade20190409110849";
		$sParaTemp["return_url"]="http://XXX.com/return";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["extend_param"]="";
		$sParaTemp["page_size"]="";
		$sinaSDK_result = $sinaSDK -> mas_sdk($sParaTemp);
		
	}
	
	function createHostingRefund()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="create_hosting_refund";
		$sParaTemp["summary"]="流标退款";
		$sParaTemp["user_ip"]="101.231.34.38";
		$sParaTemp["refund_split_strategy"]="";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://XXX.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["refund_split_list"]="";
		$sParaTemp["request_time"]="20190409111929";
		$sParaTemp["partner_id"]="20000918888";
		$sParaTemp["out_trade_no"]="refund20190409111929";
		$sParaTemp["return_url"]="http://XXX.com/return";
		$sParaTemp["refund_amount"]="2";
		$sParaTemp["orig_outer_trade_no"]="collecttrade20190409110849";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["extend_param"]="";
		$sinaSDK_result = $sinaSDK -> mas_sdk($sParaTemp);
		
	}
	
	function queryHostingRefund()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="query_hosting_refund";
		$sParaTemp["identity_id"]="20190409104630";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["end_time"]="20190409111958";
		$sParaTemp["memo"]="";
		$sParaTemp["page_no"]="";
		$sParaTemp["notify_url"]="http://XXX.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["start_time"]="20190409111958";
		$sParaTemp["request_time"]="20190409111958";
		$sParaTemp["partner_id"]="20000918888";
		$sParaTemp["out_trade_no"]="refund20190409111929";
		$sParaTemp["return_url"]="http://XXX.com/return";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["extend_param"]="";
		$sParaTemp["page_size"]="";
		$sinaSDK_result = $sinaSDK -> mas_sdk($sParaTemp);
		
	}
	
	function createBatchPay2bank()
	{
		$weibopay = new Weibopay();
        $risk_info["goods_code"]="100101";
        $risk_info["goods_name"]="商品";
        $risk_info["mobile"]="00wZtIwJYRZIEhFMUsVfhb9";
        $device_info["device_id"]="76:31:c1:c3:10:dc";
        $device_info["device_type"]="PC";
        $split_list = array( 
        array ("10014542","UID","BASIC","10015543","UID","BASIC","3.00","备注"),
        array ("10014543","UID","BASIC","10015544","UID","BASIC","3.00","备注"),
        array ("10014544","UID","BASIC","10015545","UID","BASIC","3.00","备注"),
        );
        $detail_list = array( 
        array ("2019052497600222",$weibopay->Rsa_encrypt("鲁班", sinapay_rsa_public__key,"UTF-8"),$weibopay->Rsa_encrypt("110105200010107012", sinapay_rsa_public__key,"UTF-8"),$weibopay->Rsa_encrypt("62218882000604489333", sinapay_rsa_public__key,"UTF-8"),"中国工商银行","ICBC","浙江省","杭州市","中国农业银行深圳南山支行","30","C","DEBIT","备注"),
        array ("2019052497600222",$weibopay->Rsa_encrypt("李白", sinapay_rsa_public__key,"UTF-8"),$weibopay->Rsa_encrypt("110105200010106394", sinapay_rsa_public__key,"UTF-8"),$weibopay->Rsa_encrypt("62218882000604489334", sinapay_rsa_public__key,"UTF-8"),"中国工商银行","ICBC","浙江省","杭州市","中国农业银行深圳南山支行","30","C","DEBIT","备注"),
        array ("2019052497600222",$weibopay->Rsa_encrypt("程咬金", sinapay_rsa_public__key,"UTF-8"),$weibopay->Rsa_encrypt("110105200010108330", sinapay_rsa_public__key,"UTF-8"),$weibopay->Rsa_encrypt("62218882000604489335", sinapay_rsa_public__key,"UTF-8"),"中国工商银行","ICBC","浙江省","杭州市","中国农业银行深圳南山支行","30","C","DEBIT","备注"),
        );
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="create_batch_pay2bank";
		$sParaTemp["account_type"]="";
		$sParaTemp["batch_no"]="bath20190409112021";
		$sParaTemp["_input_charset"]="utf-8";
        $sParaTemp["detail_list"]=$detail_list;
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://XXX.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409112021";
		$sParaTemp["partner_id"]="20000918888";
		$sParaTemp["return_url"]="http://XXX.com/return";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["payto_type"]="";
		$sParaTemp["extend_param"]="";
		$sinaSDK_result = $sinaSDK -> mas_sdk($sParaTemp);
		
	}
	
	function createBatchPay2account()
	{
        $detail_list = array( 
        array("2019052493600222","12345","UID","BASIC","10","还钱",""),
        array("2019052493600223","12346","UID","BASIC","20","还钱",""),
        array("2019052493600224","12347","UID","BASIC","25","还钱",""),
        array("2019052493600225","12348","UID","BASIC","30","还钱",""),
        );
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="create_batch_pay2account";
		$sParaTemp["account_type"]="";
		$sParaTemp["batch_no"]="bath20190409112044";
		$sParaTemp["_input_charset"]="utf-8";
        $sParaTemp["detail_list"]=$detail_list;
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://XXX.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409112044";
		$sParaTemp["partner_id"]="20000918888";
		$sParaTemp["return_url"]="http://XXX.com/return";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["extend_param"]="";
		$sinaSDK_result = $sinaSDK -> mas_sdk($sParaTemp);
		
	}
	
	function queryB2cBatchFundoutOrder()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="query_b2c_batch_fundout_order";
		$sParaTemp["request_time"]="20190409112113";
		$sParaTemp["partner_id"]="20000918888";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["return_url"]="http://XXX.com/return";
		$sParaTemp["memo"]="";
		$sParaTemp["out_batch_no"]="bath20190409112044";
		$sParaTemp["notify_url"]="http://XXX.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mas_sdk($sParaTemp);
		
	}
	
	function receiptSplit()
	{
		$sinaSDK = new sinaSDK();
        $split_list = array ( 
        array("10014542","UID","BASIC","10015543","UID","BASIC","3.00","备注","20131105154926"),
        array("10014543","UID","BASIC","10015544","UID","BASIC","3.00","备注","20131105154927"),
        array("10014544","UID","BASIC","10015545","UID","BASIC","3.00","备注","20131105154928"),
        );
		$sParaTemp["service"]="receipt_split";
		$sParaTemp["split_type"]="";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://XXX.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409112143";
		$sParaTemp["partner_id"]="20000918888";
        $sParaTemp["split_list"]=split_list;
		$sParaTemp["return_url"]="http://XXX.com/return";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["orig_out_trade_no"]="refund20190409111929";
		$sinaSDK_result = $sinaSDK -> mas_sdk($sParaTemp);
		
	}
	
	function queryReceiptSplit()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="query_receipt_split";
		$sParaTemp["identity_id"]="20190409104630";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["end_time"]="20190409112219";
		$sParaTemp["memo"]="";
		$sParaTemp["page_no"]="";
		$sParaTemp["notify_url"]="http://XXX.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["start_time"]="20190409112219";
		$sParaTemp["request_time"]="20190409112219";
		$sParaTemp["partner_id"]="20000918888";
		$sParaTemp["out_split_no"]="857dhuurk855";
		$sParaTemp["return_url"]="http://XXX.com/return";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["page_size"]="";
		$sinaSDK_result = $sinaSDK -> mas_sdk($sParaTemp);
		
	}
	
	function queryHostingBatchTrade()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="query_hosting_batch_trade";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["out_batch_no"]="8558ujufoh85225";
		$sParaTemp["page_no"]="";
		$sParaTemp["notify_url"]="http://XXX.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409112250";
		$sParaTemp["partner_id"]="20000918888";
		$sParaTemp["return_url"]="http://XXX.com/return";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["page_size"]="";
		$sinaSDK_result = $sinaSDK -> mas_sdk($sParaTemp);
	}
    function createHostingDeposit()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="create_hosting_deposit";
		$sParaTemp["summary"]="某某账户充值";
		$sParaTemp["account_type"]="SAVING_POT";
		$sParaTemp["amount"]="10";
		$sParaTemp["device_id"]="";
		$sParaTemp["identity_id"]="20190411175426";
		$sParaTemp["deposit_close_time"]="18m";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["pay_method"]="online_bank^10^SINAPAY,DEBIT,C";
		$sParaTemp["notify_url"]="http://10.65.106.62:6070/sinaPayJavaDemo/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["payer_ip"]="114.218.183.139";
		$sParaTemp["user_fee"]="";
        $sParaTemp["request_time"]="20190411100222";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["out_trade_no"]="order20190412100028";
		$sParaTemp["return_url"]="http://localhost:6070/sinaPayJavaDemo/index.html";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["extend_param"]="";
		$sinaSDK_result = $sinaSDK -> mas_sdk($sParaTemp);
	}
	
	function queryHostingDeposit()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="query_hosting_deposit";
		$sParaTemp["account_type"]="SAVING_POT";
		$sParaTemp["identity_id"]="20190411175426";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["end_time"]="20190412100222";
		$sParaTemp["memo"]="";
		$sParaTemp["page_no"]="";
		$sParaTemp["notify_url"]="http://10.65.106.62:6070/sinaPayJavaDemo/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["start_time"]="20190411100222";
        $sParaTemp["request_time"]="20190411100222";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["out_trade_no"]="";
		$sParaTemp["return_url"]="http://localhost:6070/sinaPayJavaDemo/index.html";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["page_size"]="";
		$sinaSDK_result = $sinaSDK -> mas_sdk($sParaTemp);
	}
	
	function createHostingWithdraw()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="create_hosting_withdraw";
		$sParaTemp["summary"]="余额提现";
		$sParaTemp["withdraw_mode"]="CASHDESK";
		$sParaTemp["user_ip"]="114.218.183.139";
		$sParaTemp["account_type"]="SAVING_POT";
		$sParaTemp["amount"]="5";
		$sParaTemp["identity_id"]="20190411175426";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://10.65.106.62:6070/sinaPayJavaDemo/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["card_id"]="";
		$sParaTemp["user_fee"]="";
        $sParaTemp["request_time"]="20000916888";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["out_trade_no"]="withdraw20190412100308";
		$sParaTemp["return_url"]="http://localhost:6070/sinaPayJavaDemo/index.html";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["withdraw_close_time"]="10m";
		$sParaTemp["payto_type"]="FAST";
		$sParaTemp["extend_param"]="customNotify^Y";
		$sinaSDK_result = $sinaSDK -> mas_sdk($sParaTemp);
}
	
	function queryHostingWithdraw()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="query_hosting_withdraw";
		$sParaTemp["account_type"]="SAVING_POT";
		$sParaTemp["identity_id"]="20190411175426";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["end_time"]="20190412100402";
		$sParaTemp["memo"]="";
		$sParaTemp["page_no"]="";
		$sParaTemp["notify_url"]="http://10.65.106.62:6070/sinaPayJavaDemo/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["start_time"]="20190411100402";
        $sParaTemp["request_time"]="20000916888";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["out_trade_no"]="";
		$sParaTemp["return_url"]="http://localhost:6070/sinaPayJavaDemo/index.html";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["page_size"]="";
        $sinaSDK_result = $sinaSDK -> mas_sdk($sParaTemp);
	}
	
	
	function queryFundYield()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="query_fund_yield";
        $sParaTemp["request_time"]="20000916888";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["return_url"]="http://localhost:8080/java_demo_zhanghu/index.html";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://10.65.106.83:8080/java_demo_zhanghu/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["fund_code"]="000330";
		$sinaSDK_result = $sinaSDK -> mas_sdk($sParaTemp);
	}
?>