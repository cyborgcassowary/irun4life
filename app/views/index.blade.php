@extends('layout')

@section('html_header')
	<title>iRun4Life | Combatting Childhood Obesity</title>

	<meta name="description" content="iRun4Life is a web application to fight Childhood obesity via Good Deeds and Mileage.">
@stop


@section('content')
	<div class="container">
		<div class="row">

			<div class="col-sm-4">
				
		<ul class="nav nav-justified nav-pills" id="signuptabs">
			<li class="active">
				<a data-toggle="pill" href="#student">Student</a>
			</li>

			{{--<li>--}}
				{{--<a data-toggle="pill" href="#parent">Parent</a>--}}
				{{--<a data-toggle="pill" href="#parent">Parent</a>--}}
			{{--</li>--}}
        </ul>

<br /><br />

	<section class="tab-content" style="overflow:hidden;">
            <div class="tab-pane active" id="student">
                <div class="col-xs-12">
                Student
                	<form>
        				<input type="text" class="form-control" placeholder="Username"><br />
        				<input type="password" class="form-control" placeholder="Password">
        				<br />
        				<button type="submit" class="btn btn-default">Sign In</button>
<br /> <br /> <div style="font-size:80%;"><a href="#">Forgot Username?</a> &nbsp;&nbsp; | &nbsp;&nbsp; <a href="#">Forgot Password?</a></div>
        			</form>
                   
				</div>

                <div class="clear"></div>
            </div>

            <div class="tab-pane" id="parent">
                <div class="col-xs-12">
Parent
                	<form role="form">
        				<input type="text" class="form-control" placeholder="Email Address"><br />
        				<input type="password" class="form-control" placeholder="Password">
        				<br />
        				<button type="submit" class="btn btn-default">Sign In</button>
<br><br>
        	<div style="font-size:80%;"> <a href="#">Forgot Password?</a></div>

        			</form>
                   
				</div>

                <div class="clear"></div>
            </div>
	</section>


			<div style="padding:20px;">

				<h4> Join Today!</h4>
    			<button type="submit" class="btn btn-default">Join</button>    	
			</div>   	
		

		</div>


		<div class="col-sm-8">
			<div style="overflow:hidden">
					<div class="col-sm-4">
						<h3>Schools</h3>
						<strong>48</strong>
					</div>
					<div class="col-sm-4">
						<h3>Good Deeds</h3>
						<strong>100,021</strong>
					</div>
					<div class="col-sm-4">
						<h3>Mileage</h3>
						<strong>21,033</strong>
					</div>
			</div>

					<br><br>
			

		<strong>iRun4Life is a nonprofit organization established to assist elementary schools in promoting fun, noncompetitive running programs that combat childhood obesity.</strong>

		<br><br><br><br><br><br><br>
		
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

