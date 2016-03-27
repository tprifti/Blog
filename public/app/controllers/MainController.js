app.controller('MainController', ['$scope', 'filterFilter', '$http', function($scope, filterFilter, $http) {


    var onArticles = function(response) {
        $scope.articles = response.data;
        $scope.currentPage = 1;
        $scope.totalArticles = $scope.articles.length;

        $scope.entryLimit = 10; // items per page
        $scope.noOfPages = Math.ceil($scope.totalArticles / $scope.entryLimit);

        $scope.search = {};

        $scope.resetFilters = function() {
            // needs to be a function or it won't trigger a $watch
            $scope.search = {};
        };

        // $watch search to update pagination
        $scope.$watch('search', function(newVal, oldVal) {
            $scope.filtered = filterFilter($scope.articles, newVal);
            $scope.totalArticles = $scope.filtered.length;
            $scope.noOfPages = Math.ceil($scope.totalArticles / $scope.entryLimit);
            $scope.currentPage = 1;
        }, true);
    };

    var onError = function(reason) {
        $scope.error = "Could not find Article";
    };

    $http.get("/api/articles")
        .then(onArticles, onError);

    
    $scope.deleteArticle = function(response) {
     $scope.article = response;
    

    }
        
}]);