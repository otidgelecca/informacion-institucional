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
            <span>CSST - IGP</span>
        </li>
    </ul>

@endsection


@section('content')

    <div class="container">
         <div class="row">
            <a name="acercade"></a> 
          <div class="col-sm-8 acercaDe" style="margin-top: 15px; margin-bottom: 100px">
                <h1 class="ds-titulo">Seguridad y Salud en el Trabajo</h1> 
                
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-2021-tab" data-toggle="pill" href="#pills-2021" role="tab" aria-controls="pills-2021" aria-selected="true">2021</a>
  </li>

  <li class="nav-item">
    <a class="nav-link " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">2020</a>
  </li>
  <!--
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">2019</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">2018</a>
  </li>
  -->
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-2021" role="tabpanel" aria-labelledby="pills-2021-tab">

    <div class="card">
      <div class="card-header" id="headingTwo">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Actas de Reunión
          </button>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
          <table id="example" class="table table-bordered" style="width:100%" data-page-length='5'>  
              <thead>
                  <tr style="background-color: #F0F0F0">
                    <th width="5">#</th>
                    <th>Título</th>
                    <th>Fecha</th>
                    <th width="5"></th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>1</td>
                    <td>Acta-001-2021-SST EXTRAORDINARIA</td>
                    <td>Lima, 28 enero de 2021	</td>
                    <td><a href="../public/files/csst/acta/2021/ACTA-001-2021-IGP-CSST_EXTRAORDINARIA.pdf" target="_blank"><b>Descargar</b></a></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Acta-001-2021-SST ORDINARIA</td>
                    <td>Lima, 22 enero de 2021	</td>
                    <td><a href="../public/files/csst/acta/2021/ACTA-001-2021-IGP-CSST_ORDINARIA.pdf" target="_blank"><b>Descargar</b></a></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Acta-002-2021-SST ORDINARIA</td>
                    <td>Lima, 19 febrero de 2021	</td>
                    <td><a href="../public/files/csst/acta/2021/ACTA-002-2021-IGP-CSST_ORDINARIA.pdf" target="_blank"><b>Descargar</b></a></td>
                  </tr>

              </tbody>
          </table>        

        </div>
      </div>
    </div>

  </div>

  <div class="tab-pane fade show " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  
  
         

                
    <div >
    <div id="accordion">

      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Acta de Instalación
            </button>
          </h5>
        </div>

        <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            <table id="example" class="table table-bordered" style="width:100%" data-page-length='5'>  
                <thead>
                    <tr style="background-color: #F0F0F0">
                      <th width="5">#</th>
                      <th>Título</th>
                      <th>Fecha</th>
                      <th width="5"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>1</td>
                      <td>Acta de instalación SST 2020</td>
                      <td>Lima, 07 mayo de 2020	</td>
                      <td><a href="../public/files/csst/acta/acta_instalacion_CSST.pdf" target="_blank"><b>Descargar</b></a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Designar a los representantes titulares y suplentes del empleador ante el CSST-IGP - Resolución de presidencia No 040-2020-IGP	</td>
                      <td>Lima, 04 mayo de 2020	</td>
                      <td><a href="../public/files/csst/acta/rp040-IGP-2020_CSST.pdf" target="_blank"><b>Descargar</b></a></td>
                    </tr>

                </tbody>
            </table>        
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Acta de Reunión
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            <table id="example" class="table table-bordered" style="width:100%" data-page-length='5'>  
                <thead>
                    <tr style="background-color: #F0F0F0">
                      <th width="5">#</th>
                      <th>Título</th>
                      <th>Fecha</th>
                      <th width="5"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>1</td>
                      <td>Acta-001-2020-SST</td>
                      <td>Lima, 07 mayo de 2020	</td>
                      <td><a href="../public/files/csst/acta/ACTA-001-2020-IGP-CSST.pdf" target="_blank"><b>Descargar</b></a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Acta-002-2020-SST</td>
                      <td>Lima, 13 mayo de 2020	</td>
                      <td><a href="../public/files/csst/acta/ACTA-002-2020-IGP-CSST.pdf" target="_blank"><b>Descargar</b></a></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Acta-003-2020-SST</td>
                      <td>Lima, 24 junio de 2020	</td>
                      <td><a href="../public/files/csst/acta/ACTA-003-2020-IGP-CSST.pdf" target="_blank"><b>Descargar</b></a></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Acta-004-2020-SST</td>
                      <td>Lima, 30 junio de 2020	</td>
                      <td><a href="../public/files/csst/acta/ACTA-004-2020-IGP-CSST.pdf" target="_blank"><b>Descargar</b></a></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Acta-005-2020-SST</td>
                      <td>Lima, 27 julio de 2020	</td>
                      <td><a href="../public/files/csst/acta/ACTA-005-2020-IGP-CSST.pdf" target="_blank"><b>Descargar</b></a></td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Acta-006-2020-SST</td>
                      <td>Lima, 05 agosto de 2020	</td>
                      <td><a href="../public/files/csst/acta/ACTA-006-2020-IGP-CSST.pdf" target="_blank"><b>Descargar</b></a></td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Acta-007-2020-SST</td>
                      <td>Lima, 29 septiembre de 2020	</td>
                      <td><a href="../public/files/csst/acta/ACTA-007-2020-IGP-CSST.pdf" target="_blank"><b>Descargar</b></a></td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>Acta-008-2020-SST</td>
                      <td>Lima, 30 octubre de 2020	</td>
                      <td><a href="../public/files/csst/acta/ACTA-008-2020-IGP-CSST.pdf" target="_blank"><b>Descargar</b></a></td>
                    </tr>

                </tbody>
            </table>        

          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingOne1">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
              Comité de SST
            </button>
          </h5>
        </div>

        <div id="collapseOne1" class="collapse " aria-labelledby="headingOne1" data-parent="#accordion">
          <div class="card-body">
            <table id="example" class="table table-bordered" style="width:100%" data-page-length='5'>  
                <thead>
                    <tr style="background-color: #F0F0F0">
                      <th width="5">#</th>
                      <th>Título</th>
                      <th>Fecha</th>
                      <th width="5"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>1</td>
                      <td>Resolución 077-IGP/2020, que modifica la Resolución de Presidencia N° 040-IGP/2020</td>
                      <td>Lima, 28 Setiembre del 2020	</td>
                      <td><a href="../public/files/csst/acta/RP-077-IGP-2020_CSST.pdf" target="_blank"><b>Descargar</b></a></td>
                    </tr>

                </tbody>
            </table>        
          </div>
        </div>
      </div>	  
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Plan Anual SST
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
            <table id="example" class="table table-bordered" style="width:100%" data-page-length='5'>  
                <thead>
                    <tr style="background-color: #F0F0F0">
                      <th width="5">#</th>
                      <th>Título</th>
                      <th>Fecha</th>
                      <th width="5"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>1</td>
                      <td>Plan Anual de SST</td>
                      <td>Lima, 22 julio de 2020	</td>
                      <td><a href="../public/files/csst/acta/PLAN-N-0001_2020_SST_CON-FORMATO-URH_JULIO.pdf" target="_blank"><b>Descargar</b></a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Resolución 076-IGP/2020, que aprueba el plan SST</td>
                      <td>Lima, 28 setiembre de 2020	</td>
                      <td><a href="../public/files/csst/acta/rp-076-IGP-2020_SST.pdf" target="_blank"><b>Descargar</b></a></td>
                    </tr>
                    
                </tbody>
            </table>        

          </div>
        </div>
      </div>
	  
      <div class="card">
        <div class="card-header" id="headingFour">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Plan de Vigilancia
            </button>
          </h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
          <div class="card-body">
            <table id="example" class="table table-bordered" style="width:100%" data-page-length='5'>  
                <thead>
                    <tr style="background-color: #F0F0F0">
                      <th width="5">#</th>
                      <th>Título</th>
                      <th>Fecha</th>
                      <th width="5"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>1</td>
                      <td>Plan de vigilancia prevención y control covid</td>
                      <td>Lima, 13 mayo de 2020	</td>
                      <td><a href="../public/files/csst/acta/plan-vigilancia-prevencion-control-covid.pdf" target="_blank"><b>Descargar</b></a></td>
                    </tr>

                </tbody>
            </table>        

          </div>
        </div>
      </div>
	 
      <div class="card">
        <div class="card-header" id="headingFive">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              Protocolos COVID
            </button>
          </h5>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
          <div class="card-body">
            <table id="example" class="table table-bordered" style="width:100%" data-page-length='5'>  
                <thead>
                    <tr style="background-color: #F0F0F0">
                      <th width="5">#</th>
                      <th>Título</th>
                      <th>Fecha</th>
                      <th width="5"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>1</td>
                      <td>PROTOCOLO ADMINISTRATIVO PARA EL USO  CORRECTO DEL TERMÓMETRO INFRARROJO CLÍNICO</td>
                      <td>Lima, 27 julio de 2020	</td>
                      <td><a href="../public/files/csst/acta/PROTOCOLO-1-TERMOMETRO-INFLARROJO-CLINICO.pdf" target="_blank"><b>Descargar</b></a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>PROTOCOLO ADMINISTRATIVO PARA COVID SOBRE COMISIONES DE SERVICIO</td>
                      <td>Lima, 27 julio de 2020	</td>
                      <td><a href="../public/files/csst/acta/PROTOCOLO-2-COMISIONES-DE-SERVICIOS.pdf" target="_blank"><b>Descargar</b></a></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>PROTOCOLO ADMINISTRATIVO PARA COVID SOBRE EL USO Y CONTROL DE LAS UNIDADES VEHÍCULARES</td>
                      <td>Lima, 27 julio de 2020	</td>
                      <td><a href="../public/files/csst/acta/PROTOCOLO-3-USO-Y-CONTROL-DE-UNIDADES-VEHICULARES-DEL-IGP.pdf" target="_blank"><b>Descargar</b></a></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>PROTOCOLO ADMINISTRATIVO PARA COVID SOBRE ATENCIÓN DE CASOS SOSPECHOSOS COVID-19</td>
                      <td>Lima, 27 julio de 2020	</td>
                      <td><a href="../public/files/csst/acta/PROTOCOLO-4-CASOS-SOSPECHOSOS-Y-CONFIRMADOS-POR-COVID-19.pdf" target="_blank"><b>Descargar</b></a></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>PROTOCOLO ADMINISTRATIVO PARA COVID SOBRE EL MANEJO DE RESIDUOS SÓLIDOS</td>
                      <td>Lima, 27 julio de 2020	</td>
                      <td><a href="../public/files/csst/acta/PROTOCOLO-5-MANEJO-DE-RESIDUOS-PELIGROSOS-POR-EL-COVID-19.pdf" target="_blank"><b>Descargar</b></a></td>
                    </tr>

                </tbody>
            </table>        

          </div>
        </div>
      </div>
	 
      <div class="card">
        <div class="card-header" id="headingSix">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              Formatos
            </button>
          </h5>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
          <div class="card-body">
            <table id="example" class="table table-bordered" style="width:100%" data-page-length='5'>  
                <thead>
                    <tr style="background-color: #F0F0F0">
                      <th width="5">#</th>
                      <th>Título</th>
                      
                      <th width="5"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>1</td>
                      <td>FICHA DE SINTOMATOLOGÍA COVID-19</td>
                      <td><a href="https://www.igp.gob.pe/informacion-institucional/seguridad_salud_trabajo/formatos/fscovid19/public/" target="_blank" >
                                <img width="30" src="../themes/Mirage/images/ir.png"/>
                      </a></td>
                    </tr>

                </tbody>
            </table>        

          </div>
        </div>
      </div>
        
        
    </div>                
                
<!--    
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
                                  <td><a href="../csst/acta"><b>Acta de Instalación</b></a></td>
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
-->
</div>
                 
      
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">b</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">c</div>
</div>  
      
      
      
      
          </div>
          <br /> <br />
         <div class="col-sm-3" style="border-left: 2px solid #f0f0f0; margin-top: 15px">
            
            <h3 class="ds-titulo">En esta sección </h3> 
            <ul class="list-group">
              <li class="list-group-item"><a href="../index">Regresar al Inicio</a></li>
              <li class="list-group-item" style="color: #0200AE;"><b>Seguridad y Salud en el Trabajo</b></li>
              
              
            </ul>
         </div>
    </div> 
    </div>


@endsection

@section('menu1')
    style="display: none;"
@endsection