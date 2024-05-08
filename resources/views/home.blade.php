@extends('layouts.master')

{{-- Main Home --}}
@section('content')
    <div class="intro">
        <div class="intro--banner">
            <video src="{{ asset('img/fondo.mp4') }}" style="width: 100%;position: absolute;z-index: -1;" autoplay muted loop
                playsinline></video>
            <h1>Senior<br>Full Stack<br>Developer</h1>
            <a href="{{ route('contact') }}" class="cta animate__animated animate__jello">Contáctame
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                    <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                        <path
                            d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z" />
                    </g>
                </svg>
                <span class="btn-background"></span>
            </a>
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
                        <strong>&#x21bb;</strong>
                    </div>
                    <div class="back">
                        <p>Tú lo imaginas, yo lo diseño, lo programo, lo subo a internet y después lo administro.</p>
                        {{-- TODO: Linkear al portafolio --}}
                        <a href="#">Ver Portafolio</a>
                    </div>
                </div>
            </div>
            {{-- Databases Description Card --}}
            <div class="cardBox">
                <div class="card">
                    <div class="front">
                        <h3>Bases de datos</h3>
                        <p>Acerca el cursor</p>
                        <strong>&#x21bb;</strong>
                    </div>
                    <div class="back">
                        <p>Diseño bases de datos, las administro y también hago reingenierías.</p>
                        {{-- TODO: Agregar vista de bocetos realizados --}}
                        <a href="#">Ver ejemplos</a>
                    </div>
                </div>
            </div>
            {{-- Courses Description Card --}}
            <div class="cardBox">
                <div class="card">
                    <div class="front">
                        <h3>Asesorías y Mentorías</h3>
                        <p>Acerca el cursor</p>
                        <strong>&#x21bb;</strong>
                    </div>
                    <div class="back">
                        <p>Doy asesorías de desarrollo web e incluso clases desde básico a avanzado. Actualmente tengo tres
                            alumnos en mis clases privadas.</p>
                        {{-- TODO: Agregar link de cursos --}}
                        <a href="#">Ver trabajos de clases</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
