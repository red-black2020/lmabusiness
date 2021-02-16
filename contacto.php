<!DOCTYPE html>
<!--META-START -->
<?php include 'metadata.php';?>
<!--HEADER-END -->
<body>
    <!--PAGE-LOADER-START -->
    <?php include 'page-loader.php';?>
    <!--PAGE-LOADER-END -->
    <div class="page text-center text-md-left">
        <!--HEADER-START -->
        <?php include 'header.php';?>
        <!--HEADER-END -->


        <!--CONTACTO-START-->
        <section class="breadcrumb-classic bg-image" style="background-image: url(&quot;images/contacto/header.png&quot;)">
        <div class="container">
          <div class="row">
            <ul class="list-breadcrumb">
              <li><a href="index.php">Inicio</a></li>
              <li>Contacto
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section class="section-75 section-md-100 section-lg-150">
        <div class="rd-map-wrap">
          <div class="container text-md-left">
            <div class="row row-40">
              <div class="col-md-6 col-xl-5 col-xxl-5">
                <h1>Cont&aacute;ctenos</h1>
                <h6 class="offset-md-top-35">Si se encuentra por nuestras oficinas, le invitamos a visitarnos en la sucursal</h6><span class="small text-spacing-340 text-uppercase text-regular offset-top-40 offset-md-top-60">Direcci&oacute;n</span>
                <ul class="list offset-top-20 list-lg-middle text-left list-classic">
                  <li>
                    <div class="unit flex-row unit-spacing-md">
                      <div class="unit-left"><span class="icon icon-primary fa-map-marker"></span></div>
                      <div class="unit-body">
                        <h6><a class="text-darker" href="#">9863 - 9867 Mill Road, Cambridge, MG09 99HT</a></h6>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit flex-row unit-spacing-md">
                      <div class="unit-left"><span class="icon icon-primary fa-phone"></span></div>
                      <div class="unit-body">
                        <h6><a class="text-darker" href="tel:#">+1 800 603 6035</a></h6>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit flex-row unit-spacing-md">
                      <div class="unit-left"><span class="icon icon-primary fa-envelope"></span></div>
                      <div class="unit-body">
                        <h6><a class="text-primary" href="mailto:#">mail@demolink.org</a></h6>
                      </div>
                    </div>
                  </li>
                </ul>

              </div>
              <div class="col-md-6 offset-xl-1 col-xl-5 offset-xxl-2 col-xxl-6 position-static">
                <div class="google-map-container" data-zoom="5" data-center="6036 Richmond hwy., Alexandria, VA, 2230" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#46bcec&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]">
                  <div class="google-map"></div>
                  <ul class="google-map-markers">
                    <li data-location="6036 Richmond hwy., Alexandria, VA, 2230" data-description="6036 Richmond hwy., Alexandria, VA, 2230"></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-50 section-md-75 section-md-100 section-lg-120 section-xl-150 bg-wild-sand">
        <div class="container text-left">
          <h2><span class="small">Cont&aacute;ctanos</span> Rellene el formulario con sus inquietudes o cotizaci&oacute;n </h2>
          <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/form-to-email.php">
            <div class="row row-20 offset-top-40 offset-md-top-60">
              <div class="col-xl-4 col-lg-6">
                <div class="form-wrap postfix-xl-right-40">
                  <label class="form-label" for="contact-name">Nombre *</label>
                  <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                </div>
                <div class="form-wrap postfix-xl-right-40">
                  <label class="form-label" for="contact-email">Correo electr&oacute;nico *</label>
                  <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                </div>
              </div>
              <div class="col-xl-4 col-lg-6">
                <div class="form-wrap postfix-xl-right-40">
                  <label class="form-label" for="contact-company">Compa&ntilde;&iacute;a *</label>
                  <input class="form-input" id="contact-company" type="text" name="company" data-constraints="@Required">
                </div>
                <div class="form-wrap postfix-xl-right-40">
                  <label class="form-label" for="contact-subject">Motivo *</label>
                  <input class="form-input" id="contact-subject" type="text" name="subject" data-constraints="@Required">
                </div>
              </div>
              <div class="col-xl-4">
                <div class="form-wrap postfix-xl-right-40">
                  <label class="form-label" for="contact-message">Mensaje *</label>
                  <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                </div>
              </div>
            </div>
            <button class="btn btn-form btn-default" type="submit">Enviar</button>
          </form>
        </div>
      </section>
      <section class="section-50 section-sm-75"></section>
        <!--CONTACTO-END-->



        <!--FOOTER-START -->
        <?php include 'footer.php';?>
        <!--FOOTER-END -->
        </div>
        <div class="snackbars" id="form-output-global"></div>
    </div>
    <!--SCRIPTS-START -->
    <?php include 'scripts.php';?>
    <!--SCRIPTS-END -->
  </body>
</html>