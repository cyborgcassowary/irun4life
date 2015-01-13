@extends('...layouts.student')

@section('content')

    <div class="container">
        <div class="row" >
            <div class="col-sm-12">


                {{--<p> {{ $stu->username }} </p>--}}
                <h1>Hey {{ $stu->firstname }}! <br /> Below is a list of your all miles. </h1>
            </div>



            <div class="col-sm-10">
                <strong style="font-size:18px; line-height:30px;">Add Miles {{ link_to("student/addmiles", '+', array('title'=>'Add to Mileage')) }}</strong>
                {{--$stu->id--}}
                <ul class="list-group">
                    @foreach($rmiles as $m)
                        <li rel="{{$m->id}}" class="list-group-item"> <strong>Total {{$m->activity_name}}:</strong>  {{$m->total_miles}}  <br /> <strong>Date:</strong> {{$m->date}} <br /><br /> {{link_to("student/$m->id/miles/$m->mid/edit", 'edit')}} | {{link_to("student/$m->id/miles/$m->mid/delete", 'delete')}}</li>
                    @endforeach
                </ul>


{{--Taking care of business.--}}

            </div>
        </div>
    </div>

@stop

@section('scripts')



@stop