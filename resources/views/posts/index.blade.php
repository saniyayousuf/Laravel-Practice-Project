@extends('layouts.app')

@section('content')
<div class="d-flex flex-row">
    
    <h1 class="p-2 pt-3 text-info-emphasis container text-uppercase">Posts</h1>
    <a href="/posts/create" class="my-3 btn btn-info ">Create</a>
</div>

    @if(count($posts) > 0)
@foreach($posts as $post)
<div class="list-group">
    <a class="text-decoration-none" href="/posts/{{$post->id}}">
    <h5 class="list-group-item ">{{$post->title}}</h5>
    </a>
    

</div>
@endforeach
@else
<p>No posts Found</p>
@endif

@endsection