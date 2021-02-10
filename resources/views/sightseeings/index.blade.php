@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/jumbotron.css') }}" rel="stylesheet">
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Rozhľadne</h1>
        </div>
    </div>
    @can('viewAny', \App\Models\User::class)
        @auth
            <div class="mb-3 ml-5">
                <a href="{{route('sightseeings.create')}}" class="btn btn-sm btn-success" role="button">Pridaj
                    novú rozhľadňu
                </a>
            </div>
        @endauth
    @endcan
    @foreach ($sightseeings as $sightseeing)
        <div class="container">
            <div class="row padding">
                <div class="col-lg-8">
                    <h2>{{$sightseeing->title}}</h2>
                    {{$sightseeing->article}}
                </div>
                <div class="col-lg-4">
                    <img src="{{$sightseeing->imageLink}}"
                         class="img-fluid img-thumbnail" alt="">
                </div>
                @can('viewAny', \App\Models\User::class)
                    @auth
                        <div class="mb-3">
                            <a href="{{route('sightseeings.edit', [$sightseeing->id])}}" title="Edit"
                               class="btn btn-sm btn-primary">Uprav</a>
                            <a href="{{route('caves.delete', [$sightseeing->id])}}" title="Delete" data-method="DELETE"
                               class="btn btn-sm btn-danger" data-confirm="Are you sure?">Zmaž</a>
                        </div>
                    @endauth
                @endcan
            </div>
        </div>
        <hr class="my-4">
    @endforeach
@endsection
