<?php     
		if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
		include "conexion.inc.php";
		$sql="select DISTINCT * from flujousuario ";
		$resultado=mysqli_query($conn, $sql);
		$fila=mysqli_fetch_array($resultado);

		$sql="select * from inscripcion ";
		$resultado2=mysqli_query($conn, $sql);
		$inscripcion=mysqli_fetch_array($resultado2);
		
        $sql_n="select concat(paterno,' ',materno,' ',nombre)as nombre from persona where ci='".$_SESSION["ci"]."'";
		$resultado_n=mysqli_query($conn, $sql_n);
		$fila_n=mysqli_fetch_array($resultado_n);
		
        $nombre=$fila_n["nombre"];
		?> 
	<div class ="formulario">
		<div class ="alineacion2">
			<div class ="centro">
				BANDEJA DE KARDEX
				<table>
					<tr><td>CI del usuario</td><td>: <?php echo $_SESSION["ci"]; ?> </td> </tr>
					<tr><td>Nombre Completo</td><td>: <?php echo $nombre; ?></td> </tr>
				</table>
			</div> <br>
			<div class ="centro">
			Postulantes inscritos hasta la fecha:
			<table class="tabla">
			<?php
				if(!empty($inscripcion)){
					echo '<tr><th>CI</th><th>TRAMITE</th>';
				}?>
			</table>
			<div class="fondosc3">
			
			<table style="background: none;"class="tabla">
						<?php
						while($inscripcion)
						{
							echo "<tr>";
							echo "<td>".$inscripcion["ci"]."</td>";
							echo "<td>".$inscripcion["numerotramite"]."</td>";
							echo "</tr>";
							$inscripcion=mysqli_fetch_array($resultado2);
						}	
						?>
						
			</table></div>

			

			</div>
		</div>
	</div> <br>
	<div class="contenedor">
		
		<table class="tabla">
			<?php
				if(!empty($fila)){
					echo '<tr><th>Trámite</th><th>Flujo</th><th>Proceso</th><th>Fecha Inicio</th><th>FechaFin</th></tr>';
				}?>
		</table>
		<div class="fondosc3">
		<table class="tabla">
			<?php
				if(!empty($fila)){
					while($fila)
					{
						echo "<tr>";
						echo "<td>".$fila["numerotramite"]."</td>";
						echo "<td>".$fila["flujo"]."</td>";
						echo "<td>".$fila["proceso"]."</td>";
						echo "<td>".$fila["fechainicio"]."</td>";
						echo "<td>".$fila["fechafin"]."</td>";
						echo "</tr>";
						$fila=mysqli_fetch_array($resultado);
					}
				}else{
					echo 'No existen tramites pendientes';
				}
						
				?>
		</table>
		</div><br>	
	
	</div> 