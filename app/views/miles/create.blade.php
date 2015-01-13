@extends('layouts.student')

@section('content')

    @include('layouts.partials.errors')

<div class="container">
    <div class="row">
		<div class="col-sm-8">
     {{ Form::open() }}

     {{Form::hidden('activity_name', 'Miles')}}
     {{Form::hidden('date', date("Y-m-d"))}}
            <div class="form-group">
                {{ Form::label('total_miles', 'Total Miles:') }}
                {{ Form::text('total_miles', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                    {{ Form::label('parents_participation', 'Parents Participation:') }}
                    {{Form::checkbox('parents_participation', '3') }}
            </div>

            <div class="form-group">
                {{ Form::submit('Add Miles', ['class' => 'btn btn-primary']) }}
            </div>

     {{Form::close()}}
        </div>
    </div>
</div>

@stop

@section('scripts')

@stop

