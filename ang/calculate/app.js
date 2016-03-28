var app = angular.module('calculate', []);



app.controller('Main', function ($scope) {
    $scope.string = '';

    $scope.cal = function (arg) {
        $scope.string += arg;
    }

    $scope.sum = function () {
        $scope.string = eval($scope.string);
    }

    $scope.clear = function () {
        $scope.string = ''; 
    }
});