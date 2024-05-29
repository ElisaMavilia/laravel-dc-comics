@extends('layouts.app')

@section('title', 'Edit')

@section('content')

<form class="mt-4" action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="container mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" value="{{old('title', $comic->title)}}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
           <textarea name="description" id="description" cols="30" rows="10" class="form-control">{!! $comic->description !!}</textarea>
          </div>
          <div class="mb-3">
            <label for="thumb" class="form-label">Cover</label>
            <input type="text" class="form-control" id="thumb"  name="thumb" value="{{old('thumb', $comic->thumb)}}">
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series"  name="series" value="{{old('series', $comic->series)}}" required>
           
          </div>
          <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="sale_date"  name="sale_date" value="{{old('date', $comic->date)}}" required>
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price"  name="price" value="{{old('price', $comic->price)}}" required>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="type" class="form-label">Type</label>
          </div>
            <select class="form-control" id="type"  name="type" value="{{old('type', $comic->type)}}" >
              <option value="">Choose...</option>
              <option value="comic_book" {{$comic->type === 'comic_book' ? 'selected' : ''}}>Comic book</option>
              <option value="graphic_novel" {{$comic->type === 'graphic_novel' ? 'selected' : ''}}>Graphic Novel</option>
            </select>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="container">
          <button type="submit" class="btn btn-primary">Edit</button>
        <button type="reset" class="btn btn-danger">Cancel</button>
          </div>
       
    </form>
    @endsection
