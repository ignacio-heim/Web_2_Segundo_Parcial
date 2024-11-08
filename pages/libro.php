<?php

    require_once("../components/header.php");
    require_once("../components/config/conf.php");

?>

<?php

    if($con!=NULL){
        $id;
        if(isset($_GET['id'])){
            $id=mysqli_real_escape_string($con,$_GET['id']);

            $consulta="SELECT * FROM `libro` as li left join `frases` as fr on fr.fk_libro = li.id_libro  WHERE `id_libro`='$id'";
            //$consulta = "SELECT * FROM `libro` WHERE `id_libro`='$id'";

            $resultado = mysqli_query($con,$consulta);

            while($fila=mysqli_fetch_array($resultado)){
                print "
                    <div>
                        <h1>$fila[titulo]</h1>
                        <h2>$fila[autor]</h2>
                    </div>
                    <section>
                    <h3>Sinopsis</h3>
                    <p>$fila[sinopsis]</p>
                    </section>
                    <section>
                    <h3>Opinion</h3>
                    <p>$fila[opinion]</p>
                    </section>
                    <section>
                        <h3>Frases</h3>";
                        if($fila['frase']==NULL){
                            print "No hay frases cargadas";
                        } else {
                        print "<ul>
                            <li>$fila[frase]</li>
                        </ul>
                        
                    </section>";
                        }
                    print "<div><a href='agregar_frase.php?id=$fila[id_libro]'>Agregar Frase</a></div>    
                        ";
            }
        }
    }

?>



<?php

require_once("../components/footer.php");

?>