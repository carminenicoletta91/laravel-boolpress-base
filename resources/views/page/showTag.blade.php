@extends('layout.customLayout')

@section('link')
  <div class="link">
    <a  href="{{route('blg.index')}}">Back To Index</a>
  </div>

@endsection
@section('content')
  <div class="box-tag">
    <h2>Tag</h2>
    <p>Name: {{$tag -> name}}</p>
    <p>Description: {{$tag -> description}}</p>
  </div>
  <div class="box-posts">
    <h2>Posts</h2>
    @foreach ($tag -> posts as  $post)
      <div class="box-post">
        <p>{{$post -> title}}</p>
        <p class="content">{{$post -> content}}</p>
        <p>{{$post -> author}}</p>
      </div>
    @endforeach
  </div>
@endsection
