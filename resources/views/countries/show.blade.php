@extends('layouts.app')
@section('title', 'Ver Detalles Paises')
@section('content')
    <div class = "dashboard-main ">
        <div class = "container mt-5 ">


            <div class = "overview-section p-4 ">
                <div>
                    <div class="d-flex justify-content-between">
                        <h3>Listado de los Departamentos del Pais de <span>{{$country->name}}</span></h3>
                        <a href="{{route('departments.create')}}" style="cursor: pointer" class="d-flex flex-reverse text-decoration-none" title="Nuevo Departamento"><i class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="">
                        <table class="table table-hover"  id="PaisesTable">
                            <thead class="text-center">
                            <tr>
                                <th scope="col">Nombre del Departamento</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody class="text-center">
                            @foreach($departments as $department)

                                <tr>
                                    <td><span  title="Departamento">{{$department -> name}}</span></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <a href="{{route('departments.show',$department->id)}}"
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
