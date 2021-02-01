<?php

// We include the session parameter and pdo bridge

    session_start();
    include_once 'Connection.php';
    
//If data exist, then we make hash:      
    if($_POST){
        
        $nick_new = $_POST['NickNew'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];
        $hash = password_hash($pass1, PASSWORD_DEFAULT);
        
//from database we looking for if the user nick exist and save the answer in $result
//where the answer will be NULL or string

        $sql_read='SELECT*FROM People WHERE nick=?';
        $sql_read_sent=$pdo->prepare($sql_read);
        $sql_read_sent->execute(array($nick_new));
        $result=$sql_read_sent->fetch();
        
//also verify if the second password sended is NULL or string, to register in database 

        if(isset($pass2)){
            if(!$result){
                $sql_register = 'INSERT INTO People (nick, pass) VALUES (?,?)';
                $sql_register_sent=$pdo->prepare($sql_register);
                $sql_register_sent->execute(array($nick_new,$hash));
                header('Location:Session.php');
            }else{
                echo 'This user already exist!!';
                die();
                header('Location: SessionRegister.php');
            }

            if(password_verify($pass2,$hash)){
                echo 'The passwords are equat';
            }else{
                echo 'The passwords are not equat';
                header('Location:SessionRegister.hp');
            }        
        }    
        
    }else{
        echo 'Is not recibed data yet!!!';
    }

//we turn off the pdo bridge

    $pdo = NULL;
    $sql_register_sent = NULL;
    $sql_read_sent = NULL;

//Now the user become and admin

    $_SESSION['admin']=$nick_new;

?>