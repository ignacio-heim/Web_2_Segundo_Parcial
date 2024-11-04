<?php

require_once("../components/header.php");
require_once("../components/config/conf.php");


    if($con!=NULL){
        $id;
        if(isset($_GET['id'])){
        //guardar el dato de la variable inpidiendo código malicioso
        $id = mysqli_real_escape_string($con,$_GET['id']);

        //print $seccion;

        $consulta = "SELECT * FROM `libro` WHERE id_libro='$id'";

        //ejecuto la consulta y la guardo
        $resultado = mysqli_query($con,$consulta);

        while($fila = mysqli_fetch_array($resultado)){
            print "
                <form action=../admin/mod/mod_ok.php  method=get>
                    <input type=hidden name=id value=$fila[id_libro]>
                    <div>
                        <label for='titulo'>Titulo</label>
                        <input type=text name=titulo value=$fila[titulo]>
                    </div>                    
                    <div>
                        <label for=autor>Autor</label>
                        <input type=text name=autor value=$fila[autor]>
                    </div>    
                    <div>
                        <label>Anio Publicacion</label>
                        <input type=number name=anio_pub value=$fila[anio_publicacion]>
                    </div>
                    <div>
                        <label>Anio Lectura</label>
                        <input type=number name=anio_lec value=$fila[anio_lectura]>
                    </div>
                    <div>
                        <label>Puntuacion</label>
                        <input type=number name=puntuacion value=$fila[puntiacion]>
                    </div>
                    
                    <div>
                        <label for='genero'>Genero</label>
                        <select name='genero' id='genero'>";
                            

                                if($con!=NULL) {
                                    $consulta = "SELECT * FROM `genero`";

                                    $resultado = mysqli_query($con,$consulta);

                                    while($fila=mysqli_fetch_array($resultado)){
                                        print "<option value=$fila[id_genero]>".ucfirst($fila['genero'])."</option>";
                                    }

                                }
                        
            print            "</select>
                    </div>
                    <input type=submit value=Modificar >

                </form>

            ";
        }
    }




    }
     
    
?>