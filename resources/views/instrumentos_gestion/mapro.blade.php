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
            <span>Instrumento de Gestión</span>
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
                
                <h1 class="ds-titulo" >	Mapro</h1>

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
                                  <td>2022</td>
                                  <td>
									
                <div >
								<a target="_blank" href="../public/files/instrumentos_gestion/mapro/mapa-procesos-igp.png"><b><i class="fa  fa-hand-o-right" aria-hidden="true"></i>Mapa de proceso</b> </a>
                </div >

								</td>
                                </tr>
                                <tr>
                                  <td>2015</td>
                                  <td><ul><li>a. <b><a href="../public/files/instrumentos_gestion/mapro/anexo-01-manual-general-procesos-y-procedimientos-mapro.pdf" target="_blank">Manual de procesos - MAPRO </a></b></li>
                                          <li>b. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2015/respre338_2015.pdf" target="_blank">Resocución Presidencial Nro 338-IGP/2015</a></b></li>
                                          </ul></td>
                                  <td>2008</td>
                                  <td><ul>  <li>a. <b><a href="../public/files/instrumentos_gestion/mapro/aprobacion_resolucion_299_igp_2008.pdf" target="_blank">Aprobación de manual de procesos - MAPRO</a></b></li>
                                            <li>b. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2008/respre299_2008.pdf" target="_blank">Resolución Presidencial N° 299-IGP/2008</a></b></li>
                                            <li>c. <b><a href="../public/files/instrumentos_gestion/mapro/modificacion_resolucion_255_igp_2008.pdf" target="_blank">Modificaciónn de manual de procesos - Control Patrimonial</a></b></li>
                                            <li>d. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2008/respre255_2008.pdf" target="_blank">Resolución Presidencial N° 255-IGP/2008</a></b></li>
                                            <li>e. <b><a href="../public/files/instrumentos_gestion/mapro/aprobacion_resolucion_095_igp_2008.pdf" target="_blank">Aprobación de manual de procesos - Adjudicación directa, licitaciones y concursos públicos</a></b></li>
                                            <li>f. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2008/respre095_2008.pdf" target="_blank">Resolución Presidencial N° 095-IGP/2008</a></b></li>
                                            </ul></td>
                                </tr>
                                <tr>
                                  <td>2007</td>
                                  <td><ul><li>a. <b><a href="../public/files/instrumentos_gestion/mapro/aprobacion_resolucion_217_igp_2007.pdf" target="_blank"> Manual de procesos- MAPRO</a></b></li>
                                          <li>b. <b><a href="https://intranet.igp.gob.pe/doc_administrativos/data/resoluciones_presidenciales/2007/respre217_2007.pdf" target="_blank">Resolución Presidencial N° 217-IGP/2007</a></b></li>
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
              <li class="list-group-item"><a href="./mapa">Mapa de procesos</a></li>
              <li class="list-group-item" style="color: #0200AE;"><b>MAPRO</b></li>

            </ul>
         </div>
    </div> 
    </div>


@endsection

@section('menu1')
    style="display: none;"
@endsection

