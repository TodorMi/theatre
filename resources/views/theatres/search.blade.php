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
<div class="container">
    @if(isset($details))
        <p style="font-size: 25px;" class="text-center"> Your search results <b> {{ $query }} </b> are :</p>
        <h2>Theatre Details</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Theatre Name</th>
                <th>Date</th>
                <th>City</th>
            </tr>
            </thead>
            <tbody>
            @foreach($details as $theatre)
                <tr>
                    <td>{{$theatre->theatreName}}</td>
                    <td>{{$theatre->conDate}}</td>
                    <td>{{$theatre->location}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
</div>
@elseif(isset($message))
    <h1>{{$message}}</h1>
@endif
<div class="form-group row">
    <div class="col-xl-1"></div>
    <a class="btn btn-primary" href="{{ route('theatres.index') }}"> Back</a>
</div>
</body>
</html>