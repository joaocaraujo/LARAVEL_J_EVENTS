@extends('layouts.main')
@section('title', 'J EVENTS')
@section('content')

<div id="search-container" class="col-md-12">
    <h1>Find an Event that suits you</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Type...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <form action="">
        <h2>Next Events</h2>
        <p class="subtitle">See what events are coming up</p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="/img/events/{{ $event->image }}" alt="{{$event->title}}">
                    <div class="card-body">
                        <p class="card-date">{{$event->date}}</p>
                        <h5 class="card-title">{{$event->title}}</h5>
                        <p class="card-locate">{{$event->city}}</p>
                        <p class="card-participants">10 Participants</p>
                        <a href="#" class="btn btn-primary">More...</a>
                    </div>
                </div>
            @endforeach
        </div>
    </form>
</div>

@endsection
