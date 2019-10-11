@extends('layout.customLayout')
@section('link')
  <div class="link">
    <a  href="{{route('blg.index')}}">Back To Index</a>
  </div>

@endsection
@section('content')

  <div class="box-post">
    <h2>POST</h2>
    <p>{{$post -> title}}</p>
    <p class="content">{{$post -> content}}</p>
    <p>{{$post -> author}}</p>
    <a href="{{route('blg.edit',$post -> id)}}">Edit This</a>
  </div>

  <div class="container-tags">
    <h2>TAGS</h2>
    @foreach ($post -> tags as $tag)
      <div class="box-tag">
        <p>Name: {{$tag -> name}}</p>
        <p>Descrip: {{$tag -> description}}</p>
      </div>
    @endforeach
  </div>
@endsection
