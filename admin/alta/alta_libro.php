<?php 
require_once("../../components/config/conf.php");

if($con!=NULL){
    $titulo;
    $autor;
    $anio_pub;
    $editorial;
    $prologo;
    $traductor;
    $anio_lectura;
    $puntuacion;
    $genero;
    $hojas;
    $sinopsis;
    $opinion;
    if( isset($_GET['titulo']) and isset($_GET['autor']) and isset($_GET['anio_pub']) and isset($_GET['anio_leido']) and isset($_GET['puntuacion']) and isset($_GET['genero']) and
    isset($_GET['hojas']) and isset($_GET['sinopsis']) and isset($_GET['opinion']) and isset($_GET['editorial']) and isset($_GET['prologo']) and isset($_GET['tradcutor'])) {
        
        //guardar el dato de la variable inpidiendo código malicioso
        $titulo = mysqli_real_escape_string ($con,$_GET['titulo']);
        $autor = mysqli_real_escape_string ($con,$_GET['autor']);
        $anio_pub = mysqli_real_escape_string ($con,$_GET['anio_pub']);
        $anio_lectura = mysqli_real_escape_string ($con,$_GET['anio_leido']);
        $puntuacion = mysqli_real_escape_string ($con,$_GET['puntuacion']);
        $genero = mysqli_real_escape_string ($con,$_GET['genero']);
        $hojas = mysqli_real_escape_string ($con,$_GET['hojas']);
        $sinopsis = mysqli_real_escape_string ($con,$_GET['sinopsis']);
        $opinion = mysqli_real_escape_string ($con,$_GET['opinion']);
        $editorial = mysqli_real_escape_string ($con,$_GET['editorial']);
        $prologo = mysqli_real_escape_string ($con,$_GET['prologo']);
        $tradcutor = mysqli_real_escape_string ($con,$_GET['tradcutor']);

        
        //print $seccion;

        //$consulta = "INSERT INTO `secciones`( `nombre_seccion`) VALUES ('$seccion')";
        $consulta = "INSERT INTO `libro`(`titulo`, `autor`, `anio_publicacion`, `editorial`,`autor_prologo`,`autor_traduccion`,`anio_lectura`, `puntuacion`, `cantidad_hojas`, `sinopsis`, `opinion`,`fk_genero`) VALUES ('$titulo','$autor','$anio_pub','$editorial','$prologo','$tradcutor','$anio_lectura','$puntuacion', '$hojas','$sinopsis','$opinion','$genero')";
        //ejecuto la consulta
        mysqli_query($con,$consulta);

        header("Location: ../../index.php");

    } else {

    }
    
}
    

?>