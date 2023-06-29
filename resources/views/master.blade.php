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
                        <li><span>Blog</span></li>
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
                                <div class="contact" id="modalPersonal" style="display: none">
                                    <div id="open-modal" class="modal-window">
                                        <div>
                                          <a href="#" title="Close" class="modal-close">Close</a>
                                          <h1>Voilà!</h1>
                                          <div>A CSS-only modal based on the :target pseudo-class. Hope you find it helpful.</div>
                                          <br>
                                          <div><small>Check out 👇</small></div>
                                          <a href="https://chrome.google.com/webstore/detail/chroma/pkgejkfioihnchalojepdkefnpejomgn?utm_campaign=chromapromo&utm_source=codepen.io" target="_blank">
                                      
                                            <svg class="logo" width="244" height="52" viewBox="0 0 244 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M25.6002 0.000182857V25.6002H51.2002C51.2002 18.8105 48.503 12.2992 43.7019 7.49824C38.9012 2.69714 32.3895 0 25.6 0L25.6002 0.000182857Z" fill="#F6BAC1" />
                                              <path d="M0.000182757 0.000182857V25.6002H25.6002C25.6002 18.8105 22.9031 12.2992 18.102 7.49824C13.3012 2.69714 6.78949 0 0 0L0.000182757 0.000182857Z" fill="#016B55" />
                                              <path d="M25.6002 25.6003V51.2003H51.2002C51.2002 44.4106 48.503 37.8993 43.7019 33.0983C38.9012 28.2972 32.3895 25.6001 25.6 25.6001L25.6002 25.6003Z" fill="#F39202" />
                                              <path d="M25.6001 38.4001C25.6001 45.4694 19.8694 51.2001 12.8001 51.2001C5.73086 51.2001 0.00012207 45.4694 0.00012207 38.4001C0.00012207 31.3308 5.73086 25.6001 12.8001 25.6001C19.8694 25.6001 25.6001 31.3308 25.6001 38.4001Z" fill="#68B5D8" />
                                              <path d="M97.7537 32.9839L96.8897 39.0319C95.6417 39.8639 94.3137 40.5039 92.9057 40.9519C91.4977 41.3679 90.0577 41.5759 88.5857 41.5759C84.9377 41.5759 81.9617 40.4079 79.6577 38.0719C77.3537 35.7359 76.2017 32.6799 76.2017 28.9039C76.2017 25.2559 77.4177 22.2319 79.8497 19.8319C82.3137 17.3999 85.4177 16.1839 89.1617 16.1839C90.7297 16.1839 92.1697 16.4079 93.4817 16.8559C94.7937 17.2719 96.0417 17.9439 97.2257 18.8719V25.2559H97.1297C95.6897 23.8799 94.3457 22.8879 93.0977 22.2799C91.8497 21.6399 90.5857 21.3199 89.3057 21.3199C87.1937 21.3199 85.4337 22.0399 84.0257 23.4799C82.6497 24.9199 81.9617 26.7119 81.9617 28.8559C81.9617 31.0639 82.6177 32.8719 83.9297 34.2799C85.2737 35.6879 86.9857 36.3919 89.0657 36.3919C90.4417 36.3919 91.8977 36.0879 93.4337 35.4799C94.9697 34.8399 96.3777 33.9919 97.6577 32.9359L97.7537 32.9839Z" fill="black" />
                                              <path d="M114.754 21.2719C113.666 21.2719 112.642 21.5279 111.682 22.0399C110.754 22.5519 109.65 23.4479 108.37 24.7279V40.9999H102.706V6.34387L108.37 4.56787V21.0799C109.65 19.3839 110.946 18.1519 112.258 17.3839C113.602 16.6159 115.106 16.2319 116.77 16.2319C119.33 16.2319 121.362 17.0799 122.866 18.7759C124.402 20.4719 125.17 22.7599 125.17 25.6399V40.9999H119.458V26.5039C119.458 24.8399 119.042 23.5599 118.21 22.6639C117.41 21.7359 116.258 21.2719 114.754 21.2719Z" fill="black" />
                                              <path d="M145.441 22.3759C144.065 22.3759 142.705 22.6639 141.361 23.2399C140.017 23.7839 138.497 24.7279 136.801 26.0719V40.9999H131.137V17.3359L136.753 16.3759V22.5199C138.545 20.1199 140.033 18.4879 141.217 17.6239C142.401 16.7599 143.649 16.3279 144.961 16.3279C145.217 16.3279 145.457 16.3439 145.681 16.3759C145.905 16.4079 146.177 16.4559 146.497 16.5199L146.881 22.5199C146.625 22.4559 146.385 22.4239 146.161 22.4239C145.937 22.3919 145.697 22.3759 145.441 22.3759Z" fill="black" />
                                              <path d="M161.795 41.6719C158.051 41.6719 154.963 40.4399 152.531 37.9759C150.131 35.5119 148.931 32.4879 148.931 28.9039C148.931 25.3519 150.163 22.3279 152.627 19.8319C155.091 17.3039 158.179 16.0399 161.891 16.0399C165.667 16.0399 168.755 17.2719 171.155 19.7359C173.555 22.1679 174.755 25.1759 174.755 28.7599C174.755 32.3439 173.523 35.3999 171.059 37.9279C168.595 40.4239 165.507 41.6719 161.795 41.6719ZM169.091 28.7599C169.091 26.5519 168.403 24.7119 167.027 23.2399C165.683 21.7679 163.971 21.0319 161.891 21.0319C159.779 21.0319 158.035 21.7839 156.659 23.2879C155.283 24.7919 154.595 26.6639 154.595 28.9039C154.595 31.1439 155.267 33.0159 156.611 34.5199C157.987 35.9919 159.715 36.7279 161.795 36.7279C163.907 36.7279 165.651 35.9759 167.027 34.4719C168.403 32.9359 169.091 31.0319 169.091 28.7599Z" fill="black" />
                                              <path d="M190.845 21.2719C189.853 21.2719 188.925 21.5119 188.061 21.9919C187.197 22.4719 186.189 23.3039 185.037 24.4879V40.9999H179.373V17.3359L184.989 16.3759V20.8879C186.237 19.2559 187.485 18.0719 188.733 17.3359C190.013 16.5999 191.421 16.2319 192.957 16.2319C194.685 16.2319 196.189 16.6959 197.469 17.6239C198.781 18.5199 199.725 19.7839 200.301 21.4159C201.645 19.5919 202.989 18.2799 204.333 17.4799C205.677 16.6479 207.181 16.2319 208.845 16.2319C211.309 16.2319 213.261 17.0799 214.701 18.7759C216.173 20.4719 216.909 22.7599 216.909 25.6399V40.9999H211.245V26.5039C211.245 24.8719 210.845 23.5919 210.045 22.6639C209.277 21.7359 208.189 21.2719 206.781 21.2719C205.789 21.2719 204.845 21.5279 203.949 22.0399C203.085 22.5199 202.077 23.3359 200.925 24.4879C200.957 24.6159 200.973 24.7599 200.973 24.9199C200.973 25.0799 200.973 25.3199 200.973 25.6399V40.9999H195.309V26.5039C195.309 24.8719 194.909 23.5919 194.109 22.6639C193.341 21.7359 192.253 21.2719 190.845 21.2719Z" fill="black" />
                                              <path d="M243.442 26.5999V40.4239L237.874 41.3839V37.3999C236.178 38.7439 234.562 39.7519 233.026 40.4239C231.522 41.0639 230.034 41.3839 228.562 41.3839C226.418 41.3839 224.69 40.7919 223.378 39.6079C222.098 38.4239 221.458 36.8399 221.458 34.8559C221.458 32.1359 222.802 30.1039 225.49 28.7599C228.21 27.4159 232.322 26.7119 237.826 26.6479C237.794 24.8559 237.33 23.5119 236.434 22.6159C235.57 21.6879 234.306 21.2239 232.642 21.2239C231.298 21.2239 229.906 21.5119 228.466 22.0879C227.058 22.6319 225.618 23.4479 224.146 24.5359L224.05 24.4879L225.058 18.7279C226.402 17.8959 227.762 17.2879 229.138 16.9039C230.546 16.4879 232.05 16.2799 233.65 16.2799C236.818 16.2799 239.234 17.1599 240.898 18.9199C242.594 20.6799 243.442 23.2399 243.442 26.5999ZM226.882 34.4239C226.882 35.2239 227.154 35.8639 227.698 36.3439C228.274 36.7919 229.074 37.0159 230.098 37.0159C231.058 37.0159 232.162 36.7919 233.41 36.3439C234.69 35.8959 236.162 35.2239 237.826 34.3279V29.8159C234.146 30.0719 231.394 30.5679 229.57 31.3039C227.778 32.0399 226.882 33.0799 226.882 34.4239Z" fill="black" />
                                            </svg>
                                      
                                            Your new favorite eyedropper tool!
                                        </div>
                                      </div>
                                </div>
                                {{-- Modal Educación --}}
                                <div class="contact" id="modalEducation" style="display: none">
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
                                <div class="contact" id="modalProfessional" style="display: none">
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
                                {{-- Modal Laboral --}}
                                <div class="contact" id="showModalAbilities" style="display: none">
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
                            </div>
                        </div>
                    </li>
                    {{-- Realized Projects --}}
                    <li class="l-section section">
                        <div class="work">
                            <h2>Proyectos realizados</h2>
                            <div class="work--lockup">
                                <ul class="slider">
                                    <li class="slider--item slider--item-left">
                                        <a href="https://www.ponte-visual.com" target="_blank">
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
                                    <li class="slider--item slider--item-center">
                                        <a href="pruebas.epoem50.edu.mx" target="_blank">
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
                                    <li class="slider--item slider--item-right">
                                        <a href="www.batasyea.com" target="_blank">
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
                                    <li class="slider--item slider--item-right">
                                        <a href="www.batasyea.com" target="_blank">
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
                    <li class="l-section section">
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
                    </li>
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
        <li>Blog</li>
    </ul>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="{{ asset(' / js / vendor / jquery - 2.2 .4.min.js') }}"><\/script>')
</script>
<script src="{{ asset('js/functions-min.js') }}"></script>
<script src="{{ asset('js/actions.js') }}"></script>
@extends('partials/end')
