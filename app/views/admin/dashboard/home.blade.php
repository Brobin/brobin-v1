@extends('admin.dashboard')

@section('title')

<title>Brobin Admin</title>

{{ HTML::style('http://cdn.oesmith.co.uk/morris-0.5.1.css') }}
{{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}
{{ HTML::script('http://cdn.oesmith.co.uk/morris-0.5.1.min.js')}}

@stop

@section('header')

Dashboard

@stop


@section('content')



<div class="row">

  <div class="col-lg-3">
    <div class="row">

      <div class="col-sm-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-comments fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">{{ $posts->getTotal() }}</div>
                <div>Blog Posts</div>
              </div>
            </div>
          </div>
          <a href="/admin/posts">
            <div class="panel-footer">
              <span class="pull-left">Manage</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-green">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-tasks fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">{{ $pages->count() }}</div>
                <div>Pages</div>
              </div>
            </div>
          </div>
          <a href="/admin/pages">
            <div class="panel-footer">
              <span class="pull-left">Manage</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-9">
    <div class="row">
      <div class="col-sm-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <div id="google-analytics-chart">

                <script>

                new Morris.Area({

                  element: 'google-analytics-chart',

                  data: [

                    { day: '2014-06-25', value: 14 },
                    { day: '2014-06-26', value: 8 },
                    { day: '2014-06-27', value: 25 },
                    { day: '2014-06-28', value: 18 },
                    { day: '2014-06-29', value: 39 },
                    { day: '2014-06-30', value: 4 },
                    { day: '2014-07-01', value: 17 },
                    { day: '2014-07-02', value: 39 },
                    { day: '2014-07-03', value: 8 },
                    { day: '2014-07-04', value: 35 },
                    { day: '2014-07-05', value: 4 },
                    { day: '2014-07-06', value: 9 },
                    { day: '2014-07-07', value: 2 },
                    { day: '2014-07-08', value: 37 },
                    { day: '2014-07-09', value: 27 },
                    { day: '2014-07-10', value: 71 },
                    { day: '2014-07-11', value: 13 },
                    { day: '2014-07-12', value: 22 },
                    { day: '2014-07-13', value: 16 },
                    { day: '2014-07-14', value: 137 },
                    { day: '2014-07-15', value: 120 },
                    { day: '2014-07-16', value: 153 },
                    { day: '2014-07-17', value: 33 },
                    { day: '2014-07-18', value: 57 },
                    { day: '2014-07-19', value: 41 },
                    { day: '2014-07-20', value: 42 },
                    { day: '2014-07-21', value: 79 },
                    { day: '2014-07-22', value: 27 },
                    { day: '2014-07-23', value: 54 },
                    { day: '2014-07-24', value: 58 },
                    { day: '2014-07-25', value: 39 }
                  ],

                  xkey: 'day',

                  ykeys: ['value'],

                  labels: ['Page Views']
                });

                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
<!-- /.row -->

@stop