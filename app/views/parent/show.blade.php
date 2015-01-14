@extends('layouts.student')

@section('content')

<div class="container">
    <div class="row">

      <div class="col-xs-14 text-center">
        <h3>Welcome back  {{ $parent->firstname }} {{ $parent->lastname }}   </h3>
       </div>


    </div>


    <div class="row">

            <div class="col-xs-12 col-xs-offset-1 directorsbox">

                <h1>For all Bridge Valley Students using iRun4Life</h1>

                <p class="lead">Please take a week off from school. You deserve it.</p>

                <p> - Bridge Valley Director</p>

            </div>

     </div>



        <div class="row">

        <div class="col-xs-8 col-xs-offset-1">

         <h2 class="text-center">
                    @if(count($students) === 1)
                       Your Student
                    @elseif(count($students) > 1)
                        Your Students
                    @else
                        You have no Students
                    @endif
                    </h2>
            <ul class="list-group">
            @foreach($students as $s)
                <li class="list-group-item"><a href="{{URL::to('/student/1' )}}"> {{$s->firstname}} {{ $s->lastname }} </a></li>
            @endforeach

            </ul>
        </div>

        <div class="col-xs-4 col-offset-xs-1">
           <br/><br/><br/>
        <ul>
{{--            <li>{{ link_to('parent/create/student', 'Create a Student', $attributes = array()) }}</li>--}}
        </ul>

        </div>


     </div>
</div>

@stop


