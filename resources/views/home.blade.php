@extends('layout.master')
@section('title', 'Diego Ramirez')
@section('content')
    <div class="progress-bar" id="progress-bar"></div>

    <section class="section-1" id="welcome">Seccion 1</section>
    <section class="section-2" id="about">Seccion 2</section>
    <section class="section-3" id="contact">Seccion 3</section>
    <section class="section-4" id="etc">Seccion 4</section>
    <footer id="footer">Footer</footer>
@endsection

@section('js')
    <script src="{{ asset('js/progress-bar.js') }}"></script>
@endsection
