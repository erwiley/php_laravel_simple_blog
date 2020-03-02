@extends('layouts.app')

@section('content')
  <h1>Posts</h1>
  @if(count($posts) >0)
    @foreach($posts as $post)
    <div class="card">
      <div class="row no-gutters">
          <div class="col-md-4 col-sm-4">
          <img src="/storage/cover_images/{{$post->cover_image}}" class="card-img-top h-100" style="width:100%">
          </div>
          <div class="col-md-8 col-sm-8">
            <div class="card-body">
              <h3><a href="/posts/{{$post->id}}" class="card-link">{{$post->title}}</a></h3>
              <small class="card-text">Written on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
          </div>
      </div>
    </div>
    @endforeach
    {{$posts->links()}}
  @else
    <p>No posts found</p>
  @endif
@endsection