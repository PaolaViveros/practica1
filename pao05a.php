<?php
    ob_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paola</title>
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
<nav class="navbar navbar-light" style="background: linear-gradient(#ca0000bb, rgb(193, 16, 228),rgb(250, 65, 219))">
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
                            <a class="dropdown-item" href="/lani/pao05a.php">Mostrar datos</a><br>
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
            option{
                color:black;
            }

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
         .container1{
                width:60%;
                background-color:#282a36;
                padding:20px;
                border-radius:10px;
                box-shadow: 0 0 10px;
                color:white;
            }
            h1{
                text-align:center;
                color:#ff79c6;
                margin-bottom:15px;
            }
      form{
                flex-direction:column;
            }
            label{
                font-size:16px;
                margin-bottom:5px;
            }
            input[type="text"] {
                display:flex;
                justify-content:center;
                align-items:center;
                padding: 8px;
                margin-bottom: 10px;
                border: none;
                border-radius:5px;
                font-size:16px;
                background-color:#44475a;
                color:#fff
            }
            input[type="submit"] {
            padding:10px;
            background-color:rgb(255, 168, 240);
            border:none;
            color:#282a36;
            font-size: 16px;
            border-radius: 5px;
            cursor:pointer;
            transition: background0.3; 
            }
            input[type="submit"]:hover {
                background-color:#fff;
                
            }


        </style>

        <h1 class="display-4 font" style="text-align: center; font-family: 'Feltpen', sans-serif;">Nombre del profe</h1>
        </div>

<div class="container1" style="">


<form method="POST" id="formulario">
<label for="numero_control">Numero control</label>
<input type="text" id="numero_control" name="numero_control"
required><br>

<label for="nombre">nombre</label>
<input type="text" id="nombre" name="nombre"
required><br>

<label for="apellido_paterno">apellido_paterno</label>
<input type="text" id="apellido_paterno" name="apellido_paterno"
required><br>

<label for="apellido_materno">apellido_materno</label>
<input type="text" id="apellido_materno" name="apellido_materno"
required><br>

<label for="edad">Edad</label>
 <select name="edad" required>
    <option value="">Seleccione una edad</option>
    <?php while($row = $result_edad->fetch_assoc()){
        echo "<option value = ' " . $row["id"] . " '>" . $row["edad"] . "</option>";
    }?>
 </select>

 <label for="colonia">Colonias:</label>
 <select name="colonia" required>
    <option value="">Seleccione una colonia</option>
    <?php while($row = $result_colonias->fetch_assoc()){
        echo "<option value = ' " . $row["id"] . " '>" . $row["colonia"] . "</option>";
    }?>
 </select>

 <label for="especialidades">Especialidades:</label>
 <select name="especialidades" required>
    <option value="">Seleccione una Especialidad</option>
    <?php while($row = $result_especialidad->fetch_assoc()){
        echo "<option value = ' " . $row["id"] . " '>" . $row["especialidad"] . "</option>";
    }?>
 </select>

 <label for="genero">Generos:</label>
 <select name="genero" required>
    <option value="">Seleccione un Genero</option>
    <?php while($row = $result_genero->fetch_assoc()){
        echo "<option value = ' " . $row["id"] . " '>" . $row["genero"] . "</option>";
    }?>
 </select>

<label for="correo">Correo</label>
<input type="email" id="correo" name="correo"
required><br>
<label for="telefono">telefono</label>
<input type="text" id="telefono" name="telefono"
required><br>
<label for="fecha_ingreso">fecha_ingreso</label>
<input type="date" id="fecha_ingreso" name="fecha_ingreso"
required><br>



<input type="submit" value="Agregar registro">
        </from>


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
        //Obtener los datos del drowpdown
        $sql_edad = "SELECT id, edad FROM edades";
        $sql_colonias = "SELECT id, colonia FROM colonia";
        $sql_especialidades = "SELECT id, especialidad FROM especialidades";
        $sql_generos = "SELECT id, genero, FROM generos";

        $result_
      

   ?>

    
        
</div>
</body>
</html>