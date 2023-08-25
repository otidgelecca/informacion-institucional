@extends('layout2022')

@section('nav')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="//www.gob.pe/igp"><b><i class="fas fa-home"></i> Portal IGP</b></a></li>
    <li class="breadcrumb-item"><a href="poi" >Plan Operativo Institucional (POI)</a></li>
    <li class="breadcrumb-item"><a href="poievaluacion" >Evaluación POI</a></li>
    <li class="breadcrumb-item"><a href="pei" >PEI</a></li>
    <li class="breadcrumb-item active" aria-current="page" >Evaluación PEI</li>
    </ol>
</nav>

@endsection

@section('content')


<div class="pt-3 pb-3 text-center ">
    <div class="carousel-inner text-center">
        <div class="carousel-item active ">
            <div class="d-flex flex-column h-100 align-items-center justify-content-center ">
                <p class=" h4"><b>Evaluación del PEI</b></p class=" h4">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="pills-2022-tab" data-toggle="pill" href="#pills-2022" role="tab" aria-controls="pills-2022" aria-selected="true">2022</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " id="pills-2021-tab" data-toggle="pill" href="#pills-2021" role="tab" aria-controls="pills-2021" aria-selected="false">2021</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="pills-2020-tab" data-toggle="pill" href="#pills-2020" role="tab" aria-controls="pills-2020" aria-selected="false">2020</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-2019-tab" data-toggle="pill" href="#pills-2019" role="tab" aria-controls="pills-2019" aria-selected="false">2019</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-2018-tab" data-toggle="pill" href="#pills-2018" role="tab" aria-controls="pills-2018" aria-selected="false">2018</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-2017-tab" data-toggle="pill" href="#pills-2017" role="tab" aria-controls="pills-2017" aria-selected="false">2017</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-2015-tab" data-toggle="pill" href="#pills-2015" role="tab" aria-controls="pills-2015" aria-selected="false">2015</a>
                        </li>

                      </ul>

                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-2022" role="tabpanel" aria-labelledby="pills-2022-tab">

                            <table class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
								<!--
                                    <tr>
                                        <td><a target="_blank" href="#">Informe de Evaluación de Resultados del PEI	</a></td>
                                    </tr>
								-->
                                    <tr>
                                        <td><a target="_blank" href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/pei/evaluacion/2023_05_16_Informe_de_Evaluacion_de_Resultados_PEI-POI_2022_Revisado.pdf">Informe de evaluación de resultados del PEI - POI	</a></td>
                                    </tr>
                                    <tr>
                                        <td><a target="_blank" href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/pei/evaluacion/2022_04_29_Reporte_de_Seguimiento_del_PEI_2022.pdf">Reporte de Seguimiento del PEI	</a></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="tab-pane fade " id="pills-2021" role="tabpanel" aria-labelledby="pills-2021-tab">
                            <table class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a target="_blank" href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/pei/2022_05_31_Informe-Evaluacion-Resultados-PEI-POI_2021[R].pdf">Informe de Evaluación de Resultados del PEI	</a></td>
                                    </tr>
                                    <tr>
                                        <td><a target="_blank" href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/pei/2022_04_29_Reporte_de_Seguimiento_del_PEI_2021[R].pdf">Reporte de Seguimiento del PEI	</a></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="pills-2020" role="tabpanel" aria-labelledby="pills-2020-tab">
                            <table class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a target="_blank" href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/pei/INFORME_EVALUACION_PEI_2020_2024.pdf">Informe de Evaluación 2020-2024	</a></td>
                                    </tr>
                                    <tr>
                                        <td><a target="_blank" href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/pei/INFORME_ANEXOS_EVALUACION_PEI_2020_2024.pdf">(Anexos) de Evaluación 2020-2024	</a></td>
                                    </tr>
                                    <tr>
                                        <td><a target="_blank" href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/pei/REPORTE_EVALUACION_PEI_2020_2024.pdf">Reporte de Evaluación 2020-2024	</a></td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="pills-2019" role="tabpanel" aria-labelledby="pills-2019-tab">
                            <table class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a target="_blank" href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/pei/EVALUACION_PEI_2017_2019-2.pdf">Evaluación 2017-2019	</a></td>
                                    </tr>
                                    <tr>
                                        <td><a target="_blank" href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/pei/REPORTE_EVALUACION_PEI_2017_2019.pdf">Reporte de Evaluación 2017-2019</a></td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="pills-2018" role="tabpanel" aria-labelledby="pills-2018-tab">
                            <table class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a target="_blank" href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poinf/EVALUACION_PEI_2017_2019_2018.pdf">Evaluación 2018	</a></td>
                                    </tr>
                                    <tr>
                                        <td><a target="_blank" href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poinf/REPORTE_EVALUACION_PEI_2017_2019_2018.pdf">Reporte Evaluación 2018	</a></td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="pills-2017" role="tabpanel" aria-labelledby="pills-2017-tab">
                            <table class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a target="_blank" href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/pei/EVALUACION_PEI_2017_2019_I_SEMESTRE_2017.pdf">Evaluación I Semestre	</a></td>
                                    </tr>
                                    <tr>
                                        <td><a target="_blank" href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/pei/EVALUACION_PEI_ANUAL_2017.pdf">Evaluación Anual	</a></td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="pills-2015" role="tabpanel" aria-labelledby="pills-2015-tab">
                            <table class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a target="_blank" href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/pei/hoja_sinceramiento_pei_2015.pdf">Evaluación 2015</a></td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
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
