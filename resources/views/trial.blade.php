@extends('layouts.app')

@section('content')
<h1>Congrats! you have been connected to view</h1>
	@foreach($answers as answer)
	<p>{{$answer->answer}}</p>
@endsection