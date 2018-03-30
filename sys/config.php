<?php

// Для отправки e-mail в виде HTML устанавливаем необходимый mime-тип и кодировку
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Откуда пришло
$headers .= 'From: Site-Corp || On-line Order' . "\r\n";
//На какой адрес отвечать
$headers.='Reply-To: info@site-corp.ru' . "\r\n" ;
//Здесь укажите электронный адрес, куда будут уходить сообщения
$mailto = "info@site-corp.ru";
?> 
