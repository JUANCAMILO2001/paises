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
                        <a class="navbar-brand" href="{{route('dashboard')}}"><i class="fa-solid fa-earth-africa" style="margin-rights: 5px; color: #0DCAF0"></i>      ACT PAISES </a>
                    </div>
                </div>

                <div class = "navigation-bar-right col-6 d-flex align-items-center justify-content-end">



                    <li class="nav-item dropdown" style="list-style: none">
                        <a class="profile-btn  text-white btn-circle me-3 nav-link " title="{{auth()->user()->names}}  {{auth()->user()->lastnames}}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <img class="d-flex justify-content-center border  text-white btn-circle mt-3 mb-3 me-3" src="{{auth()->user()->avatar}}">
                        </a>
                        <ul class="dropdown-menu shadow-lg  mb-5 bg-body-tertiary rounded">
                            <div class="img-dropdown-user">

                            </div>
                            <div class="bg-overlay"></div>

                            <div class="dropdown-body-user">
                                <li class="d-flex justify-content-center">
                                    <img class="d-flex justify-content-center border  text-white btn-circle-user mt-3 mb-3 me-3" src="{{auth()->user()->avatar}}">
                                </li>
                                <li>
                                    <a class="dropdown-item disabled" href="#scrollspyHeading3">{{auth()->user()->names}}  {{auth()->user()->lastnames}}</a>
                                </li>
                                <li>
                                    <a class="dropdown-item disabled text-center " href="#scrollspyHeading3" style="font-size: 13px">{{auth()->user()->email}}</a>
                                </li>
                                <li><hr class="dropdown-divider"></li>


                                <li class = "navbar-sb-link my-3">
                                    <a href = "#" class = "dropdown-item text-decoration-none d-flex align-items-center justify-content-between">
                                        <div class = "text-light-blue d-flex align-items-center active-link">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class="fa-solid fa-gear"></i>
                                    </span>
                                            <span class = "navbar-sb-text fs-14 fw-5 text-capitalize ">Configuraciones</span>
                                        </div>
                                    </a>
                                </li>

                                <li class = "navbar-sb-link my-3 ">
                                    <a onclick="document.getElementById('cerrar').submit()" class = "dropdown-item text-decoration-none d-flex align-items-center justify-content-between">
                                        <div class = "text-light-blue d-flex align-items-center active-link">
                                    <span class = "navbar-sb-icon me-3 ">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                    </span>
                                            <span class = "navbar-sb-text fs-14 fw-5 text-capitalize ">Cerrar Sesión</span>
                                        </div>
                                    </a>
                                </li>
                            </div>



                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </nav>

    <div class = "navigation-overlay position-fixed"></div>

    <div class = "navigation-sidebar bg-light-grey">
        <div class = "navbar-sb-head d-flex justify-content-between align-items-center px-4">
            <a class="navbar-brand" href="{{route('dashboard')}}"><i class="fa-solid fa-earth-africa" style="margin-rights: 5px; color: #0DCAF0;"></i>      ACT PAISES </a>
            <button class = "navbar-close-btn text-grey-blue">
                <i class = 'fas fa-arrow-left'></i>
            </button>
        </div>

        <div class = "navbar-sb-list p-4">
            <div class = "navbar-sb-item mb-5">
                <h5 class = "text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">CREAR</h5>
                <ul class = "navbar-sb-links p-0 list-unstyled">
                    <li class = "navbar-sb-link my-3">
                        <a data-bs-toggle="modal" data-bs-target="#ModalNewPais" class = "text-decoration-none d-flex align-items-center justify-content-between">
                            <div class = "text-light-blue d-flex align-items-center">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class="fa-solid fa-earth-africa"></i>
                                    </span>
                                <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Paises</span>
                            </div>
                        </a>
                    </li>
                    <li class = "navbar-sb-link my-3">
                        <a data-bs-toggle="modal" data-bs-target="#ModalNewDepartamento" class = "text-decoration-none d-flex align-items-center justify-content-between">
                            <div class = "text-light-blue d-flex align-items-center">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class="fa-solid fa-earth-africa"></i>
                                    </span>
                                <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Departamentos</span>
                            </div>
                        </a>
                    </li>

                    <li class = "navbar-sb-link my-3">
                        <a data-bs-toggle="modal" data-bs-target="#ModalNewMunicipio" class = "text-decoration-none d-flex align-items-center justify-content-between">
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
                        <a href="{{route('countries.index')}}" class = "text-decoration-none d-flex align-items-center justify-content-between">
                            <div class = "text-light-blue d-flex align-items-center">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class="fa-solid fa-list"></i>
                                    </span>
                                <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Paises</span>
                            </div>
                        </a>
                    </li>
                    <li class = "navbar-sb-link my-3">
                        <a href = "{{route('departments.index')}}" class = "text-decoration-none d-flex align-items-center justify-content-between">
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
<div id="particles-js" style="height: 100vh">

</div>
<main class="bg-map">
    <div class="row">
        <div class = "dashboard-pg text-grey-blue">
            @yield('content')
        </div>



        <!-- Modal Nuevo Pais -->
        <div class="modal fade" id="ModalNewPais" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form action="{{route('countries.store')}}" method="post">
                        @csrf
                        @method('Post')
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Pais</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div>
                                    <label class="mt-4">Escriba el nombre de su nuevo Pais:</label>
                                    <div class="input-group mt-3 mb-3">
                                        <div class="input-group-text bg-info">
                                            <i class="fa-solid fa-earth-africa" style="color: white; font-size: 21px"></i>
                                        </div>
                                        <input class="form-control bg-light" name="name" type="text" placeholder="Nombre del Pais."/>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Crear Pais</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Modal Nuevo Municipio -->
        <div class="modal fade" id="ModalNewMunicipio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form action="">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Municipio</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div>
                                    <label class="mt-4">Escriba el nombre de su Nuevo Municipio:</label>
                                    <div class="input-group mt-3 mb-3">
                                        <div class="input-group-text bg-info">
                                            <i class="fa-solid fa-earth-africa" style="color: white; font-size: 21px"></i>
                                        </div>
                                        <input class="form-control bg-light" name="" type="text" placeholder="Nombre del Municipio."/>
                                    </div>
                                    <label class="mt-4">Seleccione a que Departamento pertenece:</label>
                                    <div class="input-group mt-3 mb-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
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
<script src="{{url('./recursos/js/particles.min.js')}}"></script>
<script src="{{url('./recursos/js/app-Dashboard.js')}}"></script>


</body>

</html>
