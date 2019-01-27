@extends('layouts.app')
@section('content')
        <!doctype html>
<body>
<h1>Locations</h1><br>
@if (Auth::check())
<div class="panel-heading">
    <a class="btn btn-small btn-info" href="{{ URL::to('locations/create') }}">Create a Location</a>
</div>
@endif
<br>
<form action="{{action("SearchController@searchLocations")}}" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group" style="max-width: 35%;">
        <input type="text" class="form-control" name="search"
               placeholder="Search a locations"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">Search</span>
            </button>
        </span>
    </div>
</form>
<br>
<table class="table-bordered">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Location Name</th>
        <th>Location</th>
        <th>City</th>
        <th colspan="3">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($locations as $key => $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->locationName}}</td>
            <td>{{$value->location}}</td>
            <td>{{$value->city}}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('locations.show', $value->id) }}" method="POST">Show</a>
            </td>
            @if (Auth::check())
            <td>
                <a class="btn btn-small btn-warning" href="{{ URL::to('locations/' . $value->id . '/edit') }}">Edit</a>
            </td>
            <td>
                <form action="{{action('LocationController@destroy', $value->id )}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
                @endif
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
@endsection