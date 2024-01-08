@extends('layouts.app')

@section('content')
<div class="card mt-5 border border-info ">
    <div class="card-header fs-4 fw-semibold border-info bg-info">
     Single Post {{$post->id}}
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="card-text">{{$post->body}}</p>
      <a href="/posts" class="btn btn-info  fw-semibold  me-3">Go Back</a>
       <a href="/posts/{{$post->id}}/edit" class=" btn btn-info px-4  fw-semibold">Edit</a>
       {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy',$post->id, 'method'=>'POST', 'class' => 'pull-']])!!}
       {{Form::hidden('_method',"DELETE")}}
       {{Form::submit('Delete',['class' => ' mt-2 px-3 btn btn-danger'])}}
       {!!Form::close() !!}
      </div>
  </div>

@endsection