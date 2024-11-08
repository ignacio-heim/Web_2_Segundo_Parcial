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
                <form action=../admin/mod/mod_libro_ok.php  method=get>
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
                        <label for=editorial>Editorial</label>
                        <input id=editorial name=editorial type=text value=$fila[editorial]>
                    </div>
                    <div>
                        <label for=prologo>Autor Prólogo</label>
                        <input id=prologo name=prologo type=text value=$fila[autor_prologo]>
                    </div>
                    <div>
                        <label for=traductor>Autor Traductor</label>
                        <input id=traductor name=traductor type=text value=$fila[autor_traduccion]>
                    </div>
                    <div>
                        <label>Anio Lectura</label>
                        <input type=number name=anio_lec value=$fila[anio_lectura]>
                    </div>
                    <div>
                        <label>Puntuacion</label>
                        <input type=number name=puntuacion value=$fila[puntuacion]>
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
                        
            print "
            </select>
            </div>      
            <div>
                <label for=hojas>Cantidad Hojas</label>
                <input id=hojas name=hojas type=number value=$fila[cantidad_hojas]>
            </div>
            <div>
                <label for=sinopsis>Sinopsis</label>
                <textarea name=sinopsis id=sinopsis rows=4 cols=50 value=$fija[sinopsis]></textarea>            
            </div>
            <div>
                <label for=opinion>Opinión</label>
                <textarea name=opinion id=opinion rows=4 cols=50 value=$fija[opinion]></textarea>            
            </div>
            <div>
            
                    </div>
                    <input type=submit value=Modificar >

                </form>

            ";
        }
    }




    }
     
    
?>