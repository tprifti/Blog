app.controller('TestController', function ($scope, $http) {
     $scope.sendForm = function(formData) {
        var data = {
            category : formData.category,
            id : 2,
            slug : 'for-12',
            name : 'test',
            item_id : 5,
             slug : 'for-12',
            name : 'test',
            item_id : 5,
            created_at : "2016-03-22 12:10:28",
        }
        // $http({ 
        //      method:'POST', 
        //      url: '/test', 
        //      data: formData ,
        //     
        // })
        // // .then(
        // //     function(result) { 
        // //         alert("The form was sent"); 
        // //     },
        // //     function(reason) { 
        // //         alert("There was a problem"); 
        // //     }
        // // );
        console.log(data);
    }

})
