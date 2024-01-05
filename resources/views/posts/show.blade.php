@extends('layouts.app')

@section('content')
<div class="card mt-5">
    <div class="card-header">
     Single Post {{$post->id}}
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="card-text">{{$post->body}}</p>
      <a href="/posts" class="btn btn-info">Go Back</a>
      
    </div>
    
  </div>

@endsection