@extends('layouts.master')

{{-- Details about me --}}
@section('content')
    <div class="about">
        <div class="about--banner">
            <h3><i>Si lo podemos imaginar, lo podemos programar</i></h3>
            <div class="caroussel">
                <img class='photo' src="{{ asset('img/caroussel/1.jpg') }}" alt="picture_one" />
                <img class='photo' src="{{ asset('img/caroussel/2.jpg') }}" alt="picture_two" />
                <img class='photo' src="{{ asset('img/caroussel/3.jpg') }}" alt="picture_three" />
                <img class='photo' src="{{ asset('img/caroussel/4.jpg') }}" alt="picture_four" />
            </div>
        </div>
        <div class="about--options">
            {{-- Modal Personal --}}
            <a href="#0" class="modal-trigger" data-modal="modal-name">
                <h3>Personal</h3>
            </a>
            {{-- Modal Educación --}}
            <a href="#1" class="modal-trigger" data-modal="modal-education">
                <h3>Educación</h3>
            </a>
        </div>
    </div>

    {{-- Modals --}}
    {{-- Modal Personal --}}
    <div class="modal" id="modal-name">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="modal-header">
                <h1>Acerca de mí</h1>
                <div class="close-modal">&#10006;</div>
            </div>
            <div class="modal-body">
                <div class="cover">
                    <div class="circle-cover">
                        <a href="{{ asset('docs/cv.pdf') }}" download>
                            <img class='photo-cover' src="{{ asset('img/chris.jpg') }}" alt="profile" />
                        </a>
                    </div>
                    <div class="inside-chris">
                        <p>Christopher D. O. | Desarrollador Web Full Stack Senior</p>
                        <p>
                            Hola! Soy un desarrollador web especializado en los sistemas Web altamente eficientes y con un
                            enfoque ilimitado.
                            También soy un parrillero y apasionado fan de las hamburguesas. Un amante de la música, gymrat y
                            entusiasta bailador.
                            Bienvenido a mi espacio, conozcámonos mejor.
                        </p>
                    </div>
                </div>
                {{-- TODO: Animar cards --}}
                <div class="cards-modal">
                    <div>5 años de experiencia profesional</div>
                    <div>11 proyectos realizados desde cero</div>
                    <div>6 proyectos con reingeniería aplicada</div>
                    <div>Más de 30 proyectos continuados</div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal Educación --}}
    <div class="modal" id="modal-education">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="modal-header">
                <h1>Trayectoria académica</h1>
                <div class="close-modal">&#10006;</div>
            </div>
            <div class="modal-body">
                ON DEPLOY
            </div>
        </div>
    </div>

    <script src=" https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        $(".modal-trigger").click(function(e) {
            e.preventDefault();
            dataModal = $(this).attr("data-modal");
            $("#" + dataModal).css({
                "display": "block"
            });
            // $("body").css({"overflow-y": "hidden"}); //Prevent double scrollbar.
        });

        $(".close-modal, .modal-sandbox").click(function() {
            $(".modal").css({
                "display": "none"
            });
            // $("body").css({"overflow-y": "auto"}); //Prevent double scrollbar.
        });
    </script>
@endsection
