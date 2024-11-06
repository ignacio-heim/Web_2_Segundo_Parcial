<?php

    require_once("../../components/config/conf.php");

    if($con!=NULL) {
        $genero;
        if(isset($_GET['genero'])){
            $genero = mysqli_real_escape_string($con,$_GET['genero']);

            $consulta = "INSERT INTO `genero` (`genero`) VALUES ('$genero')";

            mysqli_query($con,$consulta);
            
            header("Location: ../../pages/agregar_genero.php");

        }

    }

?>