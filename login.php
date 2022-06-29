<?php
$usuario = $_POST['usuario'];
$contra = $_POST['contra'];
    
$conexion = mysqli_connect("localhost", "root", "", "bdata");
$consulta = "SELECT * FROM regdata WHERE usuario = '$usuario' and contra='$contra'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0){
    header("Location:cuenta.html");
}
else{
    echo "Error al momento de iniciar sesión";
}
mysqli_free_result($resultado);
mysqli_close($conexion);   

?>


