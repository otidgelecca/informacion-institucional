<?php
    $base_url="https://www.igp.gob.pe/informacion-institucional/";
    //$base_url="http://localhost/informacion-institucional/";
?>

@extends('layout')

@section('content')
<a class="hidden" href="/htmlmap"> </a>

<div>
     <ul class="breadcrumb container">
      <li><a href="http://portal.igp.gob.pe" target="_blank"><span class="fas fa-home"> </span>&nbsp;Portal IGP</a></li>
      <li><a href="<?php echo $base_url; ?>index">Información Institucional</a></li>
      <li>Sistema de Control Interno</li>
    </ul>    
</div>


<div  >
    <div class="container">
         <div class="row">
            <a name="acercade"></a> 
          <div class="col-sm-8 acercaDe" >
                <h1 class="ds-titulo">1. Cuestiones Previas</h1> 
                
                <table class="table table-bordered ">
                    <thead>
                        <tr style="background-color: #F0F0F0">
                          <th width="5">#</th>
                          <th>Nombre del archivo</th>
                          <th width="5"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>1</td>
                          <td>Conformacion del Grupo de Trabajo del SCI - RP 082 2019 </td>
                          <td><a href="<?php echo $base_url; ?>public/files/sci/1.CUESTIONES-PREVIAS/RP-082_2019_Conformacion-del-Grupo-de-Trabajo-del-SCI.pdf" target="_blank" style="color:#0071b8"><b>Descargar</b></a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Dejar sin efecto el CCI - RP 081 2019</td>
                          <td><a href="<?php echo $base_url; ?>public/files/sci/1.CUESTIONES-PREVIAS/RP-081_2019_Dejar-sin-efecto-el-CCI.pdf" target="_blank" style="color:#0071b8"><b>Descargar</b></a></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Designación del Secretario General RP-050 2018</td>
                          <td><a href="<?php echo $base_url; ?>public/files/sci/1.CUESTIONES-PREVIAS/RP-050_2018_Designacion-del-Secretario-General.pdf" target="_blank" style="color:#0071b8"><b>Descargar</b></a></td>
                        </tr>                        
                    </tbody>
                  </table>
                
                 <br />
                 <h3 class="ds-titulo" >1.1 Normatividad</h3>                 
                 <div >
                    <table class="table table-bordered " >
                        <thead>
                            <tr style="background-color: #F0F0F0">
                              <th width="5">#</th>
                              <th>Nombre del archivo</th>
                              <th width="5"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td>1</td>
                              <td>Directiva 006-2019-CG Implementación del SCI</td>
                              <td><a href="<?php echo $base_url; ?>public/files/sci/1.CUESTIONES-PREVIAS/1.1.NORMATIVIDAD/Directiva-006-2019-CG_Implementacion-del-SCI.pdf" target="_blank" style="color:#0071b8"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Opinión Técnica CGR Sobre SCI</td>
                              <td><a href="<?php echo $base_url; ?>public/files/sci/1.CUESTIONES-PREVIAS/1.1.NORMATIVIDAD/OPINION-TECNICA-CGR-SOBRE-SCI.pdf" target="_blank" style="color:#0071b8"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Ley de presupuesto 2019 - (ley 30879)</td>
                              <td><a href="<?php echo $base_url; ?>public/files/sci/1.CUESTIONES-PREVIAS/1.1.NORMATIVIDAD/ley30879_Ley-de-presupuesto-2019.pdf" target="_blank" style="color:#0071b8"><b>Descargar</b></a></td>
                            </tr>                        
                            <tr>
                              <td>4</td>
                              <td>Directiva Control Interno (RCG149 2016)</td>
                              <td><a href="<?php echo $base_url; ?>public/files/sci/1.CUESTIONES-PREVIAS/1.1.NORMATIVIDAD/RCG149_2016_Directiva_Control_Interno.pdf" target="_blank" style="color:#0071b8"><b>Descargar</b></a></td>
                            </tr>                        
                        </tbody>
                     </table>                 
                     </div>
                 
                 
          </div>
          <br /> <br />
         <div class="col-sm-3" style="border-left: 2px solid #f0f0f0;">
            
            <h3 class="ds-titulo">En esta sección </h3> 
            <ul class="list-group">
                <li class="list-group-item" style="color: #0071b8;"><b>Cuestiones Previas</b></li>
              <li class="list-group-item"><a href="<?php echo $base_url; ?>sistema-control-interno/diagnostico">Diagnóstico del SCI 2019</a></li>             
              <li class="list-group-item"><a href="<?php echo $base_url; ?>sistema-control-interno/actas">Actas del SCI</a></li>                            
            </ul>
         </div>
    </div> 
    </div>
</div>

@endsection

