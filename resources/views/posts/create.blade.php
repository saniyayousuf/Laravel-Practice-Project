@extends('layouts.app')

@section('content')
<h1 class="p-2 text-info-emphasis container text-uppercase">Create Post</h1>
{!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method'=> 'POST' ]) !!}
<div class="form-group">
    {{-- for label --}}
    {{Form::label('title', 'Title*',['class' => 'py-2 ps-1 fw-bold fs-4'])}} 
    {{-- for Text Input --}}
    {{Form::text('title','',['class'=>'form-control' , 'placeholder' => 'Enter Title'])}}
</div>
<div class="form-group">
    {{-- for label --}}
    {{Form::label('body', 'Body*' ,['class' => 'py-2 ps-1 fw-bold fs-4'])}} 
    {{-- for Text Input --}}
    {{Form::textarea('body','',['class'=>'form-control' , 'placeholder' => 'Enter Description'])}}
</div>
{{Form::submit('Submit',['class' => 'btn btn-info fw-semibold my-3 px-4'])}}
{!! Form::close() !!}
@endsection