@extends('layout.master')
@section('title', 'Diego Ramirez')
@section('content')
    <div class="progress-bar" id="progress-bar"></div>

    <section class="bienvenida" id="section-1">Seccion 1</section>
    <section class="informacion" id="section-2">Seccion 2</section>
    <section class="proyectos" id="section-3">Seccion 3</section>
    <section class="contacto" id="section-4">Seccion 4</section>
    <footer id="footer">Footer</footer>
@endsection

@section('js')
    <script src="{{ asset('js/scrollbar.js') }}"></script>
@endsection
