<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
	{{HTML::style('assets/bootstrap/css/bootstrap.min.css')}}
	    {{HTML::style('assets/dist/css/AdminLTE.min.css')}}
	     {{HTML::style('assets/admin/css/custom.css')}}
</head>
<body>
<div class="col-md-3 pull-right">
<div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Set thumbnail</h3>
                </div>
               
                <form action="upload.php"
      class="dropzone"
      id="myDropzone"></form>
	<div class="btn-group">
     <button id="submit-all">Submit all files</button>
     <button id="clear-dropzone">Remove Thumbnail</button>

        </div>
        </div>
        </div>

      
</body>
{{HTML::script('assets/plugins/jQuery/jQuery-2.1.4.min.js')}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>

</html>