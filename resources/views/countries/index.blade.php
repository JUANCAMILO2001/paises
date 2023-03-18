@extends('layouts.app')
@section('title', 'Listar Pais')
@section('content')

    <div class = "dashboard-main ">
        <div class = "container mt-5 ">


            <div class = "overview-section p-4 ">
                <div>
                    <div class="d-flex justify-content-between">
                        <h3>Listado de Paises Creados</h3>
                        <a style="cursor: pointer" class="d-flex flex-reverse text-decoration-none" title="Nuevo Pais" data-bs-toggle="modal" data-bs-target="#ModalNewPais"><i class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                <table class="table table-hover" id="PaisesTable">
                                    <thead class="text-center">
                                    <tr>
                                        <th scope="col">Nombre del Pais</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    @foreach($countries as $country)

                                        <tr>
                                            <td>{{$country->name}}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                    <form method="post" action="{{route('countries.destroy', $country->id)}}" id="eliminarpais_{{ $loop->iteration }}">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <a title="Eliminar" onclick="document.getElementById('eliminarpais_{{ $loop->iteration }}').submit()" class="me-2 btn btn-danger">
                                                        <i class="fa-solid fa-trash-can text-white"></i>
                                                    </a>
                                                    <a title="Editar" href="{{route('countries.edit',$country->id)}}"
                                                       class="me-2 btn btn-warning">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>
                                                    <a href="{{route('countries.show',$country->id)}}"
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
        </div>
    </div>




@endsection
