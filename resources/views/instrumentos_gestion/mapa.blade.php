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
            <span>Instrumento de Gestión</span>
        </li>
    </ul>

@endsection

@section('content')

<a class="hidden" href="/htmlmap"> </a>
<style>
.table ul li {  
  margin: 5px;
  
}
</style>

    <div class="container">
         <div class="row">
            <a name="acercade"></a> 
          <div class="col-sm-10 acercaDe" style="margin-top: 15px; margin-bottom: 30px">
                
                <h1 class="ds-titulo" >	Mapa de procesos 2022</h1>

                <div >
			<img id="myImg" src="../public/files/instrumentos_gestion/mapro/mapa-procesos-igp.png" alt="MAPA DE PROCESOS IGP" width="100%" >

			<!-- The Modal -->
			<div id="myModal" class="modal">
			  <img class="modal-content" id="img01">
			</div>

                </div>
                 
          </div>
          <br /> <br />
         <div class="col-sm-2" style="border-left: 2px solid #f0f0f0; margin-top: 15px">
            
            <h3 class="ds-titulo">En esta sección </h3> 
            <ul class="list-group">
              <li class="list-group-item"><a href="./index">Regresar a Instrumentos de Gestión</a></li>
              <li class="list-group-item" style="color: #0200AE;"><b>Mapa de procesos</b></li>
              <li class="list-group-item"><a href="./mapro">MAPRO</a></li>

            </ul>
         </div>
    </div> 
    </div>


@endsection

@section('menu1')
    style="display: none;"
@endsection
