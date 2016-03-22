@extends('layouts.master')
@section('title')
    Edit Post
@stop

@section('css')
    {{HTML::style('assets/admin/css/custom.css')}}
@stop

@section('content')
    <div class="col-md-12">
        <div class="row">
            {{ Form::model($articles,['method' => 'PUT', 'files' =>'true','route' => ['article.update',$articles->slug]]) }}


            <input type="text" name="title" class="form-control"  value= "{{$articles->title}}">


            <textarea name="body">{{$articles->body}}</textarea>
            {{Form::submit('Save Changes')}}
            {{Form::close()}}
        </div>
    </div>
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
            remove_script_host : true,
            document_base_url : "http://www.awesome.dev",
            external_filemanager_path:"http://www.awesome.dev/filemanager/",
            filemanager_title:"Responsive Filemanager" ,
            
            external_plugins: { "filemanager" : "{{URL::to('filemanager/plugin.min.js')}}"}




        });
    </script>
@stop