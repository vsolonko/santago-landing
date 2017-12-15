<?php
 
/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$tel = htmlspecialchars($_POST["tel"]);

 
/* Ваш адрес и тема сообщения */
$address = "vika@sdelka-today.ru";
$sub = "Сообщение с сайта ДЕД МОРОЗ";
 
/* Формат письма */
$mes = "Сообщение с сайта ДЕД МОРОЗ.\n
Имя отправителя: $name 
Телефон отправителя: $tel
$message";
 
 
if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
	header('Refresh: 0; URL=http://vika.sdelka-today.ru');
	echo '
    Email sent, in 5 seconds you will return to the page XXX';}
else {
	header('Refresh: 0; URL=http://http://vika.sdelka-today.ru');
	echo '
    Email sent, in 5 seconds you will return to the page YYY';}
}
exit; /* Выход без сообщения, если поле bezspama заполнено спам ботами */
?>