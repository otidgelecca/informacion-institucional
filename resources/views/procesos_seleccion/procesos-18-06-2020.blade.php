<?php
    $base_url="https://www.igp.gob.pe/informacion-institucional/";
?>

@extends('layout')

@section('content')

<div>
     <ul class="breadcrumb container">
      <li><a href="http://portal.igp.gob.pe" target="_blank"><span class="fas fa-home"> </span>&nbsp;Portal IGP</a></li>
      <li><a href="<?php echo $base_url; ?>index">Información Institucional</a></li>
      <li>Procesos de Selección</li>
    </ul>    
</div>



<div  >
    <div class="container">
         <div class="row">
            <a name="acercade"></a> 
          <div class="col-sm-8 acercaDe" >

            <h1 class="ds-titulo">Proceso de Adquisición de bienes, servicios y obras</h1> 
                
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
                              <td>LPN Nº 002-2019-FONDECYT/IGP (Primera Convocatoria)</td>
                              <td><a href="<?php echo $base_url; ?>public/files/procesos_seleccion/LPN-002-2019-FONDECYT-IGP-PRIMERA-CONVOCATORIA.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>LPN N° 001-2019 FONDECYT/IGP (Segunda Convocatoria)</td>
                              <td><a href="<?php echo $base_url; ?>public/files/procesos_seleccion/LPN-001-2019-FONDECYT-IGP-SEGUNDA-CONVOCATORIA.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Declaratoria de desierto de la LPN N° 001-2019 FONDECYT/IGP (Primera Convocatoria)</td>
                              <td><a href="<?php echo $base_url; ?>public/files/procesos_seleccion/LPN-001-2019-FONDECYT-IGP-PRIMERA-CONVOCATORIA-DESIERTO.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>LPN N° 001-2019 FONDECYT/IGP (Primera Convocatoria)</td>
                              <td><a href="<?php echo $base_url; ?>public/files/procesos_seleccion/LPN-001-2019-FONDECYT-IGP-PRIMERA-CONVOCATORIA.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                </div>
          </div>
          <br /> <br />
         <div class="col-sm-3" style="border-left: 2px solid #f0f0f0;">
            
            <h3 class="ds-titulo">En esta sección </h3> 
            <ul class="list-group">
              <li class="list-group-item" style="color: #0071b8;"><b>Proceso de Adquisición de bienes, servicios y obras</b></li>              
            </ul>
         </div>
    </div> 
    </div>
</div>

@endsection