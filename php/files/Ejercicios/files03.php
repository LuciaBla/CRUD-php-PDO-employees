<?php include 'menu.php'; ?>
<!--Hay que ponerle lo del padding y margin pata que no 
escriba debajo del menu-->
<div style="margin-left:210px; padding:15px;">
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = filter_var($_POST["url"], FILTER_SANITIZE_URL);

    // Verificar si la URL es válida
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        $html = file_get_contents($url);// Obtener el contenido de la página

        // Usar DOMDocument para analizar el HTML
        $dom = new DOMDocument;
        @$dom->loadHTML($html);

        // Obtener todas las etiquetas <a>
        $links = $dom->getElementsByTagName('a');

        echo "<table border='1'>";
        echo "<tr><th>Texto del Enlace</th><th>URL</th></tr>";

        // Recorrer todos los enlaces y mostrarlos en una tabla
        foreach ($links as $link) {
            $linkText = $link->nodeValue;
            $linkHref = $link-> getAttribute ('href');
            echo "<tr><td>$linkText</td><td><a href='$linkHref'>$linkHref</a></td></tr>";
        }

        echo "</table>";
    } else {
        echo "URL no válida.";
    }
}
function ($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        URL:
        <input type="url" name="url">
        <button type="submit">Enviar</button>
    </form>
</div>