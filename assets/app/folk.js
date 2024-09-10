var folkApp = angular.module('folkApp', []);

folkApp.controller('folkCtrl', function($scope) {
    // Initialize objects
    // $scope.user = {};
    // $scope.family = {};
    // $scope.work = {};
    // $scope.finance = {};
    // $scope.journey = {};
    // $scope.turningPoint = {};

	$scope.pageLoad = function() {
		console.log($scope.user.name);
	}

    $scope.submitForm = function() {
        if ($scope.validateForm()) {
           alert('Form submitted successfully!');
        }
    };
});
