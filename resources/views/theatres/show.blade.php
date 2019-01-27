@extends('layouts.app')
@section('content')
        <!doctype html>
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