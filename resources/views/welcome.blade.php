<?php
    //$base_url="https://www.igp.gob.pe/informacion-institucional/";
?>

@extends('layout')

@section('content')
  <h1>Información Institucional</h1>

    <div class="row ">
        <div class="col-6 col-sm-4 ">
              <img src="themes/Mirage/images/file_clip.png"  />
              <p  >Sistema de Control Interno IGP</p>
              <a href="sistema-control-interno/timeline"><span class="igp-btn"> Conoce más </span></a>
        </div>

        <div class="col-6 col-sm-4 ">
            <img src="themes/Mirage/images/file_clip.png" class="img img-thumbail img-fluid" />
            <p >Sistema de Gestión de la Calidad</p>
            <a href="sistema-gestion-calidad/politica" target="_blank"><span class="igp-btn">Conoce más </span></a>
        </div>
        <div class="col-6 col-sm-4 ">
            <img src="themes/Mirage/images/file_clip.png" class="img img-thumbail img-fluid" />
            <p >Código de Ética Institucional</p>
            <a href="codigo-etica/ce" ><span class="igp-btn"> Conoce más </span></a>
        </div>
        <div class="col-6 col-sm-4 ">
            <img src="themes/Mirage/images/file_clip.png" class="img img-thumbail img-fluid" />
            <p >Sistema de Gestión Antisoborno</p>
            <a href="sistema-gestion-antisoborno/politica" ><span class="igp-btn">Conoce más </span></a>
        </div>
        <div class="col-6 col-sm-4 ">
            <img src="themes/Mirage/images/file_clip.png"  />
            <p >Módulo de Ecoeficiencia</p>
            <a href="http://intranet.igp.gob.pe/ecoeficiencia" target="_blank"><span class="igp-btn">Conoce más </span></a>
        </div>


        <div class="col-6 col-sm-4 ">
            <img src="themes/Mirage/images/file_clip.png" class="img img-thumbail img-fluid" />
            <p >Manuales</p>
            <a href="manuales/manuales" ><span class="igp-btn">Conoce más </span></a>
        </div>

        <div class="col-6 col-sm-4 ">
            <img src="themes/Mirage/images/file_clip.png" class="img img-thumbail img-fluid" />
            <p>Instrumentos de Gestión</p>
            <a href="instrumentos-gestion/index" ><span class="igp-btn">Conoce más </span></a>
        </div>

        <div class="col-6 col-sm-4 ">
            <img src="themes/Mirage/images/file_clip.png" class="img img-thumbail img-fluid" />
            <p >Planes y Políticas</p>
            <a href="planes-politicas/index" ><span class="igp-btn">Conoce más </span></a>
        </div>

        <div class="col-6 col-sm-4 ">
              <img src="themes/Mirage/images/file_clip.png"  />
              <p >Proceso de Adquisición de Bienes, Servicios y Obras</p>
              <a href="procesos-seleccion/procesos"><span class="igp-btn"> Conoce más </span></a>

        </div>
        <div class="col-6 col-sm-4 ">
              <img src="themes/Mirage/images/file_clip.png"  />
              <p>Integridad y Lucha Contra la Corrupción</p>
              <a href="integridad-y-lucha-contra-la-corrupcion/documentos"><span class="igp-btn" > Conoce más </span></a>

        </div>
        <div class="col-6 col-sm-4 ">
              <img src="themes/Mirage/images/file_clip.png"  />
              <p>Seguridad Salud Trabajo</p>
              <a href="seguridad_salud_trabajo/index"><span class="igp-btn" > Conoce más </span></a>

        </div>

        <div class="col-6 col-sm-4 ">
              <img src="themes/Mirage/images/file_clip.png"  />
              <p>Sistema de Gestión de Seguridad de la información</p>
              <a href="sistema-gestion-seguridad/politica"><span class="igp-btn" > Conoce más </span></a>

        </div>

	<div class="col-6 col-sm-4 ">
              <img src="themes/Mirage/images/file_clip.png"  />
              <p>Programas Presupuestales</p>
              <a href="ppr"><span class="igp-btn" > Conoce más </span></a>

        </div>

    </div>

@endsection

@section('classMenu')
    style="border-left: 2px solid #f0f0f0; display: none;"
@endsection
