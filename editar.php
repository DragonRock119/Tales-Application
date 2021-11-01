<?php
     require 'config.php';
     include_once "Alerta.php";
     
     $nombreviejo = $_POST['NombreV'];
     $nombre = $_POST['Nombre'];
     $categoria = $_POST['Categoria'];
     $cod = $_POST['Cod'];
     $descripcion = $_POST['Descripcion'];
    
     try{
     
        $conn= conexion();
     
        $insertarSQL = "UPDATE id17483408_videos.video SET Nombre = '".$nombre."', Categoria = '".$categoria."', Cod = '".$cod."', Descripcion = '".$descripcion."', Fecha = now() WHERE Nombre = '".$nombreviejo."';";
     
        MensajeAlerta("correcto", "Edición Completada", "editarform.php");
     
        $conn ->query($insertarSQL);
    
    }catch (Exception $e) {
    
        MensajeAlerta("error", "Edición no valida", "editarform.php");
}

    ?>