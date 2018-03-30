<?php
session_start();
ob_start();
//if((md5(session_id()."GIYDGhlhcdsl")== $_SESSION['HashCode_Auto'])and($_SESSION['HashCode_Auto']!='')){
unset($_SESSION['HashCode_Auto']);
// Unset все переменные сессии.
session_unset();
// Наконец, разрушить сессию.
session_destroy();
//Подключаем функции
include("functions.php");
//Подключаем файл конфигурации
include("config.php");
//Подключаем BD
//include($_SERVER['DOCUMENT_ROOT']."/sys/connect.php");

function my_s($s){ return trim(strip_tags(stripslashes(str_replace("`",'',
                          str_replace("\n",' ',str_replace("|",'_',
                          str_replace("..",'',
                          htmlspecialchars($s,ENT_QUOTES)))))))); };

$name = my_s(substr($_POST['cusname'],0,200));
$phone = my_s(substr($_POST['cusphone'],0,300));
//$message = my_s(substr($_POST['tComment'],0,3000));
//if($_POST['sCity']=='other')$city = my_s(substr($_POST['sCity2'],0,200));
//else $city = my_s(substr($_POST['sCity'],0,200));
//$visa = my_s(substr($_POST['sVisa'],0,4));
$adress = my_s(substr($_POST['sAdress'],0,2000));
//$S_email = my_s(substr($_POST['sEmail'],0,400));
$scolor = my_s(substr($_POST['scolor'],0,100));
//$sprice = my_s(substr($_POST['price'],0,10));
//if($_POST['box'])$box = "Да"; else $box = "Нет";
//if($_POST['cheska'])$cheska = "Да"; else $cheska = "Нет";
//if($_POST['tips'])$tips = "Да"; else $tips = "Нет";
//$order_type = my_s(substr($_POST['order_type'],0,5));
//$passport = my_s(substr($_POST['spassport'],0,5000));
//$jl = my_s(substr($_POST['sJL'],0,4));
//$automobile = my_s(substr($_POST['automobile']."||".$_POST['autoyear'],0,2000));
    
//SPAM-filter
//if(
//   (($S_email=='')or($S_email=='-')or(checkmail($S_email)!=-1)or(strlen($phone)>10))
// and(my_s($_POST['sName'])!=my_s($_POST['sFamily']))
//){ //No-SPAM Zone start

//if($_POST['sCity']!='other'){
//$query = "SELECT city_name FROM city WHERE dl_id='".$city."'";
//$res = mysql_query($query) or die(mysql_error());
//$row=mysql_fetch_array($res);
//$city=$row['city_name'];
//}

//$query = "SELECT caption FROM assort WHERE color='".$scolor."'";
//$res = mysql_query($query) or die(mysql_error());
//$row=mysql_fetch_array($res);
//$scolor=$row['caption'];

    //Проверяем, было ли введено имя
    if($phone!= '') {
	      //Подключаем файл шаблона
	     // if($jl=='Yes')include("tpljl.php"); else
              include("tpl.php");
	      //Передаем функции необходимые аргументы
	      if(sendmail($mailto,"Сообщение с сайта",$tpl,$headers) !== FALSE) {
                //При условии что функция сработала - выводим сообщение об удачно завершенной операции
		 header('Location: http://etk.system5.ru/order-ok');
		exit;
	    }
	      else {
	      //Иначе, сообщаем об ошибке
		header('Location: http://etk.system5.ru/order-fail#1');
		exit;
	      }
	}else { header('Location: http://etk.system5.ru/order-fail#2');
		exit;
    }
//} //No-SPAM Zone end
//else {header('Location: ht tp://autoshic.com/buy?status=HashErr#stat');
//    exit; }
/*}else{
$file = $_SERVER['DOCUMENT_ROOT']."/sys/Err_Hash_log.txt";
$fh = fopen($file, "a");
$tempya=date("d.m.Y",time()).' '.date("H:i:s",time())."\n\r";
$tempya=$tempya."session_id: ".session_id()."\n\r";
$tempya=$tempya."HashCode_Auto: ".$_SESSION['HashCode_Auto']."\n\r";
$tempya=$tempya."REQUEST_URI: ".getenv("REQUEST_URI")."\n\r";
$tempya=$tempya."HTTP_REFERER: ".getenv("HTTP_REFERER")."\n\r";
$tempya=$tempya."QUERY_STRING: ".getenv("QUERY_STRING")."\n\r";
$tempya=$tempya."REMOTE_ADDR: ".getenv("REMOTE_ADDR")."\n\r";
$tempya=$tempya."REMOTE_ADDR2: ".gethostbyaddr(getenv("REMOTE_ADDR"))."\n\r";
$tempya=$tempya."HTTP_X_FORWARDED: ".getenv("HTTP_X_FORWARDED")."\n\r";
$tempya=$tempya."HTTP_X_FORWARDED_FOR: ".getenv("HTTP_X_FORWARDED_FOR")."\n\r";
$tempya=$tempya."HTTP_VIA: ".getenv("HTTP_VIA")."\n\r";
$tempya=$tempya."HTTP_X_COMING_FROM: ".getenv("HTTP_X_COMING_FROM")."\n\r";
$tempya=$tempya."HTTP_COMING_FROM: ".getenv("HTTP_COMING_FROM")."\n\r";
$tempya=$tempya."HTTP_USER_AGENT: ".getenv("HTTP_USER_AGENT")."\n\r";
$tempya=$tempya."HTTP_FROM: ".getenv("HTTP_FROM")."\n\r";
$tempya=$tempya."REQUEST_METHOD: ".getenv("REQUEST_METHOD")."\n\r";
$tempya=$tempya."HTTP_ACCEPT_ENCODING: ".getenv("HTTP_ACCEPT_ENCODING")."\n\r";
$tempya=$tempya."HTTP_ACCEPT_LANGUAGE: ".getenv("HTTP_ACCEPT_LANGUAGE")."\n\r";
$tempya=$tempya."HTTP_CONNECTION: ".getenv("HTTP_CONNECTION")."\n\r";
$tempya=$tempya."REMOTE_PORT: ".getenv("REMOTE_PORT")."\n\r"."\n\r";

fwrite($fh, $tempya);
fclose($fh);

// Unset все переменные сессии.
unset($_SESSION['HashCode_Auto']);
session_unset();
// Наконец, разрушить сессию.
session_destroy();

		header('Location: ht tp://autoshic.com/buy?status=HashErr#stat');
		exit; } */
?>
