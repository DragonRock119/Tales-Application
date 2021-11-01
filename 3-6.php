<?php
    require 'config.php';
    $conn = conexion();
?>

<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.4.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.4.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>3-6</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu menu1 cid-sMWFXHjKRw" once="menu" id="menu1-b">
    

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="index.html">Tales Application</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-4" href="equipo.html">Equipo</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="contenido.html">Contenido</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="gestionar.html">Gestionar</a></li></ul>
                    
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="login.html">Acceder</a></div>
            </div>
        </div>
    </nav>
</section>

<div class="container" style="text-align: center; margin-top: 35px;">
    <h1>Galería de videos para niños de 3 a 6 años</h1>
    <div style="margin-left: 0%;">
        <div class="card text-center" style="margin-top: 10%;">
            <div class="card-body">
                <table class="table table-hover" style="width: auto; text-align: center; margin-left: 0%">
                <thead>
                <tr>
                  <th scope="col" style="width: 30%;">Nombre</th>
                  <th scope="col" style="width: 45%;">Video</th>
                  <th scope="col" style="width: 30%;">Descripcion</th>
                  <th scope="col" style="width: 30%;">Fecha</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    
                    $query = 'SELECT * FROM id17483408_videos.video where Categoria = "3-6";';
                    $result = mysqli_query($conn,$query);
                while($mostrar=mysqli_fetch_array($result)){
                    ?>
                <tr>
                  <td><strong><?php echo $mostrar['Nombre']?></strong></td>
                  <td><?php echo $mostrar['Cod']?></td>
                  <td><?php echo $mostrar['Descripcion']?></td>
                  <td><?php echo $mostrar['Fecha']?></td>
                </tr>
                <?php
                }
                ?>
              </tbody>
                </table>
                <a href="contenido.html" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
</div>

<section data-bs-version="5.1" class="footer7 cid-sMWG0aSu6w" once="footers" id="footer7-c">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2021 Tales Application - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>
  
</body>
</html>