var app = angular.module('app', ['ui.tinymce','ngSanitize','dropzone'], function($interpolateProvider){

$interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
});