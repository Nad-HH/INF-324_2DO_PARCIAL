<html>
	<head>
		<title>Bandeja de Entrada</title>
        <link href="estilo1.css" rel="stylesheet" type="text/css" />
	</head>
	<body>	
		<?php include "cabecera.inc.php";
		include "date.inc.php";
		?>
		<div class="fecha">
			<div class="fechat">FECHA Y HORA: <?php echo $Date;?> <a class="boton2" href="salir.php">SALIR</a></div> 
			
		</div> <br>
		
		<div class="contenido">
			
				<?php 
				session_start();
				include "conexion.inc.php";
				$ci=$_SESSION["ci"];
				$rol=$_SESSION["rol"];
				if ($rol=='estudiante') {
					include "estudiante.php";
                    #echo 'Estudiante';
				} else {
						if ($rol=='kardex') {
							 include "kardex.php";
                            
						} else {
							echo 'ERROR';
						}
				}
				?>
			
		</div>

	</body>
</html>