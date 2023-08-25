<?php
    //$base_url="https://www.igp.gob.pe/informacion-institucional/";
    //$base_url="http://localhost/informacion-institucional/";
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
            <span>Formatos</span>
        </li>
    </ul>
    

@endsection


@section('content')


    <div class="container">
         <div class="row">
            <a name="acercade"></a> 
          <div class="col-sm-8 acercaDe" >
                <h1 class="ds-titulo">1. Formatos</h1> 
         
<!--                
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
      <a class="nav-link active" href="https://www.igp.gob.pe/informacion-institucional/seguridad_salud_trabajo/formatos/fscovid19/public/" target="_blank">FICHA DE SINTOMATOLOGÍA COVID-19</a>
  </li>
</ul>
-->                
                <table class="table table-bordered ">
                    <thead>
                        <tr style="background-color: #F0F0F0">
                          <th width="5">#</th>
                          <th></th>
                          <th width="5"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>1</td>
                          <td>FICHA DE SINTOMATOLOGÍA COVID-19</td>
                                  <td><a href="https://www.igp.gob.pe/informacion-institucional/seguridad_salud_trabajo/formatos/fscovid19/public/" target="_blank" >
                                          <img width="30" src="../themes/Mirage/images/ir.png"/>
                                    </a></td>
                        </tr>
                        <!--
                        <tr>
                          <td>2</td>
                          <td>Dejar sin efecto el CCI - RP 081 2019</td>
                          <td><a href="../public/files/sci/1.CUESTIONES-PREVIAS/RP-081_2019_Dejar-sin-efecto-el-CCI.pdf" target="_blank" ><b>Descargar</b></a></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Designación del Secretario General RP-050 2018</td>
                          <td><a href="../public/files/sci/1.CUESTIONES-PREVIAS/RP-050_2018_Designacion-del-Secretario-General.pdf" target="_blank" ><b>Descargar</b></a></td>
                        </tr>                        
                        -->
                    </tbody>
                  </table>
                
                 
          </div>
          <br /> <br />
         <div class="col-sm-3" style="border-left: 2px solid #f0f0f0;">
            
            <h3 class="ds-titulo">En esta sección </h3> 
            <ul class="list-group">
                <li class="list-group-item " style="color: #0200AE;"><b>Formatos</b></li>
              <li class="list-group-item"><a href="./index">Inicio</a></li>             
              
            </ul>
         </div>
    </div> 
    </div>


@endsection

