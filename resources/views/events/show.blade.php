@extends('layouts.main')
@section('title', $event->title)
@section('content')

<div class="col-md-10-offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/events/{{$event->image}}" class="img-fluid" alt="{{$event->title}}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{$event->title}}</h1>
            <p class="event-city"><ion-icon name="location-outline"></ion-icon>  {{$event->city}}</p>
            <p class="events-participants"><ion-icon name="person-outline"></ion-icon>  10 Participants</p>
            <p class="event-owner"><ion-icon name="rocket-outline"></ion-icon>  Owner</p>
            <a href="#" class="btn btn-primary" id="event-submit">Register Presence</a>
        </div>
        <div class="col-md-12" id="description-container">
            <h3>About event:</h3>
            <p class="event-description">{{$event->description}}</p>
        </div>
    </div>
</div>

@endsection
