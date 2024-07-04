<?php
include "PHP/conn.php";
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="views/css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Freeman&family=Potta+One&display=swap" rel="stylesheet">
    </head>
    <body class="bodyy">
        <script src="" async defer></script>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img id="logo" src="views/img/logo.png" alt="" height="30px" width="40px"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Views/CTANosotros.php">Nosotros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Views/CTAProductos.php">Productos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Views/CTAContactanos.php">Contactanos</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

        <div class="image-container" style="background-image: url(views/img/imagen1.jpg); background-size: cover;">
            <div class="text-overlay">
                <span class="align-middle"><h1 >Texto Superpuesto</h1></span>
                
                <span class="align-middle"><p>Este es un ejemplo de texto superpuesto sobre una imagen.</p></span>
                
            </div>
        </div>


        

        <div class="row">
        <div class="Container container1">
        <br><br>
           <h1 class="title">ÚLTIMAS PUBLICACIONES</h1>
           <div class="swiper mySwiper" style="width:80%;margin-left:10%;margin-right:10%;">
              <div class="swiper-wrapper">
                    <?php
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<div class='swiper-slide' style='background-image:url(".$row['Imagen'].");background-size:contain;background-repeat:no-repeat'>
                                            </div>";
                                        }
                                        $conn->close();
                        ?>
                        </div>
                                      </div>
            </div>

            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
              var swiper = new Swiper(".mySwiper", {
                slidesPerView: 4,
                spaceBetween: 30,
                loop: true,
                pagination: {
                  el: ".swiper-pagination",
                  clickable: true,
                },
              });
            </script>
           <br><br>   
       </div>
        <div  class="row bg-dark p-5">
          <br>
        <div class="col-md-6">
          <p class="h2 text-white text-center">CONTACTA CON UNO DE <br>NUESTROS VENDEDORES</p>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-12 d-flex justify-content-center p-3">
              <a href="views/CTAContactanos.php" class="btn btn-light btn-lg center-block rounded">Contactanos</a>
        </div>

          </div>

        </div>
        <br><br>
        </div>
   </body>
</html>
