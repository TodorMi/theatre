@extends('layouts.app')
@section('content')
        <!doctype html>
<body>
<h1>Видове билети</h1>
@if (Auth::check())
<div class="panel-heading">
    <a class="btn btn-small btn-info" href="{{ URL::to('tickets/create') }}">Create a Ticket type</a>
</div>
@endif
<br>
<table class="table-bordered">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Ticket Type</th>
        <th colspan="3">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tickets as $key => $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->ticketType}}</td>
            <td>
                <a class="btn btn-primary btn-red" href="{{ route('tickets.show', $value->id) }}" method="POST">Show</a>
            </td>
            @if (Auth::check())
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('tickets/' . $value->id . '/edit') }}">Edit</a>
            </td>
            <td>
                <form action="{{action('TicketController@destroy', $value->id )}}" method="post">
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
@endsection