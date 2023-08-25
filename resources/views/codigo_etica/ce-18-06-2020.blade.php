<?php
    $base_url="https://www.igp.gob.pe/informacion-institucional/";
?>

@extends('layout')

@section('content')

<div>
     <ul class="breadcrumb container">
      <li><a href="http://portal.igp.gob.pe" target="_blank"><span class="fas fa-home"> </span>&nbsp;Portal IGP</a></li>
      <li><a href="<?php echo $base_url; ?>index">Información Institucional</a></li>
      <li>C&oacute;digo de &Eacute;tica</li>
    </ul>    
</div>



<div  >
    <div class="container">
         <div class="row">
            <a name="acercade"></a> 
          <div class="col-sm-8 acercaDe" >

            <h1 class="ds-titulo">Código de Ética</h1>
                
            <div style="padding-left: 50px"><b>Ley del Código de Ética de la Función Pública - LEY N°27815</b>
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
                              <td> Ley del Código de Ética N°27815 </td>
                              <td><a href="<?php echo $base_url; ?>public/files/codigo_etica/ley 27815 cod_etica_de_la_funcion_publica.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Reglamento Ley del Código de Ética </td>
                              <td><a href="<?php echo $base_url; ?>public/files/codigo_etica/reglamento_ley_del_codigo_de_etica.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>RESOLUCIÓN MINISTERIAL 050-2009-PCM
                                    Directiva No. 001 -2009-PCM/SGP
                                    Lineamientos para la Promoción del Código de Ética de la Función Pública en las Entidades Públicas por el Poder Ejecutivo</td>
                              <td><a href="<?php echo $base_url; ?>public/files/codigo_etica/RM-050-2009-PCM.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td> 	
                                    RESOLUCIÓN PRESIDENCIAL 026-2015-IGP
                                    Directiva No. 01 -2015-IGP/PE
                                    Código de Ética de la Función Pública en el Instituto Geofísico del Perú - IGP
                              </td>
                              <td><a href="<?php echo $base_url; ?>public/files/codigo_etica/RP-026-2015-IGP.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td> 	
                                    RESOLUCIÓN DE PRESIDENCIA 220-IGP/2018
                                    Designan Grupo de Trabajo de Ética e Integridad Pública del IGP.
                              </td>
                              <td><a href="<?php echo $base_url; ?>public/files/codigo_etica/RP 220-2018.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            
                        </tbody>
                    </table>
                <br /><br /><br /><br /><br /><br /><br />
                </div>
          </div>
          <br /> <br />
          <!--
         <div class="col-sm-3" style="border-left: 2px solid #f0f0f0;">
            
            <h3 class="ds-titulo">En esta sección </h3> 
            <ul class="list-group">
              <li class="list-group-item" style="color: #0071b8;"><b>Proceso de Adquisición de bienes, servicios y obras</b></li>              
            </ul>
         </div>
          -->
    </div> 
    </div>
</div>

@endsection