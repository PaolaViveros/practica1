<?php
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "paupau";

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexion Fallida: " . $conexion->connect_error);
        }

        if($_SERVER["REQUEST_METHOD"]=="POST"){

            $nombre = $_POST["nombre"];
            $precio = $_POST["precio"];
            $id_categoria = $_POST["categoria"];
            $sql = "INSERT INTO productos (nombre, precio, id_categoria)
            VALUES ('nombre', 'precio', 'id_categoria')";
            if ($conexion->query($sql) == TRUE) {
                echo "<p style='color: blue';>producto agregado correctamente</p>";
            }else {
                echo "<p class='error'>Error al agregar al alumno: " . $conexion->error . "</p>";
            }
        }
        $sql_categorias = "SELECT * FROM categorias";
        $resultado_categorias = $conexion->query($sql_categorias);
?>

<html>
    <head>
        <title>
            pagina del profe
        </title>
    </head>
    <body>
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
                border-bottom: 1px solid rgb(235, 130, 217);
            }
            
            tr:nth-child(even) {
                background-color: rgb(203, 92, 247);
                color: black;
            }
            
            tr:nth-child(odd) {
                background-color: white;
                color: black;
            }
            
            th {            
                background-color: rgba(115, 3, 180, 0.8);
                color: white;
            }

        </style>

        <h1>registrar nuevos productos</h1>
        <form method ="POST">
            <label>nombre del producto: </label>
            <input type="text" name="nombre" required><br></br>
            <label>precio: </label>
            <input type="number" name="precio" required><br></br>
            <label>categoria: </label>
           <select name="categoria" required >
            <option value="">seleccionar categoria</option>
            <?php
            if ($resultado_categorias->num_rows > 0) {
                while($row = $resultado_categorias->fetch_assoc()){
                    echo "<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
                }
            }
            ?>
           </select><br></br>
        </form>
        <h2>Lista de Productos</h2>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoria</th>
            </tr>
            <?php
            $sql_productos = "SELECT productos.nombre, productos.precio, categorias.nombre AS categoria FROM productos JOIN categorias ON productos.id_categoria = categoria.id";
            $result_productos = $conexion->quey($sql_productos);
            if($result_productos->num_rows>0){
                while($row = $result_productos -> fetch_assoc()){
                    echo "<tr>
                        <th>{$row['nombre']}</th>
                        <th>{$row['precio']}</th>
                        <th>{$row['ctageoria']}</th>
                    </tr";
                }
            }else{
                echo "<tr><td>No hay productos registrados</td></tr>";
            }
        </table>
    </body>
</html>