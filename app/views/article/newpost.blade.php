@extends('layouts.master')

@section('title')
    Add New Post
@stop

@section('css')
    {{HTML::style('assets/admin/css/custom.css')}}


@stop

@section('content')
<div class="row" ng-controller="TestController">
    <div class="col-md-9">
        <ng-form>
       
        <h3>Add new post</h3>
        <input type="text" class="form-control form-title" placeholder="Enter Title Here" data-ng-model="formData.title">
    
        
              <hr>
      <!-- NOTE: TinyMCE textareas must have id's -->
      <textarea data-ui-tinymce="tinyMceOptions" id="tinymce1" data-ng-model="formData.body"></textarea>
    
     
</ng-form>
    
   
    </div>

    <div class="col-md-3 pull-right">
      
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
            </div>
        </div>
        <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Set thumbnail</h3>
                </div>
          
          <div class="dropzone" dropzone="dropzoneConfig">
  
          </div>
          <hr>
<div class="btn-group">
         <button type="button" class="btn btn-danger btn-sm" id="clear-dropzone">Remove Image</button>

   </div>

        </div>
<button type="submit" class="btn btn-default btn-sm" ng-click="submitForm(formData)">Create Article</button>
        
    </div>
    </div>  
@stop

@section('scripts')
    
    
 {{HTML::script('tinymce/tinymce.min.js')}}
{{HTML::script('app/js/angular.min.js')}}
<script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular-sanitize.min.js'></script>
{{HTML::script('app/js/ui-bootstrap-0.10.0.js')}}
{{HTML::script('app/js/editor.js')}}
{{HTML::script('app/controllers/TestController.js')}}
{{HTML::script('app/js/tinymce.js')}}
{{HTML::script('app/js/dropzone.js')}}
<script type="text/javascript">
  Dropzone.autoDiscover = false;
</script>



@stop
