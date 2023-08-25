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
            <span>Sistema de Control Interno</span>
        </li>
    </ul>

@endsection

@section('content')


<br>
<div >
    <div id="accordion">

      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Reporte de Funcionarios 2023
            </button>
          </h5>
        </div>

        <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">



                <div >
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
                          <td>Reporte de Registro de funcionarios y Servidores Públicos que Administran o Manejan Fondos Públicos</td>
                          <td><a href="../public/files/sci/1-Eje-Cultura-Organizacional/3_Reporte_funcionarios/Reporte_Registro_SIREC_20JUL23_v1.pdf" target="_blank"><b>Descargar</b></a></td>
                        </tr>
                    </tbody>
                  </table>
                </div>







          </div>
        </div>
      </div>
<div class="card">


        <div id="collapseOne1" class="collapse " aria-labelledby="headingOne1" data-parent="#accordion">
          <div class="card-body">
            <table id="example" class="table table-bordered" style="width:100%" data-page-length='5'>
                <thead>
                    <tr style="background-color: #F0F0F0">
                      <th width="5">#</th>
                      <th>Título</th>
                      <th>Fecha</th>
                      <th width="5"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>1</td>
                      <td>Resolución 077-IGP/2020, que modifica la Resolución de Presidencia N° 040-IGP/2020</td>
                      <td>Lima, 28 Setiembre del 2020	</td>
                      <td><a href="../public/files/csst/acta/RP-077-IGP-2020_CSST.pdf" target="_blank"><b>Descargar</b></a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Designar a los representantes titulares y suplentes del empleador ante el CSST-IGP - Resolución de presidencia No 040-2020-IGP	</td>
                      <td>Lima, 04 mayo de 2020	</td>
                      <td><a href="../public/files/csst/acta/rp040-IGP-2020_CSST.pdf" target="_blank"><b>Descargar</b></a></td>
                    </tr>

                </tbody>
            </table>
          </div>
        </div>
      </div>


    </div>

</div>



          <br /> <br />




@endsection


@section('activeRF')
    style="color: #0200AE;"
@endsection
@section('iconActiveRF')
    <i class="fa  fa-hand-o-right"></i>
@endsection

@section('menu1')
    style="display: block;"
@endsection
@section('menu2')
    style="display: none;"
@endsection
@section('classContenido')
    class="col-sm-8"
@endsection
@section('classMenu')
    class="col-sm-3" style="border-left: 2px solid #f0f0f0; "
@endsection
