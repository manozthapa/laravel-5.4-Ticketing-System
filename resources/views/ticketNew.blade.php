<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@extends('main')
@section('content')
<form method="post" action="{{url('save')}}">
{{csrf_field()}}
<div class="form-group">
	<label>Title</label>
	<input type="text" name="title" id="title" class="form-control">

	<label>Category</label>
	<select name="category_id" class="form-control">
		@foreach($categories as $cat)
		<option value="{{$cat->id}}">{{$cat->title}}</option>
		@endforeach
	</select>

	<label>Description</label>
	<textarea type="text" name="description" id="description" class="form-control" rows="20"></textarea>
	
</div>

<div class="form-group">
	<input type="submit" name="save" value="save" class="btn btn-success">
</div>
</form>


@endsection
</body>
</html>