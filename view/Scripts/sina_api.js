/**
 * 发送接口调用请求
 * @param Encryptionstr
 */
function send(Encryptionstr) {
            Sign_and_send_toweb(Encryptionstr);
            updateTimeLabel(4);
}
/**
 * 后端请求发送
 * @returns {boolean}
 * @constructor
 */
function Sign_and_send_toweb(Encryptionstr) {
    var testJson;
    $.ajax({
        //配置请求方式默认post
        type: "post",
        //配置后台服务调用地址
        url:"../controller/controller.php",
        //async: false,
        data: $("#request_form").serialize(),
        success: function (data) {
           success_function(data);
        },
        error: function (data) {
        }
    })
    return false;
}
/**
 * 同步返回成功处理
 * @param data
 */
function success_function(data) {
    try {
        testJson = $.parseJSON(data);
        if (typeof (testJson.redirect_url) != "undefined") {
            location.href = testJson.redirect_url;
        } else {
            result_temp = "";
            for (var i in testJson) {
                result_temp += i + ":" + testJson[i] + "\n";
            }
            $("#result").addClass("huanhang");
            $("#result").text(eval("'" + data + "'"));
            if (testJson.response_code == "APPLY_SUCCESS" && typeof ($("#identity_id").val()) != "undefined") {
                $.cookie("identity_id", $("#identity_id").val());
            } else {

            }
        }
    }
    catch (err) {
        document.write(data);
    }
}
/**
 * sftp后端调用
 * @param Encryptionstr
 * @constructor
 */
function SFTPupimg(Encryptionstr){
    var formData = new FormData($("#request_form")[0]);
    $.ajax({
        //配置请求方式默认post
        type: "post",
        //配置后台服务地址
        url: "../controller/controller_sftp_upimg.php",
        data: formData,
        cache: false,
        contentType: false,//Content-Type请求头
        processData: false,//jquery对数据不处理
        success: function (data) {
            testJson = $.parseJSON(data);
            if (testJson["upresult"] == "success") {
                $("#fileName").val(testJson["fileName"]);
                $("#digest").val(testJson["digest"]);
                $("#weibopya_send_img").remove();
                send(Encryptionstr);
                
            } else {
                $("#result").val(testJson["upresult"]);
            }
        },
        error: function (data) {
        }
    })
};

$("#reset").click(function () {
    location.reload();
});
