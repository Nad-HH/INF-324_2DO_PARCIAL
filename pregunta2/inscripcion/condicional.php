
<form action="motflujo.php" method="GET">
		<?php
		include $fila['pantalla'].'.inc.php';
		?>
		<div class="alinecion2">
        <br>
		<input type="hidden" value="<?php echo $fila_c["procesoSI"]?>" name="psi"/>
		<input type="hidden" value="<?php echo $fila_c["procesoNO"]?>" name="pno"/>
        <input type="hidden" value="<?php echo $proceso?>" name="proceso"/>
        <input type="hidden" value="<?php echo $notramite?>" name="notramite"/>
        <input type="hidden" value="<?php echo $fila["pantalla"]?>" name="formulario"/>
        <input type="hidden" value="<?php echo $flujo?>" name="flujo"/>
		
			<div> 
			<a style=""href="bandeja.php"class="boton4">&nbsp; &nbsp; Salir &nbsp; &nbsp;</a>
            <input  class="boton4" type="submit" value="Aprobar" name="si"/>
			<input  class="boton4" type="submit" value="Rechazar" name="no"/>
			
			</div>
	   	</div>
	</form>	