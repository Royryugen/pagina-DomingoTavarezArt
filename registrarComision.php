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
                        <h2>Registrar Comision</h2>
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
						/*echo"Form enviado...";*/
						/*Paso 1: Recibiendo los datos*/
						$Nombre = $_POST['txtNombre'];
						$Descripcion = $_POST['txtDescripcion'];
						$Fecha = $_POST['txtFecha'];
						$Precio = $_POST['txtPrecio'];
						
						/*Paso: 2-Validar los datos*/
						if(empty  ($Nombre)){echo"<h1>Indique el Nombre.</h1>";}
						if(empty  ($Descripcion)){echo"<h1>Debe dar un detalle.</h1>";}
						if(empty  ($Fecha)){echo"<h1>Indique la fecha.</h1>";}
						if(empty  ($Precio)){echo"<h1>Indique el Precio.</h1>";}
						
						
							
							/*Paso: 3-Nos conectamos a MySQL*/

							if(  (!empty($Nombre)) && (!empty($Descripcion)) && (!empty($Fecha)) && (!empty($Precio)) ){
								//echo"<h1>Puedes conectarte y registrar</h1>";
								/*DATOS DE SERVIDOR*/
								$Servidor	="localhost";
								$UserDB		="root";
								$ClaveDB	="";
								$DB			="db_comisiones";
							$Con = mysqli_connect($Servidor,$UserDB,$ClaveDB,$DB) or die("Ha ocurrido un error con el Servidor o la DB");
							
							/*Paso 4:-Insertar en nuestra DB*/
							$Insertar="
								INSERT INTO Comisiones 
									(nombre,descripcion,Fecha,Precio)
								VALUES
									('$Nombre', '$Descripcion', '$Fecha' ,'$Precio')
								";
								
							if(mysqli_query($Con,$Insertar)){
								echo"<h1>Pedido registrado, Felicidades! <a href='Contactos.php'>Pedir otro.</a></h1>";
							}else{
								echo"<h1>Lo sentimos, ha fallado el registro. Intente nuevamente.</a></h1>";
							}
							
						}else{
							echo"<h1>Faltan campos por llenar o completar..</h1>";
						}
						
					}
					/*else
					{
						echo"<h1>No hay datos para procesar.</h1>";
					}*/
				?>
				
                </div>
            </div>
        </div>
    </div>
<!--Fin del contenido-->
<?php
	include_once("Footer.php");
?>