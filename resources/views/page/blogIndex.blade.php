@extends('layout.customLayout')
@section('admin')

  <div class="container-admin">

    <div class="categories">
      <p>Select Category</p>
      @foreach ($categories as  $category)
        <a href="{{route('blg.showCategory',$category -> id)}}">{{$category -> name}}</a>

      @endforeach
    </div>
    <div class="tags">
      <p>Select Tag</p>
      @foreach ($tags as  $tag)
        <a href="{{route('blg.showTag',$tag -> id)}}">{{$tag -> name}}</a>

      @endforeach
    </div>
    <div class="newpost">
      <a href="{{route('blg.create')}}">Create New Post</a>
    </div>
  </div>
@endsection
@section('content')


  @foreach ($posts as  $post)
    <div class="box-post">
      <p>{{$post -> title}}</p>
      <p class="content">{{$post -> content}}</p>
      <p>{{$post -> author}}</p>
      @if ($post -> img)
        <img src="img/{{$post -> img}}" alt="">
      @endif
      <a href="{{route('blg.showPost',$post -> id)}}">Show This</a>
      <a href="{{route('blg.edit',$post -> id)}}">Edit This</a>
    </div>
  @endforeach

@endsection
