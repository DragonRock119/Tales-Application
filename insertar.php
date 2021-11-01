<?php
     require 'config.php';
     include_once "Alerta.php";
     
     $nombre = $_POST['Nombre'];
     $categoria = $_POST['Categoria'];
     $cod = $_POST['Cod'];
     $descripcion = $_POST['Descripcion'];
    
     try{
     
        $conn= conexion();
     
        $insertarSQL = "INSERT INTO id17483408_videos.video(Nombre, Categoria, Cod, Descripcion, Fecha) VALUES ('".$nombre."','".$categoria."','".$cod."','".$descripcion."',now());";
     
        MensajeAlerta("correcto", "Ingreso Exitoso", "insertarform.html");
     
        $conn ->query($insertarSQL);
    
    }catch (Exception $e) {
    
        MensajeAlerta("error", "Ingreso no valido", "insertarform.html");
}

    ?>