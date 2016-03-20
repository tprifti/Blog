app.controller('MainController',function($scope,$http) {
      
      var onArticles = function(response){
      	$scope.articles = response.data;
      	
      };

      var onError = function(reason){
      	$scope.error = "Could not find Article";
      };


      	$http.get("/api/articles")
      	   .then(onArticles, onError);  



   
});