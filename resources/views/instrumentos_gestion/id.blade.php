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
                
                <h1 class="ds-titulo" >Indicadores de Desempeño</h1>

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
                                  <td>2017</td>
                                  <td><ul>
                                          <li>a. <b><a href="../public/files/instrumentos_gestion/id/indicadores_desempenio_I_semestre_2017.pdf" target="_blank"> Indicador 1er Semestre</a></b></li>
                                          
                                  <td>2016</td>
                                  <td><ul>  
                                            <li>a. <b><a href="../public/files/instrumentos_gestion/id/indicadores_desempenio_I_semestre_2016.pdf" target="_blank">Indicador 1er Semestre</a></b></li>
                                            <li>b. <b><a href="../public/files/instrumentos_gestion/id/indicadores_desempenio_II_semestre_2016.pdf" target="_blank">Indicador 2do Semestre</a></b></li>
                                            </ul></td>
                                </tr>
                                <tr>
                                  <td>2015</td>
                                  <td><ul>
                                          <li>a. <b><a href="../public/files/instrumentos_gestion/id/evaluacion_anual_periodo_2015.pdf" target="_blank">Indicador</a></b></li>
                                          </ul></td>
                                  <td>2014</td>
                                  <td><ul>
                                          <li>a. <b><a href="../public/files/instrumentos_gestion/id/evaluacion_anual_periodo_2014.pdf" target="_blank">Indicador</a></b></li>                                          
                                          </ul></td>
                                </tr>
                                <tr>
                                  <td>2013</td>
                                  <td><ul>
                                          <li>a. <b><a href="../public/files/instrumentos_gestion/id/evaluacion_anual_periodo_2013.pdf" target="_blank">Indicador</a></b></li>
                                          </ul></td>
                                  <td>2012</td>
                                  <td><ul>
                                          <li>a. <b><a href="../public/files/instrumentos_gestion/id/indicadores_contab_2012.pdf" target="_blank">Indicador</a></b></li>                                          
                                          </ul></td>
                                </tr>
                                <tr>
                                  <td>2011</td>
                                  <td><ul>
                                          <li>a. <b><a href="../public/files/instrumentos_gestion/id/indicadores_contab_2011.pdf" target="_blank">Indicador</a></b></li>
                                          </ul></td>
                                  <td>2010</td>
                                  <td><ul>
                                          <li>a. <b><a href="../public/files/instrumentos_gestion/id/indicadores_contab_1_semestre2010.pdf" target="_blank">Indicador 1er Semestre</a></b></li>                                          
                                          <li>b. <b><a href="../public/files/instrumentos_gestion/id/indicadores_contab_2_semestre2010.pdf" target="_blank">Indicador 2do Semestre</a></b></li>                                          
                                          </ul></td>
                                </tr>
                                <tr>
                                  <td>2009</td>
                                  <td><ul>
                                          <li>a. <b><a href="../public/files/instrumentos_gestion/id/indicadores_contab_2009.pdf" target="_blank">Indicador</a></b></li>
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
              <li class="list-group-item" style="color: #0200AE;"><b>ID</b></li>
            </ul>
         </div>
    </div> 
    </div>


@endsection

@section('menu1')
    style="display: none;"
@endsection