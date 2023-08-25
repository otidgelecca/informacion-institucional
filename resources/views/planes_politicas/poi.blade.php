@extends('layout2022')

@section('nav')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="//www.gob.pe/igp"><b><i class="fas fa-home"></i> Portal IGP</b></a></li>
        <li class="breadcrumb-item active" aria-current="page">Plan Operativo Institucional (POI)</li>
        <li class="breadcrumb-item"><a href="poievaluacion">Evaluación POI</a></li>
        <li class="breadcrumb-item" ><a href="pei">Plan Estratégico Institucional (PEI)</a></li>
        <li class="breadcrumb-item" ><a href="peievaluacion">Evaluación PEI</a></li>
        </ol>
    </nav>

@endsection

@section('content')


<div class="pt-3 pb-3 text-center ">
    <div class="carousel-inner text-center">
        <div class="carousel-item active ">
            <div class="d-flex flex-column h-100 align-items-center justify-content-center ">
                <p class=" h4"><b>Plan Operativo Institucional (POI)</b></p class=" h4">
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">MULTIANUAL</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">CONSISTENCIADO</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">MODIFICADO</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Descargar Período</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/2023/poi_multianual_2024_2026.pdf" target="_blank">POI Multianual 2024-2026</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/2022/poi_multianual_2023_2025.pdf" target="_blank">POI Multianual 2023-2025</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/poi_multianual_2022_2024.pdf" target="_blank">POI Multianual 2022-2024	</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/poi_multianual_2021_2023.pdf" target="_blank">POI Multianual 2021-2023</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/poi_multianual_2020_2022.pdf" target="_blank">POI Multianual 2020-2022</a></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Descarga Período</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Descargar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/POI-Anual-2022-Consistente-PIA.pdf" target="_blank">POI anual consistenciado 2022</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/POI-Anual-2021-Consistente-PIA.pdf" target="_blank">POI anual consistenciado 2021</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/poi_2020.pdf" target="_blank">POI anual consistenciado 2020</a></td>
                                </tr>
                                <tr>
                                    <td>POI anual consistenciado 2019</td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/POI_2018_INSTITUTO_GEOFISICO_DEL_PERU.pdf" target="_blank">POI anual consistenciado 2018</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/poi_2017.pdf" target="_blank">POI anual consistenciado 2017</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/poi_2016.pdf" target="_blank">POI anual consistenciado 2016</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/poi_2015.pdf" target="_blank">POI anual consistenciado 2015</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/poi_2014.pdf" target="_blank">POI anual consistenciado 2014</a></td>
                                </tr>
                                <tr>
                                    <td>POI anual consistenciado 2013</td>
                                </tr>
                                <tr>
                                    <td>POI anual consistenciado 2012</td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/poi_2011.pdf" target="_blank">POI anual consistenciado 2011</a></td>
                                </tr>
                                <tr>
                                    <td>POI anual consistenciado 2010</td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/poi_2009.pdf" target="_blank">POI anual consistenciado 2009</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/poi_2008.pdf" target="_blank">POI anual consistenciado 2008</a></td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/2022/modificacion/PlanOperativoInstitucional_2022_Modificado_V1_IGP.pdf" target="_blank">2022, versión 1</a></td>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/2021/modificacion/PlanOperativoInstitucional_2021_Modificado_V02_IGP.pdf" target="_blank">2021, versión 2</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/2021/modificacion/PlanOperativoInstitucional_2021_Modificado_V01_IGP.pdf" target="_blank">2021, versión 1</a></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                  </div>

            </div>
        </div>
    </div>
</div>



@endsection

@section('menu1')
    style="display: none;"
@endsection
