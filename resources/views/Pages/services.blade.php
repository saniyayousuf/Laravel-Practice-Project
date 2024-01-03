@extends('layouts.app')
@section('content')
    <h1>
        {{$title}}
    </h1>
    <p>This is Services Page.</p>
    @if(count($services) > 0)
    <ul >
        @foreach($services as $service)
        <li class="">{{$service}}</li>
        @endforeach
    </ul>
    @endif
@endsection
