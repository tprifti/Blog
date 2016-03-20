app.controller('MainController',['$scope', 'filterFilter','$http', function ($scope, filterFilter,$http){
      
      $scope.articles= [];

      var onArticles = function(response){
      	$scope.articles = response.data;
      };

      var onError = function(reason){
      	$scope.error = "Could not find Article";
      };

      	$http.get("/api/articles")
      	   .then(onArticles, onError);  
	
      	   
	$scope.search = {};

	$scope.resetFilters = function () {
		// needs to be a function or it won't trigger a $watch
		$scope.search = {};
	};

	// pagination controls
	$scope.currentPage = 1;
	$scope.totalArticles = $scope.articles.length; //RETURNS 0
	// console.log($scope.totalArticles);
	$scope.entryLimit = 10; // items per page
	$scope.noOfPages = Math.ceil($scope.totalArticles / $scope.entryLimit);

	// $watch search to update pagination
	$scope.$watch('search', function (newVal, oldVal) {
		$scope.filtered = filterFilter($scope.articles, newVal);
		$scope.totalArticles = $scope.filtered.length;
		$scope.noOfPages = Math.ceil($scope.totalArticles / $scope.entryLimit);
		$scope.currentPage = 1;
	}, true);


   
}]);