<?php
    $base_url="https://www.igp.gob.pe/informacion-institucional/";
?>

@extends('layout')

@section('content')

<div>
     <ul class="breadcrumb container">
      <li><a href="http://portal.igp.gob.pe" target="_blank"><span class="fas fa-home"> </span>&nbsp;Portal IGP</a></li>
      <li><a href="<?php echo $base_url; ?>index">Información Institucional</a></li>
      <li>Plan de Integridad y Lucha Contra la Corrupción del IGP</li>
    </ul>    
</div>


<div  >
    <div class="container">
         <div class="row">
            <a name="acercade"></a> 
          <div class="col-sm-8 acercaDe" >

            <h1 class="ds-titulo">Documentos Internos</h1> 
                
                <div style="padding-left: 50px">
                    <table class="table table-bordered ">
                        <thead>
                            <tr style="background-color: #F0F0F0">
                              <th width="5">#</th>
                              <th>Documento</th>
                              <th width="5"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td>1</td>
                              <td>Plan de Integridad y Lucha contra la Corrupción del IGP 2018-2019</td>
                              <td><a href="<?php echo $base_url; ?>public/files/pilcc/1-Resol-98-IGP-2018-Plan-Integridad.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Plan de Integridad y Lucha Contra la Corrupción del MINAM y sus organismos públicos adscritos 2018-2019</td>
                              <td><a href="<?php echo $base_url; ?>public/files/pilcc/2-RESOLUCION-MINISTERIAL-025-2018-MINAM.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Directiva de atención de denuncias administrativa</td>
                              <td><a href="<?php echo $base_url; ?>public/files/pilcc/3-Directiva-04-2017-DENUNCIAS-ADMINISTRATIVAS-IGP.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Directiva de denuncias de actos de corrupción</td>
                              <td><a href="<?php echo $base_url; ?>public/files/pilcc/4-Directiva-05-2017-ATENCION-ACTOS-DE-CORRUPCION.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Resolución de Presidencia que encarga las funciones y designa los miembros del Grupo de Trabajo de Ética e Integridad Pública del Instituto Geofísico del Perú</td>
                              <td><a href="<?php echo $base_url; ?>public/files/pilcc/RP 220-2018.pdf?i=25102018" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                        </tbody>
                    </table>
                    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                </div>
          </div>
          <br /> <br />
         <div class="col-sm-3" style="border-left: 2px solid #f0f0f0;">
            
            <h3 class="ds-titulo">En esta sección </h3> 
            <ul class="list-group">
              <li class="list-group-item" style="color: #0071b8;"><b>Documentos Internos</b></li>
              <li class="list-group-item"><a href="<?php echo $base_url; ?>plan-nacional-de-integridad-y-lucha-contra-la-corrupcion/base">Base Legal</a></li>
              <li class="list-group-item"><a href="<?php echo $base_url; ?>plan-nacional-de-integridad-y-lucha-contra-la-corrupcion/informes">Informes Semestrales del Año 2018</a></li>              
            </ul>
         </div>
    </div> 
    </div>
</div>

@endsection