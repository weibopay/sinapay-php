<?php
//测试sdk文件
header("Content-type: text/html; charset=utf-8");
include_once ("../config/conf.php");
include_once ("../api/sinaSDK.php");
createMember();
	
	
	function createMember()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="create_activate_member";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["sign"]="";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["sign_version"]="1.0";
		$sParaTemp["encrypt_version"]="1.0";
		$sParaTemp["notify_url"]="";
		$sParaTemp["return_url"]="";
		$sParaTemp["memo"]="创建会员";
		$sParaTemp["risk_info"]="";
		$sParaTemp["device_info"]="";
		$sParaTemp["identity_id"]="655545";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["member_type"]="1";
		$sParaTemp["client_ip"]="127.0.0.1";
		$sParaTemp["extend_param"]="";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
	}

	
	function setRealName()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="set_real_name";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["sign"]="";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["sign_version"]="1.0";
		$sParaTemp["encrypt_version"]="1.0";
		$sParaTemp["notify_url"]="";
		$sParaTemp["return_url"]="";
		$sParaTemp["memo"]="设置实名信息";
		$sParaTemp["risk_info"]="";
		$sParaTemp["device_info"]="";
		$sParaTemp["identity_id"]="1555051737809";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["real_name"]="郭嘉慕";
		$sParaTemp["cert_type"]="IC";
		$sParaTemp["cert_no"]="140428200105314950";
		$sParaTemp["need_confirm"]="Y";
		$sParaTemp["client_ip"]="127.0.0.1";
		$sParaTemp["extend_param"]="UID";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
	}
	
	
	
	function setPayPassword()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="set_pay_password";
		$sParaTemp["identity_id"]="1555051737809";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="";
		$sParaTemp["version"]="1.2";
		$sParaTemp["withhold_param"]="withhold_auth_type^ALL,ACCOUNT|is_check^Y";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["return_url"]="http://www.xxx.com/pay_password.html";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function modifyPayPassword()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="modify_pay_password";
		$sParaTemp["identity_id"]="1555051737809";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="";
		$sParaTemp["version"]="1.2";
		$sParaTemp["withhold_param"]="";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["return_url"]="http://www.xxx.com/pay_password.html";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function findPayPassword()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="find_pay_password";
		$sParaTemp["identity_id"]="1555051737809";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="";
		$sParaTemp["version"]="1.2";
		$sParaTemp["withhold_param"]="";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["return_url"]="http://www.xxx.com/pay_password.html";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function queryIsSetPayPassword()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="query_is_set_pay_password";
		$sParaTemp["identity_id"]="1555051737809";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="";
		$sParaTemp["version"]="1.2";
		$sParaTemp["withhold_param"]="";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["return_url"]="http://www.xxx.com/pay_password.html";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function bindingBankCard()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="binding_bank_card";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["sign"]="";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["sign_version"]="1.0";
		$sParaTemp["encrypt_version"]="1.0";
		$sParaTemp["notify_url"]="";
		$sParaTemp["return_url"]="";
		$sParaTemp["memo"]="绑定银行卡";
		$sParaTemp["risk_info"]="";
		$sParaTemp["device_info"]="";
		$sParaTemp["identity_id"]="1555051737809";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["request_no"]="12345646";
		$sParaTemp["bank_code"]="ICBC";
		$sParaTemp["bank_account_no"]="6212264100011335373";
		$sParaTemp["account_name"]="";
		$sParaTemp["card_type"]="DEBIT";
		$sParaTemp["card_attribute"]="C";
		$sParaTemp["cert_type"]="IC";
		$sParaTemp["cert_no"]="";
		$sParaTemp["phone_no"]="18796261167";
		$sParaTemp["validity_period"]="";
		$sParaTemp["verification_value"]="";
		$sParaTemp["province"]="上海市";
		$sParaTemp["city"]="上海市";
		$sParaTemp["bank_branch"]="";
		$sParaTemp["verify_mode"]="SIGN";
		$sParaTemp["client_ip"]="127.0.0.1";
		$sParaTemp["extend_param"]="";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
	}
	
	function bindingBankCardAdvance()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="binding_bank_card_advance";
		$sParaTemp["ticket"]="0413af017b3143c597951d1cddcd5ded";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["valid_code"]="629545";
		$sParaTemp["return_url"]="http://www.xxx.com/binding_bank_card_advance.html";
		$sParaTemp["client_ip"]="101.231.34.38";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function queryBankCard()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="query_bank_card";
		$sParaTemp["identity_id"]="1555051737809";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="";
		$sParaTemp["version"]="1.2";
		$sParaTemp["card_id"]="";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["return_url"]="http://www.xxx.com/query_bank_card.html";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	
	function unbindingBankCard()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="unbinding_bank_card";
		$sParaTemp["identity_id"]="1555051737809";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="";
		$sParaTemp["version"]="1.2";
		$sParaTemp["card_id"]="398603";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["advance_flag"]="Y";
		$sParaTemp["return_url"]="http://www.xxx.com/unbinding_bank_card.html";
		$sParaTemp["client_ip"]="101.231.34.38";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function unbindingBankCardAdvance()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="unbinding_bank_card_advance";
		$sParaTemp["ticket"]="5678a662444c44969d282abbf7045b52";
		$sParaTemp["identity_id"]="1555051737809";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["valid_code"]="889534";
		$sParaTemp["return_url"]="http://www.xxx.com/unbinding_bank_card_advance.html";
		$sParaTemp["client_ip"]="101.231.34.38";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	
	function queryBalance()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="query_balance";
		$sParaTemp["account_type"]="SAVING_POT";
		$sParaTemp["identity_id"]="1555051737809";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["return_url"]="http://www.xxx.com/query_balance.html";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function queryAccountDetails()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="query_account_details";
		$sParaTemp["account_type"]="SAVING_POT";
		$sParaTemp["identity_id"]="1555051737809";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["end_time"]="20190412151846";
		$sParaTemp["memo"]="";
		$sParaTemp["page_no"]="1";
		$sParaTemp["notify_url"]="";
		$sParaTemp["version"]="1.2";
		$sParaTemp["start_time"]="20190411151846";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["return_url"]="http://www.xxx.com/query_account_details.html";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["extend_param"]="";
		$sParaTemp["page_size"]="5";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function balanceFreeze()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="balance_freeze";
		$sParaTemp["summary"]="非法占用";
		$sParaTemp["account_type"]="SAVING_POT";
		$sParaTemp["amount"]="2";
		$sParaTemp["identity_id"]="1555051737809";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["return_url"]="http://www.xxx.com/balance_freeze.html";
		$sParaTemp["out_freeze_no"]="freeze20190409103634";
		$sParaTemp["client_ip"]="101.231.34.38";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function balanceUnfreeze()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="balance_unfreeze";
		$sParaTemp["out_unfreeze_no"]="unfreeze20190409103817";
		$sParaTemp["summary"]="事件已处理";
		$sParaTemp["amount"]="2";
		$sParaTemp["identity_id"]="1555051737809";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["return_url"]="http://www.xxx.com/balance_unfreeze.html";
		$sParaTemp["out_freeze_no"]="freeze20190409103634";
		$sParaTemp["client_ip"]="101.231.34.38";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function queryCtrlResult()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="query_ctrl_result";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["out_ctrl_no"]="freeze20190409103634";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["return_url"]="http://www.xxx.com/query_ctrl_result.html";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="";
		$sParaTemp["version"]="1.2";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function queryMemberInfos()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="query_member_infos";
		$sParaTemp["identity_id"]="20190411175426";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["is_mask"]="N";
		$sParaTemp["return_url"]="http://www.xxx.com/query_member_infos.html";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	
	function auditMemberInfos()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="audit_member_infos";
		$sParaTemp["member_type"]="2";
		$sParaTemp["bank_branch"]="中国工商银行深圳南山支行";
		$sParaTemp["cert_type"]="IC";
		$sParaTemp["fileName"]="20190409104807.zip";
		$sParaTemp["license_address"]="上海";
		$sParaTemp["city"]="上海市";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["cert_effect_date"]="20151002";
		$sParaTemp["cert_invalid_date"]="forever";
		$sParaTemp["memo"]="";
		$sParaTemp["card_attribute"]="B";
		$sParaTemp["legal_person_phone"]="18956236585";
		$sParaTemp["license_no"]="20000000000002";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["province"]="上海市";
		$sParaTemp["digest"]="29880fa0c06ac9df31059d8e84d252a4";
		$sParaTemp["return_url"]="http://www.xxx.com/index.html";
		$sParaTemp["client_ip"]="101.231.34.38";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["organization_no"]="200010000009";
		$sParaTemp["extend_param"]="";
		$sParaTemp["email"]="ms@weibopay.com";
		$sParaTemp["summary"]="企业简介";
		$sParaTemp["bank_code"]="ICBC";
		$sParaTemp["website"]="sssss";
		$sParaTemp["legal_person"]="李某某";
		$sParaTemp["address"]="测试公司的企业地址";
		$sParaTemp["cert_no"]="140428200105314950";
		$sParaTemp["identity_id"]="20190412152732";
		$sParaTemp["digestType"]="MD5";
		$sParaTemp["bank_account_no"]="6212264100011335373";
		$sParaTemp["license_expire_date"]="20201002";
		$sParaTemp["telephone"]="4009218887";
		$sParaTemp["notify_url"]="http://www.xxx.com/Notify";
		$sParaTemp["card_type"]="DEBIT";
		$sParaTemp["version"]="1.2";
		$sParaTemp["audit_order_no"]="audit_member_20190409104642";
		$sParaTemp["business_scope"]="软件开发，软件测试，金融";
		$sParaTemp["company_name"]="测试公司的全称";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function queryAuditResult()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="query_audit_result";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["identity_id"]="20190411175426";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["return_url"]="http://www.xxx.com/query_audit_result.html";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["version"]="1.2";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function changeBankMobile()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="change_bank_mobile";
		$sParaTemp["phone_no"]="18796265852";
		$sParaTemp["identity_id"]="1555051737809";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["request_no"]="bil_bancart20190409104856";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://www.xxx.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["card_id"]="152369";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["return_url"]="http://www.xxx.com/index.html";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function changeBankMobileAdvance()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="change_bank_mobile_advance";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["valid_code"]="026302";
		$sParaTemp["ticket"]="e1b0c41da7954fac8aea8b9ab912b091";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["return_url"]="http://www.xxx.com/index.html";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://www.xxx.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function smtFundAgentBuy()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="smt_fund_agent_buy";
		$sParaTemp["agent_name"]="夏黎珊";
		$sParaTemp["identity_id"]="20190411175426";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["agent_mobile"]="15695263254";
		$sParaTemp["notify_url"]="http://www.xxx.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["license_type_code"]="ID";
		$sParaTemp["license_no"]="330100199910163443";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["return_url"]="http://www.xxx.com/index.html";
		$sParaTemp["client_ip"]="101.231.34.38";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["email"]="";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function queryFundAgentBuy()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="query_fund_agent_buy";
		$sParaTemp["identity_id"]="655545";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://www.xxx.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["return_url"]="http://www.xxx.com/index.html";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["extend_param"]="";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function modifyVerifyMobile()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="modify_verify_mobile";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["identity_id"]="20190409104630";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["return_url"]="http://www.xxx.com/index.html";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://www.xxx.com/Notify";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["version"]="1.2";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function findVerifyMobile()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="find_verify_mobile";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["identity_id"]="20190409104630";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["return_url"]="http://www.xxx.com/index.html";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://www.xxx.com/Notify";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["version"]="1.2";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function handleWithholdAuthority()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="handle_withhold_authority";
		$sParaTemp["identity_id"]="20190409104630";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["auth_type_whitelist"]="ALL,ACCOUNT";
		$sParaTemp["notify_url"]="http://www.xxx.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["quota"]="2000";
		$sParaTemp["return_url"]="http://www.xxx.com/index.html";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["extend_param"]="";
		$sParaTemp["day_quota"]="4000";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function modifyWithholdAuthority()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="modify_withhold_authority";
		$sParaTemp["identity_id"]="20190409104630";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://www.xxx.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["quota"]="3000";
		$sParaTemp["return_url"]="http://www.xxx.com/index.html";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["day_quota"]="3800";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function queryWithholdAuthority()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="query_withhold_authority";
		$sParaTemp["auth_type"]="ALL";
		$sParaTemp["identity_id"]="20190409104630";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://www.xxx.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["return_url"]="http://www.xxx.com/index.html";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["is_detail_disp"]="Y";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function relieveWithholdAuthority()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="relieve_withhold_authority";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["identity_id"]="1555051737809";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["return_url"]="http://www.xxx.comindex.html";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://www.xxx.com/Notify";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["version"]="1.2";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function setMerchantConfig()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="set_merchant_config";
		$sParaTemp["config_value"]="MEMBER_INFO_GENERAL_NOTIFY_URL";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://www.xxx.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["config_key"]="MEMBER_INFO_GENERAL_NOTIFY_URL";
		$sParaTemp["return_url"]="http://www.xxx.com/index.html";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["extend_param"]="";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function queryMerchantConfig()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="query_merchant_config";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["config_key"]="MEMBER_INFO_GENERAL_NOTIFY_URL";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["return_url"]="http://www.xxx.com/index.html";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://www.xxx.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function merchantReport()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="merchant_report";
		$sParaTemp["contact_name"]="sss";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["merchant_name"]="sss";
		$sParaTemp["notify_url"]="http://www.xxx.com/Notify";
		$sParaTemp["mcc"]="";
		$sParaTemp["version"]="1.2";
		$sParaTemp["contact_identity"]="02";
		$sParaTemp["custom_telephone"]="0102523685";
		$sParaTemp["contact_type"]="LEGAL_PERSON";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["merchant_identitiy_type"]="UID";
		$sParaTemp["return_url"]="http://www.xxx.com/index.html";
		$sParaTemp["merchant_identity_id"]="20181012100627";
		$sParaTemp["short_name"]="ss";
		$sParaTemp["report_org"]="TENPAY";
		$sParaTemp["client_ip"]="127.0.0.1";
		$sParaTemp["sign_type"]="RSA";
		$sParaTemp["app_id"]="sssssssssssssw";
		$sParaTemp["extend_param"]="";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}
	
	function smerchantUrlGet()
	{
		$sinaSDK = new sinaSDK();
		$sParaTemp["service"]="smerchant_url_get";
		$sParaTemp["member_type"]="1";
		$sParaTemp["identity_id"]="201904091107458";
		$sParaTemp["_input_charset"]="utf-8";
		$sParaTemp["cashdesk_addr_category"]="";
		$sParaTemp["memo"]="";
		$sParaTemp["notify_url"]="http://www.xxx.com/Notify";
		$sParaTemp["version"]="1.2";
		$sParaTemp["request_time"]="20190409110850";
		$sParaTemp["partner_id"]="20000916888";
		$sParaTemp["return_url"]="http://www.xxx.com/index.html";
		$sParaTemp["client_ip"]="101.231.34.38";
		$sParaTemp["identity_type"]="UID";
		$sParaTemp["sign_type"]="RSA";
		$sinaSDK_result = $sinaSDK -> mgs_sdk($sParaTemp);
		
	}



?>