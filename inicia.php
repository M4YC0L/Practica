<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "practica";

session_start();
//Conexion a Base de Datos
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//Verificar Conexion
if(!$conn){
    die("No se pudo conectar: ".mysqli_connect_erro());
} else{

$nombre = $_POST['nombre'];
$pass = $_POST['pass'];

$sql = "SELECT COUNT(*) as contar FROM usuarios WHERE nombres ='$nombre' AND pass ='$pass'";

$resultado = mysqli_query($conn,$sql);
$cadena = mysqli_fetch_array($resultado);

if($cadena['contar'] > 0){
    $_SESSION['uss'] = $nombre;
    header("Location: menu.php");
} else{
//Datos Incorrectos
header("Location: iniciar.php");
}
}
?>