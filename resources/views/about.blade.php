@extends('layouts.master')

{{-- Details about me --}}
@section('content')
    <style>
        .modal,
        .modal-box {
            z-index: 900;
        }

        .modal-sandbox {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: transparent;
        }

        .modal {
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, .8);
            overflow: auto;
        }

        .modal-box {
            position: relative;
            width: 80%;
            max-width: 920px;
            margin: 100px auto;
            animation-name: modalbox;
            animation-duration: .4s;
            animation-timing-function: cubic-bezier(0, 0, .3, 1.6);
        }

        .modal-header {
            padding: 20px 40px;
            background: #546E7A;
            color: #ffffff;
        }

        .modal-body {
            background: #ECEFF1;
            padding: 60px 40px;
        }

        /* Close Button */
        .close-modal {
            text-align: right;
            cursor: pointer;
        }

        /* Animation */
        @-webkit-keyframes modalbox {
            0% {
                top: -250px;
                opacity: 0;
            }

            100% {
                top: 0;
                opacity: 1;
            }
        }

        @keyframes modalbox {
            0% {
                top: -250px;
                opacity: 0;
            }

            100% {
                top: 0;
                opacity: 1;
            }
        }

        /* Aditional Styles */
        * {
            font-family: "Roboto", sans-serif;
            font-weight: normal;
        }

        p {
            line-height: 1.4em;
        }

        body {
            background: #B0BEC5;
        }

        .modal-trigger,
        button {
            top: 50%;
            left: 50%;
            padding: 20px 40px;
            background: transparent;
            color: #ffffff;
            border: 1px solid #ffffff;
            text-decoration: none;
        }

        .modal-trigger {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            transition: ease .2s;
        }

        button {
            border: 1px solid #333333;
            outline: none;
            color: #333333;
        }

        .modal-trigger:hover {
            padding: 20px 60px;
        }
    </style>
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
            <a href="#0" class="modal-trigger" data-modal="modal-name">
                <h3>Personal</h3>
            </a>
            <a href="#0" id="showModalEducation">
                <h3>Educación</h3>
            </a>
            {{-- Modal Personal --}}
            <!-- Modal -->
            <div class="modal" id="modal-name">
                <div class="modal-sandbox"></div>
                <div class="modal-box">
                    <div class="modal-header">
                        <div class="close-modal">&#10006;</div>
                        <h1>Simple modal box</h1>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic soluta saepe, atque, iure quidem
                            maiores non dolores, fuga eaque voluptatibus corporis accusantium quas. Eligendi velit eum
                            fugiat eius? Distinctio reiciendis sint error, repellat ut soluta doloremque, accusamus vitae
                            placeat?</p>
                        <p>Laboriosam voluptas, iure rem provident laborum culpa atque fugit inventore sit. Corrupti dolore
                            architecto inventore officia, odit totam voluptatem laboriosam tempore reiciendis, et neque,
                            consequuntur. Non, tenetur? Tempore reprehenderit tenetur nemo asperiores alias commodi
                            assumenda architecto minima numquam repellendus debitis nulla, rerum officia itaque, sunt nihil
                            sequi quod perspiciatis, animi quas voluptates velit aperiam voluptatem.</p>
                        <br />
                        <button class="close-modal">Close!</button>
                    </div>
                </div>
            </div>

            <!-- Aditional Styles -->
            <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
            {{-- Modal Educación --}}
            {{-- <div class="mainModal" id="modalEducation" style="display: none">
                <div class="mainModal--lockup">
                    <div class="modal">
                        <div class="modal--spaceCloseButton">
                            <a href="#" class="hideModal" id="closeEducationModal"
                                onclick="showModals.hideModals(this)">
                                X
                            </a>
                        </div>
                        <div class="modal--information">
                            <div class="title_modal">
                                <h3>Conoce mi trayectoria escolar</h3>
                            </div>
                            <ol>
                                <li>
                                    <p class="diplome">Educación Básica</p>
                                    <div class="loader loader-2"></div>
                                    <p class="description">
                                        Primaria y secundaria
                                    </p>
                                </li>
                                <li>
                                    <p class="diplome">Medio Superior</p>
                                    <div class="loader loader-2"></div>
                                    <p class="description">
                                        Técnico en informática en CECyT 5 "Benito Juárez"
                                    </p>
                                </li>
                                <li>
                                    <p class="diplome">Superior</p>
                                    <div class="loader loader-2"></div>
                                    <p class="description">
                                        Licenciatura en Ciencias de la informática en
                                        UPIICSA-IPN
                                        <br>
                                        (En proceso de titulación)
                                    </p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <script src=" https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        /*
                    ===============================================================

                    Hi! Welcome to my little playground!

                    My name is Tobias Bogliolo. 'Open source' by default and always 'responsive',
                    I'm a publicist, visual designer and frontend developer based in Barcelona.

                    Here you will find some of my personal experiments. Sometimes usefull,
                    sometimes simply for fun. You are free to use them for whatever you want
                    but I would appreciate an attribution from my work. I hope you enjoy it.

                    ===============================================================
                    */

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
