<?php
    $base_url="https://www.igp.gob.pe/informacion-institucional/";
?>

@extends('layout')

@section('nav')

    <ul class="container">
        <li>
            <a href="http://www.igp.gob.pe" target="_blank"><span><i class="fas fa-home">&#160;</i>Portal IGP</span></a>
        </li>
        <li>
            <a href="../">Información Institucional</a>
        </li>
        <li class="active">
            <span>Sistema de Control Interno</span>
        </li>
    </ul>

@endsection

@section('content')

<div  >
    <div class="container">
         <div class="row">
            <a name="acercade"></a> 
          <div class="col-sm-8 acercaDe" >
                <h1 class="ds-titulo">3. Plan de trabajo del SCI 2019</h1> 
                <h3 class="ds-titulo" >3.1 Plan de Acción</h3>                 
                
                <div >
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
                          <td>Acta No 001 Acta  de Instalación y anexo - 2019_09_05</td>
                          <td><a href="../public/files/sci/4.ACTAS/Acta-1/2019_09_05_Acta-No-001_Acta-de-Instalacion-y-anexo.pdf" target="_blank"><b>Descargar</b></a></td>
                        </tr>
                    </tbody>
                  </table>                
                </div>
                
                 <br />
                <h3 class="ds-titulo" >3.2 Evidencias</h3> 
                
                <div >
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
                          <td>Acta No 002 Acta de sesión</td>
                          <td><a href="../public/files/sci/4.ACTAS/Acta-2/2019_09_12_Acta-No-002_ Acta-de-sesion.pdf" target="_blank"><b>Descargar</b></a></td>
                        </tr>
                    </tbody>
                  </table>                
                </div>
                 
          </div>
          <br /> <br />
         <div class="col-sm-3" style="border-left: 2px solid #f0f0f0;">
            
            <h3 class="ds-titulo">En esta sección </h3> 
            <ul class="list-group">
              <li class="list-group-item"><a href="./cp">Cuestiones Previas</a></li>
              <li class="list-group-item"><a href="./diagnostico">Diagnóstico del SCI 2019</a></li>
              <!--<li class="list-group-item">Plan de trabajo del SCI 2019</li>-->
              <li class="list-group-item" style="color: #0200AE;"><b>Actas del SCI</b></li>                            
            </ul>
         </div>
    </div> 
    </div>
</div>

@endsection