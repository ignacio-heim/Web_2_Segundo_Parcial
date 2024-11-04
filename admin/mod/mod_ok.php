<?php 
require_once("../../components/config/conf.php");

if($con!=NULL){
    $id;
    $titulo;
    $autor;
    $anio_pub;
    $anio_lec;
    $puntuacion;
    $genero;

    

    if(isset($_GET['id']) and isset($_GET['titulo']) and isset($_GET['autor']) and isset($_GET['anio_pub']) and isset($_GET['anio_lec']) and isset($_GET['puntuacion']) and isset($_GET['genero'])){
        //guardar el dato de la variable inpidiendo código malicioso
        
        $id = mysqli_real_escape_string ($con,$_GET['id']);
        $titulo = mysqli_real_escape_string ($con,$_GET['titulo']);
        $autor = mysqli_real_escape_string ($con,$_GET['autor']);
        $anio_pub = mysqli_real_escape_string ($con,$_GET['anio_pub']);
        $anio_lec = mysqli_real_escape_string ($con,$_GET['anio_lec']);
        $puntuacion= mysqli_real_escape_string ($con,$_GET['puntuacion']);
        $genero = mysqli_real_escape_string ($con,$_GET['genero']);
        


        
        $consulta = "UPDATE `libro` SET `titulo`='$titulo', `autor`='$autor', `anio_publicacion`='$anio_pub', `anio_lectura`='$anio_lec',`puntiacion`='$puntuacion',`fk_genero`='$genero'  WHERE id_libro='$id'";

        //ejecuto la consulta
        mysqli_query($con,$consulta);

        header("Location: ../../index.php");
        
    }

}

?>