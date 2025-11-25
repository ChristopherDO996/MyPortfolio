<div class="sa-section">
    <div class="section-content bg-black section-padding">
        <div class="container">
            <div class="cta-content">
                <div class="row">
                    <div class="col-md-9">
                        <div class="cta-info">
                            <p>
                                <i>"El código es mi Cohete, la web, mi Universo."</i> - Pensamiento personal
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="cta-shap">
                            <div class="shap shap-1">
                                <img src="{{ asset('img/elements/moon.png') }}" alt="Image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.section-content -->
</div>

<div id="projects" class="sa-section">
    <div class="section-content section-padding">
        <div class="container">
            <div class="section-title">
                <h1>Mis Proyectos</h1>
            </div>

            <div class="portfolio-content">
                <div class="portfolio-menu">
                    <ul class="global-list">
                        <li class="active" data-filter="*">Todos</li>
                        <li data-filter=".webPage">Páginas Web</li>
                        <li data-filter=".webPlatform">Plataformas Web</li>
                        <li data-filter=".webParticipate">Colaboraciones</li>
                    </ul>
                </div><!-- /.portfolio-menu -->

                {{-- TODO: Crear un bucle con ciclo en tipo de servicios e imprimir variable filtro en clases --}}
                <div class="portfolio-filter row">
                    {{-- TODO: Hacer un lienzo con al menos 3 imágenes en cada una para detallar el proyecto --}}
                    <div class="col-md-6 col-lg-4 portfolio-item webPage">
                        <div class="portfolio">
                            <div class="portfolio-thumb">
                                <img src="{{ asset('img/evidencias/wpag-1.jpg') }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="portfolio-overlay">
                                <h2>UI/UX Design In- 2021</h2>
                                <h3>18 Feb 2021, <br> NewYouk, USA </h3>
                                <div class="portfolio-shap">
                                    <div class="shap shap-1">
                                        <img src="{{ asset('img/elements/moon.png') }}" alt="Image"
                                            class="img-fluid">
                                    </div>
                                    <div class="shap shap-2">
                                        <img src="{{ asset('img/elements/moon.png') }}" alt="Image"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="button">
                                    <a href="#" class="btn btn-primary">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.portfolio-item -->
                    <div class="col-md-6 col-lg-4 portfolio-item webPlatform">
                        <div class="portfolio">
                            <div class="portfolio-thumb">
                                <img src="{{ asset('img/evidencias/wplat-1.jpg') }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="portfolio-overlay">
                                <h2>UI/UX Design In- 2021</h2>
                                <h3>18 Feb 2021, <br> NewYouk, USA </h3>
                                <div class="portfolio-shap">
                                    <div class="shap shap-1">
                                        <img src="{{ asset('img/elements/moon.png') }}" alt="Image"
                                            class="img-fluid">
                                    </div>
                                    <div class="shap shap-2">
                                        <img src="{{ asset('img/elements/moon.png') }}" alt="Image"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="button">
                                    <a href="#" class="btn btn-primary">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.portfolio-item -->
                    <div class="col-md-6 col-lg-4 portfolio-item webParticipate">
                        <div class="portfolio">
                            <div class="portfolio-thumb">
                                <img src="{{ asset('img/evidencias/wpart-1.jpg') }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="portfolio-overlay">
                                <h2>UI/UX Design In- 2021</h2>
                                <h3>18 Feb 2021, <br> NewYouk, USA </h3>
                                <div class="portfolio-shap">
                                    <div class="shap shap-1">
                                        <img src="{{ asset('img/elements/moon.png') }}" alt="Image"
                                            class="img-fluid">
                                    </div>
                                    <div class="shap shap-2">
                                        <img src="{{ asset('img/elements/moon.png') }}" alt="Image"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="button">
                                    <a href="#" class="btn btn-primary">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.portfolio-item -->
                </div><!-- /.portfolio-filter -->
            </div><!-- /.portfolio-content -->
        </div><!-- /.container -->
    </div><!-- /.section-content -->
</div><!-- /.sa-section -->
