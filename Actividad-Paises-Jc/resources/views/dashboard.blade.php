@extends('layouts.app')
@section('title', 'DASHBOARD')
@section('content')



        <div class = "dashboard-main">
            <div class = "container mt-5">


                <div class = "overview-section p-4">
                    <div class = "row py-3">
                        <div class = "col-12 d-flex justify-content-between align-items-center">
                            <div class = "dashboard-title-text">
                                <h2>Bienvenido <span class="fst-italic">{{auth()->user()->names}}</span> </h2>
                                <p class = "text-grey">Este es un Software creado por <span class="fst-italic fw-bold">LCKM INNOVATY.</span></p>
                            </div>

                        </div>
                    </div>


                    <div class = "row overview-section-list gy-4">
                        <!-- Nuevo Pais-->
                        <div class = "col-md-6 col-lg-4">
                            <a href = "#" class = "text-decoration-none">
                                <div class = "overview-section-item bg-white p-4">
                                    <div class = "item-title text-cyan fs-4 fw-6 mb-1">
                                        <span class = "text-blue">Nuevo Pais</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Nuevo Departamento-->
                        <div class = "col-md-6 col-lg-4">
                            <a href = "#" class = "text-decoration-none">
                                <div class = "overview-section-item bg-white p-4">
                                    <div class = "item-title text-cyan fs-4 fw-6 mb-1">
                                        <span class = "text-blue">Nuevo Departamento</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Nuevo Municipio-->
                        <div class = "col-md-6 col-lg-4">
                            <a href = "#" class = "text-decoration-none">
                                <div class = "overview-section-item bg-white p-4">
                                    <div class = "item-title text-cyan fs-4 fw-6 mb-1">
                                        <span class = "text-blue">Nuevo Municipio</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Listar Pais-->
                        <div class = "col-md-6 col-lg-4">
                            <a href = "#" class = "text-decoration-none">
                                <div class = "overview-section-item bg-white p-4">
                                    <div class = "item-title text-cyan fs-4 fw-6 mb-1">
                                        <span class = "text-blue">Listar Pais</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Listar Departamento-->
                        <div class = "col-md-6 col-lg-4">
                            <a href = "#" class = "text-decoration-none">
                                <div class = "overview-section-item bg-white p-4">
                                    <div class = "item-title text-cyan fs-4 fw-6 mb-1">
                                        <span class = "text-blue">Listar Departamento</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Listar Municipio-->
                        <div class = "col-md-6 col-lg-4">
                            <a href = "#" class = "text-decoration-none">
                                <div class = "overview-section-item bg-white p-4">
                                    <div class = "item-title text-cyan fs-4 fw-6 mb-1">
                                        <span class = "text-blue">Listar Municipio</span>
                                    </div>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>

@endsection
