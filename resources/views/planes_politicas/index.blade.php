@extends('layout2022')

@section('nav')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="//www.gob.pe/igp"><b><i class="fas fa-home"></i> Portal IGP</b></a></li>
        <li class="breadcrumb-item " ><a href="https://www.igp.gob.pe/institucional/normativas">Normativas</a></li>
        <li class="breadcrumb-item active" aria-current="page">Planes y Políticas</li>
        </ol>
    </nav>


@endsection

@section('content')

<div class="container container--main" data-v-51b8a1ec="">
    <div class="row" data-v-c90bf526="" data-v-51b8a1ec="">
        <div class=" col-md-9 " data-v-4ec534d5="" data-v-c90bf526="">
            <h1 class="ds-titulo">Planes y Políticas</h1>

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
    </div>


@endsection

@section('menu1')
    style="display: none;"
@endsection
