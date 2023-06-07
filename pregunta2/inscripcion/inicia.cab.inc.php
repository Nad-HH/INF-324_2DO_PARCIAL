<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$ci=$_SESSION["ci"];
$sql_c="select * from persona where ci='$ci'";
$resultado_c=mysqli_query($conn, $sql_c);
$fila_c=mysqli_fetch_array($resultado_c);
$nombre=$fila_c["paterno"]." ".$fila_c["materno"]." ".$fila_c["nombre"];

$sql_TRAMITE="select * from tramite where ci ='$ci'";
$res=mysqli_query($conn, $sql_TRAMITE);
$fila_t=mysqli_fetch_array($res);
$notramite=$fila_t["numerotramite"];

?>