<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css"></link>
    <link rel="stylesheet" href="../css/style-header.css"></link>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton+SC&display=swap" rel="stylesheet">
    <title>Mis Libros</title>
</head>
<body>
    <header>
        <div class='display-nav anton-sc-regular bg-img'>
        <?php

        $enlaces = array();

        $enlaces['La Cantera'] = 'inicio.php';
        $enlaces['Agregar Libro'] = 'agregarlibro.php';
        $enlaces['Agregar Género'] = 'agregar_genero.php';
        $enlaces['Quien soy'] = 'quien.php';

        foreach($enlaces as $link=>$url){
            print "                
                    <nav>
                        <ul>
                            <li class='li-nav'><a href='../pages/$url' class='no-underline nav-a-effect'>$link</a></li>
                        </ul>
                </nav>
                ";
        }
                


        ?>
        </div>
    </header>

