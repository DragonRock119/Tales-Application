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
  
  
  <title>Insertar</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <script src="assets/jquery-3.6.0.min.js"></script>
  <script src="assets/script.js"></script>
  <script src="assets/mostrar2.js"></script>
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu menu1 cid-sMWFXHjKRw" once="menu" id="menu1-9">
    

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
    <h1>Editar</h1>
</div>

<div class="col-md-6" style="margin-left: 25%;">
    <div class="card text-center" style="margin-top: 10%;">
        <div class="card-body">
            <form method="POST" action="editar.php" style="margin-top:5%; margin-bottom: 2%;">
                <p>Seleccione la categoria del video que quiere editar</p>
                <select class="form-select" aria-label="Default select example" id="Categoria" name="Categoria" style="margin-bottom: 2%;" onchange="mostrar(this.value);" required>
                    <option selected>Categoría</option>
                    <option value="0-3">0 a 3 años</option>
                    <option value="3-6">3 a 6 años</option>
                    <option value="6-8">6 a 8 años</option>
                    <option value="8-10">8 a 10 años</option>
                    <option value="10-12">10 a 12 años</option>
                  </select>
            </form>
            <div id="0-3" style="display: none;">
                <h2>Categoría 0 a 3 años</h2>
                <form action="editar.php" method="post">
                    <p>Eliga el nombre del video que desea editar</p><br/>
                    <select class="form-select" aria-label="Default select example" id="NombreV" name="NombreV" style="margin-bottom: 2%;">
                        <option selected>Selecciona un Video</option>
                        <?php
                            $query = 'SELECT * FROM id17483408_videos.video where Categoria = "0-3";';
                            $result = mysqli_query($conn,$query);
                            while ($valores = mysqli_fetch_array($result)) {
                            echo "<option value='".$valores['Nombre']."'>".$valores['Nombre']."</option>";
                            }
                        ?>
                          </select>
                          <h2>Indique los cambios a realizar</h2>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Nombre del video</span>
                                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" required>
                                </div>
                                <select class="form-select" aria-label="Default select example" id="Categoria" name="Categoria" style="margin-bottom: 2%;" required>
                                    <option selected>Categoría</option>
                                    <option value="0-3">0 a 3 años</option>
                                    <option value="3-6">3 a 6 años</option>
                                    <option value="6-8">6 a 8 años</option>
                                    <option value="8-10">8 a 10 años</option>
                                    <option value="10-12">10 a 12 años</option>
                                </select>
                                <p>Entra al video que deseas insertar. Dale click a compartir y en insertar. Copia el codigo aqui:</p>
                                <div class="input-group mb-3" style="margin-top: 2%;">
                                    <span class="input-group-text" id="basic-addon1">Codigo</span>
                                    <input type="text" class="form-control" id="Cod" name="Cod" placeholder="Codigo" aria-label="link" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                                    <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>


            <div id="3-6" style="display: none;">
                <h2>Categoría 3 a 6 años</h2>
                <form action="editar.php" method="post">
                    <p>Eliga el nombre del video que desea editar</p><br/>
                    <select class="form-select" aria-label="Default select example" id="NombreV" name="NombreV" style="margin-bottom: 2%;">
                        <option selected>Selecciona un Video</option>
                        <?php
                            $query = 'SELECT * FROM id17483408_videos.video where Categoria = "3-6";';
                            $result = mysqli_query($conn,$query);
                            while ($valores = mysqli_fetch_array($result)) {
                            echo "<option value='".$valores['Nombre']."'>".$valores['Nombre']."</option>";
                            }
                        ?>
                          </select>
                          <h2>Indique los cambios a realizar</h2>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Nombre del video</span>
                                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" required>
                                </div>
                                <select class="form-select" aria-label="Default select example" id="Categoria" name="Categoria" style="margin-bottom: 2%;" required>
                                    <option selected>Categoría</option>
                                    <option value="0-3">0 a 3 años</option>
                                    <option value="3-6">3 a 6 años</option>
                                    <option value="6-8">6 a 8 años</option>
                                    <option value="8-10">8 a 10 años</option>
                                    <option value="10-12">10 a 12 años</option>
                                </select>
                                <p>Entra al video que deseas insertar. Dale click a compartir y en insertar. Copia el codigo aqui:</p>
                                <div class="input-group mb-3" style="margin-top: 2%;">
                                    <span class="input-group-text" id="basic-addon1">Codigo</span>
                                    <input type="text" class="form-control" id="Cod" name="Cod" placeholder="Codigo" aria-label="link" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                                    <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>

            <div id="6-8" style="display: none;">
                <h2>Categoría 6 a 8 años</h2>
                <form action="editar.php" method="post">
                    <p>Eliga el nombre del video que desea editar</p><br/>
                    <select class="form-select" aria-label="Default select example" id="NombreV" name="NombreV" style="margin-bottom: 2%;">
                        <option selected>Selecciona un Video</option>
                        <?php
                            $query = 'SELECT * FROM id17483408_videos.video where Categoria = "6-8";';
                            $result = mysqli_query($conn,$query);
                            while ($valores = mysqli_fetch_array($result)) {
                            echo "<option value='".$valores['Nombre']."'>".$valores['Nombre']."</option>";
                            }
                        ?>
                          </select>
                          <h2>Indique los cambios a realizar</h2>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Nombre del video</span>
                                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" required>
                                </div>
                                <select class="form-select" aria-label="Default select example" id="Categoria" name="Categoria" style="margin-bottom: 2%;" required>
                                    <option selected>Categoría</option>
                                    <option value="0-3">0 a 3 años</option>
                                    <option value="3-6">3 a 6 años</option>
                                    <option value="6-8">6 a 8 años</option>
                                    <option value="8-10">8 a 10 años</option>
                                    <option value="10-12">10 a 12 años</option>
                                </select>
                                <p>Entra al video que deseas insertar. Dale click a compartir y en insertar. Copia el codigo aqui:</p>
                                <div class="input-group mb-3" style="margin-top: 2%;">
                                    <span class="input-group-text" id="basic-addon1">Codigo</span>
                                    <input type="text" class="form-control" id="Cod" name="Cod" placeholder="Codigo" aria-label="link" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                                    <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>

            <div id="8-10" style="display: none;">
                <h2>Categoría 8 a 10 años</h2>
                <form action="editar.php" method="post">
                    <p>Eliga el nombre del video que desea editar</p><br/>
                    <select class="form-select" aria-label="Default select example" id="NombreV" name="NombreV" style="margin-bottom: 2%;">
                        <option selected>Selecciona un Video</option>
                        <?php
                            $query = 'SELECT * FROM id17483408_videos.video where Categoria = "8-10";';
                            $result = mysqli_query($conn,$query);
                            while ($valores = mysqli_fetch_array($result)) {
                            echo "<option value='".$valores['Nombre']."'>".$valores['Nombre']."</option>";
                            }
                        ?>
                          </select>
                          <h2>Indique los cambios a realizar</h2>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Nombre del video</span>
                                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" required>
                                </div>
                                <select class="form-select" aria-label="Default select example" id="Categoria" name="Categoria" style="margin-bottom: 2%;" required>
                                    <option selected>Categoría</option>
                                    <option value="0-3">0 a 3 años</option>
                                    <option value="3-6">3 a 6 años</option>
                                    <option value="6-8">6 a 8 años</option>
                                    <option value="8-10">8 a 10 años</option>
                                    <option value="10-12">10 a 12 años</option>
                                </select>
                                <p>Entra al video que deseas insertar. Dale click a compartir y en insertar. Copia el codigo aqui:</p>
                                <div class="input-group mb-3" style="margin-top: 2%;">
                                    <span class="input-group-text" id="basic-addon1">Codigo</span>
                                    <input type="text" class="form-control" id="Cod" name="Cod" placeholder="Codigo" aria-label="link" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                                    <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>

            <div id="10-12" style="display: none;">
                <h2>Categoría 10 a 12 años</h2>
                <form action="editar.php" method="post">
                    <p>Eliga el nombre del video que desea editar</p><br/>
                    <select class="form-select" aria-label="Default select example" id="NombreV" name="NombreV" style="margin-bottom: 2%;">
                        <option selected>Selecciona un Video</option>
                        <?php
                            $query = 'SELECT * FROM id17483408_videos.video where Categoria = "10-12";';
                            $result = mysqli_query($conn,$query);
                            while ($valores = mysqli_fetch_array($result)) {
                            echo "<option value='".$valores['Nombre']."'>".$valores['Nombre']."</option>";
                            }
                        ?>
                          </select>
                          <h2>Indique los cambios a realizar</h2>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Nombre del video</span>
                                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" required>
                                </div>
                                <select class="form-select" aria-label="Default select example" id="Categoria" name="Categoria" style="margin-bottom: 2%;" required>
                                    <option selected>Categoría</option>
                                    <option value="0-3">0 a 3 años</option>
                                    <option value="3-6">3 a 6 años</option>
                                    <option value="6-8">6 a 8 años</option>
                                    <option value="8-10">8 a 10 años</option>
                                    <option value="10-12">10 a 12 años</option>
                                </select>
                                <p>Entra al video que deseas insertar. Dale click a compartir y en insertar. Copia el codigo aqui:</p>
                                <div class="input-group mb-3" style="margin-top: 2%;">
                                    <span class="input-group-text" id="basic-addon1">Codigo</span>
                                    <input type="text" class="form-control" id="Cod" name="Cod" placeholder="Codigo" aria-label="link" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                                    <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>

            
            <a href="gestionar.html" class="btn btn-primary">Volver</a>
        </div>
        
    </div>
</div>

<section data-bs-version="5.1" class="footer7 cid-sMWG0aSu6w" once="footers" id="footer7-a">

    

    

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