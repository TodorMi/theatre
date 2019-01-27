@extends('layouts.app')
@section('content')
        <!doctype html>
<body>
<div class="container">
    @if(isset($details))
        <p style="font-size: 25px;" class="text-center"> Your search results <b> {{ $query }} </b> are :</p>
        <h2>Locations Details</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Location Name</th>
                <th>Location</th>
                <th>City</th>
            </tr>
            </thead>
            <tbody>
            @foreach($details as $location)
                <tr>
                    <td>{{$location->locationName}}</td>
                    <td>{{$location->location}}</td>
                    <td>{{$location->city}}</td>
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
    <a class="btn btn-primary" href="{{ route('locations.index') }}"> Back</a>
</div>
</body>
</html>
@endsection