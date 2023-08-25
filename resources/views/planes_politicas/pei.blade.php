@extends('layout2022')

@section('nav')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="//www.gob.pe/igp"><b><i class="fas fa-home"></i> Portal IGP</b></a></li>
    <li class="breadcrumb-item"><a href="poi" >Plan Operativo Institucional (POI)</a></li>
    <li class="breadcrumb-item"><a href="poievaluacion" >Evaluación POI</a></li>
    <li class="breadcrumb-item active" aria-current="page">PEI</li>
    <li class="breadcrumb-item" ><a href="peievaluacion" >Evaluación PEI</a></li>
    </ol>
</nav>

@endsection

@section('content')


<div class="pt-3 pb-3 text-center ">
    <div class="carousel-inner text-center">
        <div class="carousel-item active ">
            <div class="d-flex flex-column h-100 align-items-center justify-content-center ">
                <p class="h4"><b>Plan Estratégico Institucional - PEI </b></p>

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item ">
                      <a class="nav-link active" id="pills-2022-tab" data-toggle="pill" href="#pills-2022" role="tab" aria-controls="pills-2022" aria-selected="true">2022</a>
                    </li>
                    <li class="nav-item hidden">
                      <a class="nav-link " id="pills-2021-tab" data-toggle="pill" href="#pills-2021" role="tab" aria-controls="pills-2021" aria-selected="false">2021</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-2019-tab" data-toggle="pill" href="#pills-2019" role="tab" aria-controls="pills-2019" aria-selected="false">2019</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-2016-tab" data-toggle="pill" href="#pills-2016" role="tab" aria-controls="pills-2016" aria-selected="false">2016</a>
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
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/pei/2022_05_16_PEI_Ampliado-al-2026[R][R].pdf" target="_blank">PEI 2020-2026(AMPLIADO)</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/pei/RP_030-IGP-2022_05_16_AmpliacionTemporalidad_PEI_2020-2026.pdf" target="_blank">Ampliación de temporalidad PEI 2020-2026</a></td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="tab-pane fade " id="pills-2021" role="tabpanel" aria-labelledby="pills-2021-tab">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Descarga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/pei/2022_05_16_PEI_Ampliado-al-2026[R][R].pdf" target="_blank">PEI 2020-2026(AMPLIADO)</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.igp.gob.pe/informacion-institucional/public/files/planes_politicas/pei/RP_030-IGP-2022_05_16_AmpliacionTemporalidad_PEI_2020-2026.pdf" target="_blank">Ampliación de temporalidad PEI 2020-2026</a></td>
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
                                    <td><a href="#">PEI ampliado al 2026 y su norma que lo aprueba</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">PEI aprobado y su norma que lo aprueba</a></td>
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
                                    <td><a href="https://cdn.www.gob.pe/uploads/document/file/489868/IGP_PEI_2020-2024.pdf?v=1668715887" target="_blank">Ver PEI 2020-2024</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://cdn.www.gob.pe/uploads/document/file/489873/IGP_PEI_2020-2024_resolucion.pdf?v=1668715883" target="_blank">Ver Resolución de PEI 2020-2024</a></td>
                                </tr>

                                <tr>
                                    <td><a href="https://cdn.www.gob.pe/uploads/document/file/3615123/PEI%202017-2022.pdf?v=1668715856" target="_blank">Ver PEI 2017-2022</a></td>
                                </tr>

                                <tr>
                                    <td><a href="https://cdn.www.gob.pe/uploads/document/file/3615124/Norma%20que%20aprueba%20el%20POI%202017-2022.pdf?v=1668715845" target="_blank">Norma que aprueba el POI 2017-2022</a></td>
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
                                    <td><a href="https://cdn.www.gob.pe/uploads/document/file/3614969/Norma%20que%20aprueba%20el%20PEI%202017-2019.pdf?v=1668715864" target="_blank">Norma que aprueba el PEI 2017-2019</a></td>
                                </tr>


                                <tr>
                                    <td><a href="https://cdn.www.gob.pe/uploads/document/file/3614968/PE%202017-2019.pdf?v=1668715873" target="_blank">Ver PEI 2017-2019</a></td>
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
