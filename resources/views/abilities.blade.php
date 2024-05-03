@extends('layouts.master')

{{-- Abilities --}}
@section('content')
    <div class="about">
        <div class="about--experience" id="showContentExperience"></div>
        <div class="about--options">
            <a href="#0" onclick="functions.fillJobExperience()"
                style="background-image: url('https://cdn-icons-png.flaticon.com/512/5072/5072860.png')">
                <h3>Laboral</h3>
            </a>
            <a href="#0" onclick="functions.fillAbilities()"
                style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRL_jhRw3O5UHuNs8R8YbOPDNUXDG5NpJ01RA&usqp=CAU')">
                <h3>Habilidades</h3>
            </a>
        </div>
    </div>
@endsection
