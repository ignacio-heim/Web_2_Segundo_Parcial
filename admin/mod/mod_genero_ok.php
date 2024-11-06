<?php

    require_once("../../components/config/conf.php");

    if($con!=NULL){
        $id;
        $genero;
        if(isset($_GET['id']) and isset($_GET['genero']) ){
            $id = mysqli_real_escape_string($con, $_GET['id']);
            $genero = mysqli_real_escape_string($con, $_GET['genero']);

            $consulta = "UPDATE `genero` SET `genero`='$genero' WHERE `id_genero`=$id";

            mysqli_query($con,$consulta);

            header("Location: ../../pages/agregar_genero.php");

        }
    }

?>