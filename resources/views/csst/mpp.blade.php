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
                
                <h1 class="ds-titulo" >MPP (Manual Perfiles de Puestos)</h1>

                <div >
                <table id="example" class="table table-bordered" style="width:100%" data-page-length='5'>
                            <thead>
                                <tr style="background-color: #F0F0F0">
                                  <th>2019</th>

                                  <th>2018</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td><a href="../public/files/instrumentos_gestion/mpp/aviso_07032019.pdf" target="_blank"><b>1. Aviso de Sinceramiento</b></a></td>
                                  
                                  <td><ul><li><a href="../public/files/instrumentos_gestion/mpp/resger014_2018.pdf" target="_blank"><b>1. Norma que aprueba los Formatos de Perfil de Puestos</b></a></li><br>
                                          <li><a href="../public/files/instrumentos_gestion/mpp/clasificador-gastos-2018-fichas-estructurales.pdf" target="_blank"><b>2. Formatos de Perfil de Puestos</b></a></li></td>
                                </tr>
                            </tbody>
                          </table>
                    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                </div>
                 
          </div>
          <br /> <br />
         <div class="col-sm-3" style="border-left: 2px solid #f0f0f0;">
            
            <h3 class="ds-titulo">En esta sección </h3> 
            <ul class="list-group">
              <li class="list-group-item"><a href="./index">Regresar a Instrumentos de Gestión</a></li>
              <li class="list-group-item" style="color: #0200AE;"><b>MPP</b></li>
            </ul>
         </div>
    </div> 
    </div>


@endsection
