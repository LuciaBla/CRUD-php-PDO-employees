<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="home.css" media="screen" /> 
</head>
<body>
  <div class="container">
      <h1>Users List</h1>
        <div class="button-container">
          <a href="FormularioSubirUser.html" class="button">Subir Archivo de Usuario</a>
          <a href="formInsert.html" class="button">Añadir un Registro/Usuario</a>
        </div>
        <table>
          <tr>
          <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
          </tr>
  <?php
      $myfile = fopen("users.txt", "r") or die("Unable to open file!");//abre el archivo para lectura.
      $usuario =array();//lo usare para almacenar los usuarios

      while(!feof($myfile)) {
        $line = fgets($myfile);
        if (!empty(trim($line))) {//lee cada línea del archivo usando fgets() 
          //Y cada linea se almacena en el array si no esta vacia la linea
          $users[] = $line;
        }
      }
      fclose($myfile);//y cierra

      
    function ordenarID($a, $b) {// Función para comparar los ID de los usuarios
      $id_a = explode("#", $a)[0];
      $id_b = explode("#", $b)[0];
      return $id_a - $id_b;
    }

    usort($users, "ordenarID");// Funcion para oedenar el array por ID

    
    foreach ($users as $user) {// Mostrar los usuarios ordenados en una tabla
      $data = explode("#", $user);
      if ($data[0] != "") {//verifica que el ID del usuario ($data[0]) no esté vacío
        //si el ID no está vacío, se procede a generar la fila correspondiente en la tabla.
          echo '<tr>';
          echo '<td>' . $data[0] . '</td>';//Se crea una celda (<td>) que contiene el ID del usuario ($data[0]).
          echo '<td>' . $data[1] . '</td>';//Se crea una celda (<td>) que contiene el nombre del usuario ($data[1]).
          echo '<td>';
          echo '<a href="update.php?ID=' . $data[0] . '">Edit</a> ';//Se crea un enlace (<a>) que apunta a update.php 
          //con el ID del usuario usando el parámetro (?ID=...).
          echo '<a href="delete.php?ID=' . $data[0] . '">Delete</a>';//Se crea un enlace (<a>) que apunta a delete.php 
          //con el ID del usuario usando el parámetro (?ID=...).
          echo '</td>';
          echo '</tr>';
      }
    }
  ?>
</table>
</div>
</body>
</html>
 