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
            <span>CSST</span>
        </li>
    </ul>

@endsection



@section('content')

    <div class="container">
         <div class="row">
            <a name="acercade"></a> 
          <div class="col-sm-8 acercaDe" >
                
                <h1 class="ds-titulo" >Acta de Instalación</h1>                 

                <div >
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
                                  <td>Designar a los representantes titulares y suplentes del empleador ante el CSST-IGP - Resolución de presidencia No 040-2020-MINAM	</td>
                                  <td>Lima, 04 mayo de 2020	</td>
                                  <td><a href="../public/files/csst/acta/rp040-IGP-2020_CSST.pdf" target="_blank"><b>Descargar</b></a></td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>Acta de instalación CSST 2020</td>
                                  <td>Lima, 07 mayo de 2020	</td>
                                  <td><a href="../public/files/csst/acta/acta_instalacion_CSST.pdf" target="_blank"><b>Descargar</b></a></td>
                                </tr>
                                
                            </tbody>
                          </table>
                </div>
                 
          </div>
          <br /> <br />
         <div class="col-sm-3" style="border-left: 2px solid #f0f0f0;">
            
            <h3 class="ds-titulo">En esta sección </h3> 
            <ul class="list-group">
              <li class="list-group-item"><a href="./index">Regresar a CCST</a></li>
              <li class="list-group-item" style="color: #0200AE;"><b>Acta</b></li>
            </ul>
         </div>
    </div> 
    </div>


@endsection
