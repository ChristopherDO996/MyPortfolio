@extends('layouts.master')

{{-- Abilities --}}
@section('content')
    <link rel="stylesheet" href="{{ asset('css/job.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <div class="about">
        <div class="about--experience" id="showContentExperience">
            {{-- TODO: --}}
            <div class="square linkedin">
                <span></span>
                <span></span>
                <span></span>
                <div class="content">
                    <h2>
                        LinkedIn
                    </h2>
                    <p>This is where I network and build my professional portfolio</p>
                    <a href="https://www.linkedin.com/in/adamdipinto/" target="_blank">_adamdipinto</a>
                </div>
            </div>

            <div class="square twitter">
                <span></span>
                <span></span>
                <span></span>
                <div class="content">
                    <h2>
                        Twitter
                    </h2>
                    <p>This is where I read news and network with different social groups</p>
                    <a href="https://twitter.com/AdamDipinto" target="_blank">@AdamDipinto</a>
                </div>
            </div>

            <div class="square github">
                <span></span>
                <span></span>
                <span></span>
                <div class="content">
                    <h2>
                        Github
                    </h2>
                    <p>This is where I share code and work on projects</p>
                    <a href="https://github.com/atom888" target="_blank">atom888</a>
                </div>
            </div>
            {{-- TODO: --}}
        </div>
        <div class="about--options">
            <a href="#0" class="modal-trigger" data-modal="modal-job"
                style="background-image: url('https://cdn-icons-png.flaticon.com/512/5072/5072860.png')">
                <h3>Laboral</h3>
            </a>
        </div>
    </div>

    {{-- Modal Laboral --}}
    <div class="modal" id="modal-job" style="display: none">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="modal-header">
                <h1>Trayectoria Profesional</h1>
                <div class="close-modal">&#10006;</div>
            </div>
            <div class="modal-body">
                <div class="wrapper">
                    <section class="block">
                        <div class="each-year">
                            <div class="title">2016</div>
                            <div class="each-event">
                                <div class="event-description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam molestiae sint ut sit
                                    sed impedit, minus, eligendi modi.
                                </div>
                            </div>

                            <div class="each-event">
                                <div class="event-description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, vitae, ex
                                    voluptates repudiandae molestias modi veniam cumque, iusto qui quia illum ipsa laborum
                                    adipisci porro nulla magnam error eligendi? Quos!
                                </div>
                            </div>

                            <div class="each-event">
                                <div class="event-description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, vitae, ex
                                    voluptates repudiandae molestias modi veniam cumque, iusto qui quia illum ipsa laborum
                                    adipisci porro nulla magnam error eligendi? Quos!
                                </div>
                            </div>

                            <div class="each-event">
                                <div class="event-description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, vitae, ex
                                    voluptates repudiandae molestias modi veniam cumque, iusto qui quia illum ipsa laborum
                                    adipisci porro nulla magnam error eligendi? Quos!
                                </div>
                            </div>

                            <div class="each-event">
                                <div class="event-description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, vitae, ex
                                    voluptates repudiandae molestias modi veniam cumque, iusto qui quia illum ipsa laborum
                                    adipisci porro nulla magnam error eligendi? Quos!
                                </div>
                            </div>

                            <div class="each-event">
                                <div class="event-description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, vitae, ex
                                    voluptates repudiandae molestias modi veniam cumque, iusto qui quia illum ipsa laborum
                                    adipisci porro nulla magnam error eligendi? Quos!
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="block">
                        <div class="each-year">
                            <div class="title">2015</div>
                            <div class="each-event">
                                <div class="event-description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
