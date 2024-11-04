<?php 
require_once("../../components/config/conf.php");

if($con!=NULL){
    $titulo;
    $autor;
    $anio_pub;
    $anio_lectura;
    $puntuacion;
    $genero;
    if( isset($_GET['titulo']) and isset($_GET['autor']) and isset($_GET['anio_pub']) and isset($_GET['anio_leido']) and isset($_GET['puntuacion']) and isset($_GET['genero'])) {
        
        //guardar el dato de la variable inpidiendo código malicioso
        $titulo = mysqli_real_escape_string ($con,$_GET['titulo']);
        $autor = mysqli_real_escape_string ($con,$_GET['autor']);
        $anio_pub = mysqli_real_escape_string ($con,$_GET['anio_pub']);
        $anio_lectura = mysqli_real_escape_string ($con,$_GET['anio_leido']);
        $puntuacion = mysqli_real_escape_string ($con,$_GET['puntuacion']);
        $genero = mysqli_real_escape_string ($con,$_GET['genero']);
        
        //print $seccion;

        //$consulta = "INSERT INTO `secciones`( `nombre_seccion`) VALUES ('$seccion')";
        $consulta = "INSERT INTO `libro`(`titulo`, `autor`, `anio_publicacion`, `anio_lectura`, `puntiacion`, `fk_genero`) VALUES ('$titulo','$autor','$anio_pub','$anio_lectura','$puntuacion','$genero')";
        //ejecuto la consulta
        mysqli_query($con,$consulta);

        header("Location: ../../index.php");

    } else {

    }
    
}
    

?>