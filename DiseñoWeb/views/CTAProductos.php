<?php
include "../PHP/conn.php";
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - Electric City</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img id="logo" src="img/logo.png" alt="" height="30px" width="40px"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="../index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="CTANosotros.php">Nosotros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Productos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="CTAContactanos.php">Contactanos</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand">Productos en Stock</a>
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            </nav>

            <h2>CONOCE NUESTROS PRODUCTOS</h2>
            
            <div class="row">
                    <?php
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<div class='col-md-3'>";
                                            echo "<img  src='" . $row['Imagen'] . "' class='card-img-top' alt='...'><br>
                                            <div class='card-body'>
                                            <h5 class='card-title'>".$row["Nombre"]."</h5>
                                            </div><br>
                                            <a href='".$row['Id']."' class='btn btn-primary'>Ver mas </a>";
                                            echo "</div>";
                                        }
                                        $conn->close();
                        ?>
            </div>
            
    <!--FOOTER-->
<div class="row bg-dark" style="color:white; padding-top:2em;  padding-bottom:2em; padding-left:2em; padding-right:2em;">
  <div class="col-md-4">
      <img src="img/logo.png" alt="" style="width:360px;height:200px;object-fit:cover;border-radius:25px;">
      <br>
      <br>
      <p style="text-align:justify">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
  </div>
  <div class="col-md-4" style="text-align:center;padding-left:5%;padding-right:5%">
    <br>
    <br>
    <br>
      <h3>Informacion</h3>

  <ol >
    <li><a href="" style="text-decoration:none;list-style:none;color:white">Inicio</a></li>
    <li><a href="" style="text-decoration:none;list-style:none;color:white">Productos</a></li>
    <li><a href="" style="text-decoration:none;list-style:none;color:white">Nosotros</a></li>
    <li><a href="" style="text-decoration:none;list-style:none;color:white">Contacto</a></li>
  </ol>
  </div>
  <div class="col-md-4" style="padding-left:5%;padding-right:5%">
    <br>
    <br>
    <br>
    <h3>Necesitas mas informacion</h3>
      It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
  </div>
</div>
</body>
</html>