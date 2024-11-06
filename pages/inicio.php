<?php

    require_once("../components/header.php");
    require_once("../components/config/conf.php");

?>

<h1>Pagina principal</h1>

<table class='border-table'>
                <tr>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Año Publicación</th>
                    <th>Año Lectura</th>
                    <th>Puntuacion</th>
                    <th>Genero</th>
                </tr> 

<?php

    if($con!=NULL) {
        $cconsulta = "SELECT * FROM libro as li JOIN genero as ge on ge.id_genero = li.fk_genero";

        $resultado = mysqli_query($con,$cconsulta);

        while($fila = mysqli_fetch_array($resultado)){
            print " 
                <tr>
                    <td><a href='libro.php?id=$fila[id_libro]'>$fila[titulo]</a></td>
                    <td>$fila[autor]</td>
                    <td>$fila[anio_publicacion]</td>
                    <td>$fila[anio_lectura]</td>
                    <td>$fila[puntiacion]</td>
                    <td>".ucfirst($fila['genero'])."</td>                    
                    <td><a href='mod_libro.php?id=$fila[id_libro]'>Modificar</a></td>
                    <td><a href='../admin/baja/baja_libro.php?id=$fila[id_libro]'>Eliminar</a></td>
                </tr>";
        }
    }

?>
 </table>


<?php

    require_once("../components/footer.php");

?>
    
