app.controller('TestController', function ($scope, $http,$sanitize,$window) {
    
var onCategories = function(response) {
  $scope.categories = response.data;

}
 $http.get("/api/categories")
        .then(onCategories);

$scope.tinyMceOptions = {
    selector: "textarea",theme: "modern",
            height : "430",
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
            external_plugins: { "filemanager" : "../filemanager/plugin.min.js"}
}

$scope.submitForm = function(formData){
  var data = new FormData();
  var file = $scope.thumbnail;

  data.append("file",$scope.thumbnail);
  data.append("title",formData.title);
  data.append("body",formData.body);
  data.append("category_id", formData.category); 

  $http({
    method: 'POST',
    url: '/dashboard/article',
    data: data,
    headers: {'Content-Type': undefined }
    }).success(function () {
        $window.location.href="http://www.awesome.dev/dashboard";
    }).error(function(error){
      $scope.error = error.error.image[0];
    });  
}

$scope.dropzoneConfig = {
    'options': { // passed into the Dropzone constructor
      'url' : '/dashboard/uploadthumb',  
      'paramName' : 'image', 
      'maxFiles' : 1, 
      init: function() {
            myDropzone = this;
            var removeBtn = document.querySelector("#clear-dropzone");
            removeBtn.addEventListener("click", function() {
        // Using "_this" here, because "this" doesn't point to the dropzone anymore
            myDropzone.removeAllFiles();
        // If you want to cancel uploads as well, you
        // could also call _this.removeAllFiles(true);
      });
        },
    },
    'eventHandlers': {
      'sending': function (file, xhr, formData) {
      },
      'success': function (file, response) {
          $scope.thumbnail = file;
      },
      'error' : function(file, response){
        // console.log(response);
      }
    }
  };

})
