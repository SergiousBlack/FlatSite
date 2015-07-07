<?php

namespace backend\classes;

class SmsSender {
    
private $SMSC_LOGIN = "sh";            // логин клиента
private $SMSC_PASSWORD = "159159";   // пароль или MD5-хеш пароля в нижнем регистре
private $SMSC_POST = "0";                // использовать метод POST
private $SMSC_HTTPS = "0";              // использовать HTTPS протокол
private $SMSC_CHARSET = "utf-8"; // кодировка сообщения: utf-8, koi8-r или windows-1251 (по умолчанию) 



// Функция отправки SMS
//
// обязательные параметры:
//
// $phones - список телефонов через запятую или точку с запятой
// $message - отправляемое сообщение
//
// необязательные параметры:
//
// $translit - переводить или нет в транслит (1,2 или 0)
// $time - необходимое время доставки в виде строки (DDMMYYhhmm, h1-h2, 0ts, +m)
// $id - идентификатор сообщения. Представляет собой 32-битное число в диапазоне от 1 до 2147483647.
// $format - формат сообщения (0 - обычное sms, 1 - flash-sms, 2 - wap-push, 3 - hlr, 4 - bin, 5 - bin-hex, 6 - ping-sms, 7 - mms, 8 - mail, 9 - call)
// $sender - имя отправителя (Sender ID). Для отключения Sender ID по умолчанию необходимо в качестве имени
// передать пустую строку или точку.
// $query - строка дополнительных параметров, добавляемая в URL-запрос ("valid=01:00&maxsms=3&tz=2")
// $files - массив путей к файлам для отправки mms или e-mail сообщений
//
// возвращает массив (<id>, <количество sms>, <стоимость>, <баланс>) в случае успешной отправки
// либо массив (<id>, -<код ошибки>) в случае ошибки

public function send_sms($phone,$text)
{
     $xml = file_get_contents("http://smsc.ru/sys/send.php?login=".$this->SMSC_LOGIN."&psw=".$this->SMSC_PASSWORD."&phones=".$phone."&mes=".$text."&fmt=3&charset=utf-8&cost=0"); 
     return json_decode($xml,TRUE)['id'];
     
     
} 
 
// Функция получения стоимости SMS
//
// обязательные параметры:
//
// $phones - список телефонов через запятую или точку с запятой
// $message - отправляемое сообщение 
//
// необязательные параметры:
//
// $translit - переводить или нет в транслит (1,2 или 0)
// $format - формат сообщения (0 - обычное sms, 1 - flash-sms, 2 - wap-push, 3 - hlr, 4 - bin, 5 - bin-hex, 6 - ping-sms, 7 - mms, 8 - mail, 9 - call)
// $sender - имя отправителя (Sender ID)
// $query - строка дополнительных параметров, добавляемая в URL-запрос ("list=79999999999:Ваш пароль: 123\n78888888888:Ваш пароль: 456")
//
// возвращает массив (<стоимость>, <количество sms>) либо массив (0, -<код ошибки>) в случае ошибки
 
public function get_status($id, $phone)
{
    $json = file_get_contents("http://smsc.ru/sys/status.php?login=".$this->SMSC_LOGIN."&psw=".$this->SMSC_PASSWORD."&id=".$id."&phone=".$phone."&fmt=3");
    return json_decode($json,TRUE)['status'];
}

// Функция получения баланса
//
// без параметров
//
// возвращает баланс в виде строки или false в случае ошибки

public function get_balance()
{
   $json = file_get_contents("http://smsc.ru/sys/balance.php?login=".$this->SMSC_LOGIN."&psw=".$this->SMSC_PASSWORD."&fmt=3");
   return json_decode($json,TRUE)['balance'];
}
 
}
?>