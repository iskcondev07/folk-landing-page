/** @format */

var folkApp = angular.module("folkApp", []);

folkApp.controller("folkCtrl", function ($scope) {
  $scope.experienceData = [];
  $scope.isEdit = false;
  $scope.editIndex = -1;

  $scope.familyDetails = [];
  $scope.isEdit1 = false;
  $scope.editIndex1 = -1;
  $scope.emailId = "";

  $scope.submitExperience = function () {
    if (!$scope.experienceData) {
      $scope.experienceData = [];
    }
    if ($scope.isEdit) {
      $scope.experienceData[$scope.editIndex] = angular.copy($scope.experience);
      $scope.isEdit = false;
      $scope.editIndex = -1;
    } else {
      $scope.experienceData.push(angular.copy($scope.experience));
    }
    $scope.experience = {};
  };

  $scope.editExperienceDetail = function (index) {
    $scope.experience = angular.copy($scope.experienceData[index]);
    $scope.isEdit = true;
    $scope.editIndex = index;
  };

  $scope.deleteExperience = function (index) {
    $scope.experienceData.splice(index, 1);
  };

  $scope.saveFamilyDetail = function () {
    if ($scope.isEdit1) {
      // Update existing record
      $scope.familyDetails[$scope.editIndex1] = angular.copy(
        $scope.currentFamily
      );
      $scope.isEdit1 = false;
      $scope.editIndex1 = -1;
    } else {
      // Add new record
      $scope.familyDetails.push(angular.copy($scope.currentFamily));
    }
    $scope.currentFamily = {}; // Reset the form
  };

  // Edit Family Detail
  $scope.editFamilyDetail = function (index) {
    $scope.currentFamily = angular.copy($scope.familyDetails[index]);
    $scope.isEdit1 = true;
    $scope.editIndex1 = index;
  };

  // Delete Family Detail
  $scope.deleteFamilyDetail = function (index) {
    $scope.familyDetails.splice(index, 1);
  };

  $scope.user = {name: "",emailId: "",mobile: "",gender: "",dob: "",language: "",education: "",yearOfPassOut: "",remarks: "",};
  $scope.finance = {houseInName: "",loanInName: "",currentSalary: "",remark: "",};
  $scope.journey = {inTouchWith: "",yearsInFolk: "",chantingRounds: "",yearsInKC: "",kcThrough: "",remark: "",};
  $scope.turning = {Pointremark: "",};

  $scope.validateForm = function () {
    let isValid = true;

    function scrollToAndFocus(selector) {
      const element = document.querySelector(selector);
      if (element) {
        element.scrollIntoView({ behavior: "smooth", block: "center" });
        element.focus();
      }
    }

    const requiredFields = [
      { model: $scope.user.name, id: "#fullName", message: "Name is required" },
      {
        model: $scope.user.emailId,
        id: "#emailId",
        message: "Email is required",
      },
      {
        model: $scope.user.mobile,
        id: "#mobile",
        message: "Mobile number is required",
      },
      {
        model: $scope.user.gender,
        id: "#gender",
        message: "Gender is required",
      },
      {
        model: $scope.user.dob,
        id: "#dob",
        message: "Date of Birth is required",
      },
      {
        model: $scope.user.language,
        id: "#language",
        message: "Language is required",
      },
      {
        model: $scope.user.education,
        id: "#education",
        message: "Education is required",
      },
      {
        model: $scope.user.yearOfPassOut,
        id: "#yearOfPassOut",
        message: "Year of Pass Out is required",
      },
      {
        model: $scope.user.remarks,
        id: "#remarks",
        message: "Remarks are required",
      },
      {
        model: $scope.finance.houseInName,
        id: "#houseInName",
        message: "House in name is required",
      },
      {
        model: $scope.finance.loanInName,
        id: "#loanInName",
        message: "Loan in name is required",
      },
      {
        model: $scope.finance.currentSalary,
        id: "#currentSalary",
        message: "Current salary is required",
      },
      {
        model: $scope.finance.remark,
        id: "#financeRemark",
        message: "Finance remark is required",
      },
      {
        model: $scope.journey.inTouchWith,
        id: "#inTouchWith",
        message: "In touch with is required",
      },
      {
        model: $scope.journey.yearsInFolk,
        id: "#yearsInFolk",
        message: "Years in Folk is required",
      },
      {
        model: $scope.journey.chantingRounds,
        id: "#chantingRounds",
        message: "Chanting rounds are required",
      },
      {
        model: $scope.journey.yearsInKC,
        id: "#yearsInKC",
        message: "Years in KC is required",
      },
      {
        model: $scope.journey.kcThrough,
        id: "#kcThrough",
        message: "KC through is required",
      },
      {
        model: $scope.journey.remark,
        id: "#journeyRemark",
        message: "Journey remark is required",
      },
      {
        model: $scope.turning.Pointremark,
        id: "#turningPointRemark",
        message: "Turning point remark is required",
      },
    ];

    for (const field of requiredFields) {
        console.log(field.model);
      if ((typeof field.model === "string" && field.model.trim() === "") ||
      (typeof field.model === "undefined" || field.model === null) ||
      (typeof field.model === "number" && isNaN(field.model))) {
        console.log(field.message);
        scrollToAndFocus(field.id);
        isValid = false;
        break;
      }
    }

    return isValid;
  };

  $scope.submitForm = function () {
    if ($scope.validateForm()) {
      console.log("Form is valid, proceed with submission");
    } else {
      console.log("Form is invalid, please fill all required fields");
    }
  };
});

