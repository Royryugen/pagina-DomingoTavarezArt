<?php
	include_once("Header.php");
?>
<!--Inicio del contenido-->
    <section class="banner_section">
        <section class="banner-main">
            <img src="images/vongola.jpg" />
            <section class="container">

           <section class="text-bg relative">
           <h1>DomingoTavarezArt<br><span class="Perfect">Comisiones</span><br>que ofrezco</h1>
                    <p>Registro de los diferentes comisiones que se ofrecen en esta plataforma digital.
                        <br>. Completa los siguientes datos desees registrar.</p>
                    
                </section>

            </section>
        </section>

    </section>

    <div class="contactbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contacttitlepage">
                        <h2>Registrar Cliente</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class=" col-md-6 offset-md-3">
                <div class="address">

					<?php
						if($_POST)
						{
							//echo"Form enviado";
							/*Paso :1-Recibir los datos*/
							$Nombre	= $_POST['txtNombre'];
							$Edad	= $_POST['txtEdad'];
							$Genero	= $_POST['txtGenero'];
							$Sueldo = $_POST['txtSueldo'];
							
							/*Paso :2-Validar los datos*/
							if(empty ($Nombre)){echo"<h3>Debe escribir el nombre.</h3>";}
							if(empty ($Edad)){echo"<h3>Indique la edad.</h3>";}
							if(empty ($Genero)){echo"<h3>Seleccione Genero.</h3>";}
							if(empty ($Sueldo)){echo"<h3>Indique el sueldo.</h3>";}
							
							/*Paso :3-Nos conectamos a MySQL*/
							
                            if( (!empty($Nombre)) && (!empty ($Edad)) && (!empty ($Genero)) && (!empty ($Sueldo)) ){
								
                               //echo"<h1>Puedes conectarte y registrar</h1>";
								/*DATOS DE SERVIDOR*/
								$Servidor	="localhost";
								$User		="root";
								$Pass		="";
								$DB			="db_comisiones";
								
								$Con = mysqli_connect($Servidor,$User,$Pass,$DB) or die("Error con la DB");
								
								/*Paso 4:-Insertar en nuestra DB*/
								$Insertar="
									INSERT INTO Clientes
										(Nombre,edad,genero,sueldo)
									VALUES
										('$Nombre','$Edad', '$Genero', '$Sueldo')
								";
								
								if (mysqli_query($Con, $Insertar))
								{
									echo"<h3>Datos registrados, Felicidades!. <a href='Contactos.php'> registrar otro.</a>  </h3>";
								}else{
									echo"<h3>Ha fallado el registro.</h3>";
								}
								
								
							}else{
								echo"<h3>Faltan campos por llenar o completar.</h3>";
								
							}
							
							
						}else{
							echo"<h3>No se han recibido datos</h3>";
						}
						
		
						
					?>
					
                </div>
            </div>
        </div>
    </div>
<!--Fin del contenido-->
<?php
	include_once("Footer.php");
?>