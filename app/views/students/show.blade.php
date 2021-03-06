@extends('...layouts.student')

@section('content')

<div class="container">
    <div class="row" style="overflow: hidden; padding:0 20px 20px 20px; ">

        <div class="col-sm-14" style="text-align:center;">
                     <h3>Welcome back  {{ $stu->firstname }}   </h3>
{{--  {{ $stu->username }} --}}
                                       <article class="col-sm-6 col-sm-offset-3">
                                        {{--<p>Real name: {{ $stu->lastname }} </p>--}}
                                       	{{--<p>Grade: {{ $stu->grade->grade }} Grade</p>--}}
                                       	{{--<p>Age: {{ $stu->age }} </p>--}}
                                       	{{--<p>School: {{ $stu->school->name }}</p>--}}

                     </article>
        </div>

        <div class="col-sm-14" id="student-graph">

        {{--<a href="" class="btn btn-primary">Add Miles</a>--}}
        {{--<a href="" class="btn btn-primary">Add Good Deeds</a>--}}

        {{--</div>--}}



    </div>


    <div class="row">

        <div class="col-xs-12 col-xs-offset-1 directorsbox">

            <h1>For all Bridge Valley Students using iRun4Life</h1>

            <p class="lead">Please take a week off from school. You deserve it.</p>

            <p> - Bridge Valley Director</p>

        </div>

    </div>

    <div class="row" style="overflow: hidden; padding:20px 120px 20px 20px; ">
        <div class="col-md-14">
        <h3 style="text-align:center;">Latests Miles</h3>
        </div>
            {{--<div class="col-md-2 col-sm-2"> {{link_to('moremiles', '<', $attributes = array('class'=>'', 'style'=> 'font-size:50px'), $secure = null);}} </div>--}}
            <div class="col-sm-2">

                <a href="{{ URL::to("student/". $stu->id ."/miles/view") }}" class="arrow-link pull-right"><img src="/images/arrow_2.png" class="responsive-image" alt="View all Miles"/></a>
            </div>
             @foreach($rmiles as $m)
            <div class="col-sm-2 mileagebox pull-right">
            <div href="" style="display:block; background:#fff; border color:#fff; text-align: center; padding: 20px 4px; ">
            <strong>{{ date('l', strtotime($m->created_at)) }}</strong>
<br>
               <strong> {{ date('M d Y ', strtotime($m->created_at)) }} </strong>


<br/><br/>


               <strong>Miles:</strong><br /> <strong style="color:#eea236; font-size:22px;">{{ $m->total_miles }} </strong><br /><br />


                <br /><br />
{{--                <h2>{{ $m->count }}</h2>--}}
              </div>
              </div>
            @endforeach

            {{--<div class="col-md-4 col-sm-4"><a href="" style="display:block; background:#fff; border:4px solid #2e55ae; min-height:300px; color:#2e55ae; text-align: center; padding: 20px 4px; ">--}}
                                   {{--Saturday<br>--}}
                                   {{--January 3, 2014<br><br>--}}

                                   {{--16--}}


                                                  {{--</a></div>--}}


             {{--<div class="col-md-4 col-sm-4"><a href="" style="display:block; background:#fff; border:4px solid #2e55ae; min-height:300px; color:#2e55ae; text-align: center; padding: 20px 4px; ">--}}
                                   {{--Sunday<br>--}}
                                   {{--January 4, 2014<br><br>--}}

                                   {{--12--}}


                                                  {{--</a></div>--}}

             {{--<div class="col-md-4 col-sm-4"><a href="" style="display:block; background:#fff; border:4px solid #2e55ae; min-height:300px; color:#2e55ae; text-align: center; padding: 20px 4px; ">--}}
           {{--Monday<br>--}}
           {{--January 5, 2014<br><br>--}}

           {{--4--}}


                          {{--</a></div>--}}

    {{--<div class="col-sm-2 col-sm-offset-12">--}}
        {{--{{ link_to("student/$stu->id/miles/view", 'view all miles') }}--}}
    {{--</div>--}}

        </div>

            {{--</div>--}}

        <div class="row">
        {{--<h3 style="text-align:center;">Add Deeds</h3>--}}
        <div class="col-sm-6">

         {{ Form::open(array('action' => 'StudentController@addMiles', 'class'=>'form-inline', 'style'=>'padding-top:40px;' )) }}

                     {{Form::hidden('activity_name', 'Miles')}}
                     {{Form::hidden('date', date("Y-m-d"))}}
                            <div class="form-group">
                                {{ Form::label('total_miles', 'Total Miles:') }}
                                {{ Form::text('total_miles', null, ['class' => 'form-control']) }}

                                {{ Form::submit('Add Miles', ['class' => 'btn btn-primary']) }}
                            </div>

                            <div class="form-group" style="">
                                    {{ Form::label('parents_participation', 'Parents Participation:') }}
                                    {{Form::checkbox('parents_participation', '3') }}
                            </div>

                            <div class="form-group">

                            </div>

                     {{Form::close()}}





