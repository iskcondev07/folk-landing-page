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
    <script src="assets/app/campaign.js?v<?php echo time(); ?>" defer></script>

    <!-- jQuery and Popper -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/js/popper.min.js" defer></script>

    <!-- Style CSS -->
    <link href="assets/css/style.css?v<?php echo time(); ?>" rel="preload stylesheet" as="style"
        onload="this.rel='stylesheet'" media="all">
    <title>Folk</title>
</head>

<body>
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
    <main>
        <section class="container mt-5">
            <div class="text-center">
                <h1 class="Prospect-form-heading">Prospect Form</h1>
            </div>

            <div class="form-section my-3">
                <h3 class="form-section-heading">Personal Information</h3>
                <div class="row">
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Email ID</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Mobile Number</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Gender</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">DOB</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Language</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Education</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Year of Pass Out</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Remark</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="form-section my-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="form-section-heading">Family Information</h3>
                    </div>
                    <div><a class="btn btn-add-elem btn-sm">Add</a></div>
                </div>

                <div class="row">
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Relationship</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Age</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Mobile Number</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Occupation</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Work Place</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Monthly Income</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Saving</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Health</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <div id="appendFamilyDetails"></div>
                <div class="form-group">
                    <label for="name">Do parents know about your KC practice</label>
                </div>
                <div class="d-flex">
                    <div class="form-check mx-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Yes
                        </label>
                    </div>
                    <div class="form-check mr-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-section my-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="form-section-heading">Work Experience</h3>
                    </div>
                    <div><a class="btn btn-add-elem btn-sm">Add</a></div>
                </div>
                <div class="row">
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Role</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Company Name</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Experience - (Months)</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Experience - (Years)</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Salary</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Remark</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-section my-3">
                <h3 class="form-section-heading">Finance & Properties</h3>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label for="name">Do you have any house in your name ?</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label for="name">Do you have any loan in your name ?</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label for="name">How much your current salary ?</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Remark</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-section my-3">
                <h3 class="form-section-heading">FOLK Journey</h3>
                <div class="row">
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">InTouch With</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">How many years</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">How may years</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">
                            <label for="name">Came to KC through</label>
                            <input type="text" class="form-control form-input" id="name" ng-model="user.name"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Remark</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="form-section my-3">
                <h3 class="form-section-heading">Turning Point</h3>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Remark</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
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
</body>

<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js" defer></script>
<script src="assets/js/slick.min.js" defer></script>
<!-- main.js -->
<script src="assets/js/main.js" defer></script>
<script src="assets/js/custom.js?v<?php echo time(); ?>"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</html>