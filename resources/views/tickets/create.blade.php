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

        </style>
</head>
<body>
<h1>Creation form</h1>
<div class="panel-body">
        @if ($errors->any())
                <div class="alert alert-danger">
                        <ul>
                                @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                @endforeach
                        </ul>
                </div>
@endif
                <form method="post" action="{{url('/tickets')}}">
                        <div class="form-group row" style="max-width: 60%">
                                {{csrf_field()}}
                                <label for="ticketType" class="col-sm-2 col-form-label col-form-label-lg">Ticket type</label>
                                <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput5" placeholder="Ticket type:" name="ticketType">
                                </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-auto"></div>
                            <a class="btn btn-primary" href="{{ route('tickets.index') }}"> Back</a>
                            <div class="col-md-auto"></div>
                            <input type="submit" class="btn btn-primary">
                        </div>
                </form>
</div>
</body>
</html>
@endsection