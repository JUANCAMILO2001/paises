<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - ACT Paises LCKM INNOVATY</title>
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{url('./recursos/css/style.css')}}">
</head>
<body style="overflow-x:hidden">
<!-- Form cerrar sesión-->
<form action="{{route('logout')}}" method="post" id="cerrar">
    @csrf
</form>
<!-- Encabezado Navbar Usuarios Autenticados-->
<header>
    <nav class = "navigation-bar d-flex align-items-center">
        <div class = "container">
            <div class = "row align-items-center">
                <div class = "navigation-bar-left col-6 d-flex align-items-center">
                    <button type = "button" class = "navbar-open-btn text-grey-blue me-3">
                        <i class = "fas fa-bars"></i>
                    </button>
                    <div class = "navbar-logo">
                        <a class="navbar-brand" href="#"><i class="fa-solid fa-earth-africa" style="margin-rights: 5px"></i>      ACT PAISES </a>
                    </div>
                </div>

                <div class = "navigation-bar-right col-6 d-flex align-items-center justify-content-end">



                    <li class="nav-item dropdown" style="list-style: none">
                        <a class="profile-btn bg-blue text-white btn-circle me-3 nav-link dropdown-toggle" title="{{auth()->user()->names}}  {{auth()->user()->lastnames}}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <i class = "fas fa-user"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <span class="d-flex justify-content-center profile-btn bg-blue text-white btn-circle me-3 nav-link dropdown-toggle"  style="margin-left: 65px;">
                                    <i class = "fas fa-user"></i>
                                </span>
                                <a class="dropdown-item disabled" href="#scrollspyHeading3">{{auth()->user()->email}}</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-gear"></i>   Configuraciones</a></li>
                            <li><a class="dropdown-item" onclick="document.getElementById('cerrar').submit()"><i class="fa-solid fa-right-from-bracket"></i>   Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </nav>

    <div class = "navigation-overlay position-fixed"></div>

    <div class = "navigation-sidebar bg-light-grey">
        <div class = "navbar-sb-head d-flex justify-content-between align-items-center px-4">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-earth-africa" style="margin-rights: 5px"></i>      ACT PAISES </a>
            <button class = "navbar-close-btn text-grey-blue">
                <i class = 'fas fa-arrow-left'></i>
            </button>
        </div>

        <div class = "navbar-sb-list p-4">
            <div class = "navbar-sb-item mb-5">
                <h5 class = "text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">CREAR</h5>
                <ul class = "navbar-sb-links p-0 list-unstyled">
                    <li class = "navbar-sb-link my-3">
                        <a href = "#" class = "text-decoration-none d-flex align-items-center justify-content-between">
                            <div class = "text-light-blue d-flex align-items-center">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class="fa-solid fa-earth-africa"></i>
                                    </span>
                                <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Paises</span>
                            </div>
                        </a>
                    </li>
                    <li class = "navbar-sb-link my-3">
                        <a href = "#" class = "text-decoration-none d-flex align-items-center justify-content-between">
                            <div class = "text-light-blue d-flex align-items-center">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class="fa-solid fa-earth-africa"></i>
                                    </span>
                                <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Departamentos</span>
                            </div>
                        </a>
                    </li>

                    <li class = "navbar-sb-link my-3">
                        <a href = "#" class = "text-decoration-none d-flex align-items-center justify-content-between">
                            <div class = "text-light-blue d-flex align-items-center">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class="fa-solid fa-earth-africa"></i>
                                    </span>
                                <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Municipios</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class = "navbar-sb-item mb-5">
                <h5 class = "text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">LISTAR</h5>
                <ul class = "navbar-sb-links p-0 list-unstyled">
                    <li class = "navbar-sb-link my-3">
                        <a href = "#" class = "text-decoration-none d-flex align-items-center justify-content-between">
                            <div class = "text-light-blue d-flex align-items-center">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class="fa-solid fa-list"></i>
                                    </span>
                                <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Paises</span>
                            </div>
                        </a>
                    </li>
                    <li class = "navbar-sb-link my-3">
                        <a href = "#" class = "text-decoration-none d-flex align-items-center justify-content-between">
                            <div class = "text-light-blue d-flex align-items-center">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class="fa-solid fa-list"></i>
                                    </span>
                                <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Departamentos</span>
                            </div>
                        </a>
                    </li>

                    <li class = "navbar-sb-link my-3">
                        <a href = "#" class = "text-decoration-none d-flex align-items-center justify-content-between">
                            <div class = "text-light-blue d-flex align-items-center">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class="fa-solid fa-list"></i>
                                    </span>
                                <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Municipios</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <div class = "navbar-sb-item mb-5">
                <h5 class = "text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">Opciones</h5>
                <ul class = "navbar-sb-links p-0 list-unstyled">
                    <li class = "navbar-sb-link my-3">
                        <a href = "#" class = "text-decoration-none d-flex align-items-center justify-content-between">
                            <div class = "text-light-blue d-flex align-items-center">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class="fa-solid fa-gear"></i>
                                    </span>
                                <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Configuraciones</span>
                            </div>
                        </a>
                    </li><li class = "navbar-sb-link my-3">
                        <a onclick="document.getElementById('cerrar').submit()" class = "text-decoration-none d-flex align-items-center justify-content-between">
                            <div class = "text-light-blue d-flex align-items-center">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                    </span>
                                <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Cerrar Sesión</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--
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
-->
</header>
<main>
    <div class="row">

        <div class = "dashboard-pg text-grey-blue">
            @yield('content')
        </div>
    </div>

</main>

<footer>
    <div>

    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="{{'./recursos/js/script.js'}}"></script>

</body>

</html>
