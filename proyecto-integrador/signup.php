<?php
require("funciones.php");

if($_POST){
    $errors = validate($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>TruequeYa - Registro</title>
</head>
<body>
    

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-purple fixed-top">
        <div class="container">
            <a class="navbar-brand font-white" href="home.php">TruequeYa</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link font-white" href="home.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-white" href="signup.php">Registrate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-white" href="login.php">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Header -->
    <header class="bg-dark text-white">
        <div class="container text-center">
            <h1>Registrate en TruequeYa</h1>
            <p class="lead">Estas un paso mas cerca de encontrar eso que tanto estabas buscando!</p>
        </div>
    </header>


    <!-- Cuerpo principal -->
    <section class="bg-home">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto bg-light rounded">
                    <div class="signup-form">
                        <form action="" method="post">
                            <div class="col-8 offset-sm-2 text-center my-3">
                                <h2>Registrate</h2>
                                <p class="hint-text">Crea tu cuenta, solo te tomara unos minutos.</p>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Nombre y Apellido" value="<?= isset($errors["name"]) ? "" : old("name") ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Usuario" value="<?= isset($errors["username"]) ? "" : old("username") ?>">
                            </div>	
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" value="<?= isset($errors["email"]) ? "" : old("email") ?>">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Contraseña">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="cpassword" placeholder="Confirma Contraseña">
                            </div>        
                            <div class="form-group">
                                <label class="checkbox-inline"><input type="checkbox" name="confirm"> Acepto los <a href="#">Terminos y condiciones</a> y las <a href="#">Politicas de Privacidad</a> de TruequeYa.</label>
                            </div>
                            <div class="form-group col-10 m-auto col-sm-8 offset-sm-2">
                                <button type="submit" class="btn btn-lg btn-block bg-purple font-white">Registarse</button>
                            </div>
                        </form>
                        <div class="text-center my-3">Ya tenes una cuenta? <a href="login.php">Inicia sesion</a></div>
                    </div>
                </div>                        
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="py-3 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright&copy;: Lucas Diaz, Santiago Bouzon y Luciano Di Tomaso.</p>
        </div>
    </footer>


    <!-- Scripts para Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    

</body>
</html>