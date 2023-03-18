@extends('layouts.app')
@section('title', 'Ver Detalles Departamento')
@section('content')
    <div class = "dashboard-main ">
        <div class = "container mt-5 ">


            <div class = "overview-section p-4 ">
                <div>
                    <div class="d-flex justify-content-between">
                        <h3>Detalles de los Municipios asociados al Departamento <span>{{$departments->name}}</span></h3>
                        <a href="{{route('municipalities.create')}}" style="cursor: pointer" class="d-flex flex-reverse text-decoration-none" title="Nuevo Municipio"><i class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="">
                        <table class="table table-hover"  id="PaisesTable">
                            <thead class="text-center">
                            <tr>
                                <th scope="col">Nombre del Departamento</th>
                            </tr>
                            </thead>
                            <tbody class="text-center">
                            @foreach($municipalities as $municipality)

                                <tr>
                                    <td><span  title="Municipio">{{$municipality -> name}}</span></td>

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
