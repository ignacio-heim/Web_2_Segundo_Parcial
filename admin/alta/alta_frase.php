<?php

    require_once("../../components/config/conf.php");

?>

<?php
    $id;
    $frase;
    if($con!=NULL){
        $id=mysqli_real_escape_string($con, $_GET['id']);
        $frase=mysqli_real_escape_string($con, $_GET['frase']);

        $consulta = "INSERT INTO `frases` (`frase`, `fk_libro`) VALUES ('$frase','$id')";

        mysqli_query($con,$consulta);

        header("Location: ../../pages/libro.php?id=$id");
    }

?>