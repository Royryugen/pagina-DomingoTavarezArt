 
<?php
include_once("Header.php") ;
?>
<!--Inicio del Cuerpo->

<!-- Contactos-->
 <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/retratoC.jpg);">
    <div class="breadcrumbs-custom-inner">
      <div class="container breadcrumbs-custom-container">
        <div class="breadcrumbs-custom-main">
          <h6 class="breadcrumbs-custom-subtitle title-decorated">Contactos</h6>
          <h1 class="breadcrumbs-custom-title">Contactos</h1>
        </div>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.html">Home</a></li>
          <li class="active">Contactos</li>
        </ul>
      </div>
    </div>
  </section>
  <section class="section section-sm">
    <div class="container">
      <div class="layout-bordered">
        <div class="layout-bordered-item wow-outer">
          <div class="layout-bordered-item-inner wow slideInUp">
            <div class="icon icon-lg mdi mdi-phone text-primary"></div>
            <ul class="list-0">
              <li><a class="link-default" href="tel:#">1-829-753-9870</a></li>
              <li><a class="link-default" href="tel:#">1-829-753-9870</a></li>
            </ul>
          </div>
        </div>
        <div class="layout-bordered-item wow-outer">
          <div class="layout-bordered-item-inner wow slideInUp">
            <div class="icon icon-lg mdi mdi-email text-primary"></div><a class="link-default" href="mailto:#">royryugen@gmail.com</a>
          </div>
        </div>
        <div class="layout-bordered-item wow-outer">
          <div class="layout-bordered-item-inner wow slideInUp">
            <div class="icon icon-lg mdi mdi-map-marker text-primary"></div><a class="link-default" href="#">Higuey, La altagracia, Republica Dominicana</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section bg-gray-100">
    <div class="range justify-content-xl-between">
      <div class="cell-xl-6 align-self-center container">
        <div class="row">
          <div class="col-lg-9 cell-inner">
            <div class="section-lg">
              <h3 class="wow-outer"><span class="wow slideInDown">Contactame </span></h3>
             
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="row row-10">
                  <div class="col-md-6 wow-outer">
                    <div class="form-wrap wow fadeSlideInUp">
                      <label class="form-label-outside" for="contact-first-name">Primer nombre</label>
                      <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                    </div>
                  </div>
                  <div class="col-md-6 wow-outer">
                    <div class="form-wrap wow fadeSlideInUp">
                      <label class="form-label-outside" for="contact-last-name">Apellido</label>
                      <input class="form-input" id="contact-last-name" type="text" name="name" data-constraints="@Required">
                    </div>
                  </div>
                  <div class="col-md-6 wow-outer">
                    <div class="form-wrap wow fadeSlideInUp">
                      <label class="form-label-outside" for="contact-email">E-mail</label>
                      <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
                    </div>
                  </div>
                  <div class="col-md-6 wow-outer">
                    <div class="form-wrap wow fadeSlideInUp">
                      <label class="form-label-outside" for="contact-phone">Celular</label>
                      <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Required @PhoneNumber">
                    </div>
                  </div>
                  <div class="col-12 wow-outer">
                    <div class="form-wrap wow fadeSlideInUp">
                      <label class="form-label-outside" for="contact-message">Tu mensaje</label>
                      <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                </div>
                <div class="group group-middle">
                  <div class="wow-outer">
                    <button class="button button-primary button-winona wow slideInRight" type="submit">Enviar mensaje</button>
                  </div>
                  <p>or use</p>
                  <div class="wow-outer"><a class="button button-primary-outline button-icon button-icon-left button-winona wow slideInLeft" href="#"><span class="icon text-primary mdi mdi-facebook-messenger"></span>Messenger</a></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
        </div>
      </div>
    </div>

    <section class="heading">
      <h2> Completa tus datos para ordenar tu comision </h2>
      <form action="registrarComision.php" method="POST">
                        <input class="btn" name="txtNombre" type="txt" placeholder="Nombre de la comision">
                        <input class="btn" name="txtDescripcion" type="txt" placeholder="Describa la comision">
                        <input class="btn" name="txtFecha" type="txt" placeholder="Fecha de entrega comision">
                        <input class="btn" name="txtPrecio" type="Number" placeholder="0.0">
                        <input class="btn btn-primary"  type="submit" value="Registrar" >
