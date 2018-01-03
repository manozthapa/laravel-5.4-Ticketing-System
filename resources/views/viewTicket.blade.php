 @extends('layouts.app')
@section('content')
	<div>
		<div>{{$ticket->title}}</div>
		<p>{{$ticket->description}}</p>
		<hr>
		@foreach($answers as $answer)
		<p>{{$answer->answer}}</p>
		<span>{{$answer->user_id}}</span>
		@endforeach

		<div>
			<h2>Answer Now</h2>
			<form method="post" action="{{route('answers.store')}}">
			{{csrf_field()}}
			<div class="form-group">
				<textarea name="answer" cols="10" rows="10" class="form-control"></textarea>
				
			</div>
			<input type="submit" name="save" class=" btn btn-success">
			</form>
		</div>
		
	</div>
@endsection