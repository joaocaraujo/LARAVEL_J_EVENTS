@extends('layouts.main')
@section('title', 'Editing | ' . $event->title)
@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Editing | {{$event->title}}</h1>
        <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Event:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Event name" value="{{ $event->title }}">
            </div>
            <div class="form-group">
                <label for="title">Description:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Describe how the event will be">{{$event->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="title">City:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Ex: Cupertino, Califórnia" value="{{$event->city}}">
            </div>
            <div class="form-group">
                <label for="title">Is the event private?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">No</option>
                    <option value="1" {{$event->private == 1 ? "selected='selected'" : ""}}>Yes</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date" value="{{date('Y-m-d', strtotime($event->date));}}">
            </div>
            <div class="form-group">
                <label for="title">Hour:</label>
                <input type="time" class="form-control" id="hour" name="hour" placeholder="Event time" value="{{$event->hour}}">
            </div>
            <div class="form-group">
                <label for="image">Event Image:</label>
                <input type="file" id="image" name="image" class="form-control-file">
                <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-preview">
            </div>
            <div class="form-group">
                <label for="title">Add infrastructure items:</label>
                <div class="form-group">
                    <li><input type="checkbox" name="items[]" value="Access bracelet"
                        <?php if (in_array("Access bracelet", $event->items)) { echo "checked"; } ?>> Access bracelet
                    </li>
                </div>
                <div class="form-group">
                    <li><input type="checkbox" name="items[]" value="Chairs"
                        <?php if (in_array("Chairs", $event->items)) { echo "checked"; } ?>> Chairs
                    </li>
                </div>
                <div class="form-group">
                    <li><input type="checkbox" name="items[]" value="Courseware"
                        <?php if (in_array("Courseware", $event->items)) { echo "checked"; } ?>> Courseware
                    </li>
                </div>
                <div class="form-group">
                    <li><input type="checkbox" name="items[]" value="Gifts"
                        <?php if (in_array("Gifts", $event->items)) { echo "checked"; } ?>> Gifts
                    </li>
                </div>
                <div class="form-group">
                    <li><input type="checkbox" name="items[]" value="Laptop tables"
                        <?php if (in_array("Laptop tables", $event->items)) { echo "checked"; } ?>> Laptop tables
                    </li>
                </div>
                <div class="form-group">
                    <li><input type="checkbox" name="items[]" value="Stage"
                        <?php if (in_array("Stage", $event->items)) { echo "checked"; } ?>> Stage
                    </li>
                </div>
                <div class="form-group">
                    <li><input type="checkbox" name="items[]" value="Open drink"
                        <?php if (in_array("Open drink", $event->items)) { echo "checked"; } ?>> Open drink
                    </li>
                </div>
                <div class="form-group">
                    <li><input type="checkbox" name="items[]" value="Open food"
                        <?php if (in_array("Open food", $event->items)) { echo "checked"; } ?>> Open food
                    </li>
                </div>
                <div class="form-group">
                    <li><input type="checkbox" name="items[]" value="Wifi"
                        <?php if (in_array("Wifi", $event->items)) { echo "checked"; } ?>> Wifi
                    </li>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Edit Event Now">
      </form>
    </div>

@endsection
