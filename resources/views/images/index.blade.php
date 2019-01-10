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
<table class="table-bordered">
    <tbody>
    @foreach($images as $key => $value)
                <form method="post" action="{{url('images')}}" enctype="multipart/form-data">
                    <img src="<?php echo asset('storage/sample-images/' . $value->fileName);?>" alt="image" />
                </form>
        @endforeach
    </tbody>
    <div class="panel-heading">
        <a class="btn btn-small btn-info" href="{{ URL::to('images/create') }}">Add image</a>
    </div>
</table>
</body>
</html>
