var app = angular.module('app', ['ui.bootstrap'], function($interpolateProvider){

$interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
});


app.filter('startFrom', function () {
	return function (input, start) {
		if (input) {
			start = +start;
			return input.slice(start);
		}
	};
});
