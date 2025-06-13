<?php
    ob_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jesus</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/bungee-outline" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/madelis-script" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/feltpen" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/brushpen-story" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/snowpe" rel="stylesheet">


    
    
<body>
<nav class="navbar navbar-light" style="background: linear-gradient(#ca0000bb, rgb(228, 16, 133),rgb(255, 72, 224))">
<div class="container" style="font-family: 'Feltpen', sans-serif;">
            <a class="navbar-brand" href="index.html" style="color: white;">Inicio</a>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Snowpe', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 1</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/lani/pao1.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/lani/pao2.php">Mostrar datos 2</a><br>
                            <a class="dropdown-item" href="/lani/pao3.php">Meter datos</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Snowpe', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 2</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/lani/pao4.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/lani/pao05.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/lani/pao06.php">Meter datos</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Snowpe', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 3</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/lani/pao07.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/lani/pao08.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/lani/pao09.php">Meter datos</a><br>
                            <a class="dropdown-item" href="/lani/pao10.php">Meter datos</a><br>
                        </div>
                    </li>

                    
                </ul>
            </div>
            

        </div>
    </nav>

    <div class="jumbotron">
        <h1  class="display-4 font" style="text-align: center; color: #1E224; ">Mostrar Datos</h1>
        <style>
            h1 {
                
                text-align: center;
                color: #000;
                margin-bottom: 20px;
            }
            
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 50px;
                border-radius: 50px;
            }
            
            th,td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid rgb(158, 8, 151);
            }
            
            tr:nth-child(even) {
                background-color: rgb(247, 92, 221);
                color: black;
            }
            
            tr:nth-child(odd) {
                background-color: white;
                color: black;
            }
            
            th {            
                background-color: rgb(255, 64, 214);
                color: white;
            }

        
        </style>
       <style>

            input[type="submit"] {
            padding:10px;
            background-color:rgb(255, 168, 240);
            border:none;
            color:#282a36;
            font-size: 16px;
            border-radius: 5px;
            cursor:pointer;
            transition: background 0.3;
            }
            input[type="submit"]:hover {
                background-color:#fff;
                
            }


        </style>

        <h1 class="display-4 font" style="text-align: center; font-family: 'Feltpen', sans-serif;">Nombre del profe</h1>
        </div>

<div class="container1">

<table class="table table-bordered">
    <thead>
        <tr>
            <th>numero de control</th>
            <th>nombre</th>
            <th>apellido paterno</th>
            <th>apellido materno</th>
            <th>colonia</th>
            <th>especialidad</th>
            <th>genero</th>
            <th>correo</th>
            <th>telefono</th>
            <th>fecha de ingreso</th>

        </tr>
    </thead>
    </table>


<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "escuela";

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexion Fallida: " . $conexion->connect_error);
        }

      

        
$sql = "SELECT 
        a.numero_control,
        a.nombre,
        a.apellido_paterno,
        a.apellido_materno,
        e.edad,
        c.nombre_colonia,
        es.nombre_especialidad,
        g.nombre_genero,
        a.correo,
        a.telefono,
        a.fecha_ingreso
        FROM alumnos a
        JOIN edades e ON a.id_edad = e.id
        JOIN colonias c ON a.id_colonia = c.id
        JOIN especialidades es ON a.id_especialidad =es.id
        JOIN generos g ON a.id_genero = g.id";

$resultado = $conexion->query($sql);

if($resultado->num_rows > 0) {

    while($row = $resultado->fetch_assoc()){
        echo "<tr>
        <td>  {$row['numero_control']} </td>
        <td>  {$row['nombre']} </td>
        <td>  {$row['apellido_paterno']} </td>
        <td>  {$row['apellido_materno']} </td>
        <td>  {$row['edad']} </td>
        <td>  {$row['nombre_colonia']} </td>
        <td>  {$row['nombre_especialidad']} </td>
        <td>  {$row['nombre_genero']} </td>
        <td>  {$row['correo']} </td>
        <td>  {$row['telefono']} </td>
        <td>  {$row['fecha_ingreso']} </td>
        </tr>";


}
}else{
    echo "<p>nose encontro</p>";
}
$conexion->close();
        ?>

    
        
</div>
</body>
</html>