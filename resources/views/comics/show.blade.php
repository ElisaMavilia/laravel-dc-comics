@extends('layouts.app')

@section('title', $comic->title)

@section('content')

<section class="container card bg-white mt-4">
    <h1 class="py-4">{{$comic->title}}</h1>
    <div class="row">
        <div class="col-12 col-md-4">
            <img src="{{$comic->thumb}}" class="img-fluid" alt="{{$comic->title}}">
        </div>
        <div class="col-12 col-md-8">
            <p>{!!$comic->description!!}</p>
            <div>
                Serie: {{$comic->series}}
            </div>
            <div>
                Price: {{$comic->price}}
            </div>
            <div>

            </div>
            <div>
            </div>
    <div>
    <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary">Edit</a>
            <form class="d-flex align-content-center align-items-center" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-danger mt-5" id="comicDelete">
            </form>
    </div>
            


        </div>
    </div>
    </div>
</section>
@endsection