
@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<h2>New Category</h2>
	@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif
<form method="post" action="{{route('categories.store')}}">
{{csrf_field()}}
<div class="form-group">
	<label>Title</label>
	<input type="text" name="title" id="title" class="form-control">
	
</div>

<div class="form-group">
	<input type="submit" name="save" value="save" class="btn btn-success">
</div>
</form>
</div>
</div>


@endsection
