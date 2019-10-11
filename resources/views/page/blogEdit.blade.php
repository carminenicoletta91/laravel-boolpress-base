@extends('layout.customLayout')

@section('link')
<div class="link">
  <a  href="{{route('blg.index')}}">Back To Index</a>
</div>

@endsection

@section('content')
  <form class="form-newPost"  method="post" action="{{route('blg.update',$post -> id)}}">
    @csrf
    @method('POST')
    <div class="form-element">
      <label for="title">Title</label>
      <input type="text" name="title" value="{{$post -> title}}">
    </div>
    <div class="form-element">
      <label for="content">Content</label>
      <input class="content" type="text" name="content" value="{{$post -> content}}">
    </div>
    <div class="form-element">
      <label for="author">Author</label>
      <input type="text" name="author" value="{{$post -> author}}">
    </div>
    <div class="form-element">
      <label for="category_id">Category</label>
      <select class="" name="category_id">
        @foreach ($categories as  $category)
          <option name="category_id" value="{{$category -> id}}">{{$category -> name}}</option>
        @endforeach
      </select>
    </div>
    <button id="save-button"type="submit">Update</button>
  </form>
@endsection
