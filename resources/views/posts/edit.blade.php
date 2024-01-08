@extends('layouts.app')

@section('content')
<h1 class="p-2 text-center text-info-emphasis container text-uppercase">Edit Post</h1>
{!! Form::open(['action' => ['App\Http\Controllers\PostsController@update',$post->id], 'method'=> 'POST' ]) !!}
<div class="border border-info w-100 h-100 p-3 rounded">

    <div class="form-group">
        {{-- for label --}}
        {{Form::label('title', 'Title*',['class' => 'py-2 ps-1 fw-bold fs-4'])}} 
        {{-- for Text Input --}}
        {{Form::text('title',$post->title,['class'=>'form-control' , 'placeholder' => 'Enter Title'])}}
    </div>
    <div class="form-group">
        {{-- for label --}}
        {{Form::label('body', 'Body*' ,['class' => 'py-2 ps-1 fw-bold fs-4'])}} 
        {{-- for Text Input --}}
        {{Form::textarea('body',$post->body,['class'=>'form-control','rows'=>'3' , 'placeholder' => 'Enter Description'])}}
    </div>
    {{Form::hidden('_method' ,'PUT')}}
    {{Form::submit('Update',['class' => 'btn btn-info fw-semibold my-3 px-4'])}}
</div>
{!! Form::close() !!}
@endsection