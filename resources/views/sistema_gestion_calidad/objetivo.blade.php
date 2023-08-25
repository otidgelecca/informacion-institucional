<?php
    //$base_url="https://www.igp.gob.pe/informacion-institucional/";
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
            <span>Sistema de Gestión de Calidad</span>
        </li>
    </ul>

@endsection

@section('content')

<div  >
    <div class="container">
         <div class="row">
            <a name="acercade"></a> 
            <div class="col-sm-8 acercaDe" style="margin-top: 15px">
                <h1 class="ds-titulo">Objetivo de la Calidad</h1> 
                
                <div style="padding-left: 50px; margin-bottom: 50%">
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
                              <td>Resolución Presidencial 090-2020 Modificación de politica y objetivos del SGC</td> 
                              <td><a href="../public/files/sistema_gestion_calidad/respre090_2020_modificacion_de_politica_objetivos_sgc.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Resolución Presidencial 119-2019 Aprobacion de politica y objetivos del SGC</td> 
                              <td><a href="../public/files/sistema_gestion_calidad/respre119_2019_aprobacion_de_politica_objetivos_sgc.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                         </tbody>
                      </table>

                </div>
                 
          </div>
          <br /> <br />
         <div class="col-sm-3" style="border-left: 2px solid #f0f0f0; margin-top: 15px">
            
            <h3 class="ds-titulo">En esta sección </h3> 
            <ul class="list-group">
              <li class="list-group-item" style="color: #0200AE;"><b>Objetivo de la Calidad</b></li>
              <li class="list-group-item"><a href="../sistema-gestion-calidad/politica">Política de la Calidad</a></li>
            </ul>
         </div>
    </div> 
    </div>
</div>

@endsection

@section('menu1')
    style="display: none;"
@endsection