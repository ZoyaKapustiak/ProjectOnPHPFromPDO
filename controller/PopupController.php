<?php
require_once 'models/User.php';
require_once 'models/UserProvider.php';

$pdo = require 'db.php';

if(isset($_POST['email'], $_POST['phone']))
{
    if(empty($_POST['email'] && $_POST['phone'])) {
       echo 'Введите данные электронной почты и телефона';
    } else {
        $email = strip_tags($_POST['email']);
        $phone = strip_tags($_POST['phone']);

        $userProvider = new UserProvider($pdo);
        $user = new User($email, $phone);
        $userProvider->setUser($user);

        mail("art-css@Yandex.ru ", "Заказ набора файлов для руководителя", "E-mail:".$email.". telephone: ".$phone ,"From: nzi_s-pb@mail.ru  \r\n");

    }


}

//if($_POST['submit']) {
//    header('Location: /?action=popup');
//    die();
//}

require_once 'view/popup.php';
