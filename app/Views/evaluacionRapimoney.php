<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rapimoney | agilizamos tus finanzas.</title>

  <!-- SEO -->
  <link rel="canonical" href="https://rapimoney.pe/" />
  <meta property="og:locale" content="es_ES" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Rapimoney | agilizamos tus finanzas." />
  <meta property="og:url" content="https://rapimoney.pe/" />
  <meta property="og:site_name" content="Rapimoney" />

  <!-- FAVICON -->
  <link rel="shortcut icon" href="<?php echo base_url('/public/favicon.ico') ?>" type="image/x-icon">

  <!-- NORMALIZE -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/normalize.css') ?>">

  <!-- BULMA CSS -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/bulma css/bulma.min.css') ?>">

  <!-- FONTAWESOME -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/fontawesome/all.min.css') ?>">

  <!-- CSS OF GILDER.JS -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/glider/glider.min.css') ?>">

  <!-- CSS OF GILDER.JS
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css"> -->

  <!-- OWN STYLES -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/style.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/navbar.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/calculadora.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/patrocinador.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/carousel-operaciones.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/operaciones.css') ?>">
  <!-- <link rel="stylesheet" href="<?php #echo base_url('/assets/style/components-css/testimonios.css') ?>"> -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/carousel-testimonios.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/respaldos.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/footer.css') ?>">

  <!-- OWN  RESPONSIVE  STYLES  -->
  <!-- <link rel="stylesheet" href="<?php #echo base_url('/assets/style/responsive/beneficio-sponsor.css') ?>"> -->
  <link rel="stylesheet"
    href="<?php echo base_url('/assets/style/responsive/operaciones que pudieron ser tuyas.css') ?>">
  <link rel="stylesheet"
    href="<?php echo base_url('/assets/style/responsive/nuestros-respaldos-contactos-horario-legal.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/responsive/funciones-rapimoney.css') ?>">
  <!-- <link rel="stylesheet" href="<?php #echo base_url('/assets/style/responsive/testimonios-clientes.css') ?>"> -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/responsive/navbar-responsive.css') ?>">


  <!-- COMPONENT STYLES -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/rapimoney-title.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/video-rapimoney.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/rapimoney-button.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/rapimoney-service.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/rapimoney-building.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/rapimoney-image-service.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/components-css/social-networks.css') ?>">

    <!-- Meta Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '378832117498493');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=378832117498493&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->


</head>

