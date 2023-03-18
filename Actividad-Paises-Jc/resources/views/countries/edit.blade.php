@extends('layouts.app')
@section('title', 'Crear Pais')
@section('content')

    <div class = "dashboard-main ">
        <div class = "container mt-5 ">


            <div class = "overview-section p-4 ">


                <div class="col-12">
                    <h1>Editar Nombre del Pais</h1>
                    <form action="{{route('countries.update',$countries->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 ">
                            <label for="nombres" class="form-label">Nombre actual</label>
                            <input type="text" disabled value="{{$countries->name}}" class="form-control" id="nombres" required>
                        </div>
                        <div class="mb-3 ">
                            <label for="nombres" class="form-label">Nuevo nombre</label>
                            <input type="text" name="name" value="" class="form-control" id="nombres" required>
                        </div>
                        <div class="mb-3">
                            <a href="{{route('countries.index')}}" class="btn btn-warning">Volver</a>
                            <button  type="submit" class="btn btn-primary" style="float:right">Editar</button>
                        </div>
                    </form>
                </div>



            </div>
        </div>
    </div>




@endsection
