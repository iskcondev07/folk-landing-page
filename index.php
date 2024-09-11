<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="ISKCON Bangalore, Kartika Month, Online Donation, Festival Donation, Utsava, ISKCON Donation, ISKCON Deepotsava, Deepotsava">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css?v<?php echo time(); ?>" rel="stylesheet" media="all">

    <!-- Responsive CSS -->
    <link href="assets/css/responsive.css?v<?php echo time(); ?>" rel="stylesheet" media="all">

    <!-- Checkbox CSS -->
    <link href="assets/css/checkbox.css?v<?php echo time(); ?>" rel="stylesheet" media="all">

    <!-- Datepicker CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css"
        rel="stylesheet" media="all">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        media="all">

    <!-- Owl Carousel CSS -->
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css"
        rel="stylesheet">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css"
        rel="stylesheet">

    <!-- jQuery UI -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Angular JS -->
    <script src="assets/angularjs/angular.min.js" defer></script>

    <!-- Custom JS -->
    <script src="assets/app/generic_function.js" defer></script>
    <script src="assets/app/folk.js?v<?php echo time(); ?>" defer></script>

    <!-- jQuery and Popper -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/js/popper.min.js" defer></script>

    <!-- google font  -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Spartan:wght@400;500;700&display=swap');

        body {
            font-family: 'Spartan', sans-serif;
        }
    </style>

    <!-- Style CSS -->
    <link href="assets/css/style.css?v<?php echo time(); ?>" rel="preload stylesheet" as="style"
        onload="this.rel='stylesheet'" media="all">
    <title>Folk</title>
</head>

