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
<div class="panel-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Theatres</h2>
            </div>
        </div>
    </div>
</div>
<table class="table table-bordered table-hover" style="width: 70%">
    <tr>
        <td width="20%">
            <strong>Theatre name:</strong>
        </td>
        <td>
            {{ $theatre->theatreName }}
        </td>
    </tr>
    <tr>
        <td width="20%">
            <strong>Conduction date:</strong>
        </td>
        <td>
            {{ $theatre->conDate }}
        </td>
    </tr>
    <tr>
        <td width="20%">
            <strong>Location:</strong>
        </td>
        <td>
            {{ $theatre->location }}
        </td>
    </tr>
    <tr>
        <td width="20%">
            <strong>Ticket type:</strong>
        </td>
        <td>
            {{ $theatre->ticketType }}
        </td>
    </tr>
</table>
<div class="pull-right">
    <a class="btn btn-primary" href="{{ route('theatres.index') }}"> Back</a>
</div>
</body>
</html>
@endsection