@extends('layouts.master')

{{-- Main Home --}}
@section('content')
    <div class="intro">
        <div class="intro--banner">
            <video src="{{ asset('img/fondo.mp4') }}" style="width: 100%;position: absolute;z-index: -1;" autoplay muted loop
                playsinline></video>
            <h1>Senior<br>Full Stack<br>Developer</h1>
        </div>
    </div>
    <div class="intro--services">
        <div class="boxesContainer">
            {{-- Full Stack Description Card --}}
            <div class="cardBox">
                <div class="card">
                    <div class="front">
                        <h3>Desarrollo Web Full Stack</h3>
                        <p>Acerca el cursor</p>
                        <strong><i class="fa-solid fa-rotate"></i></strong>
                    </div>
                    <div class="back">
                        <p>
                            Cerca de <strong>5 años</strong> de experiencia en el mundo del desarrollo de aplicaciones Web
                            de alto nivel y performance desde el interior (back end) hasta el exterior (front end).
                        </p>
                        {{-- TODO: Linkear al portafolio --}}
                        <a href="{{ route('portfolio') }}">Ver Portafolio</a>
                    </div>
                </div>
            </div>
            {{-- Databases Description Card --}}
            <div class="cardBox">
                <div class="card">
                    <div class="front">
                        <h3>Bases de datos</h3>
                        <p>Acerca el cursor</p>
                        <strong><i class="fa-solid fa-rotate"></i></strong>
                    </div>
                    <div class="back">
                        <p>
                            En paralelo con mi experiencia como Full Stack Dev, también he diseñado, construido y
                            administrado bases de datos relacionales para las distintas tecnologías que conozco.
                        </p>
                        {{-- TODO: Agregar vista de bocetos realizados --}}
                        <a href="#">Panorama técnico</a>
                    </div>
                </div>
            </div>
            {{-- Courses Description Card --}}
            <div class="cardBox">
                <div class="card">
                    <div class="front">
                        <h3>Asesorías y Mentorías</h3>
                        <p>Acerca el cursor</p>
                        <strong><i class="fa-solid fa-rotate"></i></strong>
                    </div>
                    <div class="back">
                        <p>
                            Actualmente doy clases privadas a tres estudiantes que comienzan su vida profesional en el mundo
                            del desarrollo web. Además, también doy asesorías a proyectos en crecimiento.
                        </p>
                        {{-- TODO: Agregar link de cursos --}}
                        <a href="{{ route('contact') }}">Contáctame</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
