@extends('layout.customLayout')

@section('link')
    <div class="link">
      <a  href="{{route('blg.index')}}">Back To Index</a>
    </div>

@endsection
@section('content')
  <form class="form-newPost"  method="post" action="{{route('blg.store')}}">
    @csrf
    @method('POST')
    <div class="form-element">
      <label for="title">Title</label>
      <input type="text" name="title" value="">
    </div>
    <div class="form-element">
      <label for="content">Content</label>
      <input class="content" type="text" name="content" value="">
    </div>
    <div class="form-element">
      <label for="author">Author</label>
      <input type="text" name="author" value="">
    </div>
    <div class="form-element">
      <label for="category_id">Category</label>
      <select class="" name="category_id">
        @foreach ($categories as  $category)
          <option name="category_id" value="{{$category -> id}}">{{$category -> name}}</option>
        @endforeach
      </select>
    </div>
    <button id="save-button"type="submit">Save</button>
  </form>
@endsection
