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
                            <input type="text" name="table_search" class="form-control input-sm pull-right" id="ajaxContent" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover" id="articlesTable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        {{--@foreach($articles as $article)--}}
                        <tbody id="tbodyid">
                            {{--<tr>--}}
                                {{--<td>{{$article->id}}</td>--}}
                                {{--<td>{{$article->title}}</td>--}}
                                {{--<td>{{ date('F d, Y',strtotime($article->created_at)) }}</td>--}}

                                {{--<td><span class="label label-success">Approved</span></td>--}}
                                {{--<td>--}}
                                    {{--<span class="btn-group">--}}
                                        {{--<a href="{{route('article.show',$article->slug)}}" class="btn btn-success">Preview</a>--}}
                                        {{--<a href="{{route('article.edit',$article->slug)}}" class="btn btn-warning" style="margin: 0 10px 0 10px;">Edit</a>--}}
                                        {{--<a href="{{route('remove.article',$article->slug)}}" class="btn btn-danger">Delete</a>--}}
                                    {{--</span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            </tbody>
                        {{--@endforeach--}}
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
            {{--<center>{{$articles->links()}}</center>--}}
        </div>
    </div>
@stop

@section('scripts')

    <script type="text/javascript">
            $("document").ready(function(){

                    jQuery.ajax({
                        type: "GET",
                        dataType: "json",
                        url: "{{url('api/articles')}}", //Relative or absolute path to response.php file

                        success: function(data) {
                            jQuery.each(data, function(index) {
                            //console.log(data[index].id);
                                $id = data[index].id,
                                $title = data[index].title,
                                $created_at = data[index].created_at,
                                $slug = data[index].slug,

                                $article = $("#tbodyid");

                                        //Adding td **********SHOULD FIX THIS**********
                                        $html = [];
                                $html.push("<tr>");
                                $html.push("<td>"+$id+"</td>");
                                $html.push("<td>"+$title+"</td>");
                                $html.push("<td>"+$created_at+"</td>");
                                $html.push("<td>");
                                $html.push("<span class='label label-success'>Approved");
                                $html.push("</td>")
                                $html.push("</span>");
                                $html.push("<td>");
                                $html.push("<span class='btn-group'>");
                                $html.push("<a href='#' class='btn btn-success'>Preview</a>");
                                $html.push("<a href='#' class='btn btn-warning' style='margin: 0 10px 0 10px;'>Edit</a>");
                                $html.push("<a href='#' class='btn btn-danger'>Delete</a>");
                                $html.push("</td>");
                                $html.push("</span>");
                                $html.push("</tr>");


                                $($article).append($html.join(""));
                                
                            });

                    },
            });
            });

</script>

</script>
   
   @stop
