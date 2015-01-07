@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <h1>All Parents</h1>

            @foreach ($parents as $parent)
                <li>{{ $parent->firstname }} {{ $parent->lastname }}</li>
            @endforeach

        </div>
    </div>
@stop