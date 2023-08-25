<?php
    $base_url="https://www.igp.gob.pe/informacion-institucional/";
    //$base_url="http://localhost/informacion-institucional/";
?>

﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- 
        CDN de paquete de iconos asociado a otidg4@igp.gob.pe, obtener el kit en: https://fontawesome.com/start 
        También se puede descargar desde: https://fontawesome.com/how-to-use/on-the-web/setup/hosting-font-awesome-yourself 
    -->

    <link rel="shortcut icon" href="<?php echo $base_url; ?>themes/Mirage/images/favicon.png" />
    <link rel="apple-touch-icon" href="<?php echo $base_url; ?>themes/Mirage/images/favicon.png" />
    
    <link href="<?php echo $base_url; ?>themes/igp-static/css/bootstrap.css" rel="stylesheet">    
    <link href="<?php echo $base_url; ?>themes/igp-static/css/grid.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $base_url; ?>themes/igp-static/bootstrap-reboot.css" />
    <link rel="stylesheet" href="<?php echo $base_url; ?>themes/igp-static/igp.css" />
    <link rel="stylesheet" href="<?php echo $base_url; ?>themes/igp-static/item.css" />
    
    
    <!-- ESTILOS PORTAL PROPIOS -->
    

    
    
    
    
    
    
    
    <!-- SCRIPTS INICIALES -->
    <script src="https://kit.fontawesome.com/b2cdd38900.js"></script>
    <script type="text/javascript" src="<?php echo $base_url; ?>themes/igp-static/igp.js"></script>
    <!-- SCRIPT DE GOOGLE ANALYTICS, el ID debe ser obtenido de la propiedad en la cuenta de google, por ejemplo: UA-89323028-2 (ID para las vistas de REGEN) --->
    <!--
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-89323028-2"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-89323028-2');
        </script>
    -->

    
    <title>INFORMACIÓN INSTITUCIONAL | IGP</title>    
</head>

<body>
    <header>
        <div class="igp-header">
            <div class="nav-sec">
                <div class="container">
                    <ul class="nav-social">
                        <span>Síguenos en: </span>
                        <li>
                            <a href="https://www.facebook.com/igp.peru"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/igp_peru"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/igpperu/"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/igp.peru"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/igpperu/"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="https://www.flickr.com/people/156092703@N08/"><i class="fab fa-flickr"></i></a>
                        </li>
                    </ul>
                    <ul class="nav-contact">
                        <li>
                            <a href=""><i class="fas fa-phone">&#160;</i>(511) 3172300</a>
                        </li>
                        <li>
                            <a href="mailto:reci@igp.gob.pe"><span><i class="fas fa-envelope">&#160;</i>comunicaciones@igp.gob.pe</span></a>
                        </li>
                        <li class="li-session">
                            <!--<a href="login.html"><i class="fas fa-user ">&#160;</i>Iniciar Sesión</a>-->
                        </li>
                    </ul>
                </div>
            </div>

            <nav class="nav-main">
                <div class="container">
                    <ul class="nav-left">
                        <li>
                            <a href=""><img src="<?php echo $base_url; ?>themes/igp-static/images/logo-minan.png" alt="" class="logo"/></a>                            
                        </li>
                        <li class="dp-small">
                            <a href="dp-small"><img src="<?php echo $base_url; ?>themes/igp-static/images/logo_igp_small.png" alt="" class="logo logo-igp" /></a>
                        </li>
                        <li class="dp-normal">
                            <a href=""><img src="<?php echo $base_url; ?>themes/igp-static/images/logo_igp_normal.png" alt="" class="logo logo-igp" /></a>
                        </li>
                    </ul>
                   
                    <nav class="nav-right">
                        <span class="btn-nav fas fa-ellipsis-v" onclick="actionTopbar()"></span>
                        <ul class="">
                            
                            <li class="active"><a href="./">Inicio</a></li>
                            <!--
                            <li><a href="">Programas</a></li>
                            <li><a href="">Productos</a></li>
                            <li><a href="">Ayuda</a></li>
                            -->
                        </ul>
                    </nav>                    
                </div>
            </nav>
        </div>
    </header>

    <div class="igp-trail">
        @yield('nav')
    </div>
    
    
    <main>
        
        <div class="container">
            
            @yield('content')
        
        </div>
    </main>
    
    <footer>
    <div class="container footer-content-left">
    <table>
        <tr>
            <td>
                <ul class="footer-contact-left">
                    <li>
                        <div>
                            <p><span class="fa fa-fax" style="padding: 8px"></span>&nbsp;Atención al ciudadano<br>
                            &nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;Lunes a Viernes de 8:30 a 16:30</p><p></p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <p><span class="fa fa-map-marker-alt" style="padding: 8px"></span>&nbsp;Calle Badajoz Nº 169 Urb. Mayorazgo<br>
                            &nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;I Etapa Ate, Lima 15012 - Perú
                            </p><p></p>
                        </div>
                    </li>
                </ul>
            </td>
            <td>

                <ul>
                    <li>
                        <div><p><span class="fa fa-envelope" style="padding: 8px"></span>&nbsp;comunicaciones@igp.gob.pe</p><p></p>
                        </div>
                    </li>
                </ul>
                <ul class="nav-social" style="padding-left: 15%">

                    <li>
                        <a href="https://www.facebook.com/igp.peru"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/igp_peru"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/igpperu/"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/igp.peru"><i class="fab fa-instagram"></i></a>
                    </li> 
                </ul>
            </td>
        </tr>
                </table>
            </div>
            <iframe class="map footer-content-right" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3901.828012758223!2d-76.94633793139629!3d-12.055351713347235!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7ea774b6fa66a3c6!2sInstituto+Geof%C3%ADsico+del+Per%C3%BA!5e0!3m2!1ses-419!2spe!4v1545658855595" width="100%" height="100%" frameborder="0" allowfullscreen="false">&#160;
            </iframe>
    </footer>
    
    <script type="text/javascript" src="<?php echo $base_url; ?>themes/Mirage/lib/js/jquery-3.3.1.js"> </script>
    <script type="text/javascript" src="<?php echo $base_url; ?>themes/Mirage/lib/js/jquery-ui-1.8.15.custom.min.js"> </script>
    <script type="text/javascript" src="<?php echo $base_url; ?>themes/Mirage/lib/js/bootstrap337.min.js"> </script>
    
    <!--DATATABLES-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>    
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>    
    
    <script>
        $( function() {

            $('#example').DataTable({
                /*"order": [[ 0, "desc" ]],*/
                "dom": '<"top">rt<"bottom"p><"clear">',
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                }            
            });


        });  

    </script>
    <!--DATATABLES-->
    
</body>

</html>