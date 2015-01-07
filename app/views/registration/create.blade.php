@extends('layouts.master')

@section('content')
<div class="container">
		<div class="row">
		<div class="col-sm-8">
    <h1>Parent Registration!</h1>



    @include('layouts.partials.errors')

    {{ Form::open() }}
    {{--  ['route' => 'register'] This doesn't work and is unneeded. So much time wasted figuring this out. --}}

        {{-- First Name --}}
        <div class="form-group">
            {{ Form::label('firstname', 'First Name:') }}
            {{ Form::text('firstname', null, ['class' => 'form-control']) }}
        </div>

        {{-- Last Name --}}
        <div class="form-group">
            {{ Form::label('lastname', 'Last Name:') }}
            {{ Form::text('lastname', null, ['class' => 'form-control']) }}
        </div>

        {{-- Email --}}
        <div class="form-group">
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email', null, ['class' => 'form-control']) }}
        </div>
        {{-- Password --}}
        <div class="form-group">
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
        </div>
        {{-- Password confirmation --}}
        <div class="form-group">
            {{ Form::label('password_confirmation', 'Password Confirmation:') }}
            {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
        </div>


        <div class="form-group">
            {{ Form::submit('Sign Up', ['class' => 'btn btn-primary']) }}
        </div>

    {{Form::close()}}
    </div>

    <div class="col-sm-4">
        <h4>A note about parent registration.</h4>

        <p>Once you're registered, you will be able to create user accounts for your child or children.  </p>
    </div>
    </div>
</div>

@stop