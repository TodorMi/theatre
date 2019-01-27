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
<h1>Edit</h1><br>
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
        <form method="post" action="{{action('LocationController@update' , $id)}}">
            <div class="form-group row" style="max-width: 60%">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="PATCH">
                <label for="locationName" class="col-sm-2 col-form-label col-form-label-lg">Name of the location:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput1" placeholder="Enter a location:" name="locationName" value="{{$location->locationName}}">
                </div>
            </div>
            <div class="form-group row" style="max-width: 60%">
                {{csrf_field()}}
                <label for="Location" class="col-sm-2 col-form-label col-form-label-lg">Location</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput6" placeholder="Location" name="location" value="{{$location->location}}">
                </div>
            </div>
            <div class="form-group row" style="max-width: 60%">
                {{csrf_field()}}
                <label for="city" class="col-sm-2 col-form-label col-form-label-lg">City:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput5" placeholder="City:" name="city" value="{{$location->city}}">
                </div>
            </div>
        <div class="form-group row" >
            <div class="col-md-2"></div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
</body>
</html>
@endsection