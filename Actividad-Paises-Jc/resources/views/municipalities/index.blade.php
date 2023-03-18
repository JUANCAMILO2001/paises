@extends('layouts.app')
@section('title', 'Listar Municipios')
@section('content')
    <div class = "dashboard-main ">
        <div class = "container mt-5 ">


            <div class = "overview-section p-4 ">
                <div>
                    <div class="d-flex justify-content-between">
                        <h3>Listado de Municipios Creados</h3>
                        <a style="cursor: pointer" class="d-flex flex-reverse text-decoration-none" title="Nuevo Departamento" data-bs-toggle="modal" data-bs-target="#ModalNewPais"><i class="fa-solid fa-plus"></i></a>
                    </div>

                    <table class="table table-hover">
                        <thead class="text-center">
                        <tr>
                            <th scope="col">Municipios</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">





                        @foreach($municipalities as $municipality)


                            <tr>
                                <td>{{$municipality->name}}</td>

                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <form id="eliminarmunicipio_{{ $loop->iteration }}" action="{{route('$municipalities.destroy', $municipality->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>

                                        <a title="Eliminar" onclick="document.getElementById('eliminarmunicipio_{{ $loop->iteration }}').submit()" class="me-2 btn btn-danger">
                                            <i class="fa-solid fa-trash-can text-white"></i>
                                        </a>
                                        <a title="Editar" href="{{route('$municipalities.edit',$municipality->id)}}"
                                           class="me-2 btn btn-warning">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a title="Detalles"
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
