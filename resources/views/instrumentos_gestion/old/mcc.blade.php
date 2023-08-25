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

<a class="hidden" href="/htmlmap"> </a>
<style>
.table ul li {  
  margin: 5px;
  
}
</style>

    <div class="container">
         <div class="row">
            <a name="acercade"></a> 
          <div class="col-sm-10 acercaDe" style="margin-top: 15px; margin-bottom: 30px">
                
                <h1 class="ds-titulo" >Manual de Clasificador de Cargos</h1>

                <div >
                <table id="example" class="table row-border" style="width:100%" data-page-length='5'>
                            <thead>
                                <tr style="background-color: #F0F0F0">
                                  <th width="5">Año</th>
                                  <th>Documentos</th>
                                  <th width="5">Año</th>
                                  <th>Documentos</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>2019</td>
                                  <td><ul><li>a. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2019/respre0036_2019.pdf" target="_blank">Resolución de Gerencia General 036 2019 (Norma que aprueba el clasificador de cargos)</a></b></li>
                                          <li>b. <b><a href="../public/files/instrumentos_gestion/mcc/clasificador-gastos-2019.pdf" target="_blank">Clasificador de Cargos</a></b></li>
                                          
                                  <td>2018</td>
                                  <td><ul>  
                                            <li>a. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2018/respre0013_2018.pdf" target="_blank">Resolución de Gerencia General 013 2018</a></b></li>
                                            <li>b. <b><a href="../public/files/instrumentos_gestion/mcc/resger013_2018.pdf" target="_blank">Norma que aprueba el clasificador de cargos</a></b></li>
                                            <li>b. <b><a href="../public/files/instrumentos_gestion/mcc/clasificador-gastos-2018.pdf" target="_blank">Clasificador de Cargos</a></b></li>
                                            </ul></td>
                                </tr>
                                <tr>
                                  <td>2017</td>
                                  <td><ul><li>a. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2017/respre161_2017.pdf" target="_blank">Norma que aprueba el clasificador de cargos Modificado a Agosto</a></b></li>
                                          <li>b. <b><a href="../public/files/instrumentos_gestion/mcc/clasificador-gastos-2017.pdf" target="_blank">Clasificador de Cargos Modificado a Agosto</a></b></li>
                                          <li>c. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2017/respre256_2017.pdf?id=28" target="_blank">Norma que aprueba el clasificador de cargos Modificado a Noviembre</a></b></li>
                                          <li>b. <b><a href="../public/files/instrumentos_gestion/mcc/manual_organizacion_funciones_igp_2017.pdf" target="_blank">Clasificador de Cargos Modificado a Noviembre</a></b></li>
                                          </ul></td>
                                  <td>2015</td>
                                  <td><ul>
                                          <li>a. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2015/respre095_2015.pdf" target="_blank">Norma que aprueba el clasificador de cargos </a></b></li>
                                          <li>b. <b><a href="../public/files/instrumentos_gestion/mcc/clasificador-gastos-2015.pdf" target="_blank">Clasificador de Cargos </a></b></li>
                                          </ul></td>
                                </tr>
                            </tbody>
                          </table>
                </div>
                 
          </div>
          <br /> <br />
         <div class="col-sm-2" style="border-left: 2px solid #f0f0f0; margin-top: 15px">
            
            <h3 class="ds-titulo">En esta sección </h3> 
            <ul class="list-group">
              <li class="list-group-item"><a href="./index">Regresar a Instrumentos de Gestión</a></li>
              <li class="list-group-item" style="color: #0200AE;"><b>MCC</b></li>
            </ul>
         </div>
    </div> 
    </div>


@endsection

@section('menu1')
    style="display: none;"
@endsection