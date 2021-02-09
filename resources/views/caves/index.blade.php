@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/jumbotron.css') }}" rel="stylesheet">
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Jaskyne</h1>
        </div>
    </div>
    @can('viewAny', \App\Models\User::class)
        @auth
            <div class="mb-3">
                <a href="{{route('caves.create')}}" class="btn btn-sm btn-success" role="button">Pridaj
                    novú jaskyňu
                </a>
            </div>
        @endauth
    @endcan
    @foreach ($caves as $cave)
        <div class="container">
            <div class="row padding">
                <div class="col-lg-8">
                    <h2>{{$cave->title}}</h2>
                    {{$cave->article}}
                </div>
                <div class="col-lg-4">
                    <img src="{{$cave->imageLink}}"
                         class="img-fluid img-thumbnail" alt="Terchova">
                </div>
                @can('viewAny', \App\Models\User::class)
                    @auth
                        <div class="mb-3">
                            <a href="{{route('caves.edit', [$cave->id])}}" title="Edit"
                               class="btn btn-sm btn-primary">Uprav</a>
                            <a href="{{route('caves.delete', [$cave->id])}}" title="Delete" data-method="DELETE"
                               class="btn btn-sm btn-danger" data-confirm="Are you sure?">Zmaž</a>
                        </div>
                    @endauth
                @endcan
            </div>
        </div>
        <hr class="my-4">
    @endforeach
@endsection
