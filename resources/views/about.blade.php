@extends('layouts.master')

{{-- Details about me --}}
@section('content')
    <div class="about">
        <div class="about--banner">
            <h3><i>Si lo podemos imaginar, lo podemos programar</i></h3>
            <img src="{{ asset('/img/chris.jpg') }}" alt="about Us">
        </div>
        <div class="about--options">
            <a href="#0" id="showModalPersonal">
                <h3>Personal</h3>
            </a>
            <a href="#0" id="showModalEducation">
                <h3>Educación</h3>
            </a>
            {{-- Modal Personal --}}
            <div class="mainModal" id="modalPersonal" style="display: none">
                <div class="mainModal--lockup">
                    <div class="modal">
                        <div class="modal--spaceCloseButton">
                            <a href="#" class="hideModal" id="closePersonalModal"
                                onclick="showModals.hideModals(this)">
                                X
                            </a>
                        </div>
                        <div class="modal--information" style="display: flex; justify-content: center">
                            <div class="profile-card">
                                <div class="profile-cover">
                                    <div class="menu-container">
                                        <a class="list-icon" title="Expand" href="javascript:void(0);">
                                            <img width="40" height="40"
                                                src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/external-menu-web-flaticons-lineal-color-flat-icons-2.png"
                                                alt="external-menu-web-flaticons-lineal-color-flat-icons-2" />
                                        </a>
                                        <ul class="profile-actions" style="display: none;">
                                            <li>
                                                <a href="https://www.facebook.com/psychoenemyamott" target="_blank">
                                                    Facebook
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/christopherdo_" target="_blank">
                                                    Instagram
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.linkedin.com/in/christopher-diaz-osorio-741483126/"
                                                    target="_blank">
                                                    LinkedIn
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/ChristopherDO996" target="_blank">
                                                    Github
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="profile-avatar">
                                        <div class="btns-container">
                                            <div class="profile-links">
                                                <a class="read-more" href="#">
                                                    <img src="https://dl.dropboxusercontent.com/s/62dfoo9h44o58lw/more.png">
                                                </a>
                                                <a class="view-map" href="#">
                                                    <img
                                                        src="https://dl.dropboxusercontent.com/s/9ofmihok0h64lvn/location.png">
                                                </a>
                                            </div>
                                        </div>
                                        <a href="{{ asset('docs/CV-ESP.pdf') }}" download="cv_cdo_esp.pdf">
                                            <img src="{{ asset('img/personal.jpg') }}" alt="Christopher DO" />
                                        </a>
                                    </div>
                                    <div class="profile-details">
                                        <h1>Christopher D.O.</h1>
                                        <h6>Desarrollador Web Full Stack SR</h6>
                                    </div>
                                </div>
                                <div class="profile-info" style="display: none;">
                                    <h1>¿Quién soy?</h1>
                                    <div class="info-area">
                                        Hola! Bienvenido a mi sitio web, mi nombre es
                                        Christopher
                                        Díaz y soy un desarrollador web con cuatro años de
                                        experiencia a nivel profesional. Me especializo en la
                                        creación de sitios web altamente eficientes y la
                                        continuidad
                                        de proyectos ya existentes. Pero ¡Hey! También no soy
                                        sólo
                                        un desarrollador, también soy hamburguesero y
                                        parrillero,
                                        además de un amante de la música y entusiasta bailador.
                                        Te invito a que me conozcas y con gusto te puedo atender
                                        mediante mi formulario de contacto.
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="profile-map" style="display: none;">
                                    <iframe width="100%" height="150" frameborder="0" scrolling="no" marginheight="0"
                                        marginwidth="0"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d240864.19466148422!2d-99.30842579338243!3d19.390659363204488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce0026db097507%3A0x54061076265ee841!2sCiudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses!2smx!4v1688263555379!5m2!1ses!2smx"></iframe>
                                    <div class="clear"></div>
                                </div>
                                <div class="profile-content">
                                    <ul>
                                        <li>
                                            <div class="digits">4</div>
                                            Años de experiencia
                                        </li>
                                        <li>
                                            <div class="digits">8</div>
                                            Proyectos realizados desde cero
                                        </li>
                                        <li>
                                            <div class="digits">3</div>
                                            Proyectos con reingeniería
                                        </li>
                                        <li>
                                            <div class="digits">+30</div>
                                            Proyectos continuados
                                        </li>
                                        <li>
                                            <div class="digits">27</div>
                                            Años de edad
                                        </li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Modal Educación --}}
            <div class="mainModal" id="modalEducation" style="display: none">
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
            </div>
        </div>
    </div>
@endsection
