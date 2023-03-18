@extends('layouts.app')
@section('title', 'Listar Municipios')


@section('content')
    <div class = "dashboard-main ">
        <div class = "container mt-5 ">


            <div class = "overview-section p-4 ">
                <div>
                    <div class="d-flex justify-content-between">
                        <h3>Listado de Municipios Creados</h3>
                        <a href="{{route('municipalities.create')}}" style="cursor: pointer" class="d-flex flex-reverse text-decoration-none" title="Nuevo Municipio"><i class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="">
                        <table class="table table-hover"  id="PaisesTable">
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
                                            <form id="eliminarmunicipio_{{ $loop->iteration }}" action="{{route('municipalities.destroy', $municipality->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                            <a title="Eliminar" onclick="document.getElementById('eliminarmunicipio_{{ $loop->iteration }}').submit()" class="me-2 btn btn-danger">
                                                <i class="fa-solid fa-trash-can text-white"></i>
                                            </a>
                                            <a title="Editar" href="{{route('municipalities.edit',$municipality->id)}}"
                                               class="me-2 btn btn-warning">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>

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