//   $scope.validateForm = function () {
//     let isValid = true;

//     function scrollToAndFocus(selector) {
//       const element = document.querySelector(selector);
//       if (element) {
//         element.scrollIntoView({ behavior: "smooth", block: "center" });
//         element.focus();
//       }
//     }
//     // Check user object
//     if (!$scope.user.name || $scope.user.name.trim() === "") {
//       console.log("Name is required");
//       scrollToAndFocus("#fullName");
//       isValid = false;
//       return 0;
//     }
//     if (!$scope.user.emailId || $scope.user.emailId.trim() === "") {
//       console.log("Email is required");
//       scrollToAndFocus("#emailId");
//       isValid = false;
//       return 0;
//     }
//     if (!$scope.user.mobile || $scope.user.mobile.trim() === "") {
//       console.log("Mobile number is required");
//       scrollToAndFocus("#mobile");
//       isValid = false;
//       return 0;
//     }
//     if (!$scope.user.gender) {
//       console.log("Gender is required");
//       scrollToAndFocus("#gender");
//       isValid = false;
//       return 0;
//     }
//     if (!$scope.user.dob) {
//       console.log("Date of Birth is required");
//       scrollToAndFocus("#dob");
//       isValid = false;
//       return 0;
//     }
//     if (!$scope.user.language) {
//       console.log("Language is required");
//       scrollToAndFocus("#language");
//       isValid = false;
//       return 0;
//     }
//     if (!$scope.user.education || $scope.user.education.trim() === "") {
//       console.log("Education is required");
//       scrollToAndFocus("#education");
//       isValid = false;
//       return 0;
//     }
//     if (!$scope.user.yearOfPassOut || $scope.user.yearOfPassOut.trim() === "") {
//       console.log("Year of Pass Out is required");
//       scrollToAndFocus("#yearOfPassOut");
//       isValid = false;
//       return 0;
//     }
//     if (!$scope.user.remarks || $scope.user.remarks.trim() === "") {
//       console.log("Remarks are required");
//       scrollToAndFocus("#remarks");
//       isValid = false;
//       return 0;
//     }

//     // Check family object
//     // if (
//     //   !$scope.family.relationship ||
//     //   $scope.family.relationship.trim() === ""
//     // ) {
//     //   console.log("Family relationship is required");
//     //   isValid = false;
//     // return 0;
//     // }
//     // if (!$scope.family.name || $scope.family.name.trim() === "") {
//     //   console.log("Family name is required");
//     //   isValid = false;
//     // return 0;
//     // }
//     // if (!$scope.family.age || $scope.family.age.trim() === "") {
//     //   console.log("Family age is required");
//     //   isValid = false;
//     // return 0;
//     // }
//     // if (!$scope.family.mobile || $scope.family.mobile.trim() === "") {
//     //   console.log("Family mobile is required");
//     //   isValid = false;
//     // return 0;
//     // }
//     // if (!$scope.family.occupation || $scope.family.occupation.trim() === "") {
//     //   console.log("Family occupation is required");
//     //   isValid = false;
//     // return 0;
//     // }
//     // if (!$scope.family.workPlace || $scope.family.workPlace.trim() === "") {
//     //   console.log("Family workplace is required");
//     //   isValid = false;
//     // return 0;
//     // }
//     // if (!$scope.family.income || $scope.family.income.trim() === "") {
//     //   console.log("Family income is required");
//     //   isValid = false;
//     // return 0;
//     // }
//     // if (!$scope.family.saving || $scope.family.saving.trim() === "") {
//     //   console.log("Family saving is required");
//     //   isValid = false;
//     // return 0;
//     // }
//     // if (!$scope.family.health || $scope.family.health.trim() === "") {
//     //   console.log("Family health status is required");
//     //   isValid = false;
//     // return 0;
//     // }
//     // if (!$scope.family.remarks || $scope.family.remarks.trim() === "") {
//     //   console.log("Family remarks are required");
//     //   isValid = false;
//     // return 0;
//     // }
//     // if (!$scope.family.kcPractice) {
//     //   console.log("KC practice is required");
//     //   isValid = false;
//     // return 0;
//     // }

