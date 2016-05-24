@extends('layouts.master')

@section('title')
    Add New Post
@stop
@section('css')
    {{HTML::style('assets/admin/css/custom.css')}}
@stop

@section('content')
 {{ Form::model($articles,['method' => 'PUT', 'files' =>'true','route' => ['article.update',$articles->slug]]) }}
<div class="row">
    <h3 class="box-title">Edit article.</h3>
  <div class="col-md-9">
    <input type="text" name="title" class="form-control"  value= "{{$articles->title}}">
      <hr>
    <textarea name="body">{{$articles->body}}</textarea>
  </div>     
 
  <div class="col-md-3 pull-right">  
    <div class="box box-info">
      <div class="box-header with-border">
      <h3>Select category</h3>
      </div>
      <div class="box-body">
        {{Form::select('category_id', $category, $selected, ["class"=> "form-control",'id'=>'cat-select'])}}
      </div>
    </div>     
     <input type="hidden" name="thumbPath" value= "{{$articles->getImage()}}">
     <input type="hidden" name="thumbId" value= "{{$articles->getImageId()}}">
      <hr>
      <div class="box box-info">
        <div class="box-header with-border">
          <h4>Change thumbnail</h4>
        </div>
      <div class="box-body">
       <img class="img-responsive img-thumbnail" src="{{'/'.$articles->getImage()}}" width="300" height="169">
       <hr>
       <div class="input-group">
              <span class="input-group-btn">
                <label class="btn btn-primary btn-file" for="multiple_input_group">
                  <div class="input required"><input id="multiple_input_group" type="file" name="image"></div> Browse
                </label>
              </span>
              <span class="file-input-label"></span>
            </div>
      </div>
    </div>  
     {{Form::submit('Save changes',['class' => 'btn btn-default'])}}   
</div>  
{{Form::close()}}
@stop


@section('scripts')
{{HTML::script('tinymce/tinymce.min.js')}}
{{HTML::script('assets/admin/js/custom.js')}}
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
