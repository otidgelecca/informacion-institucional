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
            <span>Instrumentos de Gestión</span>
        </li>
    </ul>

@endsection

@section('content')

    <div class="container">
         <div class="row">
            <a name="acercade"></a> 
          <div class="col-sm-8 acercaDe" >
                
                <h1 class="ds-titulo" >Organigrama</h1>

                <div >
                <table id="example" class="table table-bordered" style="width:100%" data-page-length='5'>
                            <thead>
                                <tr style="background-color: #F0F0F0">
                                  <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td><a href="../public/files/instrumentos_gestion/organigrama/organigrama_igp.jpg" title="Organigrana IGP" class="fotos" target="_blank"><img width="100%" src="../public/files/instrumentos_gestion/organigrama/organigrama_igp.jpg"></a></td>                                  
                                </tr>
                            </tbody>
                          </table>
                </div>
                 
          </div>
          <br /> <br />
         <div class="col-sm-3" style="border-left: 2px solid #f0f0f0;">
            
            <h3 class="ds-titulo">En esta sección </h3> 
            <ul class="list-group">
              <li class="list-group-item"><a href="./index">Regresar a Instrumentos de Gestión</a></li>
              <li class="list-group-item" style="color: #0200AE;"><b>ORGANIGRAMA</b></li>
            </ul>
         </div>
    </div> 
    </div>


@endsection
