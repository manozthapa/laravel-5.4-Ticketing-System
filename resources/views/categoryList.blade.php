@extends('layouts.app')
@section('content')
<div class="container"><h2>Category List</h2>
<a href="{{route('categories.create')}}" class="btn btn-primary">Add New Category</a>
<table class="table">
	<thead>
		<th>S.N.</th>
		<th>Title</th>
		<th>Created Date</th>
		<th>Action</th>
	</thead>

	<tbody>
		@foreach($categories as $key=>$category)
		<tr>
			<td>{{$key+1}}</td>
			<td>{{$category->title}}</td>
			<td>{{$category->created_at}}</td>
			<td>
			<a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary">Edit</a>
			<a href="{{route('categories.show',$category->id)}}" class="btn btn-success">View</a>
			
			<form action="{{route('categories.update',$category->id)}}" class="delete-frm" method="post">
				{{method_field('DELETE')}}
				{{csrf_field()}}
				<input type="submit" name="delete" value="Delete" class="btn btn-danger">	
				
			</form>
			</td>
		</tr>
		@endforeach

	</tbody>
</table>
</div>


@endsection

@section('footer-scripts')
<script type="text/javascript">
	$(document).ready(function(){
		$('.btn-danger').click(function(e){
			var conf = confirm("Are you sure you want to delete this data?");
			if (conf) 
				return true;
			else
				return false;
			
		});
	});
</script>
@endsection