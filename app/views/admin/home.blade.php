@extends('layouts.master')

@section('title')
    Homepage
@stop

@section('content')
    <div class="col-md-12">
        {{Form::open(['url' => '/upload', 'method' => 'POST', 'class' => 'dropzone', 'id' => 'my-dropzone', 'files' => 'true', 'multiple' => 'true'])}}
        <div class="dz-message">Drop files here or click to upload.
            <br>
            <div class="dropzone-previews"></div>

            {{Form::close()}}
        </div>

        <!-- Your Page Content Here -->
        <div class="row">
            <textarea>This is a new post!</textarea>
        </div>

@stop

@section('scripts')
            {{HTML::script('tinymce/tinymce.min.js')}}
            <script type="text/javascript">
                tinymce.init({
                    selector: "textarea",theme: "modern",
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
            <script>
                $(document).ready(function(){
                    console.log('Document is ready');
                })
            </script>

            <script>
                Dropzone.options.MyDropzone = {
                    autoProcessQueue: true,
                    paramName : "file",
                    uploadMultiple:true,
                    maxFileSize: 10,
                    parallelUploads: 100,
                    maxFiles: 2,
                }
            </script>
@stop