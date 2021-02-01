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
    <div class="container">
        <div class="user">
            <i class="fas fa-user-circle"></i>
        </div>

<!--The formulary where the data is sended throught post to Hash.php-->
        <div class="form">
            <form action="Hash.php" method="POST">
                <h3 class="login">Nick:</h3>
                <br>
                <input type="text" placeholder="Nickname" name="NickNew">
                <h3 class="login">Password:</h3>
                <br>
                <input type="password" placeholder="Password" name="pass1">
                <br>
                <button class="ButtonForm">Login</button>
            </form>

<!--If the user does not have an account, then it can create one in SessionRegister.php -->            
            <a href="SessionRegister.php"><button class="ButtonForm">Register</button></a>
        </div>
    </div>
<!--End of container -->

<!--Script-->  
    <script src="https://kit.fontawesome.com/e1f689b90b.js" crossorigin="anonymous"></script>
<!--End of script-->
</body>
</html>