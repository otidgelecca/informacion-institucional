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
                            <td>Primer informe semestral sobre la implementación del Plan de Integridad y Lucha contra la Corrupción del IGP 2018-2019</td>
                            <td><a href="../public/files/pilcc/primer-informe-semestral-plan-de-integridad-y-lucha-contra-la-corrupcion.pdf" target="_blank"><b>Descargas</b></a></td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Segundo informe semestral sobre la implementación del Plan de Integridad y Lucha contra la Corrupción del IGP 2018-2019</td>
                            <td><a href="../public/files/pilcc/segundo-informe-semestral-plan-de-integridad-y-lucha-contra-la-corrupcion.pdf" target="_blank"><b>Descargas</b></a></td>
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
              <li class="list-group-item"><a href="base">Base Legal</a></li>
              <li class="list-group-item" style="color: #0071b8;"><b>Informes Semestrales del Año 2018</b></li>              
            </ul>
         </div>
    </div> 
    </div>
</div>

@endsection