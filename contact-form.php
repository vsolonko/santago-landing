<?php


$num = rand(100, 999);
$sub = 'Заказ с сайта №'.$num;

file_put_contents ($_SERVER['DOCUMENT_ROOT'].'/orders_num.txt', $num."\r\n");
 
/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$tel = htmlspecialchars($_POST["tel"]);
/*$sub = htmlspecialchars($_POST["num"]);*/
/*$sub = 'Заказ с сайта №'.$num;*/

 
/* Ваш адрес и тема сообщения */
$address = "morozskype@sdelka-today.ru";
$sub = "Сообщение с сайта ДЕД МОРОЗ";
 
/* Формат письма */
$mes = "Сообщение с сайта ДЕД МОРОЗ.\n
Имя отправителя: $name 
Телефон отправителя: $tel
Номер заказа: $num
$message";
 
 
if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
	header('Refresh: 0; URL=http://morozskype.sdelka-today.ru/zakaz.php');
	echo '
    Email sent, in 0 seconds you will return to the page XXX';}
else {
	header('Refresh: 0; URL=http://http://morozskype.sdelka-today.ru');
	echo '
    Email sent, in 0 seconds you will return to the page YYY';}
}
exit; /* Выход без сообщения, если поле bezspama заполнено спам ботами */
?>