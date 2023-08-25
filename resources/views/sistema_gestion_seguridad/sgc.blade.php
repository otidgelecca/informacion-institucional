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
            <span>Sistema de Gestión de Seguridad</span>
        </li>
    </ul>

@endsection

@section('content')

<div  >
    <div class="container">
         <div class="row">
            <a name="acercade"></a> 
            <div class="col-sm-8 acercaDe" style="margin-top: 15px">
                <h1 class="ds-titulo">Objetivo de la Seguridad de la Información</h1> 
                
<br /><br />

<ul>
<li>1. Proteger la confidencialidad de la información asegurando que sea accesible a entidades o personas debidamente autorizadas.</li>
<li>2. Salvaguardar la integridad de la información para garantizar su exactitud y totalidad, así como sus métodos de procesamiento.</li>
<li>3. Asegurar la disponibilidad de la información sísmica y los sistemas de información que soportan el proceso de su generación, para las entidades y personas autorizadas de acuerdo con los estándares y acuerdos establecidos.</li>
<li>4. Establecer, implementar, mantener y mejorar el sistema de gestión de seguridad de la información del IGP.</li>
<li></li>
</ul>
                <!--
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
                              <td>Resolución Presidencial 88-2020 Aprobar la Política de Seguridad de la Información</td> 
                              <td><a href="../public/files/sistema_gestion_seguridad/RP-088-IGP-2020.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                         </tbody>
                      </table>

                </div>
                -->
          
                <br /> <br />
                <br /> <br />
                <br /> <br />
                <br /> <br />
                <br /> <br />
          </div>
          <br /> <br />
         <div class="col-sm-3" style="border-left: 2px solid #f0f0f0; margin-top: 15px">
            
            <h3 class="ds-titulo">En esta sección </h3> 
            <ul class="list-group">
                <li class="list-group-item"><a href="../sistema-gestion-seguridad/politica">Política</a></li>
                <li class="list-group-item" style="color: #0200AE;"><b>Objetivo</b></li>
            </ul>
         </div>
    </div> 
    </div>
</div>

@endsection

@section('menu1')
    style="display: none;"
@endsection