//     // Check experience object
//     // if (!$scope.experience.role || $scope.experience.role.trim() === "") {
//     //   console.log("Role is required");
//     //   isValid = false;
//     // return 0;
//     // }
//     // if (
//     //   !$scope.experience.companyName ||
//     //   $scope.experience.companyName.trim() === ""
//     // ) {
//     //   console.log("Company name is required");
//     //   isValid = false;
//     // return 0;
//     // }
//     // if (
//     //   !$scope.experience.experienceMonths ||
//     //   $scope.experience.experienceMonths.trim() === ""
//     // ) {
//     //   console.log("Experience in months is required");
//     //   isValid = false;
//     // return 0;
//     // }
//     // if (
//     //   !$scope.experience.experienceYears ||
//     //   $scope.experience.experienceYears.trim() === ""
//     // ) {
//     //   console.log("Experience in years is required");
//     //   isValid = false;
//     // return 0;
//     // }
//     // if (!$scope.experience.salary || $scope.experience.salary.trim() === "") {
//     //   console.log("Salary is required");
//     //   isValid = false;
//     // return 0;
//     // }
//     // if (!$scope.experience.remark || $scope.experience.remark.trim() === "") {
//     //   console.log("Experience remark is required");
//     //   isValid = false;
//     // return 0;
//     // }

//     // Check finance object
//     if (
//       !$scope.finance.houseInName ||
//       $scope.finance.houseInName.trim() === ""
//     ) {
//       console.log("House in name is required");
//       scrollToAndFocus("#houseInName");
//       isValid = false;
//       return 0;
//     }
//     if (!$scope.finance.loanInName || $scope.finance.loanInName.trim() === "") {
//       console.log("Loan in name is required");
//       scrollToAndFocus("#loanInName");
//       isValid = false;
//       return 0;
//     }
//     if (
//       !$scope.finance.currentSalary ||
//       $scope.finance.currentSalary.trim() === ""
//     ) {
//       console.log("Current salary is required");
//       scrollToAndFocus("#currentSalary");
//       isValid = false;
//       return 0;
//     }
//     if (!$scope.finance.remark || $scope.finance.remark.trim() === "") {
//       console.log("Finance remark is required");
//       scrollToAndFocus("#financeRemark");
//       isValid = false;
//       return 0;
//     }

//     // Check journey object
//     if (
//       !$scope.journey.inTouchWith ||
//       $scope.journey.inTouchWith.trim() === ""
//     ) {
//       console.log("In touch with is required");
//       scrollToAndFocus("#inTouchWith");
//       isValid = false;
//       return 0;
//     }
//     if (
//       !$scope.journey.yearsInFolk ||
//       $scope.journey.yearsInFolk.trim() === ""
//     ) {
//       console.log("Years in Folk is required");
//       scrollToAndFocus("#yearsInFolk");
//       isValid = false;
//       return 0;
//     }
//     if (
//       !$scope.journey.chantingRounds ||
//       $scope.journey.chantingRounds.trim() === ""
//     ) {
//       console.log("Chanting rounds are required");
//       scrollToAndFocus("#chantingRounds");
//       isValid = false;
//       return 0;
//     }
//     if (!$scope.journey.yearsInKC || $scope.journey.yearsInKC.trim() === "") {
//       console.log("Years in KC is required");
//       scrollToAndFocus("#yearsInKC");
//       isValid = false;
//       return 0;
//     }
//     if (!$scope.journey.kcThrough || $scope.journey.kcThrough.trim() === "") {
//       console.log("KC through is required");
//       scrollToAndFocus("#kcThrough");
//       isValid = false;
//       return 0;
//     }
//     if (!$scope.journey.remark || $scope.journey.remark.trim() === "") {
//       console.log("Journey remark is required");
//       scrollToAndFocus("#journeyRemark");
//       isValid = false;
//       return 0;
//     }

//     // Check turning point object
//     if (
//       !$scope.turning.Pointremark ||
//       $scope.turning.Pointremark.trim() === ""
//     ) {
//       console.log("Turning point remark is required");
//       isValid = false;
//       scrollToAndFocus("#turningPointRemark");
//       return 0;
//     }

//     // Return validation status
//     return isValid;
//   };
