<?php
    //$base_url="https://www.igp.gob.pe/informacion-institucional/";
    //$base_url="http://localhost/informacion-institucional/";
?>

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
            <span>Sistema de Control Interno</span>
        </li>
    </ul>
    

@endsection


@section('content')


              
               <br /> <br />
            <div >      
                
                
<img id="myImg" src="../public/files/sci/timeline.png" alt="EJE GESTIÓN DE RIESGOS" width="100%" >

<!-- The Modal -->
<div id="myModal" class="modal">
  <img class="modal-content" id="img01">
</div>



                
            </div>
              
    

@endsection

@section('activeTL')
    style="color: #0200AE;"
@endsection
@section('iconActiveTL')
    <i class="fa  fa-hand-o-right"></i>
@endsection

@section('menu1')
    style="display: block;"
@endsection
@section('menu2')
    style="display: none;"
@endsection
@section('classContenido')
    class="col-sm-8"
@endsection
@section('classMenu')
    class="col-sm-3" style="border-left: 2px solid #f0f0f0; "
@endsection
