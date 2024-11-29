<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Lateral</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        /*Seria como la seccion/div*/
        .sidebar {
            height: 100%;
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #111;
            padding-top: 20px;
        }
        /*La decoracion de la a */
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }
        /*El estilo de la a cuando pasas el raton por encima */
        .sidebar a:hover {
            background-color: #575757;
        }
    </style>
</head>
<body>
    <div class="sidebar">
    <?php
        echo '<a href="menuLateral.php">Inicio</a>
        <a href="files01.php">Files 01</a>
        <a href="files02.php">Files 02</a>
        <a href="files03.php">Files 03</a>
        <a href="files04.php">Files 04</a>
        <a href="files05.php">Files 05</a>
        <a href="index.php">Index</a>';
    ?>
    </div>
</body>
</html>