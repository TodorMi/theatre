@extends('layouts.app')
@section('content')
        <!doctype html>
<body>
<h1>Снимки:</h1>
<div class="panel-heading">
    <a class="btn btn-small btn-info" href="{{ URL::to('images/create') }}">Add image</a>
</div>
<table class="table-bordered"style="max-width: 70%">
        <thead class="thead-dark">
        <tr>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        </thead>
    <tbody>
    @foreach($images as $key => $value)
        <tr>
            <td style="padding: auto;">
                <form method="post" action="{{url('images')}}" enctype="multipart/form-data">
                    <img style="width: 40%; height: 40%; padding:auto;" src="<?php echo asset('storage/sample-images/' . $value->fileName);?>" alt="image" />
                   {{--{{$value->imageDescription}}--}}
                </form>
            </td>
            @if (Auth::check())
                <td>
                    <form action="{{action('ImagesController@destroy', $value->id )}}" method="post">
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
<div class="pull-right">
    <a class="btn btn-primary" href="{{ route('theatres.index') }}"> Back</a>
</div>
</body>
</html>
@endsection
