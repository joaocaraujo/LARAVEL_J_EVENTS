@extends('layouts.main')
@section('title', 'J EVENTS')
@section('content')

@foreach ($events as $event)
    <p>{{$event->title}} -- {{$event->description}}</p>
@endforeach

@endsection
