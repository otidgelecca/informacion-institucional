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
          <div class="col-sm-8 acercaDe" style="margin-top: 15px; margin-bottom: 30px">
                
                <h1 class="ds-titulo" >Prespuesto Analitico de Personal</h1>

                <div >
                <table id="example" class="table table-bordered" style="width:100%" data-page-length='5'>
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
                                  <td>2021</td>
                                  <td><ul><li>a. <b><a href="../public/files/instrumentos_gestion/pap/respre0030_2021.pdf" target="_blank">PAP 2021 y Norma que aprueba el PAP</a></b>
                                </li>                                          
                                </tr>
                                <tr>
                                  <td>2017</td>
                                  <td><ul><li>a. <b><a href="../public/files/instrumentos_gestion/pap/PAP_2017.pdf" target="_blank">PAP 2017</a></b></li>
                                          <li>b. <b><a href="../public/files/instrumentos_gestion/pap/respre179_2017_PAP.pdf" target="_blank">Norma que aprueba el PAP</a></b></li></ul></td>
                                </tr>
                                <tr>
                                  <td>2016</td>
                                  <td><ul><li>a. <b><a href="../public/files/instrumentos_gestion/pap/PAP_2016.pdf" target="_blank">PAP 2016</a></b></li>
                                          <li>b. <b><a href="../public/files/instrumentos_gestion/pap/respre281_2016_PAP.pdf" target="_blank">Norma que aprueba el PAP</a></b></li></ul></td>
                                  <td>2015</td>
                                  <td><ul>  <li>a. <b><a href="../public/files/instrumentos_gestion/pap/PAP_2015.pdf" target="_blank">PAP 2017</a></b></li>
                                            </ul></td>
                                </tr>
                                <tr>
                                  <td>2014</td>
                                  <td><ul><li>a. <b><a href="../public/files/instrumentos_gestion/pap/PAP_2014.pdf" target="_blank">PAP 2014</a></b></li>
                                          </ul></td>
                                  <td>2013</td>
                                  <td><ul>  <li>a. <b><a href="../public/files/instrumentos_gestion/pap/PAP_2013.pdf" target="_blank">PAP 2013</a></b></li>
                                            </ul></td>
                                </tr>
                                <tr>
                                  <td>2012</td>
                                  <td><ul><li>a. <b><a href="../public/files/instrumentos_gestion/pap/PAP_2012.pdf" target="_blank">PAP 2012</a></b></li>
                                          </ul></td>
                                  <td>2011</td>
                                  <td><ul>  <li>a. <b><a href="../public/files/instrumentos_gestion/pap/PAP_2011.pdf" target="_blank">PAP 2011</a></b></li>
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
         <div class="col-sm-3" style="border-left: 2px solid #f0f0f0; margin-top: 15px">
            
            <h3 class="ds-titulo">En esta sección </h3> 
            <ul class="list-group">
              <li class="list-group-item"><a href="./index">Regresar a Instrumentos de Gestión</a></li>
              <li class="list-group-item" style="color: #0200AE;"><b>PAP</b></li>
            </ul>
         </div>
    </div> 
    </div>


@endsection

@section('menu1')
    style="display: none;"
@endsection