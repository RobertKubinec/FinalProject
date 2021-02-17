@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/jumbotron.css') }}" rel="stylesheet">
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Hrady a zámky</h1>
        </div>
    </div>
    @can('viewAny', \App\Models\User::class)
        @auth
            <div class="mb-3 ml-5">
                <a href="{{route('castles.create')}}" class="btn btn-sm btn-success" role="button">Pridaj
                    nový hrad alebo zámok
                </a>
            </div>
        @endauth
    @endcan
    @foreach ($castles as $castle)
        <div class="container">
            <div class="row padding">
                <div class="col-lg-8">
                    <h2>{{$castle->title}}</h2>
                    {{$castle->article}}
                </div>
                <div class="col-lg-4">
                    <img src="{{$castle->imageLink}}"
                         class="img-fluid img-thumbnail" alt="">
                </div>
                @can('viewAny', \App\Models\User::class)
                    @auth
                        <div class="mb-3">
                            <a href="{{route('castles.edit', [$castle->id])}}" title="Edit"
                               class="btn btn-sm btn-primary" role="button">Uprav</a>
                            <a href="{{route('castles.delete', [$castle->id])}}" title="Delete" data-method="DELETE"
                               class="btn btn-sm btn-danger" role="button" data-confirm="Are you sure?">Zmaž</a>
                        </div>
                    @endauth
                @endcan
            </div>
        </div>
        <hr class="my-4">
    @endforeach
@endsection
