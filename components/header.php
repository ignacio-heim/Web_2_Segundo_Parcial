<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css"></link>
    <title>Mis Libros</title>
</head>
<body>
    <header>
        <?php

        $enlaces = array();

        $enlaces['Home'] = 'inicio.php';
        $enlaces['Agregar Libro'] = 'agregarlibro.php';
        $enlaces['Agregar Género'] = 'agregar_genero.php';
        $enlaces['Quien soy'] = 'quien.php';

        foreach($enlaces as $link=>$url){
            print "<a href='../pages/$url'>$link</a>";
        }


        ?>
    </header>

