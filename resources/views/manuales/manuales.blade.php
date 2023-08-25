
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
            <span>Manuales</span>
        </li>
    </ul>

@endsection


@section('content')



<div  >
    <div class="container">
         <div class="row">
            <a name="acercade"></a> 
          <div class="col-sm-8 acercaDe" style="margin-top: 15px; margin-bottom: 50px">

            <h1 class="ds-titulo">Manuales</h1>
                
            <div style="padding-left: 50px"><!--<b>Ley del Código de Ética de la Función Pública - LEY N°27815</b>-->
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
                              <td> Manual Refirma </td>
                              <td><a href="../public/files/manuales/Manual_Refirma.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Manual SIstema de Trámite Documentario </td>
                              <td><a href="../public/files/manuales/Manual_Usuario_Punto_Control.pdf" target="_blank"><b>Descargar</b></a></td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Manual Acceso Remoto AnyDesk</td>
                              <td><a href="../public/files/manuales/Manual_Usuario_AnyDesk.pdf" target="_blank"><b>Descargar</b></a></td>
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
              <li class="list-group-item" style="color: #0200AE;"><b>Proceso de Adquisición de bienes, servicios y obras</b></li>              
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