@extends('layouts.app')
@section('title', 'Editar Departamento')
@section('content')

    <div class = "dashboard-main ">
        <div class = "container mt-5 ">


            <div class = "overview-section p-4 ">


                <div class="col-12">
                    <h1>Editar Nombre del Departamento</h1>
                    <form action="{{route('departments.update',$departments->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 ">
                            <label for="nombres" class="form-label">Nombre actual</label>
                            <input type="text" disabled value="{{$departments->name}}" class="form-control" id="nombres" required>
                        </div>
                        <div class="mb-3 ">
                            <label for="nombres" class="form-label">Nuevo nombre</label>
                            <input type="text" name="name" value="{{$departments->name}}" class="form-control" id="nombres" required>
                        </div>
                        <div class="input-group mt-3 mb-3">
                            <select class="form-select" name="countries_id" id="countries_id" aria-label="Default select example">
                                <option  value="{{$departments->countries->id}}" >{{$departments->countries->name}}  </option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <a href="{{route('departments.index')}}" class="btn btn-warning">Volver</a>
                            <button  type="submit" class="btn btn-primary" style="float:right">Editar</button>
                        </div>
                    </form>
                </div>



            </div>
        </div>
    </div>




@endsection
