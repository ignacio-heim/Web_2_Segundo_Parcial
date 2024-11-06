<?php

    require_once("../components/header.php");
    require_once("../components/config/conf.php");

?>

<section>
    <table class='border-table'>
                    <tr>                        
                        <th>Frase</th>
                    </tr>

    <?php
        if($con!=NULL) {
            $id;
            if(isset($_GET['id'])){
                $id=mysqli_real_escape_string($con,$_GET['id']);
                $consulta = "SELECT * FROM frases WHERE fk_libro=$id";

                $resultado=mysqli_query($con,$consulta);

                while($fila=mysqli_fetch_array($resultado)){
                    print "<tr>
                    
                        <td>".ucfirst($fila['frase'])."</td>   
                        <td><a href='mod_genero.php?id=$fila[id_frase]'>Modificar</a></td>
                        <td><a href='../admin/baja/baja_genero.php?id=$fila[id_frase]'>Eliminar</a></td>
                        </tr>";
            }
            }
            

        }

    ?>

    </table>
    <form action="../admin/alta/alta_frase.php" method="get">
        <?php  
            $id;
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                print "<input type=hidden name=id value=$id";
            }
        ?>
        <div>
            <label for="frase">Frase</label>
            <input type="text" name="frase" id="frase">

        </div>
        <div>
            <input type="submit" value="Cargar frase">
        </div>
    </form>

</section>


<?php

    require_once("../components/footer.php");
  

?>