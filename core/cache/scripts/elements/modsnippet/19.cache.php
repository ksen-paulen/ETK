<?php  return 'if(isset($_POST[\'type\'])){

function my_s($s){ return trim(strip_tags(stripslashes(str_replace("`",\'\',
                          str_replace("\\n",\' \',str_replace("|",\'_\',
                          str_replace("..",\'\',
                          htmlspecialchars($s,ENT_QUOTES)))))))); };
function checkmail($mail) {
   // режем левые символы и крайние пробелы
   $mail=trim($mail);
   // если пусто - выход
   if (strlen($mail)==0) return -1;
   if (!preg_match("/^[a-z0-9_-]{1,20}+(\\.){0,2}+([a-z0-9_-]){0,20}@(([a-z0-9-]+\\.)+(com|net|org|mil|".
   "edu|gov|arpa|info|biz|inc|name|ru|su|[a-z]{2})|[0-9]{1,3}\\.[0-9]{1,3}\\.[0-".
   "9]{1,3}\\.[0-9]{1,3})$/is",$mail))
   return -1;
   return $mail;
}

function sendmail($mail,$subject,$message,$headers) {

	$file = $_SERVER[\'DOCUMENT_ROOT\']."/Err_log.txt";
	$fh = fopen($file, "a");
	$tempya = $mail . "|" . $subject . "|" . $message . "|" .  $headers;
	fwrite($fh, $tempya);
	fclose($fh);

if(mail($mail,$subject,$message,$headers)) { return TRUE;}
else {return FALSE;}
}

$name = my_s(substr($_POST[\'name\'],0,200));
$phone = my_s(substr($_POST[\'phone\'],0,300));
$message = my_s(substr($_POST[\'comment\'],0,3000));
$ptype = my_s(substr($_POST[\'type\'],0,400));
$price = my_s(substr($_POST[\'price\'],0,2000));
$target = my_s(substr($_POST[\'target\'],0,2000));
//$S_email = my_s(substr($_POST[\'sEmail\'],0,400));
//$scolor = my_s(substr($_POST[\'sColor\'],0,20));
//$order_type = my_s(substr($_POST[\'order_type\'],0,5));
//$passport = my_s(substr($_POST[\'spassport\'],0,5000));
//$jl = my_s(substr($_POST[\'sJL\'],0,4));
//$automobile = my_s(substr($_POST[\'automobile\']."||".$_POST[\'autoyear\'],0,2000));

$tpl = \'<html>
<head>
</head>

<body bgcolor="#D9D9D9">
<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#BEBEBE">
    <td>Заявка от: </td>
    <td>\'.$name.\'</td>
  </tr>
  <tr>
    <td>Телефон: </td>
    <td>\'.$phone.\'</td>
  </tr>
  <tr bgcolor="#B4B4B4">
    <td>Проект: </td>
    <td>\'.$ptype.\'</td>
  </tr>
  <tr>
    <td>Цель: </td>
    <td>\'.$target.\'</td>
  </tr>
  <tr bgcolor="#B4B4B4">
    <td>Описание: </td>
    <td>\'.$message.\'</td>
  </tr>
  </table>
</body>
</html>\';

// Для отправки e-mail в виде HTML устанавливаем необходимый mime-тип и кодировку
$headers  = \'MIME-Version: 1.0\' . "\\r\\n";
$headers .= \'Content-type: text/html; charset=utf-8\' . "\\r\\n";
// Откуда пришло
$headers .= \'From: SiteCorp || On-line Order\' . "\\r\\n";
//На какой адрес отвечать
$headers.=\'Reply-To: info@site-corp.ru\' . "\\r\\n" ;
//Здесь укажите электронный адрес, куда будут уходить сообщения
$mailto = "info@site-corp.ru";
//echo $phone;
    if($phone!= \'\'){
	      if(sendmail($mailto,"Сообщение с сайта",$tpl,$headers) !== FALSE) {
                //При условии что функция сработала - выводим сообщение об удачно завершенной операции
                echo "<p class=\'success\'>Заявка отправлена</p>";
	    }else echo "<p class=\'fail\'>Ошибка отправки</p>";
    }else echo "<p class=\'alert\'>Укажите номер телефона</p>";
    
}
return;
';