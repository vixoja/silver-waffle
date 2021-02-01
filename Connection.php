<?php  

//Connection to mysql server, where you should get your own database
    $link = 'mysql:localhost=host;dbname=Access_Portal_Web';
    $user_mysql = 'vicente';
    $password_mysql = 'hola1234';

//PDO Give you a bridge. If all go wrong, its send you an error message xd
    try{
        $pdo = new PDO($link, $user_mysql, $password_mysql);
        echo 'Connected';
    }catch(PDOException $e){
        echo 'error' .$e->getMessage();
    }

?>