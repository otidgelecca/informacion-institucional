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
              Productos Priorizados 2019
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
                          <td>Identificar los productos 2019 entregable 3</td>
                          <td><a href="../public/files/sci/2-Eje-Gestion-de-Riesgos/1_Priorizacion-de-Productos_2019_entregable-3/Identificar-los-Productos-2019_entregable-3.pdf" target="_blank"><b>Descargar</b></a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Priorización de Productos 2019 entregable 3</td>
                          <td><a href="../public/files/sci/2-Eje-Gestion-de-Riesgos/1_Priorizacion-de-Productos_2019_entregable-3/Priorizacion-de-Productos-2019_entregable-3.pdf" target="_blank"><b>Descargar</b></a></td>
                        </tr>
                    </tbody>
                  </table>
                </div>
                
              
              
              
              
          </div>
        </div>
</div>
<div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              Productos Priorizados 2020
            </button>
          </h5>
        </div>

        <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordion">
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
                          <td>Identificar los productos entregable 4</td>
                          <td><a href="../public/files/sci/2-Eje-Gestion-de-Riesgos/2_Priorizacion-de-Productos_2020_entregable-4/Identificacion-de-Productos_2020_entregable-4.pdf" target="_blank"><b>Descargar</b></a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Priorización de Productos entregable 4</td>
                          <td><a href="../public/files/sci/2-Eje-Gestion-de-Riesgos/2_Priorizacion-de-Productos_2020_entregable-4/Priorizacion-de-Productos_2020_entregable-4.pdf" target="_blank"><b>Descargar</b></a></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Identificar los productos entregable 5</td>
                          <td><a href="../public/files/sci/2-Eje-Gestion-de-Riesgos/3_Priorizacion-de-Productos_2020_entregable-5/Indentificar-los-productos_2020_entregable-5.pdf" target="_blank"><b>Descargar</b></a></td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Priorización de Productos entregable 5</td>
                          <td><a href="../public/files/sci/2-Eje-Gestion-de-Riesgos/3_Priorizacion-de-Productos_2020_entregable-5/Priorizar-los-productos_2020_entregable-5.pdf" target="_blank"><b>Descargar</b></a></td>
                        </tr>
			<tr>
                          <td>5</td>
                          <td>Identificar los productos entregable 6</td>
                          <td><a href="../public/files/sci/2-Eje-Gestion-de-Riesgos/10_Priorizacion-de-Productos_2020_entregable-6/Identificar-Productos-2020_entregable-6.pdf" target="_blank"><b>Descargar</b></a></td>
			</tr>
			<tr>
                          <td>6</td>
                          <td>Priorización de Productos entregable 6</td>
                          <td><a href="../public/files/sci/2-Eje-Gestion-de-Riesgos/10_Priorizacion-de-Productos_2020_entregable-6/Priorizacion-de-Productos_2020_entregable-6.pdf" target="_blank"><b>Descargar</b></a></td>
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


@section('activePP')
    style="color: #0200AE;"
@endsection
@section('iconActivePP')
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
