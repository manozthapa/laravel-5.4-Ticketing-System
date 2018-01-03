@extends('layouts.app')
@section('content')
	<div class="container">
		
			<div class="col-md-12">
				<div class="col-md-4">
					<nav>
						<ul>
							<li><a href="">Dashboard</a></li>
							<li>
								<a href="">Categories
								<ul>
									<li><a href="{{route('categories.index')}}">List Category</a></li>
									<li><a href="{{route('categories.create')}}">New Category</a></li>
								</ul>
								</a>
							</li>
							<li><a href="">Ticket</a></li>
							<li><a href="">User</a></li>
						</ul>
					</nav>
				</div>
			<div class="col-md-6">
				<div style="text-align: center;"></div>
				<h2>Welcome to Admin Dashboard </h2>		
			</div>
			</div>
	</div>
@endsection