</form>
<h2> Completa tus datos para ordenar tu comision (Tu info.) </h2>
      <form action="registrarCliente.php" method="POST">
                        <input class="btn" name="txtNombre" type="txt" placeholder="Tu Nombre">
                        <input class="btn" name="txtEdad" type="txt" placeholder="Tu edad">
                        <input class="btn" name="txtGenero" type="txt" placeholder="Tu Genero">
                        <input class="btn" name="txtSueldo" type="Number" placeholder="0.0">
                        <input class="btn btn-primary"  type="submit" value="Registrar" >
</form>
</section>

    <!--Fin del Cuerpo->
<?php
     include_once("Footer.php") ;
?>

<!-- Footer-->

<footer class="section footer-standard bg-gray-700">
              <section class="footer-standard-main">
                <section class="container">
                  <section class="row row-50">
                    <section class="col-lg-4">
                      <section class="inset-right-1">
                        <h4>Sobre mi</h4>
                        <p>Mi nombre es Domingo Tavarez Y soy un ilustrador y artista digital profesional. Ofrezco mis servicios como Dibujante por todo el mundo para que hagas tus ideas realidad.!</p>
                      </section>
                    </section>
                    <section class="col-sm-6 col-md-5 col-lg-4">
                      <section class="box-1">
                        <h4>Informacion de contacto</h4>
                        <ul class="list-sm">
                          <li class="object-inline"><span class="icon icon-md mdi mdi-map-marker text-gray-700"></span><a class="link-default" href="#">Higuey, La altagracia <br> Republica Dominicana</a></li>
                          <li class="object-inline"><span class="icon icon-md mdi mdi-phone text-gray-700"></span><a class="link-default" href="tel:#">8297539870</a></li>
                          <li class="object-inline"><span class="icon icon-md mdi mdi-email text-gray-700"></span><a class="link-default" href="mailto:#">royryugen@gmail.com</a></li>
                        </ul>
                      </section>
                    </section>
                    <section class="col-sm-6 col-md-7 col-lg-4">
                      <h4>Correo</h4>
                      <p>Sigueme en mi correo electronico para que estes al tanto de todo lo nuevo que voy sacando.</p>
                      
                      <form class="rd-form rd-mailform form-inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                        <section class="form-wrap">
                          <input class="form-input" id="subscribe-form-2-email" type="email" name="email" data-constraints="@Email @Required">
                          <label class="form-label" for="subscribe-form-2-email">E-mail</label>
                        </section>
                        <section class="form-button">
                          <button class="button button-primary button-icon button-icon-only button-winona" type="submit" aria-label="submit"><span class="icon mdi mdi-email-outline"></span></button>
                        </section>
                      </form>
                    </section>
                  </section>
                </section>
              </section>
              <section class="container">
                <section class="footer-standard-aside"><a class="brand" href="index.html"><img src="images/LogoD.png" alt="" width="176" height="28" srcset="images/LogoD.png 2x"/></a>
                  
                  <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Todos los derechos reservados.</span><span>&nbsp;</span><br class="d-sm-none"/>Design&nbsp;by&nbsp;</p>
                </section>
              </section>
            </footer>
    </section>
    <section class="preloader">
      <section class="preloader-logo"><img src="images/LogoD.png" alt="" width="176" height="28" srcset="images/LogoD.png 2x"/>
      </section>
      <section class="preloader-body">
        <section id="loadingProgressG">
          <section class="loadingProgressG" id="loadingProgressG_1"></section>
        </section>
      </section>
    </section>
  
    <section class="snackbars" id="form-output-global"></section>
 
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html> 