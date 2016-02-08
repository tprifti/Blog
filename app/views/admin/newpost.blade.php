@extends('layouts.master')

@section('title')
    Add New Post
@stop

@section('css')
    {{HTML::style('assets/admin/css/custom.css')}}

@stop

@section('content')

    <div class="row">
        <div class="col-md-6 pull-right">
            <div class="box-header">
                <h3 class="box-title">Add new category</h3>
        </div>
            {{Form::open(['method' => 'POST', 'route' =>'add.category'])}}
                <div class="input-group margin">
                    <input type="text" name="category" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-info btn-flat" type="button">Go!</button>
                    </span>
                </div>
            {{Form::close()}}
        </div>
    </div>
    {{ Form::open(['method' => 'POST', 'route' => 'article.store', 'files' => 'true']) }}

    <div class="row">

        <div class="col-md-12">


            <h3>Add new post</h3>
            {{Form::label('category_id','Category')}}
            {{Form::select('category_id', $category)}}
            <input type="text" name="title" class="form-control form-title" placeholder="Enter Title Here">
            <textarea name="body"></textarea>
        </div>

    </div>
    <div class="row">

        <div class="col-md-12">
            <div class="right">
                {{Form::file('image',array('class'=>'abpos', 'style' => 'text-align:left;'))}}
                {{Form::submit('Add New Post',array('class'=>'btn btn-succes'))}}


            </div>
        </div>
    </div>
    {{Form::close()}}
@stop

@section('scripts')
    {{HTML::script('tinymce/tinymce.min.js')}}
    <script type="text/javascript">
        tinymce.init({
            selector: "textarea",theme: "modern",
            height : "350",
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
            ],


            toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
            toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
            image_advtab: true ,
            relative_urls : false,
            convert_urls : true,
            remove_script_host : false,
            document_base_url : "http://localhost:8080/blog/public",
            external_filemanager_path:"http://localhost:8080/blog/public/filemanager/",
            filemanager_title:"Responsive Filemanager" ,
            external_plugins: { "filemanager" : "{{URL::to('filemanager/plugin.min.js')}}"}



        });
    </script>
@stop
