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

    <div class="container" >
         <div class="row">
            <a name="acercade"></a> 
          <div class="col-sm-8 acercaDe" style="margin-top: 15px; margin-bottom: 110px">
                <h1 class="ds-titulo">Planes y Políticas</h1> 
                
                <div >
                <table id="example" class="table table-bordered" style="width:100%" data-page-length='5'>
                            <thead>
                                <tr style="background-color: #F0F0F0">
                                  <th width="5">#</th>
                                  <th>Página</th>
                                  <th width="5">#</th>
                                  <th>Página</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>1</td>
                                  <td><a href="../planes-politicas/pege"><b>Plan Estratégico de Gobierno Electrónico (PEGE)</b></a></td>
                                  <td>2</td>
                                  <td><a href="../planes-politicas/peti"><b>Plan Estratégico de Tecnologías de la Información(PETI)</b></a></td>
                                  
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td><a href="../planes-politicas/poinf"><b>Plan Operativo Informático</b></a></td>
                                  <td>4</td>
                                  <td><a href="../planes-politicas/pei"><b>Evaluación PEI</b></a></td>
                                  
                                </tr>
                                <tr>
                                  <td>5</td>
                                  <td><a href="../planes-politicas/poi"><b>Evaluación POI</b></a></td>
                                  <td>6</td>
                                  <td><a href="../planes-politicas/pei"><b>(PEI) Plan Estrategico Institucional y Normas</b></a></td>
                                  
                                </tr>
                                <tr>
                                  <td>7</td>
                                  <td><a href="../planes-politicas/poi"><b>(POI) Plan Operativo Institucional y Normas</b></a></td>
                                  <td></td>
                                  <td></td>
                                  
                                </tr>
                            </tbody>
                          </table>
                    
                    
                </div>
                 
          </div>
          <br /> <br />
         <div class="col-sm-3" style="border-left: 2px solid #f0f0f0; margin-top: 15px">
            
            <h3 class="ds-titulo">En esta sección </h3> 
            <ul class="list-group">
              <li class="list-group-item"><a href="../index">Regresar al Inicio</a></li>
              <li class="list-group-item" style="color: #0200AE;"><b>Políticas y Planes</b></li>

            </ul>
         </div>
    </div> 
    </div>


@endsection

@section('menu1')
    style="display: none;"
@endsection
