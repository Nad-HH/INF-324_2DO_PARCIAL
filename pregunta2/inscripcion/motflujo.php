<?php
	include "conexion.inc.php";
	if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
	$flujo=$_GET["flujo"];
	$proceso_a=$_GET["proceso"];
	$formulario=$_GET["formulario"];
	$notramite=$_GET["notramite"];
    $si="";
    $no="";
    if(isset($_GET["si"])){
        $si=$_GET["si"];
    }
    if(isset($_GET["no"])){
        $no=$_GET["no"];
    }
	
	echo $notramite;
	echo $proceso_a;
	echo $formulario;
	include "date.inc.php";
	$usuario="";
	if($_SESSION["rol"]=="estudiante"){
		$usuario=$_SESSION["ci"];
	}else{
		$usuario=$_SESSION["rol"];
	}
		
	$sql="UPDATE flujousuario SET fechafin = '".$Date."' WHERE proceso like '".$proceso_a."' and usuario like '".$usuario."'" ;
	echo '<br>';
	echo $sql;
	mysqli_query($conn, $sql);
	
	$sql_2="select s.*, f.procesosiguiente from flujousuario s, flujo f where s.usuario like '".$usuario."' ";
	$sql_2.="and s.proceso like '".$proceso_a."' and s.proceso like f.proceso and s.flujo='".$flujo."' and numerotramite like '$notramite'";
	echo '<br>';
	echo $sql_2;
	$resultado_2=mysqli_query($conn, $sql_2);
	$fila_2=mysqli_fetch_array($resultado_2);
	$procesosiguiente=$fila_2["procesosiguiente"];
	$fechainicio=$fila_2["fechafin"];
	$notramite=$fila_2["numerotramite"];
	$tipo=$fila_2["tipo"];
	echo '<br> proceso      dd';
	echo $procesosiguiente;
	echo '<br>';
	echo $fechainicio;
	echo '<br>';
	echo $notramite;

	if (!isset($procesosiguiente)) {
		echo ' no esta instanciado';
		if(isset($si)||isset($no)){
			if(isset($si)){
				$procesosiguiente=$_GET["psi"];
				echo ' existe si';
			}
			if(isset($no)){
				$procesosiguiente=$_GET["pno"];
				echo ' existe no';
			}

			if ($procesosiguiente==NULL) {
				echo ' no hay proceso siguiente';
				header("Location: bandejaE.php");
			}
			echo $procesosiguiente;
		}else{
			if($tipo=='F'){
				header("Location: bandejaE.php");
			}
		}
	}
	
	include $formulario.".mot.inc.php";
	echo  $formulario.".mot.inc.php";
	
	if (!$procesosiguiente==NULL) {
		echo ' no hay proceso siguiente';
		$sql="select * from flujo where proceso='".$procesosiguiente."'";
		$resultado=mysqli_query($conn, $sql);
		$fila_f=mysqli_fetch_array($resultado);
		$flujo=$fila_f["flujo"];
		$rol=$fila_f["rol"];
		echo '<br>';
		echo $sql;
		echo '<br>';
		echo $flujo;
		echo '<br>';
		echo $rol;
		echo $rol;
		$usuario='';
		if($rol=='Estudiante'){
			$sql="select s.* from flujousuario s, flujo f where f.tipo='I' and s.numerotramite like '$notramite' and f.proceso like s.proceso";
			$resultado=mysqli_query($conn, $sql);
			$fila_f=mysqli_fetch_array($resultado);
			$usuario=$fila_f["usuario"];
			#usuario=$_SESSION["nombre"];
			echo $usuario;
		}else{
			$usuario=$rol;
			echo $usuario;
		}
		$sql="insert into flujousuario (numerotramite,usuario,flujo,proceso,fechainicio) values('".$notramite."','".$usuario."','".$flujo."','".$procesosiguiente."','".$fechainicio."')";
		echo '<br>';
		echo $sql;
		mysqli_query($conn, $sql);
		header("Location: desflujo.php?flujo=".$flujo."&proceso=".$procesosiguiente."&numerotramite=$notramite");
	}else{
		include("rechazar.php");
		header("Location: bandejaE.php");
	}

	#header("Location: desflujo.php?flujo=".$flujo."&proceso=".$procesosiguiente);
?>