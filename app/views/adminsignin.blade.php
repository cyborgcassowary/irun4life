@extends('layout')

@section('html_header')
	<title>iRun4Life | Administrator and Director Sign In Page</title>

	<meta name="description" content="iRun4Life is a web application to fight Childhood obesity via Good Deeds and Mileage.">
@stop


@section('content')
	<div class="container">
		<div class="row">
		<div class="col-sm-6">
			Administrator and Director Sign In


                	<form>
        				<input type="text" class="form-control" placeholder="Email"><br />
        				<input type="password" class="form-control" placeholder="Password">
        				<br />
        				<button type="submit" class="btn btn-default">Sign In</button>
<br /> <br /> <div style="font-size:80%;"> <a href="#">Forgot Password?</a></div>
        			</form>
		
		</div>

		



		</div>
	</div>
@stop

@section('scripts')
	<!-- 
		Insert extra scripts here... the logic is to deliver different scripts for different users.

		Although, we probably would just give the users a different layout.
		Although, we probably would just give the users a different layout.
	 -->
@stop

