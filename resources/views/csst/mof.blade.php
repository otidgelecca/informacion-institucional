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
          <div class="col-md-10 acercaDe" >
                
                <h1 class="ds-titulo" >Manual de Organización y Funciones</h1>

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
                                  <td><ul><li>a. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_gerencia_general/2019/006_2019.pdf" target="_blank">Resolución de Gerencia General 006</a></b></li>
                                          <li>b. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_gerencia_general/2019/008_2019.pdf" target="_blank">Resolución de Gerencia General 008</a></b></li>
                                          <li>c. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_gerencia_general/2019/0010_2019.pdf" target="_blank">Resolución de Gerencia General 010</a></b></li></ul></td>
                                  <td>2018</td>
                                  <td><ul>  <li>a. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_gerencia_general/2018/014_2018.pdf" target="_blank">Resolución de Gerencia General 014</a></b></li>
                                            <li>a. <b><a href="../public/files/instrumentos_gestion/pap/manual-clasificador-cargos.pdf" target="_blank">Manual de clasificador de cargos</a></b></li>
                                            </ul></td>
                                </tr>
                                <tr>
                                  <td>2014</td>
                                  <td><ul><li>a. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2014/respre426_426727.pdf" target="_blank">Resolución de Presidencia 426 </a></b></li>
                                          <li>b. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2014/respre411_411715.pdf" target="_blank">Resolución de Presidencia 411</a></b></li>
                                          <li>c. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2014/respre394_394531.pdf" target="_blank">Resolución de Presidencia 394 </a></b></li>
                                          <li>d. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2014/respre377_377444.pdf" target="_blank">Resolución de Presidencia 377 </a></b></li>
                                          <li>e. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2014/respre348_348373.pdf" target="_blank">Resolución de Presidencia 348 </a></b></li>
                                          <li>f. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2014/respre302_2014.pdf" target="_blank">Resolución de Presidencia 302 </a></b></li>
                                          <li>g. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2014/respre288_2014.pdf" target="_blank">Resolución de Presidencia 288 </a></b></li>
                                          <li>h. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2014/respre213_213564.pdf" target="_blank">Resolución de Presidencia 213 </a></b></li>
                                          <li>i. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2014/respre0091_091585.pdf" target="_blank">Resolución de Presidencia 091 </a></b></li>
                                          </ul></td>
                                  <td>2013</td>
                                  <td><ul>
                                          <li>a. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2013/respre324_324586.pdf" target="_blank">Resolución de Presidencia 324 </a></b></li>
                                          <li>b. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2013/respre293_2013.pdf" target="_blank">Resolución de Presidencia 293 </a></b></li>
                                          <li>c. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2013/respre287_2013.pdf" target="_blank">Resolución de Presidencia 287 </a></b></li>
                                          <li>d. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2013/respre218_21882.pdf" target="_blank">Resolución de Presidencia 218 </a></b></li>
                                          <li>e. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2013/respre209_2013.pdf" target="_blank">Resolución de Presidencia 209 </a></b></li>
                                          <li>f. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2013/respre177_2013.pdf" target="_blank">Resolución de Presidencia 177 </a></b></li>
                                          <li>g. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2013/respre101_2013.pdf" target="_blank">Resolución de Presidencia 101 </a></b></li>
                                          </ul></td>
                                </tr>
                                <tr>
                                  <td>2012</td>
                                  <td><ul><li>a. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2012/respre117_11730.pdf" target="_blank">Resolución de Presidencia 117</a></b></li>
                                          </ul></td>
                                  <td>Años anteriores</td>
                                  <td><ul>  <li>a. <b><a href="../public/files/instrumentos_gestion/mof/manual_orgnizacion_funciones_igp.pdf" target="_blank">MANUAL DE ORGANIZACIÓN Y FUNCIONES DEL INSTITUTO GEOFÍSICO DEL PERÚ</a></b></li>
                                            <li>a. <b><a href="../public/files/instrumentos_gestion/mof/resol_093_2004.pdf" target="_blank">Resolución de Presidencia 093 2004</a></b></li>
                                            <li>a. <b><a href="../public/files/instrumentos_gestion/mof/resol_presi_manual_organizacion_funciones_igp.pdf" target="_blank">Resolución Presidencial Manual Organización Funciones IGP</a></b></li>
                                            </ul></td>
                                </tr>
                                <tr>
                                  <td>2010</td>
                                  <td><ul><li>a. <b><a href="../public/files/instrumentos_gestion/pap/PAP_2010.pdf" target="_blank">PAP 2010</a></b></li>
                                          </ul></td>
                                  <td>2009</td>
                                  <td><ul>  <li>a. <b><a href="../public/files/instrumentos_gestion/pap/PAP_2009.pdf" target="_blank">PAP 2009</a></b></li>
                                            </ul></td>
                                </tr>
                                <tr>
                                  <td>2008</td>
                                  <td><ul><li>a. <b><a href="../public/files/instrumentos_gestion/pap/PAP_2008.pdf" target="_blank">PAP 2008</a></b></li>
                                          </ul></td>
                                  <td>2007</td>
                                  <td><ul>  <li>a. <b><a href="../public/files/instrumentos_gestion/pap/PAP_2007.pdf" target="_blank">PAP 2007</a></b></li>
                                            </ul></td>
                                </tr>
                                <tr>
                                  <td>2006</td>
                                  <td><ul><li>a. <b><a href="../public/files/instrumentos_gestion/pap/PAP_2006.pdf" target="_blank">PAP 2006</a></b></li>
                                          </ul></td>
                                  <td>2005</td>
                                  <td><ul>  <li>a. <b><a href="../public/files/instrumentos_gestion/pap/PAP_2005.pdf" target="_blank">PAP 2005</a></b></li>
                                            </ul></td>
                                </tr>
                            </tbody>
                          </table>
                </div>
                 
          </div>
          <br /> <br />
         <div class="col-md-2" style="border-left: 2px solid #f0f0f0;">
            
            <h3 class="ds-titulo">En esta sección </h3> 
            <ul class="list-group">
              <li class="list-group-item"><a href="./index">Regresar a Instrumentos de Gestión</a></li>
              <li class="list-group-item" style="color: #0200AE;"><b>MOF</b></li>
            </ul>
         </div>
    </div> 
    </div>


@endsection
