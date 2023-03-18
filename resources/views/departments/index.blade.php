@extends('layouts.app')
@section('title', 'Listar Departamento')
@section('content')
    <div class = "dashboard-main ">
        <div class = "container mt-5 ">


            <div class = "overview-section p-4 ">
                <div>
                    <div class="d-flex justify-content-between">
                        <h3>Listado de Departamentos Creados</h3>
                        <a href="{{route('departments.create')}}" style="cursor: pointer" class="d-flex flex-reverse text-decoration-none" title="Nuevo Departamento" ><i class="fa-solid fa-plus"></i></a>
                    </div>

                    <div class="">
                        <table class="table table-hover"  id="PaisesTable">
                            <thead class="text-center">
                            <tr>
                                <th scope="col">Departamentos</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody class="text-center">





                            @foreach($departments as $department)


                                <tr>
                                    <td>{{$department->name}}</td>


                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <form id="eliminardepartamento_{{ $loop->iteration }}" action="{{route('departments.destroy', $department->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                            <a title="Eliminar" onclick="document.getElementById('eliminardepartamento_{{ $loop->iteration }}').submit()" class="me-2 btn btn-danger">
                                                <i class="fa-solid fa-trash-can text-white"></i>
                                            </a>
                                            <a title="Editar" href="{{route('departments.edit',$department->id)}}"
                                               class="me-2 btn btn-warning">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="{{route('departments.show',$department->id)}}" title="Detalles"
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
    </div>

@endsection
