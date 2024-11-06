<?php

    require_once("../components/header.php");
    require_once("../components/config/conf.php");

?>

<section>
    <table class='border-table'>
                    <tr>
                        <th>Id</th>
                        <th>Género</th>
                    </tr>

    <?php
        if($con!=NULL) {
            $consulta = "SELECT * FROM genero";

            $resultado=mysqli_query($con,$consulta);

            while($fila=mysqli_fetch_array($resultado)){
                print "<tr>
                        <td>$fila[id_genero]</td>
                        <td>".ucfirst($fila['genero'])."</td>   
                        <td><a href='mod_genero.php?id=$fila[id_genero]'>Modificar</a></td>
                        <td><a href='../admin/baja/baja_genero.php?id=$fila[id_genero]'>Eliminar</a></td>
                        </tr>";
            }

        }

    ?>
    </table>


    <form action="../admin/alta/alta_genero.php" method="get">
        <div>
            <label for="genero">Genero</label>
            <input type="text" name="genero" id="genero">

        </div>
        <div>
            <input type="submit" value="Cargar género">
        </div>
    </form>

</section>

<?php

    require_once("../components/footer.php")

?>