<body class="has-navbar-fixed-top">

  <!-- HEADER RAPIMONEY -->
  <header>

    <!-- has-navbar-fixed-top
  is-fixed-top -->
    <?=view_cell('App\Libraries\ViewComponents::getViewNavbar')?>

  </header>

  <!-- MAIN RAPIMONEY -->
  <main>

    <!--BENEFIT AND CALCULATOR SECTION-->
    <section class="mt-3 pt-3 beneficio-calculadora seccion-central">

      <!-- RAPIMONEY BENEFIT -->
      <article class="beneficio-calculadora__item content-beneficio-post">
        <div class="container">
          <div class="card-content">

            <div class="content">

              <hr class="linea-beneficio">

              <p class="benefit-rapimoney is-size-5-mobile is-size-4-tablet is-size-2-desktop">Obtén tu préstamo con
                <span class="has-text-weight-bold">evaluación
                  crediticia</span>
                rápido y seguro.
              </p>

            </div>

            <div class="content-post-img">
              <div class="content-image-post-crediticia">
                <img
                  src="<?php echo base_url('/assets/img/page-prestamos/evaluacion-crediticia/img-evaluacion-crediticia.png'); ?>"
                  alt="post-rapimoney">
              </div>
            </div>

          </div>
        </div>
      </article>

      <!--RAPIMONEY CALCULATOR -->
      <article class="beneficio-calculadora__item article-central item-calculadora">
        <div class="media content-calculadora">

          <div class="media-content">

            <div class="content">

              <p
                class="has-text-centered has-text-white has-text-weight-bold is-size-5-mobile is-size-4-tablet is-size-3-desktop">
                <span>VALOR DEL</span>
                <span class="msg-retiro">PRÉSTAMO</span>
              </p>

              <div class="has-text-centered pb-2" id="my-alert"></div>

              <div class="content-monto">
                <label class="lbl-monto">
                  <input class="input input-monto has-text-centered" type="text" id="monto-rapi-credit"
                    placeholder="S/ 0.00" maxlength="10">
                </label>
              </div>

              <div class="mt-3 content-plazo">
                <label class="label-plazo">plazo:</label>

                <div class="content-select-plazo">
                  <select id="quantity-installments" class="select-plazo select" disabled>
                    <option selected value="0">---</option>
                    <!-- <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option> -->

                  </select>
                </div>
              </div>

            </div>

            <!-- onkeypress=" return validate_keydown(event,this) -->

            <div class="content-comision card-content">

              <div class="content">

                <div class="control">
                  <p class="has-text-centered has-text-white">Cuota quincenal</p>
                  <div class="content-input-comision">
                    <label class="lbl-input">
                      <input class="input input-comision has-text-centered" type="text" id="cuota-quincenal"
                        placeholder="S/ 0.00" readonly>
                    </label>
                  </div>
                </div>
              </div>

              <div class="content">
                <div class="control">
                  <p class="has-text-centered has-text-white">Primer pago</p>
                  <div class="content-input-pago">
                    <label class="lbl-input">
                      <input id="primer-pago" class="input input-comision has-text-centered has-text-white" type="text"
                        readonly placeholder="DD/MM/AAAA">
                    </label>
                  </div>
                </div>
              </div>

            </div>

            <div class="card-content">
              <div class="control">
                <div class="content-btn-calculate">

                  <a href="https://forms.gle/MrXEQpvoS8gMUW1i6" target="_blank">
                    <button
                      class="button is-small is-rounded has-text-white  is-fullwidth btn-calculate is-size-6">SOLICITAR
                    </button>
                  </a>

                </div>
              </div>
            </div>

          </div>

        </div>
      </article>

      <article class="fondo-edificio">
        <div class="content-edificio">
          <img class="edificio" src="<?php echo base_url('/assets/img/main/edificio.png'); ?>" alt="edificio">
        </div>
      </article>

    </section>


    <!-- SPONSOR AND VIDEO SECCION -->
    <section class="content-sponsor-video">

      <!-- RAPIMONEY SPONSOR -->
      <article class="nuestro-sponsor">

        <div class="sponsor-desktop">
          <div class="container p-1">
            <p class="has-text-centered has-text-white is-size-7-mobile">
              REGISTRADOS EN
            </p>
          </div>

          <div class="content-patrocinadores content-patrocinadores--logo">
            <div class="item-patrocinador-logo">
              <img class="logo-lima" src="<?php echo base_url('/assets/img/main/sbs-logo.png') ?>"
                alt="registrados en la sbs peru">
            </div>
          </div>
        </div>

      </article>

      <!-- RAPIMONEY VIDEO-->
      <article>
        <div class="content-image-video">
          <figure id="video-rapimoney" class="image">
            <img src="<?php echo base_url('/assets/img/main/image-video-mobil.png') ?>"
              alt="imagen del video rapimoney">

          </figure>
        </div>
      </article>

      <!--MODAL DEL VIDEO -->
      <article>
        <div id="page-modal" class="modal">
          <div class="modal-background"></div>
          <div class="modal-content">
            <!-- CONTENIDO EN EL MODAL! -->
            <div class="content-video-modal">

              <iframe class="video-modal" title="RAPIMONEY S.A.C" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>

            </div>
          </div>
          <button class="modal-close is-large" aria-label="close"></button>
        </div>
      </article>

    </section>

    <!-- RAPIMONEY PROCESS -->
    <section>

      <!--RAPIMONEY FUNCTIONS-->
      <article class="content-funciones-rapimoney">

        <div class="funciona-desktop">
          <div class="content-img-funciona-desktop">
            <img class="img-funciona-desktop"
              src="<?php echo base_url('/assets/img/page-prestamos/evaluacion-crediticia/proceso-evaluacion-rediticia.png') ?>"
              alt="imagen de funcion rapimoney">
          </div>
        </div>


        <div class="slider-funciona-rapimoney">

          <div class="content-title">
            <p class="my-title has-text-centered has-text-weight-bold is-size-6-mobile is-size-5-tablet">
              PROCESO DE PRÉSTAMO CON
              <span class="msg-title">EVALUACIÓN CREDITICIA</span>
            </p>
          </div>


          <div class="carousel">
            <div class="carousel__contenedor">

              <button class="carousel__anterior" arial-label="Anterior">
                <i class="fas fa-chevron-left"></i>
              </button>

              <div class="carousel__lista">

                <div class="carousel__elemento">
                  <img class="carousel__image "
                    src="<?php echo base_url('/assets/img/page-prestamos/evaluacion-crediticia/solicita-prestamo.png') ?>"
                    alt="solicita tu prestamo">
                </div>

                <div class="carousel__elemento">
                  <img class="carousel__image "
                    src="<?php echo base_url('/assets/img/page-prestamos/evaluacion-crediticia/evaluacion-prestamo.png') ?>"
                    alt="evalua tu prestamo">
                </div>

                <div class="carousel__elemento">
                  <img class="carousel__image"
                    src="<?php echo base_url('/assets/img/page-prestamos/evaluacion-crediticia/desembolso-prestamo.png') ?>"
                    alt="desembolsa tu prestamo">
                </div>
              </div>

              <button class="carousel__siguiente" arial-label="Siguiente">
                <i class="fas fa-chevron-right"></i>
              </button>

            </div>

            <div class="carousel__indicadores" role="tablist">
            </div>

            <div class="baner"></div>

          </div>
        </div>

      </article>

      <!-- IMAGE OF THE RAPIMONEY PROCESS-->
      <article>

        <div class="img-proceso-rapimoney">
          <div class="container">
            <div class="content">
              <figure class="image is-3by1">
                <img src="<?php echo base_url('/assets/img/main/proceso-rapimoney.png') ?>" alt="proceso rapimoney">
              </figure>
            </div>
          </div>
        </div>

      </article>

    </section>

    <!--OPERATIONS AND RAPIMONEY TRANSFER -->
    <section class="operaciones-rapimoney">

      <!-- OPERATIONS WITH RAPIMONEY.  -->
      <article class="content-operations">

        <div class="content-title">
          <p
            class="my-title my-title--operations has-text-centered has-text-weight-bold is-size-6-mobile is-size-5-tablet is-size-4-desktop">
            PRESTAMOS QUE
            <span class="title-operaciones__msg">PUDIERON SER TUYOS</span>
          </p>
          <hr class="linea-subtitle linea-subtitle--operations">

        </div>

        <div class="content-img-monto-operaciones py-5 my-5">

          <div class="item-operaciones">
            <div class="content-img-operaciones">
              <img class="img-operaciones"
                src="<?php echo base_url('/assets/img/page-prestamos/evaluacion-crediticia/operacion-evaluacion.png') ?>"
                alt="operaciones rapimoney">
            </div>
          </div>

          <div class="item-operaciones">
            <div class="content-monto-operaciones">
              <div class="card-content">
                <div class="content">
                  <p class="has-text-centered has-text-white is-size-6-mobile is-size-5-tablet is-size-4-desktop">
                    <span class="monto-operaciones">+ S/ 50 000.00</span>
                    Prestamos Realizados
                  </p>

                </div>

                <div class="control">
                  <div class="content-btn-retirar">


                    <a href="https://forms.gle/MrXEQpvoS8gMUW1i6" target="_blank">
                      <button
                        class="button is-small is-rounded has-text-white  is-fullwidth btn-retirar is-size-6">SOLICITAR
                      </button>
                    </a>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>

      </article>


      <!-- TRANSFERS WITH RAPIMONEY -->
      <article class="my-3 pb-4">

        <div class="transferencias-desktop">
          <div class="content-transferencia-desktop">
            <img class="img-tranferencia-desktop"
              src="<?php echo base_url('/assets/img/main/transferencias-desktop.png') ?>" alt="transferencias desktop">
          </div>
        </div>

        <div class="transferencias-mobil">
          <div class="container-transferenciasi my-2">
            <p class="has-text-white has-text-centered  is-size-6-mobile  is-size-5-desktop">
              Transferencias inmediatas </p>
          </div>

          <div class="content-trans--logo">
            <div class="item-trans-logo">
              <img class="logo-bancos"
                src="<?php echo base_url('/assets/img/page-prestamos/evaluacion-crediticia/bcp-interbank-prestamo.png') ?>"
                alt="bancos de transferecia inmediatas">
            </div>
          </div>

          <div class="container-transferenciasi my-2">
            <p class="has-text-white has-text-centered  is-size-6-mobile  is-size-5-desktop">
              Transferencias interbancarias</p>
          </div>

          <div class="content-trans--logo">
            <div class="item-trans-logo">
              <img class="logo-bancos"
                src="<?php echo base_url('/assets/img/page-prestamos/evaluacion-crediticia/scotiabank-bbva-prestamo.png') ?>"
                alt="bancos de Transferencias interbancarias">
            </div>
          </div>
        </div>

      </article>

    </section>



    <!--RAPIMONEY SECURITY BACKUPS -->
    <section class="mt-5">

      <article>

        <div class="container-respaldos">
          <p
            class="titulo-respaldos has-text-centered has-text-weight-bold is-size-6-mobile is-size-5-tablet is-size-4-desktop">
            NUESTROS RESPALDOS
          </p>
          <hr class="linea-subtitle-respaldos">
        </div>

        <div class="content-seguridad--logo">
          <div class="item-seguridad-logo">
            <img class="logo-seguridad" src="<?php echo base_url('/assets/img/main/respaldos-rapimoney.png') ?>"
              alt="respaldos rapimoney">
          </div>
        </div>
      </article>
    </section>

    <section>

      <!--REDES SOCIALES -->
      <article>

        <div class="content-redes">

          <!-- https://wa.me/51921434247?text=Hola,%20necesito%20ayuda%20RAPIMONEY -->
          <a href="https://bit.ly/338R45E" target="_blank">
            <img class="redes" src="<?php echo base_url('/assets/img/footer/whatsap.png') ?>" alt="whatasp">
          </a>

        </div>

      </article>

    </section>

  </main>

  <!-- FOOTER! -->
  <?=view_cell('App\Libraries\ViewComponents::getViewFooter')?>



  <!-- GLIDER.JS LIBRARY
  <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script> -->

  <!--GLIDER.JS LIBRARY  -->
  <script src="<?php echo base_url('/assets/glider/glider.min.js') ?>"></script>

  <!-- ICON FONTAWESOME -->
  <!-- <script src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script> -->

  <!-- ICON FONTAWESOME -->
  <script src="<?php echo base_url('/assets/fontawesome/all.min.js') ?>"></script>

  <!-- VENTANA MODAL -->
  <script src="<?php echo base_url('/assets/js/modal-video-evaluacion.js') ?>"></script>

  <!-- SCRIPTS -->
  <script src="<?php echo base_url('/assets/js/carousel.js') ?>"></script>
  <script src="<?php echo base_url('/assets/js/navbar-burger.js') ?>"></script>
  <script src="<?php echo base_url('/assets/js/calculadora-prestamo-crediticia.js') ?>"></script>
  <!-- <script src="<?php #echo base_url('/assets/js/carousel-face.js') ?>"></script> -->
  <script src="<?php echo base_url('/assets/js/responsive/video-rapimoney.js') ?>"></script>


</body>

</html>