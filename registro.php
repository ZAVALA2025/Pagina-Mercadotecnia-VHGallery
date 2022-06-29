<?php
$servername = "localhost";
$database = "bdata";
$username = "root";
$password = "";

$conect = mysqli_connect($servername, $username, $password, $database);

if (!$conect) {
    die("Connection failed: " . mysqli_connect_error());
    echo "Connected successfully";

}

	$nombre= $_POST["nombre"];
	$usuario= $_POST["usuario"];
    $contra= $_POST["contra"];
    $contra2= $_POST["contra2"];

	$insertar="INSERT INTO regdata VALUES ('$nombre','$usuario','$contra','$contra2')";
	$consulta = mysqli_query($conect, $insertar);
        
	if(!$consulta){
        echo "No se pudo guardar el registro";
	}
	else {
		header("Location:login.html");
	}
mysqli_close($conect);

?>