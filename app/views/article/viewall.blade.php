@extends('layouts.master')

@section('title')
    All Posts
@stop

@section('content')
    <div class="row" ng-controller="MainController">
        <div class="col-xs-12" >
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Responsive Hover Table</h3>
                    <div class="box-tools">
                        <div class="input-group" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search" ng-model="search">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                <div>
                </div>
                 <ul id="list"></ul>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="article in articles | filter: search | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                            
                                <td> [[ article.id ]]</td>
                                <td> [[ article.title ]]</td>
                                <td> [[ article.created_at]]</td>

                                <td><span class="label label-success">Approved</span></td>
                                <td>
                                    <span class="btn-group">
                                        <a href="/article/[[article.slug]]" class="btn btn-success">Preview</a>
                                        <a href="/article/[[article.slug]]/edit" class="btn btn-warning" style="margin: 0 10px 0 10px;">Edit</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </span>
                                </td>
                            </tr>
                            </tbody>
                        <pagination page="currentPage" max-size="noOfPages" total-items="totalArticles" items-per-page="entryLimit"></pagination>
                    </table>

                </div><!-- /.box-body -->
                
            </div><!-- /.box -->
           
        </div>
    </div>
@stop


@section('scripts')

{{HTML::script('app/js/angular.min.js')}}
{{HTML::script('app/js/ui-bootstrap-0.10.0.js')}}
{{HTML::script('app/js/main.js')}}
{{HTML::script('app/controllers/MainController.js')}}    
   
@stop
