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
                <h1 class="ds-titulo">Base Legal</h1> 
                
                <div style="padding-left: 50px">
                    <table class="table table-bordered">
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
                              <td>Ley del Código de Ética de la Función Pública</td> 
                              <td><a href="../public/files/pilcc/5-Ley27815.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Decreto Legislativo N° 1327, que establece medidas de protección para el denunciante de actos de corrupción y sanciona las denuncias realizadas de mala fe</td>
                              <td><a href="../public/files/pilcc/6-D.L.1327-MEDIDAS-DE-PROTECCION-DENUNCIANTE.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Reglamento del Código de Ética​ de la Función Pública</td>
                              <td><a href="../public/files/pilcc/7-DS033-2005-PCM.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Reglamento del D.L N° 1327</td>
                              <td><a href="../public/files/pilcc/8-REGLAMENTO-DL1327-PROTECCION-AL-DENUNCIANTE.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>D.S N° 092-2017-PCM, que aprueba la Política Nacional de Integridad y Lucha contra la Corrupción</td>
                              <td><a href="../public/files/pilcc/9-DECRETO-SUPREMO-092-2017-PCM-Política-Nacional-de-Integridad.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>D.S N° 042-2018-PCM, que establece medidas para fortalecer la Integridad Pública y Lucha contra la Corrupción</td>
                              <td><a href="../public/files/pilcc/10-DS-N-042-2018-PCM-Medidas-de-Integridad-Publica.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>7</td>
                              <td>D.S N° 044-2018-PCM, que aprueba el Plan Nacional de Integridad y Lucha contra la Corrupción</td>
                              <td><a href="../public/files/pilcc/11-DS-044-2018-PCM-PLAN-NACIONAL-INTEGRIDAD-2018-2021.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                         </tbody>
                      </table>
                </div>
                 
          </div>
          <br /> <br />
         <div class="col-sm-3" style="border-left: 2px solid #f0f0f0;">
            
            <h3 class="ds-titulo">En esta sección </h3> 
            <ul class="list-group">
              <li class="list-group-item"><a href="documentos">Documentos Internos</a></li>
              <li class="list-group-item" style="color: #0071b8;"><b>Base Legal</b></li>
              <li class="list-group-item"><a href="informes">Informes Semestrales del Año 2018</a></li>              
            </ul>
         </div>
    </div> 
    </div>
</div>


@endsection