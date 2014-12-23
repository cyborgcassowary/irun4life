@extends('layouts.master')

@section('html_header')
	<title>iRun4Life | Administrator and Director Sign In Page</title>

	<meta name="description" content="iRun4Life is a web application to fight Childhood obesity via Good Deeds and Mileage.">
@stop


@section('content')
	<div class="container">
		<div class="row">
		<div class="col-sm-6">
			<h1>Director Sign In </h1>


			{{ Form::open(array('url' => 'director', 'method' => 'get')) }}

			{{--['route' => 'studentdash.create']--}}
			<div class="form-group">
				<!--<input type="text" class="form-control" placeholder="Username"><br />-->
				{{ Form::text('email', 'ryan@ryanhettler.com', ['class' => 'form-control']) }}
			</div>
			<div class="form-group">
				{{ Form::password('password', ['class' => 'form-control']) }}
			</div>
			<!--<input type="password" class="form-control" placeholder="Password">-->
			<div class="form-group">
				<!--<button type="submit" class="btn btn-default">Sign In</button>-->
				{{ Form::submit('Sign In', ['class' => 'btn btn-default']) }}

			</div>
			{{ Form::close() }}

		</div>





		</div>
	</div>
@stop

@section('scripts')
	<!--
		Insert extra scripts here... the logic is to deliver different scripts for different users.

		Although, we probably would just give the users a different layout.
	 -->
@stop

