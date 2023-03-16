@extends('layouts.guest')
@section('title', 'Iniciar Sesion')
@section('content')

<div class="bg-white p-5 rounded-5 text-secondary shadow " style="width: 25rem">
    <div class="d-flex justify-content-center">
        <img src="{{url('recursos/img/login-icon.svg')}}" alt="login-icon" style="height: 7rem"/>
    </div>
    <div class="text-center fs-1 fw-bold">Iniciar Sesión</div>
    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="input-group mt-4">
            <div class="input-group-text bg-info">
                <img src="{{url('recursos/img/username-icon.svg')}}" alt="username-icon" style="height: 1rem"/>
            </div>
            <input class="form-control bg-light" name="email" type="text" placeholder="Correo Electronico"/>
        </div>
        <div class="input-group mt-1">
            <div class="input-group-text bg-info">
                <img src="{{url('recursos/img/password-icon.svg')}}" alt="password-icon" style="height: 1rem"/>
            </div>
            <input class="form-control bg-light" name="password" type="password" placeholder="Contraseña"/>
        </div>
        <div class="d-flex justify-content-around mt-1">

            <div class="pt-3">
                <a href="#" class="text-decoration-none text-info fw-semibold fst-italic" style="font-size: 0.9rem">Olvidaste tu Contraseña?</a>
            </div>
        </div>
        <div class="">
            <button type="submit" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm">Iniciar Sesión</button>

        </div>
        <div class="d-flex gap-1 justify-content-center mt-1">
            <div>No tienes una Cuenta?</div>
            <a href="{{route('register')}}" class="text-decoration-none text-info fw-semibold">Registrate</a>
        </div>
        <div class="p-3">
            <div class="border-bottom text-center" style="height: 0.9rem">
                <span class="bg-white px-3">O</span>
            </div>
        </div>
        <a href="{{url('/login-google')}}"
            class="btn d-flex gap-2 justify-content-center border mt-3 shadow-sm">
            <img src="{{url('recursos/img/google-icon.svg')}}" alt="google-icon" style="height: 1.6rem"/>
            <div class="fw-semibold text-secondary">Iniciar con Google</div>
        </a>
    </form>

</div>
@endsection

