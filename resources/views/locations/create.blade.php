@extends('layouts.app')
@section('content')
        <!doctype html>
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
                <form method="post" action="{{url('/locations')}}">
                        <div class="form-group row" style="max-width: 60%">
                                {{csrf_field()}}
                                <label for="locationName" class="col-sm-2 col-form-label col-form-label-lg">Name of the location:</label>
                                <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput1" placeholder="Enter a location:" name="locationName">
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
                                <label for="city" class="col-sm-2 col-form-label col-form-label-lg">City:</label>
                                <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput5" placeholder="City:" name="city">
                                </div>
                        </div>
                        <div class="form-group row">
                                <div class="col-md-auto"></div>
                                <a class="btn btn-primary" href="{{ route('locations.index') }}">Back</a>
                                <div class="col-md-auto"></div>
                                <input type="submit" class="btn btn-primary">
                        </div>
                </form>
</div>
</body>
</html>
@endsection