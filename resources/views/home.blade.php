@extends('layouts.master')

{{-- Main Home --}}
@section('content')
    @include('components.cover')
    @include('partials.menu')
    @include('components.about')
    @include('components.services')
    @include('components.resume')
    @include('components.portfolio')
    @include('components.blog')
    @include('components.contact')
@endsection
