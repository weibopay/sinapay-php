<?php
    /**
     * 
     * 异步调用的时候，验证新浪签名的调用示例
     */
    include_once("../api/weibopay.class.php");
    include_once("../config/conf.php");
    ksort($_POST);
    $weibopay = new Weibopay ();
    //记录返回内容
    $weibopay->write_log("收到异步通知请求");
    $weibopay->write_log(json_encode($_POST));
    if ($weibopay->checkSignMsg($_POST, $_POST["sign_type"],$_POST["_input_charset"])) {
        switch ($_POST["notify_type"]) {
            //交易结果通知
            case "trade_status_sync":
                //按照自己的业务需求获取对应参数进行保存
                $weibopay->write_log("获取到trade_status_sync结果通知:时间:" . date("YmdHis"));
                $weibopay->write_log("获取到trade_status_sync结果通知:回调信息:" . json_encode($_POST));
                break;
            //交易退款结果通知
            case "refund_status_sync":
                //按照自己的业务需求获取对应参数进行保存
                $weibopay->write_log("获取到refund_status_sync结果通知:时间:" . date("YmdHis"));
                $weibopay->write_log("获取到refund_status_sync结果通知:回调信息:" . json_encode($_POST));
                break;
            //充值结果通知
            case "deposit_status_sync":
                //按照自己的业务需求获取对应参数进行保存
                $weibopay->write_log("获取到deposit_status_sync结果通知:时间:" . date("YmdHis"));
                $weibopay->write_log("获取到deposit_status_sync结果通知:回调信息:" . json_encode($_POST));
                break;
            //提现结果通知
            case "withdraw_status_sync":
                //按照自己的业务需求获取对应参数进行保存
                $weibopay->write_log("获取到withdraw_status_sync结果通知:时间:" . date("YmdHis"));
                $weibopay->write_log("获取到withdraw_status_sync结果通知:回调信息:" . json_encode($_POST));
                break;
            //批量代付结果通知
            case "batch_trade_status_sync":
                //按照自己的业务需求获取对应参数进行保存
                $weibopay->write_log("获取到batch_trade_status_sync结果通知:时间:" . date("YmdHis"));
                $weibopay->write_log("获取到batch_trade_status_sync结果通知:回调信息:" . json_encode($_POST));
                break;
            //审核结果通知
            case "audit_status_sync":
                //按照自己的业务需求获取对应参数进行保存
                $weibopay->write_log("获取到audit_status_sync结果通知:时间:" . date("YmdHis"));
                $weibopay->write_log("获取到audit_status_sync结果通知:回调信息:" . json_encode($_POST));
                break;
            //标的状态通知
            case "bid_status_sync":
                //按照自己的业务需求获取对应参数进行保存
                $weibopay->write_log("获取到bid_status_sync结果通知:时间:" . date("YmdHis"));
                $weibopay->write_log("获取到bid_status_sync结果通知:回调信息:" . json_encode($_POST));
                break;
            //设置支付密码
            case "mig_set_pay_password":
                //按照自己的业务需求获取对应参数进行保存
                $weibopay->write_log("获取到mig_set_pay_password结果通知:时间:" . date("YmdHis"));
                $weibopay->write_log("获取到mig_set_pay_password结果通知:回调信息:" . json_encode($_POST));
                break;
            //绑定银行卡（会员信息综合通知）
            case "mig_binding_card":
                //按照自己的业务需求获取对应参数进行保存
                $weibopay->write_log("获取到mig_binding_card结果通知:时间:" . date("YmdHis"));
                $weibopay->write_log("获取到mig_binding_card结果通知:回调信息:" . json_encode($_POST));
                break;
            //解绑银行卡（会员信息综合通知）
            case "mig_unbind_card":
                //按照自己的业务需求获取对应参数进行保存
                $weibopay->write_log("获取到mig_unbind_card结果通知:时间:" . date("YmdHis"));
                $weibopay->write_log("获取到mig_unbind_card结果通知:回调信息:" . json_encode($_POST));
                break;
                //申请委托扣款（会员信息综合通知）
            case "mig_apply_withhold":
                //按照自己的业务需求获取对应参数进行保存
                $weibopay->write_log("获取到mig_apply_withhold结果通知:时间:" . date("YmdHis"));
                $weibopay->write_log("获取到mig_apply_withhold结果通知:回调信息:" . json_encode($_POST));
                break;
            //申请委托扣款（会员信息综合通知）
            case "mig_apply_withhold":
                //按照自己的业务需求获取对应参数进行保存
                $weibopay->write_log("获取到mig_apply_withhold结果通知:时间:" . date("YmdHis"));
                $weibopay->write_log("获取到mig_apply_withhold结果通知:回调信息:" . json_encode($_POST));
                break;
            //取消委托扣款（会员信息综合通知）
            case "mig_cancel_withhold":
                //按照自己的业务需求获取对应参数进行保存
                $weibopay->write_log("获取到mig_cancel_withhold结果通知:时间:" . date("YmdHis"));
                $weibopay->write_log("获取到mig_cancel_withhold结果通知:回调信息:" . json_encode($_POST));
                break;
            //换绑卡通知（会员信息综合通知）
            case "mig_change_card":
                //按照自己的业务需求获取对应参数进行保存
                $weibopay->write_log("获取到mig_change_card结果通知:时间:" . date("YmdHis"));
                $weibopay->write_log("获取到mig_change_card结果通知:回调信息:" . json_encode($_POST));
                break;
            default:
                $weibopay->write_log("获取到未知结果通知:时间:" . date("YmdHis"));
                $weibopay->write_log("获取到未知结果通知:单号:" . json_encode($_POST));
                echo "通知类型错误！";
        }
        // 如果回调成功，需要输出SUCCESS告知新浪回调服务器，已经收到异步通知。
        echo 'success';
    } else {
        $msg = "签名错误 or 非法请求";
        $weibopay->write_log($msg);
        die ("sign error");
    }
?>
