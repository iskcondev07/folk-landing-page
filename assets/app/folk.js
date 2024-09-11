/** @format */

var folkApp = angular.module("folkApp", []);

folkApp.controller("folkCtrl", function ($scope) {
  $scope.workExperiences = [
    {
      role: "",
      companyName: "",
      experienceMonths: "",
      experienceYears: "",
      salary: "",
      remark: "",
    },
  ];

  $scope.familyDetails = [
    {
      relationship: "",
      name: "",
      age: "",
      mobile: "",
      occupation: "",
      workPlace: "",
      income: "",
      saving: "",
      health: "",
      remarks: "",
      kcPractice: "",
    },
  ];

  $scope.pageLoad = function () {
    console.log($scope.user.name);
  };

  $scope.addWorkExperience = function () {
    $scope.workExperiences.push({
      role: "",
      companyName: "",
      experienceMonths: "",
      experienceYears: "",
      salary: "",
      remark: "",
    });
  };

  $scope.removeWorkExperience = function (index) {
    if ($scope.workExperiences.length > 1) {
      $scope.workExperiences.splice(index, 1);
    }
  };

  $scope.addFamilyDetail = function () {
    $scope.familyDetails.push({
      relationship: "",
      name: "",
      age: "",
      mobile: "",
      occupation: "",
      workPlace: "",
      income: "",
      saving: "",
      health: "",
      remarks: "",
      kcPractice: "",
    });
  };

  $scope.removeFamilyDetail = function (index) {
    if ($scope.familyDetails.length > 1) {
      $scope.familyDetails.splice(index, 1);
    }
  };

  $scope.submitForm = function () {
    if ($scope.validateForm()) {
      alert("Form submitted successfully!");
    }
  };

  $scope.validateForm = function () {
    return true;
  };
});
