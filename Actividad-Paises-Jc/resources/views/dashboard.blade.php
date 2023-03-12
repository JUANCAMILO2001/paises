@extends('layouts.app')
@section('title', 'DASHBOARD')
@section('content')
<div class="row row-cols-1 row-cols-md-2 ">

        <div class="card m-3 col-md-4"  style="max-width: 400px;">
            <div class="row ">
                <div class="col-md-5">
                    <div class="card-body">
                        <a class="card-text" href="{{route('countries.create')}}">Nuevo Pais</a>
                    </div>
                </div>
            </div>
        </div>



    <div class="card m-3 col-md-4 " style="max-width: 400px;">
        <div class="row ">
            <div class="col-md-5">
                <div class="card-body">
                    <p class="card-text"> Nuevo Departamento</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card m-3 col-md-4" style="max-width: 400px;">
        <div class="row">
            <div class="col-md-5">
                <div class="card-body">
                    <p class="card-text"> Nuevo Municipio</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card m-3 col-md-4"  style="max-width: 400px;">
        <div class="row ">
            <div class="col-md-5">
                <div class="card-body">
                    <p class="card-text"> Listar Pais</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card m-3 col-md-4 " style="max-width: 400px;">
        <div class="row ">
            <div class="col-md-5">
                <div class="card-body">
                    <p class="card-text"> Listar Departamento</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card m-3 col-md-4" style="max-width: 400px;">
        <div class="row">
            <div class="col-md-5">
                <div class="card-body">
                    <p class="card-text"> Listar Municipio</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
