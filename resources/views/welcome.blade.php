@extends('layouts.main')
@section('title', 'J EVENTS')
@section('content')

<div id="search-container" class="col-md-12">
    <h1>Find an Event that suits you</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Type...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    @if ($search)
        <h2>Searching for: {{$search}}</h2>
        <p class="subtitle">These are the events found in your search.</p>
    @else
        <h2>Next Events</h2>
        <p class="subtitle">See what events are coming up</p>
    @endif
    <form action="">
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="/img/events/{{ $event->image }}" alt="{{$event->title}}">
                    <div class="card-body">
                        <p class="card-date">{{date('d/m/Y', strtotime($event->date))}}</p>
                        <h5 class="card-title">{{$event->title}}</h5>
                        <p class="card-locate">{{$event->city}}</p>
                        <p class="card-participants">{{count($event->users)}} Participants</p>
                        <a href="/events/{{ $event->id}}" class="btn btn-primary">More...</a>
                    </div>
                </div>
            @endforeach
            @if(count($events) == "" && $search )
                <p>We couldn't find any events available with "{{$search}}"! <p><a href="/">See all.</a></p></p>
            @elseif (count($events) == "")
                <p>There are no events available!</p>
            @endif
        </div>
    </form>
</div>

@endsection
