@extends('layouts.app')

@section('title', 'Comics')

@section('content')

<form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="container mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" value="" required>
        
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
           <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
          </div>
          <div class="mb-3">
            <label for="thumb" class="form-label">Cover</label>
            <input type="text" class="form-control" id="thumb"  name="thumb" value="">
          </div>
          <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series"  name="series" required>
          </div>
          <div class="mb-3">
            <label for="series" class="form-label">Date</label>
            <input type="date" class="form-control" id="sale_date"  name="sale_date" required>
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price"  name="price" required>
          </div>
          <div class="mb-3">
            <label for="type" class="form-label">Type</label>
           
          </div>
            <select class="form-control" id="type"  name="type" required>
              <option value="">Choose...</option>
              <option value="comic_book">Comic book</option>
              <option value="graphic_novel">Graphic Novel</option>

            </select>
          </div>
        <button type="submit" class="btn btn-primary">Create</button>
       
    </form>
    @endsection