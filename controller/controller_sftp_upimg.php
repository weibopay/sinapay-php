<?php
include_once("../api/weibopay.class.php");
include_once("../config/conf.php");
$weibopay = new Weibopay();
$zipname = time();
$response=array();
    $file_path = sinapay_file_path.$zipname;//文件保存目录
    mkdir($file_path, 0777, true);
    foreach($_FILES as $k => $v){
        move_uploaded_file($_FILES[$k]['tmp_name'],$file_path.'/'.$k.'.png');
    }
$zip = new ZipArchive();
    if($zip->open($file_path.'.zip', ZipArchive::OVERWRITE)=== TRUE){
        addFileToZip(sinapay_file_path, $zip,$zipname); //调用方法，对要打包的根目录进行操作，并将ZipArchive的对象传递给方法
        $zip->close(); //关闭处理的zip文件
        $filedata = sinapay_file_path.$zipname.".zip";
        $is_upload = $weibopay->sftp_upload($filedata, $zipname.".zip");
        $response['digest'] = $weibopay->md5_file($filedata);//文件摘要
        $response['fileName'] = $zipname.".zip";
        $response['upresult'] = "success";
        echo json_encode($response);
    }

function addFileToZip($path,$zip,$zipname){
    $handler=opendir($path.$zipname."/"); //打开当前文件夹由$path指定。
    while(($filename=readdir($handler))!==false){
            if($filename != "." && $filename != ".." ){//文件夹文件名字为'.'和‘..'，不要对他们进行操作
                if(is_dir($path."/".$filename)){// 如果读取的某个对象是文件夹，则递归
                    addFileToZip($path."/".$filename, $zip,$zipname);
                }else{ //将文件加入zip对象
                    $zip->addFile($path."/".$zipname.'/'.$filename,$zipname.'/'.$filename);
                }
        }
    }
    @closedir($path);
}
?>
