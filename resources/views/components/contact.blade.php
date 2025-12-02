<div id="contact" class="sa-section">
    <div class="section-content section-padding bg-color">
        <div class="container">
            <div class="section-title style-1">
                <h1>Contáctame</h1>
                <p>
                    {{-- TODO: Animar en forma de código --}}
                    <i class="fa fa-terminal" aria-hidden="true"></i>
                    Si tienes una misión que requiera código robusto o sólo quieres charlar sobre tecnología, este es tu
                    canal de comunicación. Llena el formulario; estoy listo para la telemetría y el debug de tu próximo
                    proyecto.
                </p>
            </div>

            <div class="contact-content style-1">
                <div class="form-content">
                    <h3>Déjame un mensaje</h3>
                    <form id="contactform" class="contact-form" action="mail.php" method="post" enctype="text/plain"
                        novalidate="novalidate">
                        <input class="form-control" name="name" type="text" placeholder="Nombre completo*"
                            value="" size="30" aria-required="true" required="required">

                        <input class="form-control" name="email" type="email" placeholder="tisito@tisito.com"
                            value="" size="30" aria-required="true" required="required">

                        <select class="form-control">
                            <option value="">Selecciona motivo</option>
                            <option value="work">Laboral</option>
                            <option value="me">Personal</option>
                            <option value="suggestion">Sugerencias</option>
                            <option value="other">Otro</option>
                        </select>

                        <textarea name="message" class="form-control" required="required" rows="7" placeholder="Mensaje..."></textarea>
                        <div class="flashinfo"></div>
                        <div class="d-md-flex justify-content-md-between mt-5">
                            <div class="button align-self-center">
                                <input type="submit" class="btn btn-primary btn-l" value="Enviar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.section-content -->
</div><!-- /.sa-section -->
<div id="live-chat"></div>
