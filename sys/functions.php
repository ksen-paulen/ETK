<?php

function checkmail($mail) {
   // режем левые символы и крайние пробелы
   $mail=trim($mail);
   // если пусто - выход
   if (strlen($mail)==0) return -1;
   if (!preg_match("/^[a-z0-9_-]{1,20}+(\.){0,2}+([a-z0-9_-]){0,20}@(([a-z0-9-]+\.)+(com|net|org|mil|".
   "edu|gov|arpa|info|biz|inc|name|ru|su|[a-z]{2})|[0-9]{1,3}\.[0-9]{1,3}\.[0-".
   "9]{1,3}\.[0-9]{1,3})$/is",$mail))
   return -1;
   return $mail;
}

function sendmail($mail,$subject,$message,$headers) {

	$file = $_SERVER['DOCUMENT_ROOT']."/Err_log.txt";
	$fh = fopen($file, "a");
	$tempya = $mail . "|" . $subject . "|" . $message . "|" .  $headers;
	fwrite($fh, $tempya);
	fclose($fh);

if(mail($mail,$subject,$message,$headers)) { return TRUE;}
else {return FALSE;}

}

?>