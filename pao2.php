<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paolaa</title>
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
<nav class="navbar navbar-light" style="background: linear-gradient(#0f3486bb, rgb(193, 16, 228),rgba(252, 118, 229, 0.774))">
<div class="container" style="font-family: 'Feltpen', sans-serif;">
            <a class="navbar-brand" href="#" style="color: white;">Inicio</a>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Madelis Script', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 1</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/lani/pao.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/lani/pao2.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/lani/pao3.php">Meter datos</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Madelis Script', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 2</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/lani/pao04.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/lani/pao05.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/lani/pao6.php">Meter datos</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Madelis Script', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 3</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/lani/pao7.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/lani/pao8.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/lani/pao9.php">Meter datos</a><br>
                            <a class="dropdown-item" href="/lani/pao10.php">Meter datos</a><br>
                        </div>
                    </li>

                    
                </ul>
            </div>
            

        </div>
    </nav>

    <div class="jumbotron">
        <h1  class="display-4 font" style="text-align: center;  font-family: 'Snowpe', sans-serif;">Mostrar Datos</h1>

              

<h1 class="display-4 font" style="text-align: center;font-family: 'Times New Roman', sans-serif;
        background-color:">NOMBRES</h1>

        <?php
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "lani";

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexion Fallida: " . $conexion->connect_error);
        }
        $sql = "SELECT * FROM `nombres`"; 
        $resultado = $conexion->query($sql);
        
        if($resultado->num_rows > 0) {
            echo "<table class='table table-bordered'>";
            echo "<tr><th>id</th><th>nombre</th><th>apellidop</th><th>apellidom</th><th>edad</th><th>numerofav</th>
            </tr>";
            while($row = $resultado->fetch_assoc()){
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["apellidop"] . "</td><td>" . 
                 $row["apellidom"] . "</td><td>" . $row["edad"] . "</td><td>" . $row["numerofav"] . "</td></tr>";
        }
        echo "</table>";
        }else {
            echo "No se encontaron registros en la base de datos";
        }
        $conexion->close();


        
        ?>




    </div>

</body>
</html>