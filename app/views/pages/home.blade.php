@extends('layouts.master')

@section('html_header')
	<title>iRun4Life | Promoting Youth Fitness Through Running</title>

	<meta name="description" content="iRun4Life is a web application to fight Childhood obesity via Good Deeds and Mileage.">
@stop


@section('content')
	<div class="container">
		<div class="row">
		<div class="col-sm-12"><h1>iRun4Life</h1></div>
		{{--{{ if (Auth::check()) }} <style>#sidenavLogin{display:none;}</style>--}}

			<div class="col-sm-10" id="sidenavLogin">

		<ul class="nav nav-justified nav-pills" id="signuptabs">
			<li class="active">
				<a data-toggle="pill" href="#student">Student</a>
			</li>

			<li>
				<a data-toggle="pill" href="#parent">Parent</a>
			</li>
        </ul>

<br /><br />

	<section class="tab-content" style="overflow:hidden;">


            <div class="tab-pane active" id="student">

                <div class="col-xs-12">

                {{--Student--}}
                	{{ Form::open(array('url' => 'student/1', 'method' => 'get')) }}
{{--  --}}
{{-- ['route' => 'studentdash'] --}}

        				<div class="form-group">
        					{{ Form::label('username', 'Username:') }}
        					{{ Form::text('username', '', ['placeholder' => 'Username', 'class' => 'form-control']) }}
        				</div>
        				<div class="form-group">
        					{{ Form::label('password', 'Password:') }}
        					{{ Form::password('password', ['class' => 'form-control']) }}
        				</div>

        				<div class="form-group">

        					{{ Form::submit('Sign In', ['class' => 'btn btn-default']) }}

        				</div>
        				{{ Form::close() }}

{{--        				{{link_to('student', 'Sign In', $attributes = array('class'=>'btn btn-default'), $secure = null);}}--}}

 {{--<div style="font-size:80%;"><a href="#">Forgot Username?</a> &nbsp;&nbsp; | &nbsp;&nbsp; <a href="#">Forgot Password?</a></div>--}}


				</div>

                <div class="clear"></div>
            </div>

            <div class="tab-pane" id="parent">
                <div class="col-xs-12">
Parent
                	{{ Form::open() }}
                	{{--['route' => 'studentdash.create ']--}}
        				<!--<input type="text" class="form-control" placeholder="Email Address">-->
        				<div class="form-group">
        				{{ Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) }}
        				</div>
        				<div class="form-group">
							{{ Form::password('password', ['class' => 'form-control']) }}
						</div>

        				<div class="form-group">
        					{{ Form::submit('Sign In', ['class' => 'btn btn-default']) }}
						</div>

						{{ Form::close() }}

{{--						{{link_to('parents', 'Sign In', $attributes = array('class'=>'btn btn-default'), $secure = null);}}--}}
        	{{--<div style="font-size:80%;"> <a href="#">Forgot Password?</a></div>--}}





        			<div style="padding:20px;">

                    	<h4> Join today to enroll your students!</h4>

{{--                        {{ link_to_route('register_path', 'Join', null, ['class' => 'btn btn-lg btn-primary']) }}--}}
{{link_to('register', 'Join', $attributes = array('class'=>'btn btn-default'), $secure = null);}}
                    </div>

				</div>

                <div class="clear"></div>
            </div>
	</section>





		</div>


		<div class="col-sm-2">
			{{--<div style="overflow:hidden">--}}
					{{--<div class="col-sm-4">--}}
						{{--<h3>Schools</h3>--}}
						{{--<strong>48</strong>--}}
					{{--</div>--}}
					{{--<div class="col-sm-4">--}}
						{{--<h3>Good Deeds</h3>--}}
						{{--<strong>100,021</strong>--}}
					{{--</div>--}}
					{{--<div class="col-sm-4">--}}
						{{--<h3>Mileage</h3>--}}
						{{--<strong>21,033</strong>--}}
					{{--</div>--}}
			{{--</div>--}}

					{{--<br><br>--}}


		{{--<strong>iRun4Life is a nonprofit organization established to assist elementary schools in promoting fun, noncompetitive running programs that combat childhood obesity.</strong>--}}

		{{--<br><br><br><br><br><br><br>--}}

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

