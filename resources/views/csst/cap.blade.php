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
                
                <h1 class="ds-titulo" >(CAP) Cuadro Asignacion de Personal y Normas</h1>

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
                                  <td><ul><li>a. <b><a href="../public/files/instrumentos_gestion/cap/cuadro_asignacion_2017.pdf" target="_blank">CAP(Provicional)</a></b></li>
                                          <li>b. <b><a href="../public/files/instrumentos_gestion/cap/rp162_2017.pdf" target="_blank">Norma que aprueba el CAP (Provisional)</a></b></li>
                                          </ul></td>
                                  <td>2015</td>
                                  <td><ul>  <li>a. <b><a href="../public/files/instrumentos_gestion/cap/cuadro_asignacion.pdf" target="_blank">CAP</a></b></li>
                                            <li>b. <b><a href="../public/files/instrumentos_gestion/cap/plan_188_2015_rm_191-2015-minam.pdf" target="_blank">Norma que aprueba el CAP</a></b></li>
                                            <li>c. <b><a href="../public/files/instrumentos_gestion/cap/propuesta_reordenamiento.pdf" target="_blank">Reordenamiento CAP</a></b></li>
                                            <li>d. <b><a href="../public/files/instrumentos_gestion/cap/respre420_2015.pdf" target="_blank">Norma que aprueba el reordenamiento CAP</a></b></li>
                                            </ul></td>
                                </tr>
                                <tr>
                                  <td>2001</td>
                                  <td><ul><li>a. <b><a href="../public/files/instrumentos_gestion/cap/cap_igp_2001.pdf" target="_blank">CAP</a></b></li>
                                          <li>b. <b><a href="../public/files/instrumentos_gestion/cap/res_su_195_2001.pdf" target="_blank">Norma que aprueba el CAP</a></b></li>
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
              <li class="list-group-item" style="color: #0200AE;"><b>CAP</b></li>
            </ul>
         </div>
    </div> 
    </div>


@endsection
