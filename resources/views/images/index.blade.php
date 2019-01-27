@extends('layouts.app')

        <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Images</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .links > a {
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
            table{
                width: auto;
                max-width: 100%;
            }
        img {
            display: block;
            margin: auto;
            float:left;
            width: 30%;
            height: 40%;
            object-fit:cover;
            padding-right: 5px;
        }
        th, td{
            width: auto;
            margin: auto;
            padding-right: 5px;
        }
    </style>
</head>
<body>
<div class="panel-heading">
    <a class="btn btn-small btn-info" href="{{ URL::to('images/create') }}">Add image</a>
</div>
<table class="table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        </thead>
    <tbody>
    @foreach($images as $key => $value)
        <tr>
            <td>
                <form method="post" action="{{url('images')}}" enctype="multipart/form-data">
                    <img src="<?php echo asset('storage/sample-images/' . $value->fileName);?>" alt="image" />
                   {{--{{$value->imageDescription}}--}}
                </form>
            </td>
            @if (Auth::check())
                <td>
                    <form action="{{action('ImagesController@destroy', $value->id )}}" method="post">
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

<!--section bugva css-a, dobavi go-->
