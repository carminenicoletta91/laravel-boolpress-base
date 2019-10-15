@extends('layout.customLayout')
@section('link')
  <div class="link">
    <a  href="{{route('blg.index')}}">Back To Index</a>
  </div>

@endsection
@section('content')
  @foreach ($category -> posts as $post)
    <div class="box-post">
      <p> {{$post -> title }}</p>
      <p> {{$post -> content }}</p>
      @if ($post -> img)
        <img src="img/{{$post -> img}}" alt="img.not-found">
      @endif
      <p> {{$post -> author }}</p>
      <a href="{{route('blg.showPost',$post -> id)}}">Show This</a>
      <a href="{{route('blg.edit',$post -> id)}}">Edit This</a>

    </div>


  @endforeach
@endsection
