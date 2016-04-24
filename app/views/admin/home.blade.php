@extends('layouts.master')

@section('title')
    Homepage
@stop

@section('content')
   <!-- Content Wrapper. Contains page content -->

        <!-- Main content -->
        
          <div class="row">
          @if(Session::has('message'))
          <div class="col-md-9">
              <div class="alert alert-success alert-autocloseable-success">
                {{Session::get('message')}}
              </div>     
            </div>
          @endif
            <div class="col-md-6">

              <!-- AREA CHART -->
            
              <!-- DONUT CHART -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Donut Chart</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                    <canvas id="pieChart" style="height:250px"></canvas>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col (LEFT) -->
            <div class="col-md-6">
              <!-- LINE CHART -->

              <!-- BAR CHART -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Bar Chart</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="barChart" style="height:230px"></canvas>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col (RIGHT) -->
          </div><!-- /.row -->

      
 
@stop

@section('scripts')
    {{HTML::script('assets/admin/js/chart.min.js')}}
    {{HTML::script('assets/admin/js/custom.js')}}
@stop