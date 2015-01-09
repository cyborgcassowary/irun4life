@extends('...layouts.student')

@section('content')

<div class="container">
    <div class="row">

    <h1>List of Students by Username</h1>
<ul>
        @foreach($student as $s)
        	<li>{{link_to("student/$s->id", $s->username)}}</li>

        @endforeach
</ul>
    </div>
</div>

@stop

@section('scripts')


@stop