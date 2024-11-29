<!--<html>
<body>

<h1>Selecciona un Video de YouTube y el Tiempo de Inicio</h1>
    <form action="redirect.php" method="get">
        <label>Seleccionar Video:</label>
        <select id="video" name="video">
            <option value="1N-5_evKohA">BTS Run ep: 109 y 110</option>
            <option value="WZSkKnkigLA">BTS Run ep: 111 y 112</option>
            <option value="vp6FiYU9EAA">BTS Run ep: 113 y 114</option>
            <option value="OmMT0j5x-dw">BTS Run ep: 127 y 128</option>
            <option value="s6l0uluydKY">BTS Run ep: 131 y 132</option>
        </select>
        <br><br>
        <label>Minuto:</label>
        <input type="number" id="minuto" name="minuto" min="0" required>
        <br><br>
        <label>Segundo:</label>
        <input type="number" id="segundos" name="segundos" min="0" max="59" required>
        <br><br>
        <input type="submit" value="Ir al Video">
    </form>
  
</body>
</html>-->
<html>
<body>
<?php
    $video="";$minuto="";$segundos="";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $video = $_POST["video"];
        $minuto = intval($_POST["minuto"]);
        $segundos = intval($_POST["segundos"]); 
        $time = ($minuto * 60) + $segundos;
        header("Location: https://youtu.be/$video?t=$time");
        exit();
    }
    function ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<h1>Selecciona un Video de YouTube y el Tiempo de Inicio</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label>Seleccionar Video:</label>
        <select id="video" name="video">
            <option value="1N-5_evKohA">BTS Run ep: 109 y 110</option>
            <option value="WZSkKnkigLA">BTS Run ep: 111 y 112</option>
            <option value="vp6FiYU9EAA">BTS Run ep: 113 y 114</option>
            <option value="OmMT0j5x-dw">BTS Run ep: 127 y 128</option>
            <option value="s6l0uluydKY">BTS Run ep: 131 y 132</option>
        </select>
        <br><br>
        <label>Minuto:</label>
        <input type="number" id="minuto" name="minuto" min="0" required>
        <br><br>
        <label>Segundo:</label>
        <input type="number" id="segundos" name="segundos" min="0" max="59" required>
        <br><br>
        <input type="submit" value="Ir al Video">
    </form>
    
</body>
</html>