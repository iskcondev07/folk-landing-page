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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
                    <img src="assets/img/folk-logo.png" class="header-logo" alt="header-logo">
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
                
                <!-- Personal Information -->

                <div class="form-section my-3">
                    <h3 class="form-section-heading">Personal Information</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <input type="text" class="form-control form-input" id="fullName" ng-model="user.name"
                                    placeholder="Enter your full name" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="email">Email ID</label>
                                <input type="email" class="form-control form-input" id="emailId" ng-model="user.emailId"
                                    placeholder="Enter your email" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="mobile">Mobile Number</label>
                                <input type="tel" class="form-control form-input" id="mobile" ng-model="user.mobile"
                                    placeholder="Enter your mobile number" required pattern="[0-9]{10}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select class="form-control form-input" id="gender" ng-model="user.gender" required>
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control form-input" id="dob" ng-model="user.dob"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="language">Language</label>
                                <select class="form-control form-input" id="language" ng-model="user.language" required>
                                    <option value="">Select Language</option>
                                    <option value="Hindi">Hindi</option>
                                    <option value="English">English</option>
                                    <option value="Kannada">Kannada</option>
                                    <option value="Tamil">Tamil</option>
                                    <option value="Telugu">Telugu</option>
                                    <option value="Marathi">Marathi</option>
                                    <option value="Oriya">Oriya</option>
                                    <option value="Gujarati">Gujarati</option>
                                    <option value="Bengali">Bengali</option>
                                    <option value="Punjabi">Punjabi</option>
                                    <option value="Harayanvi">Harayanvi</option>
                                    <option value="Rajasthani">Rajasthani</option>
                                    <option value="Malyalam">Malyalam</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="education">Education</label>
                                <input type="text" class="form-control form-input" id="education"
                                    ng-model="user.education" placeholder="Enter your education" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="yearOfPassOut">Year of Pass Out</label>
                                <input type="text" class="form-control form-input" id="yearOfPassOut" minlength="4"
                                    maxlength="4" oninput="this.value = this.value.replace(/\D/g, '').substring(0, 10);"
                                    ng-model="user.yearOfPassOut" placeholder="Enter year of pass out" required
                                    min="1900" max="2099">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="remarks">Remark</label>
                                <textarea class="form-control form-input" id="remarks" ng-model="user.remarks" rows="3"
                                    placeholder="Enter any remarks"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Family Information -->

                <div class="form-section my-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="form-section-heading">Family Information</h3>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="relationship">Relationship</label>
                                    <select class="form-control form-input" ng-model="family.relationship" required>
                                    <option value="">Select Relation</option>
                                    <option value="Father">Father</option>
                                    <option value="Month">Month</option>
                                    <option value="Other">Brother</option>
                                    <option value="Other">Sister</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="familyName">Name</label>
                                <input type="text" class="form-control form-input" ng-model="family.name"
                                    placeholder="Enter family member's name" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="text" class="form-control form-input" ng-model="family.age" minlength="3"
                                    maxlength="3" oninput="this.value = this.value.replace(/\D/g, '').substring(0, 10);"
                                    placeholder="Enter age" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="familyMobile">Mobile Number</label>
                                <input type="tel" class="form-control form-input" ng-model="family.mobile"
                                    minlength="12" maxlength="12"
                                    oninput="this.value = this.value.replace(/\D/g, '').substring(0, 10);"
                                    placeholder="Enter mobile number" required pattern="[0-9]{10}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="occupation">Occupation</label>
                                <input type="text" class="form-control form-input" ng-model="family.occupation"
                                    placeholder="Enter occupation" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="workPlace">Work Place</label>
                                <input type="text" class="form-control form-input" ng-model="family.workPlace"
                                    placeholder="Enter workplace" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="income">Monthly Income</label>
                                <input type="text" class="form-control form-input" ng-model="family.income"
                                    placeholder="Enter monthly income" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="saving">Saving</label>
                                <input type="text" class="form-control form-input" ng-model="family.saving"
                                    placeholder="Enter saving amount" required>
                            </div>
                        </div>
                        <div class="col-md-3">
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
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-add-elem btn-sm" ng-click="saveFamilyDetail()">{{ isEdit1 ? 'Update' :
                            'Save' }}</button>
                    </div>
                    <div ng-if="familyDetails.length > 0">
                        <table class="table mt-3" style="color:#d6d6d6">
                            <thead>
                                <tr>
                                    <th>S#</th>
                                    <th>Relationship</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Mobile</th>
                                    <th>Occupation</th>
                                    <th>Work Place</th>
                                    <th>Income</th>
                                    <th>Saving</th>
                                    <th>Health</th>
                                    <th>Remarks</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="family in familyDetails">
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ family.relationship }}</td>
                                    <td>{{ family.name }}</td>
                                    <td>{{ family.age }}</td>
                                    <td>{{ family.mobile }}</td>
                                    <td>{{ family.occupation }}</td>
                                    <td>{{ family.workPlace }}</td>
                                    <td>{{ family.income }}</td>
                                    <td>{{ family.saving }}</td>
                                    <td>{{ family.health }}</td>
                                    <td>{{ family.remarks }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-warning"
                                            ng-click="editFamilyDetail($index)">Edit</button>
                                        <button class="btn btn-sm btn-danger"
                                            ng-click="deleteFamilyDetail($index)">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

                <!-- Do parents know about your KC practice? -->

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

                <!-- Work Experience -->

                <div class="form-section my-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="form-section-heading">Work Experience</h3>
                        </div>
                    </div>
                    <!-- Form fields for work experience -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="role">Role</label>
                                <input type="text" class="form-control form-input" ng-model="experience.role"
                                    placeholder="Enter your role" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="companyName">Company Name</label>
                                <input type="text" class="form-control form-input" ng-model="experience.companyName"
                                    placeholder="Enter company name" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="experienceMonths">Experience - (Months)</label>
                                <input type="text" class="form-control form-input"
                                    ng-model="experience.experienceMonths" placeholder="Enter experience in months"
                                    minlength="2" maxlength="2"
                                    oninput="this.value = this.value.replace(/\D/g, '').substring(0, 10);" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="experienceYears">Experience - (Years)</label>
                                <input type="text" class="form-control form-input" minlength="4" maxlength="4"
                                    oninput="this.value = this.value.replace(/\D/g, '').substring(0, 10);"
                                    ng-model="experience.experienceYears" placeholder="Enter experience in years"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="salary">Salary</label>
                                <input type="text" class="form-control form-input" ng-model="experience.salary"
                                    placeholder="Enter salary" required>
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
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-add-elem btn-sm" ng-click="submitExperience()">{{ isEdit ? 'Update' :
                            'Save' }}</button>
                    </div>
                    <div ng-if="experienceData.length > 0">
                        <table class="table mt-3" style="color:#d6d6d6">
                            <thead>
                                <tr>
                                    <th>S#</th>
                                    <th>Role</th>
                                    <th>Company Name</th>
                                    <th>Experience (Months)</th>
                                    <th>Experience (Years)</th>
                                    <th>Salary</th>
                                    <th>Remarks</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="experience in experienceData">
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{experience.role}}</td>
                                    <td>{{experience.companyName}}</td>
                                    <td>{{experience.experienceMonths}}</td>
                                    <td>{{experience.experienceYears}}</td>
                                    <td>{{experience.salary}}</td>
                                    <td>{{experience.remark}}</td>
                                    <td>
                                        <button class="btn btn-sm btn-warning"
                                            ng-click="editExperienceDetail($index)">Edit</button>
                                        <button class="btn btn-sm btn-danger"
                                            ng-click="deleteExperience($index)">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

                <!-- Finance & Properties -->

                <div class="form-section my-3">
                    <h3 class="form-section-heading">Finance & Properties</h3>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group">
                                <label for="houseInName">Do you have any house in your name?</label>
                                <input type="text" class="form-control form-input" id="houseInName"
                                    ng-model="finance.houseInName" placeholder="Yes/No" required>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group">
                                <label for="loanInName">Do you have any loan in your name?</label>
                                <input type="text" class="form-control form-input" id="loanInName"
                                    ng-model="finance.loanInName" placeholder="Yes/No" required>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group">
                                <label for="currentSalary">How much is your current salary?</label>
                                <input type="text" class="form-control form-input" id="currentSalary"
                                    ng-model="finance.currentSalary" placeholder="Enter your current salary" required>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="financeRemark">Remark</label>
                                <textarea class="form-control form-input" id="financeRemark" ng-model="finance.remark"
                                    rows="3" placeholder="Enter any remarks"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FOLK Journey -->

                <div class="form-section my-3">
                    <h3 class="form-section-heading">FOLK Journey</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inTouchWith">In Touch With</label>
                                <input type="text" class="form-control form-input" id="inTouchWith"
                                    ng-model="journey.inTouchWith" placeholder="Enter name of contact" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="yearsInFolk">How many years</label>
                                <input type="text" class="form-control form-input" id="yearsInFolk" minlength="4"
                                    maxlength="4" oninput="this.value = this.value.replace(/\D/g, '').substring(0, 10);"
                                    ng-model="journey.yearsInFolk" placeholder="Enter number of years" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="chantingRounds">Chanting Rounds</label>
                                <input type="text" class="form-control form-input" id="chantingRounds" minlength="10"
                                    maxlength="10"
                                    oninput="this.value = this.value.replace(/\D/g, '').substring(0, 10);"
                                    ng-model="journey.chantingRounds" placeholder="Enter number of Chanting Rounds"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="yearsInKC">How many years</label>
                                <input type="text" class="form-control form-input" id="yearsInKC" minlength="4"
                                    maxlength="4" oninput="this.value = this.value.replace(/\D/g, '').substring(0, 10);"
                                    ng-model="journey.yearsInKC" placeholder="Enter number of years" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="kcThrough">Came to KC through</label>
                                <input type="text" class="form-control form-input" id="kcThrough"
                                    ng-model="journey.kcThrough" placeholder="How did you come to KC?" required>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="form-group">
                                <label for="journeyRemark">Remark</label>
                                <textarea class="form-control form-input" id="journeyRemark" ng-model="journey.remark"
                                    rows="1" placeholder="Enter any remarks"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Turning Point -->
                 
                <div class="form-section my-3">
                    <h3 class="form-section-heading">Turning Point</h3>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="turningPointRemark">Remark</label>
                                <textarea class="form-control form-input" id="turningPointRemark"
                                    ng-model="turning.Pointremark" rows="3"
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