<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$observacion=$_GET["ob"];
echo $observacion;
$sql_c="INSERT INTO observacion (notramite, observacion) VALUES ('".$notramite."','".$observacion."') ";
echo $sql_c;
mysqli_query($conn, $sql_c);
?>