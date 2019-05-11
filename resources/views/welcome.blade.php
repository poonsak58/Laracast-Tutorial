@extends('layouts.layout')
@section('title', 'Welcome Page')
@section('content')

    <h1>Welcome {{ $name }} to {{ $laracast }} Here we go!!</h1>

    <ul>
        @foreach($tasks as $task)
            <li>{{$task}}</li>
        @endforeach
    </ul>

@endsection

