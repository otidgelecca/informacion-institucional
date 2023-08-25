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
              Seguimiento Ejecución Plan
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
                          <td>Reporte del Seguimiento del Plan de Accion Anual SCI</td>
                          <td><a href="../public/files/sci/DIAGNOSTICO-DEL-SCI-2020/Reporte-del-Seguimiento-del-Plan-de-Accion-Anual_SCI.pdf" target="_blank"><b>Descargar</b></a></td>
                        </tr>

                        <tr>
                          <td>2</td>
                          <td>Reporte del Seguimiento del Plan de Accion Anual SCI - 2022</td>
                          <td><a href="../public/files/sci/DIAGNOSTICO-DEL-SCI-2022/Reporte de Seguimiento de la Ejecucion del Plan de Accion Anual - 2022.pdf" target="_blank"><b>Descargar</b></a></td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Reporte de Seguimiento Semestral del Plan de Accion Anual 2023</td>
                            <td><a href="../public/files/sci/DIAGNOSTICO-DEL-SCI-2023/Reporte-Seguimiento-Semestral-Plan-Accion-Anual_2023.pdf" target="_blank"><b>Descargar</b></a></td>
                          </tr>

                    </tbody>
                  </table>
                </div>




          </div>
        </div>
      </div>




    </div>

</div>



          <br /> <br />




@endsection


@section('activeSEP')
    style="color: #0200AE;"
@endsection
@section('iconActiveSEP')
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
