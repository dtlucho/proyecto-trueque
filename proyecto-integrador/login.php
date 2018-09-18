<?php

require 'funciones.php';

if(check()) {
    redirect('perfil.php');
}

if($_POST) {
    $usuario = dbEmailSearch($_POST['email']);
    if($usuario !== null) {
        if(password_verify($_POST['password'], $usuario['password']) == true) {
            login($usuario);
            redirect('perfil.php');
        }
    }
}

?>

<!DOCTYPE html>

<html lang="en">

<?php require 'head.php' ?>

<body>
    

    <!-- Navbar -->
    <?php require 'navbar.php' ?>


    <!-- Header -->
    <header class="bg-dark text-white">
            <div class="container text-center">
                <h1>Inicie Sesión</h1>
                <p class="lead">La plataforma online numero uno de trueques en la Argentina</p>
            </div>
    </header>


    <!-- Cuerpo principal -->
    <section class="bg-home">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto bg-light rounded">
                    <div class="signup-form">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="col-8 offset-2 text-center mt-3">
                                <h2>Iniciar Sesion</h2>
                                <p class="hint-text">Introduzca su correo y contraseña.</p>
                            </div>	
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">
                            </div>
                            <div class="form-group col-8 offset-2">
                                <button type="submit" class="btn btn-lg btn-block bg-purple font-white">Ingresar</button>
                            </div>
                            <div class="form-group col-8 offset-2">
                                <input type="checkbox"><label class="checkbox-inline">Recordarme</label>
                            </div>
                        </form>
                        <div class="text-center mb-3"><a href="login.html">Olvidó su contraseña?</a></div>
                    </div>
                </div>                        
            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php require 'footer.php' ?>


    <!-- Scripts para Bootstrap -->
    <?php require 'scripts.php' ?>


</body>
</html>