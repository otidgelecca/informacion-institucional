<?php
    $base_url="https://www.igp.gob.pe/informacion-institucional/";
?>

@extends('layout')

@section('content')

<div>
     <ul class="breadcrumb container">
      <li><a href="http://portal.igp.gob.pe" target="_blank"><span class="fas fa-home"> </span>&nbsp;Portal IGP</a></li>
      <li><a href="<?php echo $base_url; ?>index">Información Institucional</a></li>
      <li>Política Antisoborno</li>
    </ul>    
</div>


<div  >
    <div class="container">
         <div class="row">
            <a name="acercade"></a> 
          <div class="col-sm-8 acercaDe" >
                <h1 class="ds-titulo">Objetivos</h1> 
                
                <!--<div style="padding-left: 50px">-->
                
                <div>
                    
                    <div style="padding-left: 25px"><b>1.1.General</b></div>
                    <div style="padding-left: 45px">
                        Establecer el compromiso del IGP de establecer, cumplir y mejorar continuamente el Sistema de Gestión Antisoborno -en lo sucesivo SGAS-, 
                        en concordancia con las disposiciones normativas en materia de integridad y lucha contra la corrupción.                     
                    </div>
                    <br />
                    <div style="padding-left: 25px"><b>1.2.Específicos</b></div>
                    <div style="padding-left: 35px">
                        <ul>
                            <li>-Establecer la Política Antisoborno del IGP.</li>
                            <li>-Determinar el alcance de la Política Antisoborno, así como el alcance del SGAS del IGP.</li>
                            <li>-Determinar los objetivos del SGAS del IGP, acordes a su contexto, requisitos y necesidades de sus partes interesadas e identificación de riesgos.</li>
                            <li>-Determinar el alcance del SGAS en el IGP.</li>
                            <li>-Establecer los roles y responsabilidades de las personas que participan en el SGAS del IGP.</li>                    
                        </ul>
                    </div>
                    
                    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                </div>
                 
          </div>
          <br /> <br />
         <div class="col-sm-3" style="border-left: 2px solid #f0f0f0;">
            
            <h3 class="ds-titulo">En esta sección </h3> 
            <ul class="list-group">              
              <li class="list-group-item"><a href="<?php echo $base_url; ?>sistema-gestion-antisoborno/politica">Política</a></li>
              <li class="list-group-item" style="color: #0071b8;"><b>Objetivos</b></li>
            </ul>
         </div>
    </div> 
    </div>
</div>

@endsection