@extends('layouts.app')

@section('content')

<h1>List all tickets</h1>
	<div class="btn-div">
		<a href="{{url('ticketNew')}}" class="btn btn-primary">Post Your ticket</a>
	</div>
	<div id="ticket-wrapper" class="col-md-12">
		@foreach($tickets as $ticket)
			<div class="row">
				<div class="col-md-6">
					<h4><a href="{{url('view/'.$ticket['id'])}}">{{$ticket['title']}}</a></h4>
					<p>{{$ticket['description']}}</p>
					<p>
						<span>{{ Auth::user()->name }}</span>
						
					</p>
				</div>
			</div>
		@endforeach

		<div class="row">
			<div class="col-md-4">
				place your answer here
			</div>
		</div> 
	</div>
@endsection

@section('header-scripts')
<style type="text/css">
	.btn-div{
		float: right; 
	}
</style>
@endsection