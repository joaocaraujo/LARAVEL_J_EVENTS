@extends('layouts.main')
@section('title', 'Create event')
@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Create your event</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Event:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Event name">
            </div>
            <div class="form-group">
                <label for="title">Description:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Describe how the event will be"></textarea>
            </div>
            <div class="form-group">
                <label for="title">City:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Ex: Cupertino, Califórnia">
            </div>
            <div class="form-group">
                <label for="title">Is the event private?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="title">Hour:</label>
                <input type="time" class="form-control" id="hour" name="hour" placeholder="Event time">
            </div>
            <div class="form-group">
                <label for="image">Event Image:</label>
                <input type="file" id="image" name="image" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="title">Add infrastructure items:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Access bracelet"> Access bracelet
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Chairs"> Chairs
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Courseware"> Courseware
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Gifts"> Gifts
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Laptop tables"> Laptop tables
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Stage"> Stage
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open drink"> Open drink
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open food"> Open food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Wifi"> Wifi
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Create">
      </form>
    </div>

@endsection
