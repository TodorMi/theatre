@extends('layouts.app')
@section('content')
        <!doctype html>
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
@endsection