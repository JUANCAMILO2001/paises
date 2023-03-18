@extends('layouts.app')
@section('title', 'Crear Departamento')
@section('content')
    <div class = "dashboard-main ">
        <div class = "container mt-5 ">


            <div class = "overview-section pb-5 p-4 ">
                <form action="{{route('municipalities.store')}}" method="post">
                    @csrf
                    @method('POST')

                    <div class="container">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Municipio</h1>

                        <div>
                            <label class="mt-4">Escriba el nombre de su Nuevo Municipio:</label>
                            <div class="input-group mt-3 mb-3">
                                <div class="input-group-text bg-info">
                                    <i class="fa-solid fa-earth-africa" style="color: white; font-size: 21px"></i>
                                </div>
                                <input class="form-control bg-light" name="name" type="text" placeholder="Nombre del Departamento."/>
                            </div>
                            <label for="departments_id" class="mt-4">Seleccione a que Departamento pertenece:</label>

                            <div class="input-group mt-3 mb-3">
                                <select class="form-select" name="departments_id" id="departments_id" aria-label="Default select example">
                                    <option selected>--Seleccionar Departamento--</option>
                                    @foreach($departments as $department)
                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="float-end" >
                            <button type="submit" class="btn btn-primary">Guardar</button>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
