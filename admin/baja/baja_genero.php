<?php

require_once('../../components/config/conf.php');

if($con!=NULL){
    $id;
    if(isset($_GET['id'])){
        $id=mysqli_real_escape_string($con,$_GET['id']);

        $consulta = "DELETE FROM genero WHERE id_genero='$id'";

        mysqli_query($con,$consulta);
        
        header("Location: ../../pages/agregar_genero.php");
    }
}

?>