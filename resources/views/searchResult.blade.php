@extends('layouts.app');

@section('content')
<div class="container">
	<div class="col-md-12">
		<h2>Search Results</h2>
		<ul>
			@foreach($results as $result)
				<li>
					<a href="{{url('view/'.$result->id)}}">
					{{$result->title}}
					</a>
				</li>
			@endforeach
		</ul>
	</div>
</div>

@endsection