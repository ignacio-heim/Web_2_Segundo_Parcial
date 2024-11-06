<?php

    require_once("../components/header.php");
    require_once("../components/config/conf.php");

?>

<?php

    if($con!=NULL){
        $id;
        if(isset($_GET['id'])){
            $id = mysqli_real_escape_string($con, $_GET['id']);

            $consulta = "SELECT * FROM genero WHERE id_genero='$id'";

            $resultado = mysqli_query($con,$consulta);

            while($fila=mysqli_fetch_array($resultado)){
                print "
                    <form action='../admin/mod/mod_genero_ok.php' method='get'>
                        <div>
                            <input type=hidden name=id value=$fila[id_genero]>
                        </div>
                        <div>
                            <label for='genero'>Genero</label>
                            <input type=text name=genero id=genero>
                        </div>
                        <div>
                            <input type=submit value='Modificar género'>
                        </div>

                    </form>
                    ";
            }
        }
    }

?>




<?php

    require_once("../components/footer.php");

?>