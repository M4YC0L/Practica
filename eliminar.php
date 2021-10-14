<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "practica";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$nm = $_GET['nm'];


$sql="DELETE FROM registro WHERE id='$nm' ";

if(mysqli_query($conn,$sql)){
    header("Location:menu.php");
}else {
    echo "ERROR AL BORRAR EL DATO: ".mysqli_error($conn);
}

?>