<?php
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$name = trim($_POST['name']);
$dt = date('Y-m-d H:i:s');

if($email == '' || $phone == '' || $name ==''){
    echo 'Заполните поля';
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'Введите корректный EMail';
}
else{
    file_put_contens('apps.txt',"$dt $email $phone $name \n", FILE_APPEND);
    echo '1'; 
}