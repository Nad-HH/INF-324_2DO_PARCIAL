<html>
	<head>
		<title>Informática</title>
        <link href="estilo1.css" rel="stylesheet" type="text/css" />
	</head>
	<body class="fondoi">
        <?php include "cabecera.inc.php";?>
        <br>
        <div class="alineacion2">
        <div class="centro"> 
            <div class="formulario">
                <form action="verificacion.php" method="GET">
                    <div>
                        <div>
                            <h3>INGRESO AL SISTEMA</h3>
                         
                            <div class="alineacion">  
                                <input type="text" name="usuario" value="" placeholder="Ingresa tu CI" required>
                                <div >
                                    <img src="https://cdn-icons-png.flaticon.com/512/456/456212.png"/> 
                                </div>
                            </div><hr>
                        </div> 
                        <div >
                            <div class="alineacion">

                                <input type="password" name="contrasenia" value="" placeholder="Password" required>
                                <div>
                                    <img src="data:image/png;base64,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"/> 
                                </div>
                            </div><hr>
                        </div>
                        <br>
                        <button type="submit" class="boton1">
                        Acceder
                        </button>
                    </div>
                </form>     
            </div>
        </div> <br>
        <div class="centro"> 
            <img src="https://lanotapositiva.com/wp-content/uploads/2019/12/andiaso-hoasmdas.jpg"/> <br>
            <div class="formulario">
            Nos complace recibirte en el 
            sistema de registro en línea para la carrera de informática 
                
            </div>
        </div>
        </div> <br>
    

    </body>
</html>





