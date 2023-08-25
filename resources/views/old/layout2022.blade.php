<?php
    //$base_url="https://www.igp.gob.pe/informacion-institucional/";
    $base_url="http://localhost/informacion-institucional/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.igp.gob.pe/informacion-institucional/themes/Mirage/images/favicon.ico" />
    <link rel="apple-touch-icon" href="https://www.igp.gob.pe/informacion-institucional/themes/Mirage/images/favicon.ico" />

    <!-- Primary Meta Tags -->
    <title>Plan Operativo Institucional (POI)</title>
    <meta name="title" content="2021 | Evento">
    <meta name="description" content="2021 | Evento - Devv">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://ultimosismo.igp.gob.pe/">
    <meta property="og:title" content="2021 | Evento">
    <meta property="og:description" content="IGP - Reporte del Último Sismo sentido en el Perú, elaborado por el Instituto Geofísico del Perú">
    <meta property="og:image" content="">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://ultimosismo.igp.gob.pe/">
    <meta property="twitter:title" content="2021 | Evento">
    <meta property="twitter:description" content="IGP - Reporte del Último Sismo sentido en el Perú, elaborado por el Instituto Geofísico del Perú">
    <meta property="twitter:image" content="">

    <link rel="stylesheet" href="<?php echo $base_url; ?>themes/igp-2022/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>themes/igp-2022/assets/css/igp.css">


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin=""/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c040ceafd8.js" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>


       <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/20854163.js"></script>
  <!-- End of HubSpot Embed Code -->


  <script type="text/javascript" id="hs-script-loader" async defer src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <style>
        .hidden {
            display:none;
        }

    </style>

</head>
<body>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?php echo $base_url; ?>themes/igp-2022/resources/img/logo_minam.png" height="40" class="d-inline-block align-top logos" alt="Logo Minam" loading="lazy">
                <img src="<?php echo $base_url; ?>themes/igp-2022/resources/img/logo_igp_small.png" height="40" class="d-inline align-top d-xl-none d-lg-none d-inline-block" alt="Logo Minam" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <img src="<?php echo $base_url; ?>themes/igp-2022/resources/img/logo_igp_normal.png" height="40" class="align-top d-xl-block d-lg-block d-md-none d-sm-none d-none logos" alt="LOGO IGP" loading="lazy">
            </div>


        </div>
      </nav>

      <!-- CONTENT -->
        <div class="section_light2 s_breadcrumb">
            <div class="container">
                @yield('nav')
            </div>
        </div>
    <style>
        .g_info div a::before {
            content: url(https://www.igp.gob.pe/institucional/img/browser.d5cca16a.svg);
            padding-right: 10px;
        }
        .g_info {
            padding-top: 10px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 20px;
            padding-bottom: 20px;
        }

        .g_info div {
            background: #f1f3f4;
            padding: 10px;
            border-radius: 10px;
            width: 100%;
        }
        .g_info div a {
            color: #211d18;
        }
    </style>
        <div class="pt-5 pb-5  ">
            <div class="carousel-inner ">
                <div class="carousel-item active ">
                    <div class="d-flex flex-column h-100 align-items-center justify-content-center ">

                        <div @yield('classContenido') >

                            @yield('content')

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <script>
        $(document).ready(function () {
            $('.table').DataTable({
                pageLength: 5,
                dom: '<"top">rt<"bottom"p><"clear">',
                order: [[0, 'desc']],
                pagingType: 'full_numbers',
                language: {
                    search:         "Buscar:",
                    lengthMenu:    "Mostrar _MENU_ registros",
                    info:           "Mostrando  _START_ de _END_ de un total de   _TOTAL_ registros",
                    paginate: {
                        first:      "Primero",
                        previous:   "Anterior",
                        next:       "Siguiente",
                        last:       "Último"
                    },
                    aria: {
                        sortAscending:  ": activer pour trier la colonne par ordre croissant",
                        sortDescending: ": activer pour trier la colonne par ordre décroissant"
                    }
                }
            });
        });

        </script>


      <!-- CONTENT END -->

      <footer class="i_section section_dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                    <h3>CONTÁCTENOS</h3>
                    <ul class="ul_footer">
                        <li>Lunes a viernes de 08:30 a 16:30</li>
                        <li>Calle Badajoz Nº 169 Urb. Mayorazgo IV Etapa Ate, Lima 15012 - Perú</li>
                        <li><a href="mailto:comunicaciones@igp.gob.pe?subject=transparencia">comunicaciones@igp.gob.pe</a></li>

                    </ul>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-12 col-12 mt-md-0 mt-sm-5 mt-5">
                    <h3>SOCIAL</h3>
                        <div class="row">
                            <div class="col">
                                <ul class="ul_footer">
                                    <li><a href="https://www.facebook.com/igp.peru" target="_blank"><i class="fab fa-facebook-square fa-lg" aria-hidden="true"></i> Facebook</a></li>
                                    <li><a href="https://www.instagram.com/igp.peru" target="_blank"><i class="fab fa-instagram-square fa-lg" aria-hidden="true"></i> Instagram</a></li>
                                    <li><a href="https://www.linkedin.com/company/igpperu/" target="_blank"><i class="fab fa-linkedin fa-lg" aria-hidden="true"></i> Linkedin</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="ul_footer">
                                    <li><a href="https://twitter.com/igp_peru" target="_blank"><i class="fab fa-twitter-square fa-lg" aria-hidden="true"></i> Twitter</a></li>
                                    <li><a href="https://www.youtube.com/igp_videos" target="_blank"><i class="fab fa-youtube-square fa-lg" aria-hidden="true"></i> YouTube</a></li>
                                    <li><a href="https://www.flickr.com/people/156092703@N08/" target="_blank"><i class="fab fa-flickr fa-lg" aria-hidden="true"></i> Flick</a></li>
                                </ul>
                            </div>
                        </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-12 mt-md-0 mt-sm-5 mt-5">
                    <img style="width: 180px;" src="https://www.igp.gob.pe/institucional/siempre-con-el-pueblo.png" alt="Siempre con el pueblo" data-v-36e7ebf3="" data-v-3b4e872d-s="">
                </div>
            </div>
        </div>
      </footer>


    </body>
</html>
