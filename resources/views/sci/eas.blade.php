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
              Evaluación Anual SCI
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
                          <td>Entregable 1 Diagnóstico SCI 2019 (2019_09_20)</td>
                          <td><a href="../public/files/sci/2.DIAGNOSTICO-DEL-SCI-2019/2.1. CUESTIONARIO/2019_09_20_ENTREGABLE 1_DIAGNOSTICO SCI_2019_ESCANEADO.pdf" target="_blank"><b>Descargar</b></a></td>
                        </tr>
			<tr>
                          <td>2</td>
                          <td>Evaluación Anual SCI Entregable 6</td>
                          <td><a href="../public/files/sci/5.EJE-SUPERVISION/Reporte_Evaluacion_Anual_de_la_Implementacion_SCI-2020.pdf" target="_blank"><b>Descargar</b></a></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Constancia de Presentación Entregable 6</td>
                          <td><a href="../public/files/sci/5.EJE-SUPERVISION/Constancia_entrega_Evaluacion-Anual_implementacion-SCI-2020.pdf" target="_blank"><b>Descargar</b></a></td>
                        </tr>

                        <tr>
                          <td>4</td>
                          <td>Constancia de Presentación Entregable 2021</td>
                          <td><a href="../public/files/sci/5.EJE-SUPERVISION/Constancia_entrega_Evaluacion-Anual_implementacion-SCI-2019.pdf" target="_blank"><b>Descargar</b></a></td>
                        </tr>

                        <tr>
                          <td>5</td>
                          <td>REPORTE DE EVALUACIÓN DE LA IMPLEMENTACIÓN DEL SCI - 2022</td>
                          <td><a href="../public/files/sci/5.EJE-SUPERVISION/Reporte de Evaluacion Anual de la Implementacion del SCI 2022.pdf" target="_blank"><b>Descargar</b></a></td>
                        </tr>
			            <tr>
                            <td>6</td>
                            <td>Reporte de Evaluacion Semestral de la Implementacion del SCI 2023</td>
                            <td><a href="../public/files/sci/5.EJE-SUPERVISION/Evaluacion-SCI/Reporte-Evaluacion-Semestral-Implementacion-SCI_2023.pdf" target="_blank"><b>Descargar</b></a></td>
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


@section('activeEAS')
    style="color: #0200AE;"
@endsection
@section('iconActiveEAS')
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
