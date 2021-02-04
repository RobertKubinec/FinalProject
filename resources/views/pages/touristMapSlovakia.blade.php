@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/jumbotron.css') }}" rel="stylesheet">
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Turistická mapa SR</h1>
        </div>
    </div>


    <!-- Obsah stranky -->
    <div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1064443.4555929536!2d19.6389610230703!3d48.701042687572304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssk!2ssk!4v1603569944982!5m2!1ssk!2ssk"
            width="1500" height="600" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
@endsection
