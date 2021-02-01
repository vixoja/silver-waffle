<?php

// We include the session parameter and pdo bridge
    session_start();
    include_once 'Connection.php';

//The data from Login.php travel to us trought POST and next saved by this variables    
    $nick_new = $_POST['NickNew'];
    $pass1 = $_POST['pass1'];
    
//We call database and request information about one specific nick name   
    $sql_read = 'SELECT*FROM People WHERE nick=?';
    $sql_read_sent = $pdo->prepare($sql_read);
    $sql_read_sent -> execute(array($nick_new));
    $result = $sql_read_sent -> fetch();
    
//Compare password and nickname
    if (password_verify($pass1,$result['pass']) && $nick_new==$result['nick']) {
        
        $_SESSION['admin'] = $result['nick'];
        header('Location:Session.php');
        
    }else{
        echo 'Password or nickname are wrong!';
    }

?>