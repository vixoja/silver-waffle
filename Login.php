<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Here are the style.css and two link from Latos font --> 
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet"> 
    
    <title>Access_Portal_Web</title>
</head>
<body>
<!--The container-->    
    <div class="flex-container">
        
        <!--Logo-->
        <div class="user-logo">
           <img src="User-logo.png">
        </div>

        <!--The formulary where the data is sended throught post to Hash.php-->
        <div class="form">
            
            <form class="form__section" action="Hash.php" method="POST">
                <input class="form__input" type="text" placeholder="Nickname" name="NickNew">
                <input class="form__input" type="password" placeholder="Password" name="pass1">
                <input type="submit" class="form__input" value="Login">
            </form>

            <!--If the user does not have an account, then it can create one in SessionRegister.php             
            <a href="SessionRegister.php"><button class="ButtonForm">Register</button></a>-->
        </div>

        

    </div>
<!--End of container -->

<!--Script-->  
    <script src="https://kit.fontawesome.com/e1f689b90b.js" crossorigin="anonymous"></script>

</body>
</html>