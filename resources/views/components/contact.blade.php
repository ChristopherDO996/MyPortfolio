<div id="contact" class="sa-section">
    <div class="section-content section-padding bg-color">
        <div class="container">
            <div class="section-title style-1">
                <h1>Contáctame</h1>
                <p>
                    >> Comandante Díaz Osorio iniciando la secuencia de contacto.<br>
                    >> Si tienes una misión que requiera código robusto o solo quieres charlar sobre tecnología, este es
                    tu canal de comunicación. Llena el formulario; estoy listo para la telemetría y el debug de tu
                    próximo proyecto.<br>
                    >> [Esperando tu transmisión.]
                </p>
                <span><img src="{{ asset('img/elements/line.png') }}" alt="Image" class="img-fluid"></span>
            </div>

            <div class="contact-content style-1">
                <div class="contact-info">
                    <ul class="global-list">
                        <li>
                            <a href="mailto:christo996@hotmail.com">
                                <div class="contact">
                                    <div class="icon">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <h2>Correo</h2>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="tel:5518447614">
                                <div class="contact">
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <h2>Teléfono</h2>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div><!-- /.contact-info -->

                <div class="form-content">
                    <h3>Déjame un mensaje</h3>
                    <form id="contactform" class="contact-form" action="mail.php" method="post" enctype="text/plain"
                        novalidate="novalidate">
                        <input class="form-control" name="name" type="text" placeholder="Nombre completo*" value=""
                            size="30" aria-required="true" required="required">

                        <input class="form-control" name="email" type="email" placeholder="tisito@tisito.com"
                            value="" size="30" aria-required="true" required="required">

                        <select class="form-control">
                            <option value="">Selecciona motivo</option>
                            <option value="work">Motivos laborales</option>
                            <option value="me">Motivos personales</option>
                            <option value="suggestion">Sugerencias</option>
                            <option value="other">Otro</option>
                        </select>

                        <textarea name="message" class="form-control" required="required" rows="7" placeholder="Mensaje..."></textarea>
                        <div class="flashinfo"></div>
                        <div class="d-md-flex justify-content-md-between mt-5">
                            <div class="button align-self-center">
                                <input type="submit" class="btn btn-primary btn-l" value="Send Your Message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.section-content -->
</div><!-- /.sa-section -->
<div id="live-chat"></div>
