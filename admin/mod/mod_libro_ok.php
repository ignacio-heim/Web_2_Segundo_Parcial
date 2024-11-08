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
    $editorial;
    $prologo;
    $traductor;
    $hojas;
    $sinopsis;
    $opinion;

    if(isset($_GET['id']) and isset($_GET['titulo']) and isset($_GET['autor']) and isset($_GET['anio_pub']) and isset($_GET['anio_lec']) and isset($_GET['puntuacion']) and isset($_GET['genero']) and isset($_GET['editorial']) and isset($_GET['prologo']) and isset($_GET['traductor']) and isset($_GET['hojas']) and isset($_GET['sinopsis']) and isset($_GET['opinion'])){
        //guardar el dato de la variable inpidiendo código malicioso
        
        $id = mysqli_real_escape_string ($con,$_GET['id']);
        $titulo = mysqli_real_escape_string ($con,$_GET['titulo']);
        $autor = mysqli_real_escape_string ($con,$_GET['autor']);
        $anio_pub = mysqli_real_escape_string ($con,$_GET['anio_pub']);
        $anio_lec = mysqli_real_escape_string ($con,$_GET['anio_lec']);
        $puntuacion= mysqli_real_escape_string ($con,$_GET['puntuacion']);
        $editorial = mysqli_real_escape_string ($con,$_GET['editorial']);
        $prologo = mysqli_real_escape_string ($con,$_GET['prologo']);
        $traductor = mysqli_real_escape_string ($con,$_GET['traductor']);
        $hojas = mysqli_real_escape_string ($con,$_GET['hojas']);
        $sinopsis = mysqli_real_escape_string ($con,$_GET['sinopsis']);
        $genero = mysqli_real_escape_string ($con,$_GET['genero']);
        $opinion = mysqli_real_escape_string ($con,$_GET['opinion']);
                
        $consulta = "UPDATE `libro` SET `titulo`='$titulo', `autor`='$autor', `anio_publicacion`='$anio_pub', `editorial`='$editorial',`autor_prologo`='$prologo',`autor_traduccion`='$traductor',`anio_lectura`='$anio_lec',`puntuacion`='$puntuacion',`cantidad_hojas`='$hojas',`sinopsis`='$sinopsis',`opinion`='$opinion',`fk_genero`='$genero'  WHERE id_libro='$id'";

        //ejecuto la consulta
        mysqli_query($con,$consulta);

        header("Location: ../../index.php");
        
    }

}

?>