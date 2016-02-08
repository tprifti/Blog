@extends('layouts.master')

@section('title')
    All Posts
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Responsive Hover Table</h3>
                    <div class="box-tools">
                        <div class="input-group" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{$article->id}}</td>
                                <td>{{$article->title}}</td>
                                <td>{{ date('F d, Y',strtotime($article->created_at)) }}</td>

                                <td><span class="label label-success">Approved</span></td>
                                <td>
                                        <span class="btn-group">
                                            <a href="{{url('article/'.$article->slug)}}" class="btn btn-success">Preview</a>
                                            <a href="{{url('article/'.$article->slug.'/edit')}}" class="btn btn-warning" style="margin: 0 10px 0 10px;">Edit</a>
                                            <a href="{{url('article/'.$article->slug.'/delete')}}" class="btn btn-danger">Delete</a>
                                        </span>
                                </td>
                            </tr>
                        @endforeach


                    </table>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
@stop