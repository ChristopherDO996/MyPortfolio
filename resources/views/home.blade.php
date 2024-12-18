@extends('layouts.master')

{{-- Main Home --}}
@section('content')
    <div class="intro">
        <div class="intro--banner">
            <h1>Senior Full Stack Developer</h1>
            <video src="{{ asset('img/fondo.mp4') }}" style="width: 100%;position: absolute;" autoplay muted loop
                playsinline></video>
        </div>
    </div>
    <div class="intro--services">
        <div class="boxesContainer">
            {{-- Full Stack Description Card --}}
            <div class="cardBox animate__animated animate__zoomInUp">
                <div class="card">
                    <div class="front" style="background-image: url({{ asset('img/jupiter.gif') }})">
                        <h3>Desarrollo Web Full Stack</h3>
                        <p>Acerca el cursor</p>
                        <strong><i class="fa-solid fa-rotate"></i></strong>
                    </div>
                    <div class="back">
                        <p>
                            Más de <strong>5 años</strong> de experiencia en el mundo del desarrollo de aplicaciones Web
                            de alto nivel.
                        </p>
                        {{-- TODO: Linkear al portafolio --}}
                        <a href="{{ route('portfolio') }}">Ver Portafolio</a>
                    </div>
                </div>
            </div>
            {{-- Databases Description Card --}}
            <div class="cardBox animate__animated animate__zoomInUp">
                <div class="card">
                    <div class="front" style="background-image: url({{ asset('img/tierra.gif') }})">
                        <h3>Bases de datos</h3>
                        <p>Acerca el cursor</p>
                        <strong><i class="fa-solid fa-rotate"></i></strong>
                    </div>
                    <div class="back">
                        <p>
                            Diseño, construcción y administración de bases de datos relacionales de alto impacto.
                        </p>
                        {{-- TODO: Agregar vista de bocetos realizados --}}
                        <a href="#">Panorama técnico</a>
                    </div>
                </div>
            </div>
            {{-- Courses Description Card --}}
            <div class="cardBox animate__animated animate__zoomInUp">
                <div class="card">
                    <div class="front" style="background-image: url({{ asset('img/venus.gif') }})">
                        <h3>Asesorías y Mentorías</h3>
                        <p>Acerca el cursor</p>
                        <strong><i class="fa-solid fa-rotate"></i></strong>
                    </div>
                    <div class="back">
                        <p>
                            Clases privadas a estudiantes que comienzan su vida profesional en el mundo del desarrollo web.
                        </p>
                        {{-- TODO: Agregar link de cursos --}}
                        <a href="{{ route('contact') }}">Contáctame</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
