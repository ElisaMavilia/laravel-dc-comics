@extends('layouts.app')

@section('title', 'Comics')

@section('content')

<form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="container mb-3 mt-4">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="titleHelp" name="title" value="{{old('title')}}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          <div class="mb-3">
            <label for="description" class="form-label @error('title') is-invalid @enderror">Description</label>
           <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
           @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="thumb" class="form-label @error('title') is-invalid @enderror">Thumb</label>
            <input type="text" class="form-control" id="thumb"  name="thumb" value="{{old('thumb')}}">
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="series"  name="series" value="{{old('series')}}">
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control @error('title') is-invalid @enderror" id="sale_date"  name="sale_date" value="{{old('date')}}" >
            @error('date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="price"  name="price" value="{{old('price')}}" >
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="type" class="form-label">Type</label>
          </div>
            <select class="form-control @error('title') is-invalid @enderror" id="type"  name="type" value="{{old('type')}}" >
              <option value="">Choose...</option>
              <option value="comic_book">Comic book</option>
              <option value="graphic_novel">Graphic Novel</option>
            </select>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="container mt-3">
          <button type="submit" class="btn btn-primary">Create</button>
          </div>
        
       
    </form>
    @endsection