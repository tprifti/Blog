@extends('layouts.master')

@section('title')
    Add New Post
@stop

@section('css')
    {{HTML::style('assets/admin/css/custom.css')}}
@stop

@section('content')
<div class="row" ng-controller="TestController" ng-form="myForm">
    <div class="col-md-9">
    
    
        <h3>Add new post</h3>
        <input name="title" type="text" class="form-control form-title" placeholder="Enter Title Here" ng-model="formData.title" required>
              <hr>
      <!-- NOTE: TinyMCE textareas must have id's -->
      <textarea name="body" data-ui-tinymce="tinyMceOptions" id="tinymce1" data-ng-model="formData.body" required></textarea>
    
     

    
   
    </div>

    <div class="col-md-3 pull-right">
        <a href=""></a>
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

                  <select class="form-control" name="cat_select" ng-model="formData.category" ng-change="update(formData)" ng-options='category.id as category.category for category in categories' required>
                         <option value="" ng-if="false"></option>
                  </select>
               
                    
            </div>
        </div>
        <div class="box box-info">
          <div class="box-header with-border">
              <h3 class="box-title">Set thumbnail</h3>
          </div>
          <div class="dropzone" dropzone="dropzoneConfig"></div>
          <hr>
          <center><button type="button" class="btn btn-danger btn-sm" id="clear-dropzone">Remove Image</button></center>
        </div>

        <!-- TODO : Display error messages -->
        <div class="alert alert-warning" role="alert" ng-show="myForm.$invalid">
          <div ng-show="myForm.title.$invalid"><h5>Title is Required.</h5></div>
          <div ng-show="myForm.body.$invalid"><h5>Body is required.</h5></div>
          <div ng-show="myForm.cat_select.$invalid"><h5>Please select a category.</h5></div>
        </div>

        <div class="alert alert-danger" role="alert" ng-if="error">
        <h5>[[error]]</h5>
        </div>
        <button type="submit" class="btn btn-default btn-lg" ng-disabled="myForm.$invalid" ng-click="submitForm(formData)">Create Article</button>
       
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
