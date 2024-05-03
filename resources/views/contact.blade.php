@extends('layouts.master')

{{-- Contact Form --}}
@section('content')
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
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 111"
                            style="enable-background:new 0 0 150 111;" xml:space="preserve">
                            <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
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
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 111"
                            style="enable-background:new 0 0 150 111;" xml:space="preserve">
                            <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
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
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 111"
                            style="enable-background:new 0 0 150 111;" xml:space="preserve">
                            <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
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
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 111"
                            style="enable-background:new 0 0 150 111;" xml:space="preserve">
                            <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
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
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 111"
                            style="enable-background:new 0 0 150 111;" xml:space="preserve">
                            <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
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
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 111"
                            style="enable-background:new 0 0 150 111;" xml:space="preserve">
                            <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
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
@endsection