{{ Form::open(array('action' => 'StudentController@addGoodDeed', 'class'=>'form-inline', 'style'=>'padding-top:40px;' )) }}
{{----}}
{{--, 'class'=>'form-inline', 'style'=>'padding-top:40px;'--}}
               {{ Form::text('deed_name', null, ['placeholder' => 'ex. walked dog, feed cat.', 'class' => 'form-control', 'style' => 'width:60%; margin-bottom:10px;']) }}
               {{Form::hidden('score', '1')}}
               {{Form::hidden('date', strtotime("now"))}}
               {{ Form::submit('Add a Good Deed', ['class' => 'btn btn-primary', 'style' => 'width:36%; margin-top:-9px;']); }}
        {{ Form::close() }}

        </div>
        <div class="col-sm-8">
            {{--<h1>Miles {{ link_to("student/$stu->id/miles/add", '+', array('title'=>'Add to Mileage')) }}</h1>--}}
{{--<ul>--}}
            {{--@foreach($miles as $m)--}}
                {{--<li rel="{{$m->id}}">{{$m->activity_name}} : {{$m->total_miles}} - {{link_to("student/$m->id/miles/$m->mid", 'edit')}}</li>--}}
            {{--@endforeach--}}
{{--</ul>--}}

{{--            <h1>Good Deeds {{ link_to("student/$stu->id/gooddeeds/add", '+', array('title'=>'Add to Good Deeds')) }}</h1>--}}

            <h4>Latests Good Deeds</h4>
            <ul class="list-group">
                @foreach($gooddeeds as $gd)
                    <li class="list-group-item">{{$gd->deed_name}}  </li>
                    {{--{{$gd->score}}--}}
                @endforeach
            </ul>


        </div>
    </div>
</div>

@stop

@section('scripts')

<script src="/js/bootstrap-datepicker.js"></script>
<script src="/js/d3.min.js"></script>


<script type="text/javascript">

