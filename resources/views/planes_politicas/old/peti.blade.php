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
            <span>Planes y Políticas</span>
        </li>
    </ul>

@endsection

@section('content')

<style>
.table ul li {  
  margin: 5px;
  
}
</style>

    <div class="container">
         <div class="row">
            <a name="acercade"></a> 
          <div class="col-sm-10 acercaDe" style="margin-top: 15px; margin-bottom: 300px">
                
                <h1 class="ds-titulo" >Plan Estratégico de Tecnologías de la Información(PETI)</h1>

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
                                  <td><ul>
                                          <li>a. <b><a href="../public/files/planes_politicas/peti/aviso-sinceramiento-PETI-2019.pdf" target="_blank"> Evaluación PETI - Aviso de sinceramiento</a></b></li>
                                          
                                  <td>2016-2018</td>
                                  <td><ul>  
                                            <li>a. <b><a href="../public/files/planes_politicas/peti/PETI_2016_INSTITUTO_GEOFISICO_DEL_PERU.pdf" target="_blank">PETI</a></b></li>
                                            <li>b. <b><a href="../public/files/planes_politicas/peti/resol_peti_201_2016.pdf" target="_blank">Norma que aprueba el PETI</a></b></li>
                                          
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
              <li class="list-group-item"><a href="./index">Regresar a Planes y Políticas</a></li>
              <li class="list-group-item" style="color: #0200AE;"><b>PETI</b></li>
            </ul>
         </div>
    </div> 
    </div>


@endsection

@section('menu1')
    style="display: none;"
@endsection