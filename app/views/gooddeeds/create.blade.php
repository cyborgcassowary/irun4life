@extends('layouts.student')

@section('content')
    @include('layouts.partials.errors')

<div class="container">
    <div class="row">
		<div class="col-sm-8">
     {{ Form::open() }}

            <div class="form-group">
                {{ Form::label('deed_name', 'Good Deed Name:') }}
                {{ Form::text('deed_name', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::submit('Add Good Deeds', ['class' => 'btn btn-primary']) }}
            </div>

        {{Form::close()}}
             </div>
    </div>
</div>

@stop


