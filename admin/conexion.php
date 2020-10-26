<?php 
include("config.php");
/*


    //MySQLi clásico
    $conn = mysqli_connect(HOST_NAME,USER_NAME,PASS,DB);
    //Manejos de errores
    if(!$conn)
        die("Fallo la conexion la base de datos: ".mysqli_error($conn));
*/
    //mysqli_close($conn);


    //Conexion PDO
    
    try {
        $conn = new PDO("mysql:host=".HOST_NAME.";dbname=".DB, USER_NAME, PASS);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

?>