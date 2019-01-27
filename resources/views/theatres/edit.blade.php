@extends('layouts.app')
@section('content')
        <!doctype html>
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
    <form method="post" action="{{action('TheatreController@update' , $id)}}">
        <div class="form-group row" style="max-width: 60%">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <label for="firstName" class="col-sm-2 col-form-label col-form-label-lg">Theatre Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput1" placeholder="Enter name:" name="theatreName" value="{{$theatre->theatreName}}">
            </div>
        </div>
        <div class="form-group row" style="max-width: 60%">
            {{csrf_field()}}
            <label for="Date" class="col-sm-2 col-form-label col-form-label-lg">Date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput2" placeholder="Date" name="conDate" value="{{$theatre->conDate}}">
            </div>
        </div>
        <div class="form-group row" style="max-width: 60%">
            {{csrf_field()}}
            <label for="Location" class="col-sm-2 col-form-label col-form-label-lg">Location</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput6" placeholder="Location" name="location" value="{{$theatre->location}}">
            </div>
        </div>
       <div class="form-group row" style="max-width: 60%">
            {{csrf_field()}}
            <label for="ticketType" class="col-sm-2 col-form-label col-form-label-lg">Ticket type</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput5" placeholder="Ticket type:" name="ticketType" value="{{$theatre->ticketType}}">
            </div>
        </div>
        <div class="form-group row" style="max-width: 60%">
            <div class="col-md-2"></div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
</body>
</html>
@endsection