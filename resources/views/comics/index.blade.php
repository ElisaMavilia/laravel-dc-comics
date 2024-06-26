@extends('layouts.app')

@section('title', 'Comics')

@section('content')
<main class="bg-dark">
    <div id="main-container" class="row">
        @foreach ($comics as $comic)
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Info</a>
                </div>
                </div>
            </div>
        @endforeach
    </div>
</main>



@endsection