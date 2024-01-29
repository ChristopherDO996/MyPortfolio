@extends('partials/top')
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
                        <li><span>Experiencia</span></li>
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
                                <h1>Senior<br>Full Stack<br>Developer</h1>
                                <button class="cta animate__animated animate__jello">Contáctame
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118"
                                        style="enable-background:new 0 0 150 118;" xml:space="preserve">
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
                                    <h3>Bases de Datos</h3>
                                    <p>Diseño, construcción y gestión con más de <strong>4 años</strong> de experiencia.
                                    </p>
                                </div>
                                {{-- Second ability --}}
                                <div class="intro--abilities animate__animated animate__fadeInDownBig">
                                    <h3>Desarrollo Fullstack</h3>
                                    <p>He diseñado sitios estáticos y dinámicos a la medida, me respaldan <strong>4
                                            años</strong> de experiencia y un amplio portafolio de proyectos.
                                    </p>
                                </div>
                                {{-- Third ability --}}
                                <div class="intro--abilities animate__animated animate__lightSpeedInRight">
                                    <h3>Asesoría y acompañamiento</h3>
                                    <p>He participado en grandes proyectos asesorando a clientes
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
                                <h3>"Nunca confíes en un ordenador que no puedas tirar por la ventana"</h3>
                                <a href="https://twitter.com/devacademyla/status/630853710852280324"
                                    target="_blank"><i>Steve Wozniak</i>
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
                                            <div class="modal--information"
                                                style="display: flex; justify-content: center">
                                                <div class="profile-card">
                                                    <div class="profile-cover">
                                                        <div class="menu-container">
                                                            <a class="list-icon" title="Expand"
                                                                href="javascript:void(0);"></a>
                                                            <ul class="profile-actions" style="display: none;">
                                                                <li>
                                                                    <a href="https://www.facebook.com/psychoenemyamott"
                                                                        target="_blank">
                                                                        Facebook
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.instagram.com/christopherdo_"
                                                                        target="_blank">
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
                                                                    <a href="https://github.com/ChristopherDO996"
                                                                        target="_blank">
                                                                        Github
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="profile-avatar">
                                                            <div class="btns-container">
                                                                <div class="profile-links">
                                                                    <a class="read-more" href="#">
                                                                        <img
                                                                            src="https://dl.dropboxusercontent.com/s/62dfoo9h44o58lw/more.png">
                                                                    </a>
                                                                    <a class="view-map" href="#">
                                                                        <img
                                                                            src="https://dl.dropboxusercontent.com/s/9ofmihok0h64lvn/location.png">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <a href="{{ asset('docs/CV-ESP.pdf') }}"
                                                                download="cv_cdo_esp.pdf">
                                                                <img src="{{ asset('img/personal.jpg') }}"
                                                                    alt="Christopher DO" />
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
                                                            Hola! Bienvenido a mi sitio web, mi nombre es Christopher
                                                            Díaz y soy un desarrollador web con cuatro años de
                                                            experiencia a nivel profesional. Me especializo en la
                                                            creación de sitios web altamente eficientes y la continuidad
                                                            de proyectos ya existentes. Pero ¡Hey! También no soy sólo
                                                            un desarrollador, también soy hamburguesero y parrillero,
                                                            además de un amante de la música y entusiasta bailador.
                                                            Te invito a que me conozcas y con gusto te puedo atender
                                                            mediante mi formulario de contacto.
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="profile-map" style="display: none;">
                                                        <iframe width="100%" height="150" frameborder="0"
                                                            scrolling="no" marginheight="0" marginwidth="0"
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
                                <img src="{{ asset('/img/demo.jpeg') }}" alt="about Us">
                            </div>
                            <div class="about--options">
                                <a href="#0" id="showModalProfessional"
                                    style="background-image: url('https://images.pexels.com/photos/2102416/pexels-photo-2102416.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
                                    <h3>Laboral</h3>
                                </a>
                                <a href="#0" id="showModalAbilities"
                                    style="background-image: url('https://cdn.pixabay.com/photo/2018/05/08/08/44/artificial-intelligence-3382507_1280.jpg')">
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
                                                {{-- Timeline --}}
                                                <section id="timeline">
                                                    {{-- Virket --}}
                                                    <div class="tl-item">
                                                        <div class="tl-bg"
                                                            style="background-image: url(https://placeimg.com/801/801/nature)">
                                                        </div>

                                                        <div class="tl-year">
                                                            <p class="f2 heading--sanSerif">Feb/2019 - Jun/2020</p>
                                                        </div>

                                                        <div class="tl-content">
                                                            <h1>
                                                                <a href="https://virket.com/" target="_blank">
                                                                    Virket
                                                                </a>
                                                            </h1>
                                                            <p>Diseño de sitios web estáticos con partner GoDaddy.
                                                            </p>
                                                            <p>
                                                                <i>HTML5, CSS, Wordpress, Google PageSpeed</i>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    {{-- EPOEM 50 --}}
                                                    <div class="tl-item">
                                                        <div class="tl-bg"
                                                            style="background-image: url(https://placeimg.com/802/802/nature)">
                                                        </div>

                                                        <div class="tl-year">
                                                            <p class="f2 heading--sanSerif">May/2020 - Actualidad</p>
                                                        </div>

                                                        <div class="tl-content">
                                                            <h1>
                                                                <a href="https://pruebas.epoem50.edu.mx/"
                                                                    target="_blank">
                                                                    EPOEM 50
                                                                </a>
                                                            </h1>
                                                            <p>Desarrollo de plataforma CRM educativa que continúa en
                                                                operación.
                                                            </p>
                                                            <p>
                                                                <i>HTML5, CSS (Bootstrap 4), JS (jQuery y librerías),
                                                                    PHP (MVC), APIs, Git (Github y Webhooks) y MySQL</i>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    {{-- YKT --}}
                                                    <div class="tl-item">
                                                        <div class="tl-bg"
                                                            style="background-image: url(https://placeimg.com/803/803/nature)">
                                                        </div>

                                                        <div class="tl-year">
                                                            <p class="f2 heading--sanSerif">Jun/2021 - May/2022</p>
                                                        </div>

                                                        <div class="tl-content">
                                                            <h1>
                                                                <a href="http://servykt.homeip.net:8083/wykt/externo/index.html"
                                                                    target="_blank">
                                                                    Colegio YKT
                                                                </a>
                                                            </h1>
                                                            <p>Seguimiento a desarrollos, refactorización y creación de
                                                                plataformas para control interno del colegio.</p>
                                                            <p>
                                                                <i>HTML5, CSS (Bootstrap 4), JS (jQuery y librerías),
                                                                    PHP (Laravel 7 y API's|API RestFul), GIT y MySQL</i>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    {{-- MCK --}}
                                                    <div class="tl-item">
                                                        <div class="tl-bg"
                                                            style="background-image: url(https://placeimg.com/800/800/nature)">
                                                        </div>

                                                        <div class="tl-year">
                                                            <p class="f2 heading--sanSerif">May/2022 - Julio/2023</p>
                                                        </div>

                                                        <div class="tl-content">
                                                            <h1>
                                                                <a href="https://www.mck.agency/" target="_blank">
                                                                    MCK Agency
                                                                </a>
                                                            </h1>
                                                            <p>Creación de proyectos a gran escala, refactorización y
                                                                seguimiento a desarrollos en diferentes tecnologías</p>
                                                            <p>
                                                                <i>HTML5, CSS (Bootstrap 4 y 5, Tailwind 3, Less y
                                                                    SCSS),
                                                                    JS (Node JS, Vue JS), PHP
                                                                    (Laravel 7, API's|APIRest, CodeIgniter), GIT, MySQL,
                                                                    Google Cloud Platform, Linux y Docker.</i>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    {{-- Truper --}}
                                                    <div class="tl-item">
                                                        <div class="tl-bg"
                                                            style="background-image: url(https://placeimg.com/800/800/nature)">
                                                        </div>

                                                        <div class="tl-year">
                                                            <p class="f2 heading--sanSerif">Ago/2023 - Actualidad</p>
                                                        </div>

                                                        <div class="tl-content">
                                                            <h1>
                                                                <a href="https://www.mck.agency/" target="_blank">
                                                                    Corporativo Truper
                                                                </a>
                                                            </h1>
                                                            <p>Proyectos con impacto a nivel nacional e internacional
                                                            </p>
                                                            <p>
                                                                <i>-</i>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </section>
                                                {{-- End Timeline --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Modal Habilidades --}}
                                {{-- TODO: Desactivar scroll Y --}}
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
                                                <div class="title_modal">
                                                    <h3>
                                                        Estas son mis habilidades
                                                    </h3>
                                                </div>
                                                <div id="abilitiesCircles" style="overflow-y:hidden"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    {{-- Realized Projects --}}
                    <li class="l-section section">
                        <!-- Best on mobile with Gesture -->
                        <div class="container_gallery" id="mobile_control">
                            <div class="menu">
                                <span class="close"><i class="material-icons">close</i></span>
                            </div>
                            <div class="carousel">
                                {{-- TODO: Corregir, no se ve --}}
                                <div class="info_back">
                                    <h1>Proyecto EPOEM 50</h1>
                                </div>
                                {{-- TODO: Agregar botón de cerrar --}}
                                <div class="citem active" id="p0">
                                    <h1>Discover</h1>
                                    <p>
                                        The third planet from the sun, Earth is a waterworld, with two-thirds of the
                                        planet covered by ocean. It’s the only world known to harbor life. Earth’s
                                        atmosphere is rich in life-sustaining nitrogen and oxygen. Earth's surface
                                        rotates about its axis at 1,532 feet per second (467 meters per second) —
                                        slightly more than 1,000 mph (1,600 kph) — at the equator. The planet zips
                                        around the sun at more than 18 miles per second (29 km per second).
                                    </p>
                                    <ul>
                                        <li>Diameter: 7,926 miles (12,760 km)</li>
                                        <li>Orbit: 365.24 days</li>
                                        <li>Day: 23 hours, 56 minutes</li>
                                    </ul>
                                    <p>
                                        <span>Orbital characteristics</span>
                                        Earth spins on an imaginary line called an axis that runs from the North Pole to
                                        the South Pole, while also orbiting the sun. It takes Earth 23.439 hours to
                                        complete a rotation on its axis, and roughly 365.26 days to complete an orbit
                                        around the sun.
                                        Earth's axis of rotation is tilted in relation to the ecliptic plane, an
                                        imaginary surface through Earth's orbit around the sun. This means the northern
                                        and southern hemispheres will sometimes point toward or away from the sun
                                        depending on the time of year, varying the amount of light they receive and
                                        causing the seasons.
                                    </p>
                                </div>

                                <div class="citem" id="p1">
                                    <h1>Discover</h1>
                                    <p>
                                        The fourth planet from the sun, is a cold, dusty place. The dust, an iron oxide,
                                        gives the planet its reddish cast. Mars shares similarities with Earth: It is
                                        rocky, has mountains and valleys, and storm systems ranging from localized
                                        tornado-like dust devils to planet-engulfing dust storms. It snows on Mars. And
                                        Mars harbors water ice. Scientists think it was once wet and warm, though today
                                        it’s cold and desert-like.
                                        Mars' atmosphere is too thin for liquid water to exist on the surface for any
                                        length of time. Scientists think ancient Mars would have had the conditions to
                                        support life, and there is hope that signs of past life — possibly even present
                                        biology — may exist on the Red Planet.
                                    </p>
                                    <ul>
                                        <li>Diameter: 4,217 miles (6,787 km)</li>
                                        <li>Orbit: 687 Earth days</li>
                                        <li>Day: Just more than one Earth day (24 hours, 37 minutes)</li>
                                    </ul>
                                    <p>
                                        <span>Orbital characteristics</span>
                                        The axis of Mars, like Earth's, is tilted with relation to the sun. This means
                                        that like Earth, the amount of sunlight falling on certain parts of the planet
                                        can vary widely during the year, giving Mars seasons.

                                        However, the seasons that Mars experiences are more extreme than Earth's because
                                        the red planet's elliptical, oval-shaped orbit around the sun is more elongated
                                        than that of any of the other major planets. When Mars is closest to the sun,
                                        its southern hemisphere is tilted toward the sun, giving it a short, very hot
                                        summer, while the northern hemisphere experiences a short, cold winter. When
                                        Mars is farthest from the sun, the northern hemisphere is tilted toward the sun,
                                        giving it a long, mild summer, while the southern hemisphere experiences a long,
                                        cold winter.

                                        The tilt of Mars axis swings wildly over time because it is not stabilized by a
                                        large moon, such as on Earth. This led to different climates on its surface
                                        through its history. A 2017 study suggests that the changing tilt also
                                        influenced the release of methane into Mars' atmosphere, causing temporary
                                        warming periods that allowed water to flow.
                                    </p>
                                </div>

                                <div class="citem" id="p2">
                                    <h1>Discover</h1>
                                    <p>
                                        The fifth planet from the sun, Jupiter is huge and is the most massive planet in
                                        our solar system. It’s a mostly gaseous world, mostly hydrogen and helium. Its
                                        swirling clouds are colorful due to different types of trace gases. A big
                                        feature is the Great Red Spot, a giant storm which has raged for hundreds of
                                        years. Jupiter has a strong magnetic field, and with dozens of moons, it looks a
                                        bit like a miniature solar system.
                                    </p>
                                    <ul>
                                        <li>86,881 miles (139,822 km)</li>
                                        <li>Orbit: 11.9 Earth years</li>
                                        <li>Day: 9.8 Earth hours</li>
                                    </ul>
                                    <p>
                                        <span>Physical characteristics</span>
                                        Jupiter is the most massive planet in our solar system, more than twice as
                                        massive as all the other planets combined, and had it been about 80 times more
                                        massive, it would have actually become a star instead of a planet. Its
                                        atmosphere resembles that of the sun, made up mostly of hydrogen and helium, and
                                        with four large moons and many smaller moons in orbit around it, Jupiter by
                                        itself forms a kind of miniature solar system. All told, the immense volume of
                                        Jupiter could hold more than 1,300 Earths.
                                    </p>
                                </div>

                                <div class="citem" id="p3">
                                    <h1>Discover</h1>
                                    <p>
                                        The sixth planet from the sun is known most for its rings. When Galileo Galilei
                                        first studied Saturn in the early 1600s, he thought it was an object with three
                                        parts. Not knowing he was seeing a planet with rings, the stumped astronomer
                                        entered a small drawing — a symbol with one large circle and two smaller ones —
                                        in his notebook, as a noun in a sentence describing his discovery. More than 40
                                        years later, Christiaan Huygens proposed that they were rings. The rings are
                                        made of ice and rock. Scientists are not yet sure how they formed. The gaseous
                                        planet is mostly hydrogen and helium. It has numerous moons.
                                    </p>
                                    <ul>
                                        <li>Diameter: 74,900 miles (120,500 km)</li>
                                        <li>Orbit: 29.5 Earth years</li>
                                        <li>Day: About 10.5 Earth hours</li>
                                    </ul>
                                    <p>
                                        <span>Physical characteristics</span> Saturn is a gas giant made up mostly of
                                        hydrogen and helium. Saturn is big enough to hold more than 760 Earths, and is
                                        more massive than any other planet except Jupiter, roughly 95 times Earth's
                                        mass. However, Saturn has the lowest density of all the planets, and is the only
                                        one less dense than water — if there were a bathtub big enough to hold it,
                                        Saturn would float.

                                        The yellow and gold bands seen in Saturn's atmosphere are the result of
                                        super-fast winds in the upper atmosphere, which can reach up to 1,100 mph (1,800
                                        km/h) around its equator, combined with heat rising from the planet's interior.

                                        Saturn spins faster than any other planet except Jupiter, completing a rotation
                                        roughly every 10-and-a-half hours. This rapid spinning causes Saturn to bulge at
                                        its equator and flatten at its poles — the planet is 8,000 miles (13,000
                                        kilometers) wider at its equator than between the poles.
                                    </p>
                                </div>
                            </div>

                            <div class="content">
                                <h1 class="title">EPOEM 50</h1>
                                <div class="helmet">
                                    <img ondragstart="return false;" src="{{ asset('img/galleryBack.png') }}" />
                                    <div class="planet_position">
                                        <div class="planet_shadow"></div>
                                        <div class="planet_photo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="nav">
                                    <span id="next" class="action"><i
                                            class="material-icons">keyboard_arrow_left</i></span>
                                    <span id="prev" class="action"><i
                                            class="material-icons">keyboard_arrow_right</i></span>
                                </div>
                                <div class="orbit">
                                    <div class="planet_container">
                                        <div class="planet pt earth" id="pl0">
                                            <div class="moon">
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="planet mars" id="pl1">
                                            <div class="moon">
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="planet jupiter" id="pl2"></div>
                                        <div class="planet saturn" id="pl3">
                                            <div class="ring"></div>
                                        </div>
                                    </div>
                                    <div class="name_container">
                                        <p class="pn">EPOEM 50</p>
                                        <p class="more">Detalles de proyecto</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    {{-- Contact Form --}}
                    <li class="l-section section">
                        <div class="hire">
                            <h2>¿Qué tema deseas tratar conmigo?</h2>
                            <form class="work-request" id="formContact">
                                @csrf
                                <div class="work-request--options">
                                    {{-- Option Group One --}}
                                    <span class="options-a">
                                        {{-- Option One --}}
                                        <input id="opt-1" type="checkbox" value="cotizacion" re>
                                        <label for="opt-1">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;"
                                                xml:space="preserve">
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
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;"
                                                xml:space="preserve">
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
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;"
                                                xml:space="preserve">
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
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;"
                                                xml:space="preserve">
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
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;"
                                                xml:space="preserve">
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
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;"
                                                xml:space="preserve">
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

@extends('partials/end')
