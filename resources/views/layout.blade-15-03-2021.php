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
    <link rel="shortcut icon" href="<?php echo $base_url; ?>themes/Mirage/images/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php echo $base_url; ?>themes/Mirage/images/favicon.ico" />
    
    <!-- 
        CDN de paquete de iconos asociado a otidg4@igp.gob.pe, obtener el kit en: https://fontawesome.com/start 
        También se puede descargar desde: https://fontawesome.com/how-to-use/on-the-web/setup/hosting-font-awesome-yourself 
    -->

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
<style>
.igp-header a{
color: #FFF !important;
}

.igp-trail a{
color: #007bff !important;
}
</style>
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
<!--
                        <li class="li-session">
                            <a href="#!"><i class="fas fa-user">&#160;</i>Iniciar Sesión</a>
                        </li>-->
                    </ul>
                </div>
            </div>

            <nav class="nav-main">
                <div class="container">
                    <ul class="nav-left">
                        <li>
                            <a href=""><img src="https://www.igp.gob.pe/informacion-institucional/themes/igp-static/images/logo-minan.png" alt="" class="logo"/></a>                            
                        </li>
                        <li class="dp-small">
                            <a href="dp-small"><img src="https://www.igp.gob.pe/informacion-institucional/themes/igp-static/images/logo_igp_small.png" alt="" class="logo logo-igp"></a>
                        </li>
                        <li class="dp-normal">
                            <a href=""><img src="https://www.igp.gob.pe/informacion-institucional/themes/igp-static/images/logo_igp_normal.png" alt="" class="logo logo-igp"></a>
                        </li>
                    </ul>
                   
                    <nav class="nav-right">
                        <span class="btn-nav fas fa-ellipsis-v" onclick="actionTopbar()"></span>
                        <!--<ul class="">
                            <li class="active"><a href="">Inicio</a></li>
                        </ul>-->
                    </nav>                    
                </div>
            </nav>
        </div>
    </header>
    
<!-- qwe -->

    <div class="igp-trail">
        @yield('nav')
        
    </div>
    
    
    <main>
        
        <div class="container">
            
            
            <div class="row">
            
                <div @yield('classContenido') >
                
                    @yield('content')
                    
                </div>
                <div @yield('classMenu') >

             
<style>
    .nav-link[data-toggle].collapsed:before {
        content: " ";
    }
    .nav-link[data-toggle]:not(.collapsed):before {
        content: " ";
    }
    
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    display: block;
    margin-left: auto;
    margin-right: auto
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 75%;
    //max-width: 75%;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

.out {
  animation-name: zoom-out;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(1)}
    to {-webkit-transform:scale(2)}
}

@keyframes zoom {
    from {transform:scale(0.4)}
    to {transform:scale(1)}
}

@keyframes zoom-out {
    from {transform:scale(1)}
    to {transform:scale(0)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}    
</style>            
            
                    <div class="container-fluid" @yield('menu1')>
                        <div class="row">
                            <div class="col-2 collapse show d-md-flex pt-2 pl-0 min-vh-100" id="sidebar">
                                <ul class="nav flex-column flex-nowrap overflow-hidden list-group-item">
                                    <li class="nav-item" >
                                        <a class="nav-link text-truncate " @yield('activeTL') href="./timeline"> @yield('iconActiveTL') <span class="d-none d-sm-inline "> Línea de Tiempo</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-truncate" href="#"> <span class="d-none d-sm-inline"><b>Eje Cultural Organizacional</b></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsed text-truncate" @yield('activeDA') href="./diagnostico" >&nbsp;&nbsp; @yield('iconActiveDA') <span class="d-none d-sm-inline">&nbsp;Diagnóstico</span></a>                   
                                        <a class="nav-link collapsed text-truncate" @yield('activePL') href="./plan-accion-remediacion" >&nbsp;&nbsp; @yield('iconActivePL')<span class="d-none d-sm-inline">&nbsp;Plan de Acción-Remediación</span></a>                   
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-truncate" href="#"> <span class="d-none d-sm-inline"><b>Eje Gestión de Riesgos</b></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsed text-truncate" @yield('activePP') href="./priorizacion" >&nbsp;&nbsp; @yield('iconActivePP')<span class="d-none d-sm-inline">&nbsp;Priorización de productos</span></a>
                                        <a class="nav-link collapsed text-truncate" @yield('activeER') href="./evaluacion-riesgos" >&nbsp;&nbsp; @yield('iconActiveER')<span class="d-none d-sm-inline">&nbsp;Evaluación de Riesgos</span></a>
                                        <a class="nav-link collapsed text-truncate" @yield('activePAC') href="./plan-accion-control" >&nbsp;&nbsp; @yield('iconActivePAC')<span class="d-none d-sm-inline">&nbsp;Plan de Acción-Control</span></a>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-truncate" href="#"> <span class="d-none d-sm-inline"><b>Eje Supervisión</b></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsed text-truncate" @yield('activeSEP') href="./sep" >&nbsp;&nbsp; @yield('iconActiveSEP')<span class="d-none d-sm-inline">&nbsp;Seguimiento Ejecución Plan</span></a>                    
                                        <a class="nav-link collapsed text-truncate" @yield('activeEAS') href="./eas" >&nbsp;&nbsp; @yield('iconActiveEAS')<span class="d-none d-sm-inline">&nbsp;Evaluación Anual SCI</span></a>                    
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-truncate" href="#"> <span class="d-none d-sm-inline"><b>Comité</b></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsed text-truncate" @yield('activeActas') href="./comite-actas" >&nbsp;&nbsp; @yield('iconActiveActas')<span class="d-none d-sm-inline">&nbsp;Actas</span></a>                    
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
             
                    <!--
                    <div class="container-fluid" @yield('menu2') >
                        <div class="row">

                                <h3 class="ds-titulo">En esta sección </h3> 

                                <ul class="nav flex-column flex-nowrap overflow-hidden list-group-item">
                                  <li class="nav-item">
                                      <a href="./cp">Cuestiones Previas</a>
                                      <a class="nav-link collapsed text-truncate" @yield('activeCP') href="./cp" >&nbsp;&nbsp; @yield('iconActiveCP')<span class="d-none d-sm-inline">&nbsp;Cuestiones Previas</span></a>                    
                                  </li>
                                  <li class="nav-item"><b>Diagnóstico del SCI 2019</b></li>
                                  <li class="nav-item"><a href="./actas">Actas del SCI</a></li>                            
                                </ul>
                        </div>
                    </div>
                    -->
            
            
                </div>
                    
                    
                    
            </div>
            
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
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!--DATATABLES-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"  crossorigin="anonymous">
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>    
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>    
    
    <script>
    $(document).ready(function() {
        $('#example').DataTable({
            "dom": '<"top">rt<"bottom"p><"clear">',
            
        });
        
    } );


// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}


// When the user clicks on <span> (x), close the modal
modal.onclick = function() {
    img01.className += " out";
    setTimeout(function() {
       modal.style.display = "none";
       img01.className = "modal-content";
     }, 400);
    
 }

    </script>
    <!--DATATABLES-->
    
</body>

</html>