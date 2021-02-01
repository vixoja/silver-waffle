<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--Here are the style.css and two link from Latos font --> 
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet"> 
    
    <title>Acces_Portal_Web/title>
</head>
<body>
<!--The container -->
    <div class="container">

<!--The user make his nickname and password,so then send his information to Pass_Verify.php -->
        <div class="Registerform">
            <h2>Making an account:</h2>

            <form action="Pass_Verify.php" method="POST">
                <h3>Nickname:</h3>
                <input type="text" name="NickNew" placeholder="New nickname">
                <h3>Password:</h3>
                <input type="password" name="pass1">
                <h3>Confirm password:</h3>
                <input type="password" name="pass2">
                <button class="buttonForm">Im done!</button>
            </form>

        </div>
    </div>
<!--End of container -->        
</body>
</html>