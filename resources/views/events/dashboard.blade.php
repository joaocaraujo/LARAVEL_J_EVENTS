@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Created by you:</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">

    @if(is_countable($events) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Participants</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td scope="row">{{ $loop->index + 1 }}</td>
                    <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                    <td>{{count($event->users)}}</td>
                    <td>
                        <a href="/events/edit/{{ $event->id }}" class="btn btn-info editbtn"><ion-icon name="create-outline"></ion-icon>Edit</a>
                        <form action="/events/{{$event->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>You have no events yet. <a href="/events/create">Create now!</a></p>
    @endif
</div>
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>You are a participant:</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(is_countable($eventsasparticipant) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Participants</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eventsasparticipant as $event)
                <tr>
                    <td scope="row">{{ $loop->index + 1 }}</td>
                    <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                    <td>{{count($event->users)}}</td>
                    <td>
                        <form action="/events/leave/{{$event->id}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger delete-btn">
                                <ion-icon name="trash-outline"></ion-icon>
                                Leave
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>You aren't participating in any events. <a href="/">See the ones available!</a></p>
    @endif
</div>

@endsection

