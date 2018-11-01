<?php
require("loader.php");

if($_POST){
    $errors = [];

    $usuario = new User($_POST['username'], $_POST['email'], $_POST['password']);
    
    $errors = Validate::registerValidate($usuario, $_POST);

    if($_FILES['avatar']['error'] == 0) {
        $errors = $db->saveAvatar($_POST);
        if(count($errors) === 0 ) {
            $avatar = $db->photoPath($_POST);
            $usuario->setAvatar($avatar);

        }
    }

    if (count($errors) === 0) {
        $usuarioArray = $db->createUser($usuario);
        $db->saveUser($usuarioArray);
        redirect('login.php');
    }

    $usuario = createUser($_POST);

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
            <br>
            <br>
            <br>
            <br>
        
            <p class="lead">Estas un paso mas cerca de encontrar eso que tanto estabas buscando!</p>
        </div>
    </header>


    <!-- Cuerpo principal -->
    <section class="bg-home">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto bg-light rounded">
                    <div class="signup-form">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="col-8 offset-sm-2 text-center my-3">
                                <h2>Registrate</h2>
                                <p class="hint-text">Crea tu cuenta, solo te tomara unos minutos.</p>
                            </div>


                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Nombre y Apellido" value="<?= isset($errors["name"]) ? "" : old("name") ?>">
                            </div>
                            <?php if(isset($errors['name'])) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $errors['name'] ?>
                            </div>
                            <?php endif ; ?>


                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Usuario" value="<?= isset($errors["username"]) ? "" : old("username") ?>">
                            </div>
                            <?php if(isset($errors['username'])) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $errors['username'] ?>
                            </div>
                            <?php endif ; ?>


                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" value="<?= isset($errors["email"]) ? "" : old("email") ?>">
                            </div>
                            <?php if(isset($errors['email'])) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $errors['email'] ?>
                            </div>
                            <?php endif ; ?>


                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Contraseña">
                            </div>
                            <?php if(isset($errors['password'])) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $errors['password'] ?>
                            </div>
                            <?php endif ; ?>


                            <div class="form-group">
                                <input type="password" class="form-control" name="cpassword" placeholder="Confirma Contraseña">
                            </div>
                            <?php if(isset($errors['cpassword'])) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $errors['cpassword'] ?>
                            </div>        
                            <?php endif ; ?>


                            <div class="form-group">
                                <label for="avatar">Foto de perfil: </label>
                                <input type="file" name="avatar">
                            </div>
                            

                            <div class="form-group">
                                <label class="checkbox-inline"><input type="checkbox" name="confirm"> Acepto los <a href="#">Terminos y condiciones</a> y las <a href="#">Politicas de Privacidad</a> de TruequeYa.</label>
                            </div>
                            <?php if(isset($errors['confirm'])) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $errors['confirm'] ?>
                            </div>
                            <?php endif ; ?>


                            <div class="form-group col-10 m-auto col-sm-8 offset-sm-2">
                                <button type="submit" class="btn btn-lg btn-block bg-purple font-white">Registarse</button>
                            </div>
                        </form>


                        <div class="text-center my-3">
                            Ya tenes una cuenta? <a href="login.php">Inicia sesion</a>
                        </div>
                    </div>
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