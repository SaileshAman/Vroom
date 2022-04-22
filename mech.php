<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mechanic Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background-position: center;
            background-size: cover;
            background-image: linear-gradient(rgba(28, 10, 0, 0.5), rgba(204, 149, 68, 0.3)), url("images/Login.jpg");
        }
    </style>
</head>
<body>
    <div class="header">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="nav-links">
                <ul>
                    <li> <a href="index.php">HOME</a></li>
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

	<div class="container-fluid">
        <div class="row">
            <div class="col-md">
                <div class="card card-body">
                    <h5>Client Name: </h5>
                    <a class="btn btn-outline-info  btn-sm btn-block" href="">Update Account</a>
                    <a class="btn btn-outline-danger  btn-sm btn-block" href="">Delete Account</a>
                </div>
            </div>
        
            <div class="col-md">
                <div class="card card-body">
                    <h5>Client Info</h5>
                    <p>EMail: {{client.Email}}</p>
                    <p>PAN: {{client.PAN}}</p>
                    <p>Portfolio ID: {{client.Portfolio_ID}}</p>
                </div>
            </div>
        
            <div class="col-md">
                <div class="card card-body">
                    <h5>Total Assets:</h5>
                    <hr>
                    <h1 style="text-align: center;padding: 10px">{{assets}}</h1>
                </div>
            </div>
        </div>
        
             
        <div class="row">
            <div class="col-md">
                <div class="card card-body">
                    <table class="table table-sm">
                        <tr>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Share Price</th>
                            <th>Shares Owned</th>
                        </tr>
                        
                        {% for S in stocks %}

				        <tr>
					    <td>{{S.SID.Name}}</td>
					    <td>{{S.SID.Company}}</td>
					    <td>{{S.SID.Price}}</td>
					    <td>{{S.Shares}}</td>
				        </tr>
				        {% endfor %}
                    </table>
                </div>
            </div>
        </div>
    </div>
    </section>
    <style>
        body{
            background-color: linear-gradient(rgba(40, 11, 65, 0.897),rgba(255, 220, 66, 0.5));
        }
    </style>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>