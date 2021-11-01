<?php
     require 'config.php';
     include_once "Alerta.php";
     
     $nombre = $_POST['Nombre'];
    
     try{
     
        $conn= conexion();
     
        $insertarSQL = "DELETE FROM id17483408_videos.video WHERE Nombre = '".$nombre."';";
     
        MensajeAlerta("correcto", "Borrado Exitoso", "eliminarform.php");
     
        $conn ->query($insertarSQL);
    
    }catch (Exception $e) {
    
        MensajeAlerta("error", "Borrado no valido", "eliminarform.php");
}

    ?>