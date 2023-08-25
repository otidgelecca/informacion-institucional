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
          <div class="col-sm-8 acercaDe" style="margin-top: 15px; margin-bottom: 40px">
                <h1 class="ds-titulo">Instrumentos de Gestión</h1> 
                
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
                                  <td><a href="../instrumentos-gestion/rof"><b>Reglamento de Organización y Funciones ROF</b></a></td>
                                  <td>2</td>
                                  <td><a href="../instrumentos-gestion/mpp"><b>Manual Perfiles de Puestos</b></a></td>
                                  
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td><a href="../instrumentos-gestion/pap"><b>Prespuesto Analitico de Personal</b></a></td>
                                  <td>4</td>
                                  <td><a href="../instrumentos-gestion/organigrama"><b>Organigrama IGP</b></a></td>
                                  
                                </tr>
                                <tr>
                                  <td>5</td>
                                  <td><a href="../instrumentos-gestion/mof"><b>Manual de Organización y Funciones</b></a></td>
                                  <td>6</td>
                                  <td><a href="../instrumentos-gestion/mcc"><b>Manual de Clasificador de Cargos (IGP)</b></a></td>
                                  
                                </tr>
                                <tr>
                                  <td>7</td>
                                  <td><a href="../instrumentos-gestion/cap"><b>(CAP) Cuadro Asignacion de Personal y Normas</b></a></td>
                                  <td>8</td>
                                  <td><a href="../instrumentos-gestion/mapro"><b>(IGP) MAPRO</b></a></td>
                                  
                                </tr>
                                <tr>
                                  <td>9</td>
                                  <td><a href="../instrumentos-gestion/id"><b>Indicadores de Desempeño</b></a></td>
                                  <td>10</td>
                                  <td><a href="../instrumentos-gestion/rit"><b>(RIT) Reglamento Interno de Trabajo</b></a></td>
                                  
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
              <li class="list-group-item" style="color: #0200AE;"><b>Instrumentos de Gestión</b></li>

            </ul>
         </div>
    </div> 
    </div>


@endsection

@section('menu1')
    style="display: none;"
@endsection