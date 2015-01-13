@extends('layouts.director')


@section('content')

    <div class="container">
        <div class="row">

        <h1>All Students from Bridge Valley</h1>
<div class="list-group">
            @foreach($students as $s)
               {{link_to("student/$s->id", $s->username, $attributes = array('class' => 'list-group-item'))}}
            @endforeach


</div>
        </div>
    </div>

@stop