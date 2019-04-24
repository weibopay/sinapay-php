<?php
    /**
     * sftp上传文件，文件存放地址
     */
    define("sinapay_file_path", "../files/");//file_path
    /**
     * 商户签名私钥，由商户自己生成
     */
    define("sinapay_rsa_sign_private_key", dirname(__File__) . "/../key/rsa_sign_private.pem");//签名私钥
    /**
     * 商户验证签名公钥，由新浪提供
     */
    define("sinapay_rsa_sign_public_key", dirname(__File__) . "/../key/rsa_sign_public.pem");//验证签名公钥
    /**
     * 新浪支付特殊参数加密，公钥，由新浪支付提供
     */
    define("sinapay_rsa_public__key", dirname(__File__) . "/../key/rsa_public.pem");//加密公钥
    /**
     *
     **/
    define("sinapay_debug_status", true);//true 开启日志记录  false 关闭日志记录
    /**
     * sftp参数配置
     */
    //sftp地址
    define("sinapay_sftp_address", "222.73.39.37");
    //sftp端口号
    define("sinapay_sftp_port", "50022");
    //sftp登录名
    define("sinapay_sftp_Username", "20000918888");
    //sftp登录私钥
    define("sinapay_sftp_privatekey", dirname(__File__) . "/../key/id_rsa");
    //sftp登录公钥
    define("sinapay_sftp_publickey", dirname(__File__) . "/../key/id_rsa.pub");
    //sftp上传目录
    define("sinapay_sftp_upload_directory", dirname(__File__) . "/upload");
            function get_trade_Interface_service()
                {
                $trade_Interface_service =      //交易类网关服务
                    array(
                "create_b2c_order"=>"交易创建",
                "pay_order"=>"再次支付",
                "advance_hosting_pay"=>"付款推进（快捷支付验证码推进）",
                "settle_b2c_order"=>"交易结算",
                "close_b2c_order"=>"交易关闭",
                "cancel_b2c_order"=>"交易撤销",
                "extend_settle_time"=>"延长交易结算时间",
                "query_pay_result"=>"支付结果查询",
                "query_hosting_trade"=>"交易查询",
                "create_hosting_refund"=>"退款",
                "query_hosting_refund"=>"退款查询",
                "receipt_split"=>"分账",
                "query_receipt_split"=>"分账查询",
                "create_batch_pay2account"=>"批量付款到账户",
                "create_batch_pay2bank"=>"批量付款到银行卡",
                "query_b2c_batch_fundout_order"=>"出款批次查询",
                "query_hosting_batch_trade"=>"交易批次查询",
                "query_fund_yield"=>"存钱罐基金收益率查询",
                "create_hosting_deposit"=>"充值",
                "query_hosting_deposit"=>"充值查询",
                "create_hosting_withdraw"=>"提现",
                "query_hosting_withdraw"=>"提现查询"
                );
            return $trade_Interface_service;
        }
    /// 返回需要加密的参数名的集合
    function  get_need_RSA()
    {
        $array = ["real_name", "cert_no", "verify_entity","bank_account_no","account_name",
                    "phone_no","validity_period","verification_value","telephone","email","organization_no",
                    "legal_person","legal_person_phone","agent_name","license_no","agent_mobile"];
        return $array;
    }
?>
