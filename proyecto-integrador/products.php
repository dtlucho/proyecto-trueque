<?php
require 'funciones.php';
?>
<!DOCTYPE html>
<html lang="en">

  <?php require 'head.php' ?>

  <body>

    <?php require 'navbar.php' ?>

    <header class="bg-dark text-white">
            <div class="container text-center">
                <br>
                <br>
                <br>
                <br>
                <p class="lead">¡Los mejores trueques los encontras aca!</p>
            </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Trueques Disponibles</h1>
          <div class="list-group">
            <a href="#" class="list-group-item">Productos</a>
            <a href="#" class="list-group-item">Servicios</a>
            <a href="#" class="list-group-item">Otro</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="images/prod3.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/prod2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/prod1.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="images/prod4.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Remeras Poliester</a>
                  </h4>
                  <h5>Barrio Nuñez</h5>
                  <p class="card-text">Se busca hacer trueque con calzado deportivo</p>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-md btn-block bg-purple font-white">Solicitar Trueque</button>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="images/prod8.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">iPhone 6/7/X</a>
                  </h4>
                  <h5>Zona Recoleta</h5>
                  <p class="card-text">Se busca hacer trueque con celulares Samsung Galaxy S9</p>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-md btn-block bg-purple font-white">Solicitar Trueque</button>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="images/prod7.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Material Educativo Universitario</a>
                  </h4>
                  <h5>Microcentro</h5>
                  <p class="card-text">Se escuchan ofertas</p>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-md btn-block bg-purple font-white">Solicitar Trueque</button>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="images/prod6.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Boucher de compra $3500</a>
                  </h4>
                  <h5>Zona Sur</h5>
                  <p class="card-text">Se escuchan ofertas por el boucher</p>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-md btn-block bg-purple font-white">Solicitar Trueque</button>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="images/prod9.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Botines Nike Mercurial 2018 - Alta Gama</a>
                  </h4>
                  <h5>CABA</h5>
                  <p class="card-text">En busca de camisetas originales retro</p>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-md btn-block bg-purple font-white">Solicitar Trueque</button>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="images/prod10.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Taller Musical</a>
                  </h4>
                  <h5>Av Rivadavia 2657</h5>
                  <p class="card-text">Se ofrecen clases de cualquier instrumento musical a cambio de bienes alimenticios. </p>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-md btn-block bg-purple font-white">Solicitar Trueque</button>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php require 'footer.php' ?>


<?php require 'scripts.php' ?>

  </body>

</html>