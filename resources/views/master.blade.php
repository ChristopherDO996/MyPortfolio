@extends('partials/top')
<!-- notification for small viewports and landscape oriented smartphones -->
<div class="device-notification">
    <a class="device-notification--logo" href="#0">
        <img src="{{ asset('/img/logo.png') }}" alt="Global">
        <p>Christopher DO</p>
    </a>
    <p class="device-notification--message">Global has so much to offer that we must request you orient your device to
        portrait or find a larger screen. You won't be disappointed.</p>
</div>

<div class="perspective effect-rotate-left">
    <div class="container">
        <div class="outer-nav--return"></div>
        <div id="viewport" class="l-viewport">
            <div class="l-wrapper">
                <header class="header">
                    <a class="header--logo" href="#0">
                        <img src="{{ asset('/img/logo.png') }}" alt="Global">
                        <p>Christopher Díaz Osorio</p>
                    </a>
                    <button class="header--cta cta">Contáctame</button>
                    <div class="header--nav-toggle">
                        <span></span>
                    </div>
                </header>
                <nav class="l-side-nav">
                    <ul class="side-nav">
                        <li class="is-active"><span>Inicio</span></li>
                        <li><span>Sobre mí</span></li>
                        <li><span>Habilidades</span></li>
                        <li><span>Proyectos</span></li>
                        <li><span>Contáctame</span></li>
                        {{-- <li><span>Blog</span></li> --}}
                    </ul>
                </nav>
                {{-- Main Body separated by list form --}}
                <ul class="l-main-content main-content">
                    {{-- Main Home --}}
                    <li class="l-section section section--is-active">
                        <div class="intro">
                            <div class="intro--banner">
                                <video src="{{ asset('img/fondo.mp4') }}"
                                    style="width: 100%;height: 95%;
                                position: absolute;
                                z-index: -1;"
                                    autoplay muted loop playsinline></video>
                                <h1>Full Stack<br>Developer<br>Middle</h1>
                                <button class="cta animate__animated animate__jello">Contáctame
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;"
                                        xml:space="preserve">
                                        <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                                            <path
                                                d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z" />
                                        </g>
                                    </svg>
                                    <span class="btn-background"></span>
                                </button>
                                {{-- <img src="{{ asset('/img/introduction-visual.png') }}" alt="Welcome"> --}}
                            </div>
                            {{-- Description about abilities --}}
                            <div class="intro--options">
                                {{-- First ability --}}
                                <div class="intro--abilities animate__animated animate__lightSpeedInLeft">
                                    <h3>Diseño, desarrollo y administración de BD</h3>
                                    <p>He diseñado, construido y gestionado bases de datos relacionales desde hace más
                                        de <strong>3 años.</strong></p>
                                </div>
                                {{-- Second ability --}}
                                <div class="intro--abilities animate__animated animate__fadeInDownBig">
                                    <h3>Diseño Front end e implementación back end</h3>
                                    <p>He diseñado sitios estáticos y dinámicos a la medida, así como construido el
                                        procesamiento a través del back end desde hace más de <strong>3 años.</strong>
                                    </p>
                                </div>
                                {{-- Third ability --}}
                                <div class="intro--abilities animate__animated animate__lightSpeedInRight">
                                    <h3>Asesoría y acompañamiento</h3>
                                    <p>He sido partícipe de grandes proyectos desde el simple asesoramiento a clientes
                                        diversos para asegurar un entregable de calidad y que cumpla con sus
                                        expectativas.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    {{-- Details about me --}}
                    <li class="l-section section">
                        <div class="about">
                            <div class="about--banner">
                                <h3>"Nunca confíes en una computadora que, no puedas tirar por la ventana"</h3>
                                <a href="https://twitter.com/devacademyla/status/630853710852280324"
                                    target="_blank">Steve Wozniak
                                    <span>
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;"
                                            xml:space="preserve">
                                            <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                                                <path
                                                    d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z" />
                                            </g>
                                        </svg>
                                    </span>
                                </a>
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
                                            <div class="modal--information">
                                                <p>Pawia 5, 31-154 Kraków, Poland</p>
                                                <a href="mailto:ouremail@gmail.com">ouremail@gmail.com</a>
                                                <a href="tel:+148126287560">+48 12 628 75 60</a>
                                            </div>
                                            <ul class="modal--options">
                                                <li><a href="#0">Bēhance</a></li>
                                                <li><a href="#0">dribbble</a></li>
                                                <li><a href="mailto:ouremail@gmail.com">Envíame un correo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{-- Modal Educación --}}
                                <div class="mainModal" id="modalEducation" style="display: none">
                                    <div class="mainModal--lockup" style="width: 60% !important">
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
                                                        <span class="point"></span>
                                                        <p class="description">
                                                            Primaria y secundaria
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="diplome">Medio Superior</p>
                                                        <span class="point"></span>
                                                        <p class="description">
                                                            Técnico en informática en CECyT 5 "Benito Juárez"
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="diplome">Superior</p>
                                                        <span class="point"></span>
                                                        <p class="description">
                                                            Licenciatura en Ciencias de la informática en UPIICSA-IPN
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
                    </li>
                    {{-- Abilities --}}
                    <li class="l-section section">
                        <div class="about">
                            <div class="about--banner">
                                <h2>"Si se puede <br>imaginar,<br>se puede <br>programar"</h2>
                                {{-- <a href="#0">Career
                                    <span>
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;"
                                            xml:space="preserve">
                                            <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                                                <path
                                                    d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z" />
                                            </g>
                                        </svg>
                                    </span>
                                </a> --}}
                                <img src="{{ asset('/img/demo.jpeg') }}" alt="about Us">
                            </div>
                            <div class="about--options">
                                <a href="#0" id="showModalProfessional">
                                    <h3>Laboral</h3>
                                </a>
                                <a href="#0" id="showModalAbilities">
                                    <h3>Habilidades</h3>
                                </a>
                                {{-- Modal Laboral --}}
                                <div class="mainModal" id="modalProfessional" style="display: none">
                                    <div class="mainModal--lockup">
                                        <div class="modal">
                                            <div class="modal--spaceCloseButton">
                                                <a href="#" class="hideModal" id="closeProfessionalModal"
                                                    onclick="showModals.hideModals(this)">
                                                    X
                                                </a>
                                            </div>
                                            <div class="modal--information">
                                                <p>Pawia 5, 31-154 Kraków, Poland</p>
                                                <a href="mailto:ouremail@gmail.com">ouremail@gmail.com</a>
                                                <a href="tel:+148126287560">+48 12 628 75 60</a>
                                            </div>
                                            <ul class="modal--options">
                                                <li><a href="#0">Bēhance</a></li>
                                                <li><a href="#0">dribbble</a></li>
                                                <li><a href="mailto:ouremail@gmail.com">Envíame un correo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{-- Modal Habilidades --}}
                                <div class="mainModal" id="modalAbilities" style="display: none">
                                    <div class="mainModal--lockup">
                                        <div class="modal">
                                            <div class="modal--spaceCloseButton">
                                                <a href="#" class="hideModal" id="closeAbilitiesModal"
                                                    onclick="showModals.hideModals(this)">
                                                    X
                                                </a>
                                            </div>
                                            <div class="modal--information">
                                                <p>Pawia 5, 31-154 Kraków, Poland</p>
                                                <a href="mailto:ouremail@gmail.com">ouremail@gmail.com</a>
                                                <a href="tel:+148126287560">+48 12 628 75 60</a>
                                            </div>
                                            <ul class="modal--options">
                                                <li><a href="#0">Bēhance</a></li>
                                                <li><a href="#0">dribbble</a></li>
                                                <li><a href="mailto:ouremail@gmail.com">Envíame un correo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    {{-- Realized Projects --}}
                    <li class="l-section section">
                        <div class="work">
                            <h2>Proyectos realizados</h2>
                            <div class="work--lockup">
                                <ul class="slider">
                                    {{-- Slider Item Ponte Visual --}}
                                    <li class="slider--item slider--item-left">
                                        <a href="https://ponte-visual.com" target="_blank">
                                            <div class="slider--item-image">
                                                <img src="{{ asset('/img/work-victory.jpg') }}" alt="Ponte Visual">
                                            </div>
                                            <p class="slider--item-title">Ponte Visual</p>
                                            <p class="slider--item-description">Agenda virtual de citas y portafolio
                                                fotográfico con pasarela de pagos.</p>
                                            <p class="slider--item-title">
                                                <i class="fa-brands fa-bootstrap"></i>
                                                <i class="fa-brands fa-js"></i>
                                                <i class="fa-brands fa-vuejs"></i>
                                                <i class="fa-brands fa-php"></i>
                                                <i class="fa-brands fa-laravel"></i>
                                                <i class="fa-brands fa-github"></i>
                                            </p>
                                        </a>
                                    </li>
                                    {{-- Slider Item EPOEM 50 --}}
                                    <li class="slider--item slider--item-center">
                                        <a href="https://pruebas.epoem50.edu.mx" target="_blank">
                                            <div class="slider--item-image">
                                                <img src="{{ asset('/img/work-metiew-smith.jpg') }}" alt="Epoem 50">
                                            </div>
                                            <p class="slider--item-title">EPOEM 50</p>
                                            <p class="slider--item-description">Sistema educativo tipo Moodle a la
                                                medida de la EPO 50
                                            </p>
                                            <p class="slider--item-title">
                                                <i class="fa-brands fa-bootstrap"></i>
                                                <i class="fa-brands fa-js"></i>
                                                <i class="fa-brands fa-php"></i>
                                                <i class="fa-solid fa-database"></i>
                                                <i class="fa-brands fa-github"></i>
                                                <i class="fa-solid fa-webhook"></i>
                                            </p>
                                        </a>
                                    </li>
                                    {{-- Slider Item Batas Yeah --}}
                                    <li class="slider--item slider--item-right">
                                        <a href="https://batasyea.com" target="_blank">
                                            <div class="slider--item-image">
                                                <img src="{{ asset('/img/work-alex-nowak.jpg') }}" alt="Batas Yeah">
                                            </div>
                                            <p class="slider--item-title">Batas Yeah</p>
                                            <p class="slider--item-description">Tienda virtual con pasarelas de pagos,
                                                gestión de inventarios y control de productos.</p>
                                            <p class="slider--item-title">
                                                <i class="fa-brands fa-css3"></i>
                                                <i class="fa-brands fa-js"></i>
                                                <i class="fa-brands fa-vuejs"></i>
                                                <i class="fa-brands fa-php"></i>
                                                <i class="fa-brands fa-laravel"></i>
                                                <i class="fa-brands fa-github"></i>
                                            </p>
                                        </a>
                                    </li>
                                    {{-- Slider Item Burger Club Brothers --}}
                                    <li class="slider--item slider--item-right">
                                        <a href="https://bcb.developher.me" target="_blank">
                                            <div class="slider--item-image">
                                                <img src="{{ asset('/img/work-alex-nowak.jpg') }}" alt="BCB">
                                            </div>
                                            <p class="slider--item-title">Burger Club Brothers</p>
                                            <p class="slider--item-description">
                                                Web de restaurante, CRM y PWA</p>
                                            <p class="slider--item-title">
                                                <i class="fa-brands fa-css3"></i>
                                                <i class="fa-brands fa-js"></i>
                                                <i class="fa-brands fa-angular"></i>
                                                <i class="fa-brands fa-php"></i>
                                                <i class="fa-brands fa-laravel"></i>
                                                <i class="fa-brands fa-github"></i>
                                                <i class="fa-regular fa-laptop-mobile"></i>
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                                <div class="slider--prev">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;"
                                        xml:space="preserve">
                                        <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                                            <path
                                                d="M561,1169C525,1155,10,640,3,612c-3-13,1-36,8-52c8-15,134-145,281-289C527,41,562,10,590,10c22,0,41,9,61,29
                      c55,55,49,64-163,278L296,510h575c564,0,576,0,597,20c46,43,37,109-18,137c-19,10-159,13-590,13l-565,1l182,180
                      c101,99,187,188,193,199c16,30,12,57-12,84C631,1174,595,1183,561,1169z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="slider--next">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;"
                                        xml:space="preserve">
                                        <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                                            <path
                                                d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </li>
                    {{-- Contact Form --}}
                    <li class="l-section section">
                        <div class="hire">
                            <h2>¿Qué tema deseas tratar conmigo?</h2>
                            <form class="work-request" id="formContact">
                                <div class="work-request--options">
                                    {{-- Option Group One --}}
                                    <span class="options-a">
                                        {{-- Option One --}}
                                        <input id="opt-1" type="checkbox" value="cotizacion" re>
                                        <label for="opt-1">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                y="0px" viewBox="0 0 150 111"
                                                style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                                <g
                                                    transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                                    <path
                                                        d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z" />
                                                </g>
                                            </svg>
                                            Cotización
                                        </label>
                                        {{-- Option Two --}}
                                        <input id="opt-2" type="checkbox" value="asesoria">
                                        <label for="opt-2">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                y="0px" viewBox="0 0 150 111"
                                                style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                                <g
                                                    transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                                    <path
                                                        d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z" />
                                                </g>
                                            </svg>
                                            Asesoría
                                        </label>
                                        {{-- Option Three --}}
                                        <input id="opt-3" type="checkbox" value="capacitacion">
                                        <label for="opt-3">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                y="0px" viewBox="0 0 150 111"
                                                style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                                <g
                                                    transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                                    <path
                                                        d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z" />
                                                </g>
                                            </svg>
                                            Capacitación
                                        </label>
                                    </span>
                                    {{-- Option Group Two --}}
                                    <span class="options-b">
                                        {{-- Option Four --}}
                                        <input id="opt-4" type="checkbox" value="trabajo">
                                        <label for="opt-4">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                y="0px" viewBox="0 0 150 111"
                                                style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                                <g
                                                    transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                                    <path
                                                        d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z" />
                                                </g>
                                            </svg>
                                            Oferta laboral
                                        </label>
                                        {{-- Option Five --}}
                                        <input id="opt-5" type="checkbox" value="sugerencia">
                                        <label for="opt-5">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                y="0px" viewBox="0 0 150 111"
                                                style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                                <g
                                                    transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                                    <path
                                                        d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z" />
                                                </g>
                                            </svg>
                                            Friendly Suggest
                                        </label>
                                        {{-- Option Six --}}
                                        <input id="opt-6" type="checkbox" value="curso">
                                        <label for="opt-6">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                y="0px" viewBox="0 0 150 111"
                                                style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                                <g
                                                    transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                                    <path
                                                        d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z" />
                                                </g>
                                            </svg>
                                            Cursos
                                        </label>
                                    </span>
                                </div>
                                <div class="work-request--information">
                                    <div class="information-name">
                                        <input id="name" type="text" spellcheck="false">
                                        <label for="name">Nombre completo</label>
                                    </div>
                                    <div class="information-email">
                                        <input id="email" type="email" spellcheck="false">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="information-phone">
                                        <input id="phone" type="text" spellcheck="false">
                                        <label for="phone">Teléfono</label>
                                    </div>
                                    <div class="button-clear">
                                        <button type="button" id="clear">Limpiar</button>
                                    </div>
                                </div>
                                <input type="submit" value="Enviar" id="send">
                            </form>
                        </div>
                    </li>
                    {{-- Blog --}}
                    {{-- <li class="l-section section">
                        <div class="contact">
                            <div class="contact--lockup">
                                <div class="modal">
                                    <div class="modal--information">
                                        <p>Pawia 5, 31-154 Kraków, Poland</p>
                                        <a href="mailto:ouremail@gmail.com">ouremail@gmail.com</a>
                                        <a href="tel:+148126287560">+48 12 628 75 60</a>
                                    </div>
                                    <ul class="modal--options">
                                        <li><a href="#0">Bēhance</a></li>
                                        <li><a href="#0">dribbble</a></li>
                                        <li><a href="mailto:ouremail@gmail.com">Envíame un correo</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
    <ul class="outer-nav">
        <li class="is-active">Inicio</li>
        <li>Sobre mí</li>
        <li>Habilidades</li>
        <li>Proyectos</li>
        <li>Contáctame</li>
        {{-- <li>Blog</li> --}}
    </ul>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="{{ asset(' / js / vendor / jquery - 2.2 .4.min.js') }}"><\/script>')
</script>
<script src="{{ asset('js/functions-min.js') }}"></script>
<script src="{{ asset('js/actions.js') }}"></script>
@extends('partials/end')
