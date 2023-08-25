@extends('layout2022')

@section('nav')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="//www.gob.pe/igp"><b><i class="fas fa-home"></i> Portal IGP</b></a></li>
        <li class="breadcrumb-item"><a href="poi" >Plan Operativo Institucional (POI)</a></li>
        <li class="breadcrumb-item active" aria-current="page">Evaluación POI</li>
        <li class="breadcrumb-item" ><a href="pei">PEI</a></li>
        <li class="breadcrumb-item" ><a href="peievaluacion">Evaluación PEI</a></li>
        </ol>
    </nav>

@endsection

@section('content')


<div class="pt-3 pb-3 text-center ">
    <div class="carousel-inner text-center">
        <div class="carousel-item active ">
            <div class="d-flex flex-column h-100 align-items-center justify-content-center ">
                <p class=" h4"><b>Evaluación POI</b></p>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-2022-tab" data-toggle="pill" href="#pills-2022" role="tab" aria-controls="pills-2022" aria-selected="true">2022</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-2021-tab" data-toggle="pill" href="#pills-2021" role="tab" aria-controls="pills-2021" aria-selected="false">2021</a>
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
                        <a class="nav-link" id="pills-2016-tab" data-toggle="pill" href="#pills-2016" role="tab" aria-controls="pills-2016" aria-selected="false">2016</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-2015-tab" data-toggle="pill" href="#pills-2015" role="tab" aria-controls="pills-2015" aria-selected="false">2015</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-2014-tab" data-toggle="pill" href="#pills-2014" role="tab" aria-controls="pills-2014" aria-selected="false">2014</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-2013-tab" data-toggle="pill" href="#pills-2013" role="tab" aria-controls="pills-2013" aria-selected="false">2013</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-2012-tab" data-toggle="pill" href="#pills-2012" role="tab" aria-controls="pills-2012" aria-selected="false">2012</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-2011-tab" data-toggle="pill" href="#pills-2011" role="tab" aria-controls="pills-2011" aria-selected="false">2011</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-2010-tab" data-toggle="pill" href="#pills-2010" role="tab" aria-controls="pills-2010" aria-selected="false">2010</a>
                    </li>

                  </ul>

                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-2022" role="tabpanel" aria-labelledby="pills-2022-tab">

                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/2022/evaluacion/2022_10_05_EVALUACION_POI_PRIMER_SEMESTRE_2022_IGP.pdf"> Informe de evaluación POI I Semestre</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/2022/evaluacion/2022_10_10_REPORTE_SEGUIMIENTO_POI_PRIMER_SEMESTRE_2022_IGP.pdf">Reporte de Seguimiento del POI I Semestre</a></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-2021" role="tabpanel" aria-labelledby="pills-2021-tab">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/2021/I_SEMESTRE/2021_11_07_EVALUACION_POI_%202021-IGP_PRIMER_SEMESTRE.pdf">Evaluación del POI I Semestre</a></td>
                                </tr>
                                <tr>
                                    <td><a href="hhttps://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/2021/2022_04_29_Reporte_de_Seguimiento_del_POI_2021[R].pdf">Reporte Seguimiento del POI</a></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-2020" role="tabpanel" aria-labelledby="pills-2020-tab">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/eval-poi-2020-I-semestre.pdf">Informe de Evaluación I Semestre</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/poi_2020-seguimiento-I-semestre.pdf">Seguimiento I Semestre</a></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-2019" role="tabpanel" aria-labelledby="pills-2019-tab">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/eval-poi-2019-I-trimestre.pdf">Informe de Seguimiento y Evaluación I Trimestre</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/eval-poi-2019-I-trimestre-anexos.pdf">Anexos del Informe de Seguimiento y Evaluación I Trimestre</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/eval-poi-2019-II-trimestre.pdf">Informe de Seguimiento y Evaluación II Trimestre</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/eval-poi-2019-III-trimestre-anexos.pdf">Anexos del Informe de Seguimiento y Evaluación III Trimestre</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/eval-poi-2019-III-trimestre.pdf">Informe de Seguimiento y Evaluación III Trimestre</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/eval-poi-2019-II-trimestre-anexos.pdf">Anexos del Informe de Seguimiento y Evaluación II Trimestre</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/eval-poi-2019-IV-trimestre.pdf">Informe de Seguimiento y Evaluación IV Trimestre</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/eval-poi-2019-IV-trimestre-anexos.pdf">Anexos del Informe de Seguimiento y Evaluación IV Trimestre</a></td>
                                </tr>


                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-2018" role="tabpanel" aria-labelledby="pills-2018-tab">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/eval_poi_2018-I-semestre.pdf">Evaluación I Semestre</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/eval_poi_2018-III-trimestre.pdf">	Informe de Seguimiento y Evaluación III Trimestre</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/evaluacion-de-implementacion-del-POI-2018-iv-trimestre.pdf">Evaluación de la Implementación del POI 2018 IV Trimestre</a></td>
                                </tr>


                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-2017" role="tabpanel" aria-labelledby="pills-2017-tab">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/eval_poi_2017-I-semestre.pdf">Evaluación I Semestre</a></td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-2016" role="tabpanel" aria-labelledby="pills-2016-tab">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/eval_poi_2016.pdf">Evaluación I Semestre</a></td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-2015" role="tabpanel" aria-labelledby="pills-2015-tab">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/eval_poi_2015.pdf">Evaluación</a></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-2014" role="tabpanel" aria-labelledby="pills-2014-tab">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/eval_poi_2014.pdf">Evaluación</a></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-2013" role="tabpanel" aria-labelledby="pills-2013-tab">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/eval_poi_2013.pdf">Evaluación</a></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-2012" role="tabpanel" aria-labelledby="pills-2012-tab">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/eval_poi_2012.pdf">Evaluación</a></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-2011" role="tabpanel" aria-labelledby="pills-2011-tab">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/eval_poi_2011.pdf">Evaluación</a></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-2010" role="tabpanel" aria-labelledby="pills-2010-tab">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/poi/eval_poi_2010.pdf">Evaluación</a></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Descarga</th>
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
