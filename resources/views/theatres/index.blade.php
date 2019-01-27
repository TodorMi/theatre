@extends('layouts.app')
@section('content')
        <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

</head>
<body>
<h1>Предстоящи събития</h1><br>
@if (Auth::check())
<div class="panel-heading">
    <a class="btn btn-small btn-info" href="{{ URL::to('theatres/create') }}">Create a Theatre</a>
</div>
@endif
<br>
<form action="{{action("SearchController@searchTheatres")}}" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group" style="max-width: 35%;">
        <input type="text" class="form-control" name="search" placeholder="Search a theatre"> <span class="input-group-btn">
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
        <th>Theatre Name</th>
        <th>Date</th>
        <th>Location</th>
        <th>Ticket Type</th>
        <th colspan="3">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($theatres as $key => $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->theatreName}}</td>
            <td>{{$value->conDate}}</td>
            <td>{{$value->location}}</td>
            <td>{{$value->ticketType}}</td>
            <td>
                <a class="btn btn-primary btn-primary" href="{{ route('theatres.show', $value->id) }}" method="POST">Show</a>
            </td>
            @if (Auth::check())
            <td>
                <a class="btn btn-small btn-warning" href="{{ URL::to('theatres/' . $value->id . '/edit') }}">Edit</a>
            </td>
            <td>
                <form action="{{action('TheatreController@destroy', $value->id )}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table><br>
<td>
    @if (Auth::check())
        <a class="btn btn-small btn-info" href="{{ URL::to('images') }}"> <span>Images</span></a>
    @endif
</td>
</body>
</html>
@endsection