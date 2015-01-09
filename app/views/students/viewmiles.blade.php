@extends('...layouts.student')

@section('content')

    <div class="container">
        <div class="row" style="overflow: hidden; padding:20px; border: 1px solid #000;">
            <div class="col-sm-4">
                <img src="http://lorempixel.com/300/300/people/" class="img-responsive" />

                <p> {{ $stu->username }} </p>
                <p>Real name: {{ $stu->firstname }} {{ $stu->lastname }} </p>
            </div>



            <div class="col-sm-10">
                <h1>Miles {{ link_to("student/$stu->id/miles/add", '+', array('title'=>'Add to Mileage')) }}</h1>
                <ul>
                    @foreach($miles as $m)
                        <li rel="{{$m->id}}">{{$m->activity_name}} : {{$m->total_miles}} - {{link_to("student/$m->id/miles/$m->mid", 'edit')}}</li>
                    @endforeach
                </ul>


{{--Taking care of business.--}}

            </div>
        </div>
    </div>

@stop

@section('scripts')



@stop