function lineChart() { // <-1A
    var _chart = {};

    var _width = parseInt(d3.select('#student-graph').style('width'), 10), _height = 300, // <-1B
            _margins = {top: 30, left: 30, right: 30, bottom: 30},
            _x, _y,
            _percent = d3.format('%'),
            _data = [],
            _colors = d3.scale.category10(),
            _svg,
            _bodyG,
            _line;

    _chart.render = function () { // <-2A
        if (!_svg) {
            _svg = d3.select("#student-graph").append("svg") // <-2B
                    .attr("height", _height)
                    .attr("width", _width);

            renderAxes(_svg);

            defineBodyClip(_svg);
        }

        renderBody(_svg);
    };



    function renderAxes(svg) {
        var axesG = svg.append("g")
                .attr("class", "axes");

        renderXAxis(axesG);

        renderYAxis(axesG);

    }

    function renderXAxis(axesG){
        var xAxis = d3.svg.axis()
                .scale(_x.range([0, quadrantWidth()]))
                .orient("bottom");

        axesG.append("g")
                .attr("class", "x axis")
                .attr("transform", function () {
                    return "translate(" + xStart() + "," + yStart() + ")";
                })
                .call(xAxis);

        d3.selectAll("g.x g.tick")
            .append("line")
                .classed("grid-line", true)
                .attr("x1", 0)
                .attr("y1", 0)
                .attr("x2", 0)
                .attr("y2", - quadrantHeight());
    }

    function renderYAxis(axesG){
        var yAxis = d3.svg.axis()
                .scale(_y.range([quadrantHeight(), 0]))
                .orient("left");

        axesG.append("g")
                .attr("class", "y axis")
                .attr("transform", function () {
                    return "translate(" + xStart() + "," + yEnd() + ")";
                })
                .call(yAxis);

         d3.selectAll("g.y g.tick")
            .append("line")
                .classed("grid-line", true)
                .attr("x1", 0)
                .attr("y1", 0)
                .attr("x2", quadrantWidth())
                .attr("y2", 0);
    }

    function defineBodyClip(svg) { // <-2C
        var padding = 5;

        svg.append("defs")
                .append("clipPath")
                .attr("id", "body-clip")
                .append("rect")
                .attr("x", 0 - padding)
                .attr("y", 0)
                .attr("width", quadrantWidth() + 2 * padding)
                .attr("height", quadrantHeight());
    }

    function renderBody(svg) { // <-2D
        if (!_bodyG)
            _bodyG = svg.append("g")
                    .attr("class", "body")
                    .attr("transform", "translate("
                        + xStart() + ","
                        + yEnd() + ")") // <-2E
                    .attr("clip-path", "url(#body-clip)");

        renderLines();

        renderDots();
    }

    function renderLines() {
        _line = d3.svg.line() //<-4A
                        .x(function (d) { return _x(d.x); })
                        .y(function (d) { return _y(d.y); });

        _bodyG.selectAll("path.line")
                    .data(_data)
                .enter() //<-4B
                .append("path")
                .style("stroke", function (d, i) {
                    return _colors(i); //<-4C
                })
                .attr("class", "line");

        _bodyG.selectAll("path.line")
                .data(_data)
                .transition() //<-4D
                .attr("d", function (d) { return _line(d); });
    }

    function renderDots() {
        _data.forEach(function (list, i) {
            _bodyG.selectAll("circle._" + i) //<-4E
                        .data(list)
                    .enter()
                    .append("circle")
                    .attr("class", "dot _" + i);

            _bodyG.selectAll("circle._" + i)
                    .data(list)
                    .style("stroke", function (d) {
                        return _colors(i); //<-4F
                    })
                    .transition() //<-4G
                    .attr("cx", function (d) { return _x(d.x); })
                    .attr("cy", function (d) { return _y(d.y); })
                    .attr("r", 4.5);
        });
    }

    function xStart() {
        return _margins.left;
    }

    function yStart() {
        return _height - _margins.bottom;
    }

    function xEnd() {
        return _width - _margins.right;
    }

    function yEnd() {
        return _margins.top;
    }

    function quadrantWidth() {
        return _width - _margins.left - _margins.right;
    }

    function quadrantHeight() {
        return _height - _margins.top - _margins.bottom;
    }

    _chart.width = function (w) {
        if (!arguments.length) return _width;
        _width = w;
        return _chart;
    };

    _chart.height = function (h) { // <-1C
        if (!arguments.length) return _height;
        _height = h;
        return _chart;
    };

    _chart.margins = function (m) {
        if (!arguments.length) return _margins;
        _margins = m;
        return _chart;
    };

    _chart.colors = function (c) {
        if (!arguments.length) return _colors;
        _colors = c;
        return _chart;
    };

    _chart.x = function (x) {
        if (!arguments.length) return _x;
        _x = x;
        return _chart;
    };

    _chart.y = function (y) {
        if (!arguments.length) return _y;
        _y = y;
        return _chart;
    };

    _chart.addSeries = function (series) { // <-1D
        _data.push(series);
        return _chart;
    };

    return _chart; // <-1E
}

function randomData() {
    return Math.random() * 9;
}

function update() {
    for (var i = 0; i < data.length; ++i) {
        var series = data[i];
        series.length = 0;
        for (var j = 0; j < numberOfDataPoint; ++j)
            series.push({x: j, y: randomData()});
    }

    chart.render();
}

var numberOfSeries = 2,
    numberOfDataPoint = 7,
    data = [];

for (var i = 0; i < numberOfSeries; ++i)
    data.push(d3.range(numberOfDataPoint).map(function (i) {
        return {x: i, y: randomData()};
    }));

var chart = lineChart()
        .x(d3.scale.linear().domain([0, 7]))
        .y(d3.scale.linear().domain([0, 10]));

data.forEach(function (series) {
    chart.addSeries(series);
});

  // resize
    d3.select(window).on('resize', resize);

    function resize() {
        console.log('resize');

        _width = parseInt(d3.select('#student-graph').style('width'), 10);
//        _width = _width - margins.left - margins.right;
            // reset x range
        _x.range([0, quadrantWidth()]);

    }

chart.render();

</script>

<script>
/*
var date = new Date();
// date.setDate(date.getDate() - 1);

var weekofrunning = [];

for(i=0; i<7; i++)
{
    date.setDate(date.getDate() - 1)
    weekofrunning.push( (date.getMonth()+1) + '/' +date.getDate() + '/' + date.getFullYear() );

    console.log(weekofrunning[i] + ' / ' +  weekofrunning.length );
}
*/
</script>

@stop