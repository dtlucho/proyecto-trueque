<?php
    require 'loader.php';

    if (Auth::guest()) {
        redirect('login.php');
    }

    if(isset($_SESSION['email'])) {

        $usuarioArray = $db->emailDbSearch($_SESSION['email']);
        $user = new User($usuarioArray['username'], $usuarioArray['email'], $usuarioArray['password'], $usuarioArray['role']);

        $username = $user->getUsername();

        if ($user->getavatar() !== null) {
            $avatar = $user->getAvatar();
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<?php require 'head.php'  ?>

<body>
<div class="container">

        <!--     navbar -->
        <?php require 'navbar.php'?>

        <?php if(guest()):?>
        <br>
        <br>
        <br>
        <br>
        <div class="alert alert-danger" role="alert">
              Todavia no te registraste? <a href="register.php" class="alert-link">Registrate ahora!</a>
            </div>
            <?php else: ?>
            <div class="row">
                <div class="card col-4">
                    <br>
                    <br>
                    <br>
                    <?php if(!isset($user['avatar'])):?>
                    <img class="avatar" class="card-img-top" src="images/silueta-hombre.jpg" alt="avatar default">
                    <?php else: ?>
                    <img class="avatar" class="card-img-top" src="img/<?=$avatar?>" alt="avatar">
                    <?php endif;?>
                        
                    <div class="card-body"> 
                        <h5 class="card-title"><?="Bienvenido $username!" ?></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, adipisci.</p>
                    </div>
                </div>
            </div>
            <?php endif; ?>

     <!-- Footer -->
    <?php require 'footer.php' ?>

</div>
    <!-- Scripts para Bootstrap -->
    <?php require 'scripts.php' ?>



</body>
</html>