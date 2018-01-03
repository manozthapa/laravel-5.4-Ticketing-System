
@extends('layouts.app')
@section('content')
<form method="post" action="{{route('categories.update',$category->id)}}">
{{method_field('PUT')}}
{{csrf_field()}}
<input type="hidden" name="id" value="{{$category->id}}">
<div class="form-group">
	<label>Title</label>
	<input type="text" name="title" id="title" class="form-control" value="{{$category->title}}">
	
</div>

<div class="form-group">
	<input type="submit" name="save" value="save" class="btn btn-success">
</div>
</form>


@endsection
