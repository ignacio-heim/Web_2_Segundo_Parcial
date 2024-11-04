<?php 
//conectar Base de Datos desde PHP

define('servidor','localhost'); //servidor
define('usuario','root'); //usuario con privilegios
define('clave',''); //clave del usuario
define('base_de_datos','bd_libros'); //nombre de la base de datos
define('puerto','3306'); //puerto en donde trabaja mysql

//mysqli_connect (función ara conectar a la base de datos)

$con = mysqli_connect(servidor,usuario,clave,base_de_datos,puerto);

/*
if(!$con){
    print "<h1>No hay conexión 😭</h1>";

}else{
    print "<h1>Hay conexión 🥰🤩</h1>";
}
    */


?>