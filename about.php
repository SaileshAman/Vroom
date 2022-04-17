<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vroom!!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <section class="header">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="nav-links">
                <ul>
                    <li> <a href="index.php">HOME</a></li>
                    <li> <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            REPAIRS</a>
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
        <style>
            .header {
                min-height: 100vh;
                width: 100%;
                background-image: linear-gradient(rgba(28, 10, 0, 0.5), rgba(204, 149, 68, 0.3)), url("images/About.jpg");
                background-position: center;
                background-size: cover;
                position: relative;
            }
        </style>

        <div>
            <h2 class="py-5 text-center text-decoration-underline">ABOUT US</h2>
            <p class="badge badge-nocolor text-wrap m-auto">
                Automobiles are an inevitable part of an individual’s life and the number of vehicles running in the cities
                keeps increasing over the years. To facilitate the need of the automobile parts, online purchasing can
                be the best option and can redeem us from the burden of searching shop to shop. VROOM is the best platform for purchasing rare auto-parts and providing vehicle services. The website offers exclusive range of automobile parts that perfectly satisfy the need of the customers. Just enter the model of your vehicle and we will provide a wide range of hardware products compatible to your vehicle. We also provide custom service options and vehicle service appointments can be made at ease.</p>
        </div>
    </section>

    <footer>
        <h3 class="p-3 text-white text-center">@VroomDevTeam</h3>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>