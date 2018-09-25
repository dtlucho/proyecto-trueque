<nav class="navbar navbar-expand-lg bg-purple fixed-top">
    <div class="container">
        <img class="logo" href="home.php" src="images/logo.png">
        <a class="navbar-brand font-white" href="home.php">TruequeYa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <?php if(guest()) : ?>
                <li class="nav-item">
                    <a class="nav-link font-white" href="home.php">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link font-white" href="register.php">Registrate</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link font-white" href="login.php">Iniciar Sesión</a>
                </li>
                <?php else : ?>

                <li class="nav-item">
                    <a class="nav-link font-white" href="logout.php">Cerrar Sesion</a>
                </li> 

                <li class="nav-item">
                    <a class="nav-link font-white" href="perfil.php">Tu perfil</a>
                </li> 
                <?php endif ; ?>
                
            </ul>
        </div>
    </div>
</nav>