<?php

    require_once("../components/header.php");
    require_once("../components/config/conf.php");

?>

<section>
   
    <form action="../admin/alta/alta_libro.php" method="get">
        <div>
            <label for="titulo">Título</label>
            <input id="titulo" name="titulo" type="text">
        </div>
        <div>
            <label for="autor">Autor</label>
            <input id="autor" name="autor" type="text">
        </div>
        <div>
            <label for="anio_pub">Año de publicación</label>
            <input id="anio_pub" name="anio_pub" type="number">
        </div>
        <div>
            <label for="anio_leido">Año de lectura</label>
            <input id="anio_leido" name="anio_leido" type="number">
        </div>
        <div>
            <label for="puntuacion">Puntuacion</label>
            <input id="puntuacion" name="puntuacion" type="number">
        </div>
        <div>
            <label for="genero">Genero</label>
            <select name="genero" id="genero">
                <?php

                    if($con!=NULL) {
                        $consulta = "SELECT * FROM `genero`";

                        $resultado = mysqli_query($con,$consulta);

                        while($fila=mysqli_fetch_array($resultado)){
                            print "<option value=$fila[id_genero]>".ucfirst($fila['genero'])."</option>";
                        }
                    }
                        
                ?>
            </select>
            <a href='agregar_genero.php'>Agregar género</a>
        </div>
        <div>
            <label for="hojas">Cantidad Hojas</label>
            <input id="hojas" name="hojas" type="number">
        </div>
        <div>
            <label for="sinopsis">Sinopsis</label>
            <textarea name="sinopsis" id="sinopsis" rows="4" cols="50"></textarea>            
        </div>
        <div>
            <label for="opinion">Opinión</label>
            <textarea name="opinion" id="opinion" rows="4" cols="50"></textarea>            
        </div>
        <div>
        <div>
            <input type="submit" value="Cargar libro" >
        </div>
        

    </form>
</section>



<?php

    require_once("../components/footer.php");

?>