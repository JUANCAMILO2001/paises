@extends('layouts.guest')
@section('title', 'Registrar')
@section('content')
    <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">
        <div class="d-flex justify-content-center">
            <img src="{{url('recursos/img/login-icon.svg')}}" alt="login-icon" style="height: 7rem"/>
        </div>
        <div class="text-center fs-1 fw-bold">Registrarse</div>
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="input-group mt-4">
                <div class="input-group-text bg-info">
                    <img src="{{url('recursos/img/username-icon.svg')}}" alt="username-icon" style="height: 1rem"/>
                </div>
                <input class="form-control bg-light" name="names" type="text" placeholder="Nombre"/>
            </div>

            <div class="input-group mt-4">
                <div class="input-group-text bg-info">
                    <img src="{{url('recursos/img/username-icon.svg')}}" alt="username-icon" style="height: 1rem"/>
                </div>
                <input class="form-control bg-light" name="lastnames" type="text" placeholder="Apellido"/>
            </div>

            <div class="input-group mt-4">
                <div class="input-group-text bg-info">
                    <img src="{{url('recursos/img/email-icon.png')}}" alt="username-icon" style="height: 1rem"/>
                </div>
                <input class="form-control bg-light" name="email" type="email" placeholder="Correo"/>
            </div>

            <div class="input-group mt-4">
                <div class="input-group-text bg-info">
                    <img src="{{url('recursos/img/password-icon.svg')}}" alt="password-icon" style="height: 1rem"/>
                </div>
                <input class="form-control bg-light" name="password" type="password" placeholder="Contraseña"/>
            </div>

            <div class="input-group mt-4">
                <div class="input-group-text bg-info">
                    <img src="{{url('recursos/img/password-icon.svg')}}" alt="password-icon" style="height: 1rem"/>
                </div>
                <input class="form-control bg-light" name="password" type="password" placeholder="Confirmar Contraseña"/>
            </div>

            <div class="d-flex justify-content-around mt-3">

                <div class="pt-1">
                    <a href="{{route('login')}}" class="text-decoration-none text-info fw-semibold fst-italic" style="font-size: 0.9rem">Ya tienes Cuenta? ¡Accede Ahora!</a>
                </div>
            </div>
            <div class=" ">
                <button type="submit" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm">Registrarse</button>
            </div>
            <div class="p-3">
                <div class="border-bottom text-center" style="height: 0.9rem">
                    <span class="bg-white px-3">O</span>
                </div>
            </div>
            <div
                class="btn d-flex gap-2 justify-content-center border mt-3 shadow-sm"
            >
                <img src="{{url('recursos/img/google-icon.svg')}}" alt="google-icon" style="height: 1.6rem"/>
                <div class="fw-semibold text-secondary">Registrate con Google</div>
            </div>
        </form>

    </div>
@endsection
