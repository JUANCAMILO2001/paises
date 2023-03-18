@extends('layouts.app')
@section('title', 'Listar Departamento')
@section('content')
    <div class = "dashboard-main ">
        <div class = "container mt-5 ">


            <div class = "overview-section p-4 ">
                <div>
                    <div class="d-flex justify-content-between">
                        <h3>Listado de Departamentos Creados</h3>
                        <a style="cursor: pointer" class="d-flex flex-reverse text-decoration-none" title="Nuevo Departamento" data-bs-toggle="modal" data-bs-target="#ModalNewPais"><i class="fa-solid fa-plus"></i></a>
                    </div>

                    <table class="table table-hover">
                        <thead class="text-center">
                        <tr>
                            <th scope="col">Departamentos</th>
                            <th scope="col">Paises</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">

                        <form action="" method="get" >

                            <tr>
                                <div class="form-group">
                                    <td >
                                        <input class="form-control" type="text" name="q" value="{{request()->get('q')}}">
                                    </td>
                                </div>
                                <div class="form-group">
                                    <td >
                                        <select class="form-control" name="country" id="" >
                                            <option value="">-- Selecionar --</option>
                                            @foreach($countries as $country)
                                                <option {{ request()->get('country') == $country->id  ? 'selected' : ''}} value="{{$country->id}}">{{$country->name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </div>
                                <td>
                                    <button type="submit" class="btn btn-info">Buscar </button>
                                    <a class="btn btn-primary" href="{{ route('departments.index') }}">Eliminar consulta</a>
                                </td>
                            </tr>


                        </form>



                        @foreach($departments as $department)


                            <tr>
                                <td>{{$department->name}}</td>
                                <td>{{$country->name}}</td>

                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <form id="eliminardepartamento_{{ $loop->iteration }}" action="{{route('departments.destroy', $department->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>

                                        <a title="Eliminar" onclick="document.getElementById('eliminardepartamento_{{ $loop->iteration }}').submit()" class="me-2 btn btn-danger">
                                            <i class="fa-solid fa-trash-can text-white"></i>
                                        </a>
                                        <a title="Editar" href="{{route('countries.edit',$country->id)}}"
                                           class="me-2 btn btn-warning">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a data-bs-toggle="modal" data-bs-target="#ModalShowPais" title="Detalles"
                                           class=" btn btn-success"><i class="fa-solid fa-eye"></i></a>

                                    </div>
                                </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
