@extends('layouts.app')
@section('content')
        <!doctype html>
</head>
<body>
<h1>Show tickets</h1>
<div class="panel-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tickets.index') }}">Back</a>
            </div>
        </div>
    </div>
</div>
<table class="table table-bordered table-hover" style="width: 70%">
    <tr>
        <td width="20%">
            <strong>Ticket type:</strong>
        </td>
        <td>
            {{ $ticket->ticketType }}
        </td>
    </tr>
</table>
</body>
</html>
@endsection