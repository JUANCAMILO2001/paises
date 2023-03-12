<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - ACT Paises LCKM INNOVATY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            margin: 0;
            padding: 0;

        }
    </style>
</head>
<body style="overflow-x:hidden">
<!-- Form cerrar sesión-->
<form action="{{route('logout')}}" method="post" id="cerrar">
    @csrf
</form>
<!-- Encabezado Navbar Usuarios Autenticados-->
<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-earth-africa"></i>Actividad Paises - LCKM INNOVATY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Paises
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Crear Pais</a></li>
                            <li><a class="dropdown-item" href="#">Listar Paises</a></li>
                        </ul>
                    </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Departamentos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Crear Departamento</a></li>
                                <li><a class="dropdown-item" href="#">Listar Departamentos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Municipios
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Crear Municipio</a></li>
                                <li><a class="dropdown-item" href="#">Listar Municipios</a></li>
                            </ul>
                        </li>



                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown d-flex justify-content-end ">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{auth()->user()->email}}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"   onclick="document.getElementById('cerrar').submit()"><i class="fa-solid fa-right-from-bracket"></i>Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <div class="row">
        <div class="col-2 mt-2 border shadow">
            <form class="d-flex m-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>

            <div class="list-group m-3">
                <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action"><i class="fa-solid fa-house"></i>Inicio</a>
                <a href="{{route('countries.create')}}" class="list-group-item list-group-item-action"><i class="fa-solid fa-earth-africa"></i>Crear Pais</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fa-sharp fa-solid fa-building"></i>Crear Departamento</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fa-solid fa-earth-africa"></i>Crear Municipio</a>
                <a href="{{route('countries.index')}}" class="list-group-item list-group-item-action"><i class="fa-solid fa-bars-staggered"></i>Listar Pais</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fa-solid fa-bars-staggered"></i>Listar Departamento</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fa-solid fa-bars-staggered"></i>Listar Municipio</a>
            </div>


        </div>
        <div class="col-10 mt-5">
            @yield('content')
        </div>
    </div>

</main>

<footer>
    <div>

    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
