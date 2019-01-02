@extends('layouts.app')
        <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .links > a {
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

    </style>
</head>
<body>
<h1>INDEX</h1>
<div class="panel-heading">
    <a class="btn btn-small btn-info" href="{{ URL::to('theatres/create') }}">Create a Theatre</a>
</div>
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
                <a class="btn btn-primary btn-red" href="{{ route('theatres.show', $value->id) }}" method="POST">Show</a>
            </td>
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('theatres/' . $value->id . '/edit') }}">Edit</a>
            </td>
            <td>
                <form action="{{action('TheatreController@destroy', $value->id )}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
