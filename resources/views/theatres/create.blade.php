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
<h1>Creation form</h1><br>
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

                <form method="post" action="{{url('/theatres')}}">
                        <div class="form-group row" style="max-width: 60%">
                                {{csrf_field()}}
                                <label for="theatreName" class="col-sm-2 col-form-label col-form-label-lg">Theatre Name</label>
                                <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput1" placeholder="Enter name:" name="theatreName">
                                </div>
                        </div>
                        <div class="form-group row" style="max-width: 60%">
                                {{csrf_field()}}
                                <label for="Date" class="col-sm-2 col-form-label col-form-label-lg">Date</label>
                                <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput2" placeholder="Date" name="conDate">
                                </div>
                        </div>
                        <div class="form-group row" style="max-width: 60%">
                                {{csrf_field()}}
                                <label for="Location" class="col-sm-2 col-form-label col-form-label-lg">Location</label>
                                <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput6" placeholder="Location" name="location">
                                </div>
                        </div>
                        <div class="form-group row" style="max-width: 60%">
                                {{csrf_field()}}
                                <label for="ticketType" class="col-sm-2 col-form-label col-form-label-lg">Ticket type</label>
                                <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput5" placeholder="Ticket type:" name="ticketType">
                                </div>
                        </div>
                        <div class="form-group row">
                                <div class="col-md-auto"></div>
                                <a class="btn btn-primary" href="{{ route('theatres.index') }}"> Back</a>
                                <div class="col-md-auto"></div>
                                <input type="submit" class="btn btn-primary">
                        </div>
                </form>
</div>
</body>
</html>
@endsection