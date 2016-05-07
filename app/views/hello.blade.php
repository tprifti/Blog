@extends('layouts.master')

@section('title')
    Add New Post
@stop

@section('css')
    {{HTML::style('assets/admin/css/custom.css')}}


@stop

@section('content')

    <div class="col-md-9">
        {{Form::open(['method' => 'POST', 'route' => 'article.store', 'files' => 'true']) }}
        <h3>Add new post</h3>
        <input type="text" name="title" class="form-control form-title" placeholder="Enter Title Here">
        <textarea name="body"></textarea>

        <div class="align-r">
        {{Form::file('image',array('class'=>'abpos'))}}
            {{Form::submit('Add New Post',array('class'=>'btn btn-succes'))}}
        </div>
        {{Form::close()}}
    </div>

    <div class="col-md-3 pull-right">
        {{Form::open(['method' => 'POST', 'route' =>'add.category'])}} 
            <h3>Format</h3>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Add new Category</h3>
                </div>
                <div class="box-body">
                    <div class="input-group margin">
                        <input type="text" name="category" class="form-control">
                            <span class="input-group-btn">
                              <button class="btn btn-info btn-flat" type="submit">Go!</button>
                            </span>
                    </div>
                <hr>
                <h4 class="box-title">Select Category</h4>
              {{Form::select('category_id', $category, '', ["class"=> "form-control",'id'=>'cat-select'])}}
              {{Form::close()}}
            </div>
        </div>
        <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Set thumbnail</h3>
                </div>
                <form action="upload.php" class="dropzone" id="myDropzone"></form>
            <hr>
        <div class="btn-group">
         <button class="btn btn-success btn-sm" id="submit-all">Upload Image</button>
         <button class="btn btn-danger btn-sm" id="clear-dropzone">Remove Image</button>
   </div>

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
            remove_script_host : false,
            document_base_url : "http://www.awesome.dev",
            external_filemanager_path:"http://www.awesome.dev/filemanager/",
            filemanager_access_key:'hello123',
            filemanager_title:"Responsive Filemanager" ,
            external_plugins: { "filemanager" : "{{URL::to('filemanager/plugin.min.js')}}"}



        });
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
    Dropzone.options.myDropzone = {
        autoProcessQueue : false,
        maxFiles : 1,
        init: function() {
    
            var submitBtn = document.querySelector("#submit-all");
            myDropzone = this;

            submitBtn.addEventListener("click",function(e){
                e.preventDefault();
                e.stopPropagation();
                myDropzone.processQueue();
            });
            var removeBtn = document.querySelector("#clear-dropzone");

            removeBtn.addEventListener("click", function() {
        // Using "_this" here, because "this" doesn't point to the dropzone anymore
            myDropzone.removeAllFiles();
        // If you want to cancel uploads as well, you
        // could also call _this.removeAllFiles(true);
      });
        }
    }
});
</script>
@stop