<?php  

    //Connection to mysql server, where you should get your own database
    $link = 'mysql:localhost=host;dbname=Access_Portal_Web';
    $user_mysql = 'vicente';//change for your own mysql username
    $password_mysql = 'hola1234';//change for your own mysql userpassword

    //PDO Give you a bridge. If all go wrong, its send you an error message xd
    try{
        $pdo = new PDO($link, $user_mysql, $password_mysql);
        echo 'Connected';
    }catch(PDOException $e){
        echo 'error' .$e->getMessage();
    }

?>