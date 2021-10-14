<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "practica";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn){
    die("No se pudo conectar: ".mysqli_connect_erro());
} else{
    $nombre = $_POST['nombre'];
    $correo = $_POST['apellido'];
    $pass1 = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    if($pass1 == $pass2){
        $sql = "INSERT INTO usuarios (nombres, apellidos, pass) VALUE ('".$nombre."' , '".$correo."' , '".$pass1."')";
        if(mysqli_query($conn,$sql)){
            header("Location:iniciar.php");
        } else{
            echo "ERROR AL INTRODUCIR LOS DATOS" . mysqli_error($conn);
        }
    } else{
        header("Location:usuario.php");
    }
}
?>