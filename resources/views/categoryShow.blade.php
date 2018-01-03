@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<h2>{{$category->title}}</h2>
			<small>{{$category->created_at}}</small>
			<small>{{$category->updated_at}}</small>
		</div>	
	</div>	