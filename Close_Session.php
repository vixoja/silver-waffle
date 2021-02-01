<?php

//The session parameter turn void of data
    session_start();    
    $_SESSION['admin'] = array();

//This shit destroyes your cookies
    if (ini_get("session.get_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '',time() - 42000,
            $params["path"],$params["domain"],
            $params["secure"], $params["httponly"]);
    }

// Here the session is killed by me, sorry about that :c 
    session_destroy();

//Now we go back at the beggining
    header('Location:Login.php');

?>