<?php
    session_start();
    echo 'Ha iniciado sesion: '.$_SESSION['admin'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Here are the style.css and two link more from Latos font --> 
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet"> 
    
    <title>Acces_Portal_Web</title>
</head>
<body>
    <!--The container -->
    <div class="container">

    <!--Print on screen and close the session -->
        <h1>YOU ARE ADMIN</h1>
        <a href="Close_Session.php">
            <button>Close Session</button>
        </a>


    </div>
    <!--End container -->
</body>
</html>