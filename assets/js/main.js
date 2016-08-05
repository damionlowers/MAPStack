var myapp = angular.module('myApp',[]);


myapp.controller('indexCtrl', function($scope,$http) {
    $scope.message = "Hello Angular";
    $http.get("controller/firstcontroller.php").then(function(response) {
        //First function handles success
        $scope.content = response.data;
        // data=JSON.parse(response.string);
        console.log($scope.content);
    }, function(response) {
        //Second function handles error
        $scope.content = "Something went wrong";
    }); 
});