<body ng-app="folkApp" ng-controller="folkCtrl" ng-init="pageLoad()">
    <!-- Header Section -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="header-element">
                <div class="pt-2 pb-2">
                    <img src="assets/img/ib-logo.png" class="header-logo" alt="header-logo">
                </div>
                <div class="my-auto">
                    <a href="#offer-seva" class="btn btn-h-donate">Registration</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Landing Page Content -->
    <main class="main-container">
        <section class="container mt-5">
            <form name="prospectForm" novalidate>
                <div class="text-center">
                    <h1 class="Prospect-form-heading">Prospect Form</h1>
                </div>
                <div class="form-section my-3">
                    <h3 class="form-section-heading">Personal Information</h3>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <input type="text" class="form-control form-input" id="fullName" ng-model="username"
                                    placeholder="Enter your full name" required>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="email">Email ID</label>
                                <input type="email" class="form-control form-input" id="email" ng-model="useremail"
                                    placeholder="Enter your email" required>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="mobile">Mobile Number</label>
                                <input type="tel" class="form-control form-input" id="mobile" ng-model="usermobile"
                                    placeholder="Enter your mobile number" required pattern="[0-9]{10}">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select class="form-control form-input" id="gender" ng-model="usergender" required>
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control form-input" id="dob" ng-model="userdob" required>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="language">Language</label>
                                <input type="text" class="form-control form-input" id="language" ng-model="userlanguage"
                                    placeholder="Enter preferred language" required>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="education">Education</label>
                                <input type="text" class="form-control form-input" id="education"
                                    ng-model="usereducation" placeholder="Enter your education" required>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="yearOfPassOut">Year of Pass Out</label>
                                <input type="number" class="form-control form-input" id="yearOfPassOut"
                                    ng-model="useryearOfPassOut" placeholder="Enter year of pass out" required
                                    min="1900" max="2099">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="remarks">Remark</label>
                                <textarea class="form-control form-input" id="remarks" ng-model="userremarks" rows="3"
                                    placeholder="Enter any remarks"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="form-section my-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="form-section-heading">Family Information</h3>
                        </div>
                        <div><button class="btn btn-add-elem btn-sm">Add</button></div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="relationship">Relationship</label>
                                <input type="text" class="form-control form-input" id="relationship"
                                    ng-model="familyrelationship" placeholder="Enter relationship" required>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="familyName">Name</label>
                                <input type="text" class="form-control form-input" id="familyName" ng-model="familyname"
                                    placeholder="Enter family member's name" required>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" class="form-control form-input" id="age" ng-model="familyage"
                                    placeholder="Enter age" required min="0">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="familyMobile">Mobile Number</label>
                                <input type="tel" class="form-control form-input" id="familyMobile"
                                    ng-model="familymobile" placeholder="Enter mobile number" required
                                    pattern="[0-9]{10}">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="occupation">Occupation</label>
                                <input type="text" class="form-control form-input" id="occupation"
                                    ng-model="familyoccupation" placeholder="Enter occupation" required>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="workPlace">Work Place</label>
                                <input type="text" class="form-control form-input" id="workPlace"
                                    ng-model="familyworkPlace" placeholder="Enter workplace" required>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="income">Monthly Income</label>
                                <input type="number" class="form-control form-input" id="income" ng-model="familyincome"
                                    placeholder="Enter monthly income" required min="0">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="saving">Saving</label>
                                <input type="number" class="form-control form-input" id="saving" ng-model="familysaving"
                                    placeholder="Enter saving amount" required min="0">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="health">Health</label>
                                <input type="text" class="form-control form-input" id="health" ng-model="familyhealth"
                                    placeholder="Enter health details" required>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="form-group">
                                <label for="remarks">Remarks</label>
                                <textarea class="form-control form-input" id="remarks" ng-model="familyremarks" rows="1"
                                    placeholder="Enter remarks"></textarea>
                            </div>
                        </div>
                    </div>
                    <div id="appendFamilyDetails"></div>

                    <div class="form-group">
                        <label for="kcPractice">Do parents know about your KC practice?</label>
                    </div>
                    <div class="d-flex">
                        <div class="form-check mx-2">
                            <input class="form-check-input" type="radio" name="kcPractice" id="kcPracticeYes"
                                ng-model="familykcPractice" value="Yes" required>
                            <label class="form-check-label" for="kcPracticeYes">Yes</label>
                        </div>
                        <div class="form-check mx-2">
                            <input class="form-check-input" type="radio" name="kcPractice" id="kcPracticeNo"
                                ng-model="familykcPractice" value="No">
                            <label class="form-check-label" for="kcPracticeNo">No</label>
                        </div>
                    </div>
                </div> -->
                <div ng-repeat="family in familyDetails">
                    <div class="form-section my-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class="form-section-heading">Family Information</h3>
                            </div>
                            <div>
                                <!-- Add button for adding new family details form section -->
                                <button class="btn btn-add-elem btn-sm" ng-click="addFamilyDetail()">Add</button>
                                <!-- Delete button for each form section -->
                                <button class="btn btn-danger btn-sm" ng-if="familyDetails.length > 1"
                                    ng-click="removeFamilyDetail($index)">
                                    Delete
                                </button>
                            </div>
                        </div>

                        <!-- Form fields for family details -->
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="form-group">
                                    <label for="relationship">Relationship</label>
                                    <input type="text" class="form-control form-input" ng-model="family.relationship"
                                        placeholder="Enter relationship" required>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="form-group">
                                    <label for="familyName">Name</label>
                                    <input type="text" class="form-control form-input" ng-model="family.name"
                                        placeholder="Enter family member's name" required>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input type="number" class="form-control form-input" ng-model="family.age"
                                        placeholder="Enter age" required min="0">
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="form-group">
                                    <label for="familyMobile">Mobile Number</label>
                                    <input type="tel" class="form-control form-input" ng-model="family.mobile"
                                        placeholder="Enter mobile number" required pattern="[0-9]{10}">
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="form-group">
                                    <label for="occupation">Occupation</label>
                                    <input type="text" class="form-control form-input" ng-model="family.occupation"
                                        placeholder="Enter occupation" required>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="form-group">
                                    <label for="workPlace">Work Place</label>
                                    <input type="text" class="form-control form-input" ng-model="family.workPlace"
                                        placeholder="Enter workplace" required>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="form-group">
                                    <label for="income">Monthly Income</label>
                                    <input type="number" class="form-control form-input" ng-model="family.income"
                                        placeholder="Enter monthly income" required min="0">
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="form-group">
                                    <label for="saving">Saving</label>
                                    <input type="number" class="form-control form-input" ng-model="family.saving"
                                        placeholder="Enter saving amount" required min="0">
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="form-group">
                                    <label for="health">Health</label>
                                    <input type="text" class="form-control form-input" ng-model="family.health"
                                        placeholder="Enter health details" required>
                                </div>
                            </div>
                            <div class="col-xl-9">
                                <div class="form-group">
                                    <label for="remarks">Remarks</label>
                                    <textarea class="form-control form-input" ng-model="family.remarks" rows="1"
                                        placeholder="Enter remarks"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-section my-3">
                    <div class="form-group">
                        <label for="kcPractice">Do parents know about your KC practice?</label>
                    </div>
                    <div class="d-flex">
                        <div class="form-check mx-2">
                            <input class="form-check-input" type="radio" name="kcPractice{{$index}}"
                                ng-model="family.kcPractice" value="Yes" required>
                            <label class="form-check-label" for="kcPracticeYes">Yes</label>
                        </div>
                        <div class="form-check mx-2">
                            <input class="form-check-input" type="radio" name="kcPractice{{$index}}"
                                ng-model="family.kcPractice" value="No">
                            <label class="form-check-label" for="kcPracticeNo">No</label>
                        </div>
                    </div>
                </div>
                <!-- <div class="form-section my-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="form-section-heading">Work Experience</h3>
                        </div>
                        <div><button class="btn btn-add-elem btn-sm">Add</>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="role">Role</label>
                                <input type="text" class="form-control form-input" id="role" ng-model="workrole"
                                    placeholder="Enter your role" required>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="companyName">Company Name</label>
                                <input type="text" class="form-control form-input" id="companyName"
                                    ng-model="workcompanyName" placeholder="Enter company name" required>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="experienceMonths">Experience - (Months)</label>
                                <input type="number" class="form-control form-input" id="experienceMonths"
                                    ng-model="workexperienceMonths" placeholder="Enter experience in months" required
                                    min="0">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="experienceYears">Experience - (Years)</label>
                                <input type="number" class="form-control form-input" id="experienceYears"
                                    ng-model="workexperienceYears" placeholder="Enter experience in years" required
                                    min="0">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="salary">Salary</label>
                                <input type="number" class="form-control form-input" id="salary" ng-model="worksalary"
                                    placeholder="Enter salary" required min="0">
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="form-group">
                                <label for="workRemarks">Remark</label>
                                <textarea class="form-control form-input" id="workRemarks" ng-model="workremark"
                                    rows="1" placeholder="Enter remarks"></textarea>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div ng-repeat="experience in workExperiences">
                    <div class="form-section my-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class="form-section-heading">Work Experience</h3>
                            </div>
                            <div>
                                <!-- Delete button for each form section -->
                                <button class="btn btn-danger btn-sm" ng-if="workExperiences.length > 1"
                                    ng-click="removeWorkExperience($index)">
                                    Delete
                                </button>
                                <!-- Add button for adding new form section -->
                                <button class="btn btn-add-elem btn-sm" ng-click="addWorkExperience()">Add</button>
                            </div>
                        </div>

                        <!-- Form fields for work experience -->
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <input type="text" class="form-control form-input" ng-model="experience.role"
                                        placeholder="Enter your role" required>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="form-group">
                                    <label for="companyName">Company Name</label>
                                    <input type="text" class="form-control form-input" ng-model="experience.companyName"
                                        placeholder="Enter company name" required>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="form-group">
                                    <label for="experienceMonths">Experience - (Months)</label>
                                    <input type="number" class="form-control form-input"
                                        ng-model="experience.experienceMonths" placeholder="Enter experience in months"
                                        required min="0">
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="form-group">
                                    <label for="experienceYears">Experience - (Years)</label>
                                    <input type="number" class="form-control form-input"
                                        ng-model="experience.experienceYears" placeholder="Enter experience in years"
                                        required min="0">
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="form-group">
                                    <label for="salary">Salary</label>
                                    <input type="number" class="form-control form-input" ng-model="experience.salary"
                                        placeholder="Enter salary" required min="0">
                                </div>
                            </div>
                            <div class="col-xl-9">
                                <div class="form-group">
                                    <label for="workRemarks">Remark</label>
                                    <textarea class="form-control form-input" ng-model="experience.remark" rows="1"
                                        placeholder="Enter remarks"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-section my-3">
                    <h3 class="form-section-heading">Finance & Properties</h3>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group">
                                <label for="houseInName">Do you have any house in your name?</label>
                                <input type="text" class="form-control form-input" id="houseInName"
                                    ng-model="financehouseInName" placeholder="Yes/No" required>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group">
                                <label for="loanInName">Do you have any loan in your name?</label>
                                <input type="text" class="form-control form-input" id="loanInName"
                                    ng-model="financeloanInName" placeholder="Yes/No" required>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group">
                                <label for="currentSalary">How much is your current salary?</label>
                                <input type="number" class="form-control form-input" id="currentSalary"
                                    ng-model="financecurrentSalary" placeholder="Enter your current salary" required
                                    min="0">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="financeRemark">Remark</label>
                                <textarea class="form-control form-input" id="financeRemark" ng-model="financeremark"
                                    rows="3" placeholder="Enter any remarks"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-section my-3">
                    <h3 class="form-section-heading">FOLK Journey</h3>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="inTouchWith">In Touch With</label>
                                <input type="text" class="form-control form-input" id="inTouchWith"
                                    ng-model="journeyinTouchWith" placeholder="Enter name of contact" required>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="yearsInFolk">How many years</label>
                                <input type="number" class="form-control form-input" id="yearsInFolk"
                                    ng-model="journeyyearsInFolk" placeholder="Enter number of years" required min="0">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="yearsInKC">How many years</label>
                                <input type="number" class="form-control form-input" id="yearsInKC"
                                    ng-model="journeyyearsInKC" placeholder="Enter number of years" required min="0">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="kcThrough">Came to KC through</label>
                                <input type="text" class="form-control form-input" id="kcThrough"
                                    ng-model="journeykcThrough" placeholder="How did you come to KC?" required>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="form-group">
                                <label for="journeyRemark">Remark</label>
                                <textarea class="form-control form-input" id="journeyRemark" ng-model="journeyremark"
                                    rows="1" placeholder="Enter any remarks"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-section my-3">
                    <h3 class="form-section-heading">Turning Point</h3>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="turningPointRemark">Remark</label>
                                <textarea class="form-control form-input" id="turningPointRemark"
                                    ng-model="turningPointremark" rows="3"
                                    placeholder="Describe the turning point"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-section my-3 text-center">
                    <button class="btn btn-primary submit-form" ng-click="submitForm()">Submit</button>
                </div>
            </form>
        </section>
    </main>

    <!-- Footer Section -->
    <footer class="text-center">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <p>Copyrights © <?php echo date('Y'); ?> <b>ISKCON Bangalore.</b> All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js" defer></script>
    <script src="assets/js/slick.min.js" defer></script>
    <script src="assets/js/main.js" defer></script>
</body>

</html>