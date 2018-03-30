<?php
//session_start();
//ob_start();

include("functions.php");
//Подключаем файл конфигурации
include("config.php");
//Подключаем BD
//include($_SERVER['DOCUMENT_ROOT']."/sys/connect.php");
header("Content-Type: application/json");
    

function my_s($s){ return trim(strip_tags(stripslashes(str_replace("`",'',
                          str_replace("\n",' ',str_replace("|",'_',
                          str_replace("..",'',
                          htmlspecialchars($s,ENT_QUOTES)))))))); };

$name = my_s(substr($_GET['Name'],0,200));
$phone = my_s(substr($_GET['Email'],0,300));

$date_proc = my_s(substr($_GET['ВыберитеЖелаемуюДату'],0,15));
$time_proc = my_s(substr($_GET['УкажитеУдобноеВремя'],0,400));
$zone_proc = my_s(substr($_GET['УкажитеЗону'],0,400));

include("tpl.php");
//Передаем функции необходимые аргументы
if(sendmail($mailto,"Сообщение с сайта",$tpl.$mes,$headers) !== FALSE) {
    //При условии что функция сработала - выводим сообщение об удачно завершенной операции
    $token=$_GET['callback'];
    echo $token.'({"success":true})';
} else {
	echo "error";
}	
?>
