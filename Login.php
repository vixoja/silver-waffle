<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acces_POrtal_Web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

        
    <div class="container">
        <div class="container__main">
            <div class="container__logo">
                <img src="img/face.png">
            </div>

                <div class="container__form">
                    <form action="Hash.php" method="POST">
                        <input class="container__form__input" type="text" placeholder="Enter Username" name="NickNew">
                        <input class="container__form__input" type="password" placeholder="Enter Password" name="pass1">
                        <button class="container__form__button">Login</button>
                        <a class="container__form__a" href="#">Forgot Password?</a>
                    </form>
                </div>
        </div>        
    </div>
</body>
</html>