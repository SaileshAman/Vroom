    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Vroom!!</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <style>
            body{
                min-height: 100vh;
                background-position: center;
                background-size: cover;
                background-image: linear-gradient(rgba(28, 10, 0, 0.5),rgba(204, 149, 68, 0.3)),url("images/Login.jpg");
            }
        </style>
    </head>
    <body>
        <div class="header">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="nav-links">
                    <ul>
                        <li> <a href="#">HOME</a></li>
                        <li> <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            REPAIRS
                        </a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">GEARBOX</a>
                            <a class="dropdown-item" href="#">CLUTCH</a>
                            <a class="dropdown-item" href="#">ENGINE</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">SOMETHING ELSE</a>
                        </div>
                    </li>
                    <li> <a href="about.php">ABOUT US</a></li>
                    <li> <a href="login.php">LOGIN</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="loginForm">
        <div class="container">
            <form class="form" id="login">
                <h1 class="form__title">LOGIN</h1>
                <div class="form__message form__message--error"></div>
                <div class="form__input-group">
                    <input type="text" class="form__input" autofocus placeholder="Username or email">
                    <div class="form__input-error-message"></div>
                </div>
                <div class="form__input-group">   
                    <input type="password" class="form__input" autofocus placeholder="Password">
                    <div class="form__input-error-message"></div>
                </div>
                <button class="form__button" type="submit">LOGIN</button>
                <p class="form__text">
                    <a class="form__link" href="#">New User? SignUp</a>
                </p>
            </form>
        </div>
    </div>   

    <!--<script src="login.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>