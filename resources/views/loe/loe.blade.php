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
            <span>Lineamientos de Organizacion del Estado</span>
        </li>
    </ul>

@endsection


@section('content')

<div  >
    <div class="container">
         <div class="row">
            <a name="acercade"></a>
          <div class="col-sm-8 acercaDe" style="margin-top: 15px">

            <h1 class="ds-titulo">Lineamientos de Organizacion del Estado</h1>

            <div style="padding-left: 50px; margin-bottom: 50px">
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
                              <td> Resolución Gerencia General 0058_2021 <br>Creación Unidad Funcional Astronomía y Planetario </td>
                              <td><a href="../public/files/loe/0058_2021-Unidad-Funcional-Astronomía-Planetario.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Resolución de Presidencia 0041_2021 <br>Creación Unidad Funcional de Comunicaciones </td>
                              <td><a href="../public/files/loe/respre0041_2021-Unidad-Funcional-Comunicaciones.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Resolución Gerencia General 0033_2019 <br>Creación Unidad Funcional CENSIS</td>
                              <td><a href="../public/files/loe/0033_2019-Unidad-Funcional-CENSIS.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Resolución Gerencia General 0011_2019 <br>Creación Unidad Funcional CENVUL</td>
                              <td><a href="../public/files/loe/0011_2019-Unidad-Funcional-CENVUL.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Resolución Gerencia General 007_2020 <br>Creación Unidad Funcional de Integridad Institucional</td>
                              <td><a href="../public/files/loe/007_2020-Unidad-Funcional-Integridad-Institucional.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>

                        </tbody>
                    </table>

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

@section('menu1')
    style="display: none;"
@endsection
