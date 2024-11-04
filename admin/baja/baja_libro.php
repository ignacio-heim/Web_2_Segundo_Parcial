<?php 
require_once("../../components/config/conf.php");

if($con!=NULL){
    $id;
    if(isset($_GET['id'])){
        //guardar el dato de la variable inpidiendo código malicioso
        $id = mysqli_real_escape_string($con,$_GET['id']);

        $consulta = "DELETE FROM libro WHERE id_libro='$id'";

        //ejecuto la consulta
        mysqli_query($con,$consulta);

        header("Location: ../../index.php");
    }
}

?>