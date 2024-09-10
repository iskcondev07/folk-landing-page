<?php
session_start();
session_destroy();
session_start();
error_reporting(0);
function isMobileDevice() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
if(isMobileDevice()) {
    $deviceType = 'M';
} else {
    $deviceType = 'D';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kartika <?=date('Y');?></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Kartika month is the dearest to Lord Krishna. The auspicious month of Kartika will be celebrated from October 17 to November 15 this year. When devotional service to Krishna is performed during this month, the benefits increase a thousand fold. Thus, Karthika is a perfect time to render service to the Lord, His devotees, and Gomata." />
    <meta name="keywords"
        content="ISKCON Bangalore, Kartika Month, Online Donation, Festival Donation, Utsava, ISKCON Donation, ISKCON Deepotsava, Deepotsava" />
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="preload stylesheet" as="style" onload="this.rel='stylesheet'" media="all">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap"
            media="all">
    </noscript>
    <!-- Icofont CSS -->
    <link href="assets/css/icofont.min.css?v<?php echo time(); ?>" rel="preload stylesheet" as="style"
        onload="this.rel='stylesheet'" media="all">
    <noscript>
        <link rel="stylesheet" href="assets/css/icofont.min.css?v<?php echo time(); ?>" media="all">
    </noscript>
    <!-- Slick CSS -->
    <link href="assets/css/slick.css?v<?php echo time(); ?>" rel="preload stylesheet" as="style"
        onload="this.rel='stylesheet'" media="all">
    <noscript>
        <link rel="stylesheet" href="assets/css/slick.css?v<?php echo time(); ?>" media="all">
    </noscript>
    <link href="assets/css/slick-theme.css?v<?php echo time(); ?>" rel="preload stylesheet" as="style"
        onload="this.rel='stylesheet'" media="all">
    <noscript>
        <link rel="stylesheet" href="assets/css/slick-theme.css?v<?php echo time(); ?>" media="all">
    </noscript>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css?v<?php echo time(); ?>" rel="preload stylesheet" as="style"
        onload="this.rel='stylesheet'" media="all">
    <noscript>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css?v<?php echo time(); ?>" media="all">
    </noscript>
    <!-- Venobox CSS -->
    <link href="assets/css/venobox.min.css?v<?php echo time(); ?>" rel="preload stylesheet" as="style"
        onload="this.rel='stylesheet'" media="all">
    <noscript>
        <link rel="stylesheet" href="assets/css/venobox.min.css?v<?php echo time(); ?>" media="all">
    </noscript>
    <!-- Style CSS -->
    <link href="assets/css/style.css?v<?php echo time(); ?>" rel="preload stylesheet" as="style"
        onload="this.rel='stylesheet'" media="all">
    <noscript>
        <link rel="stylesheet" href="assets/css/style.css?v<?php echo time(); ?>" media="all">
    </noscript>
    <!-- Responsive CSS -->
    <link href="assets/css/responsive.css?v<?php echo time(); ?>" rel="preload stylesheet" as="style"
        onload="this.rel='stylesheet'" media="all">
    <noscript>
        <link rel="stylesheet" href="assets/css/responsive.css?v<?php echo time(); ?>" media="all">
    </noscript>
    <!-- Checkbox CSS -->
    <link href="assets/css/checkbox.css?v<?php echo time(); ?>" rel="preload stylesheet" as="style"
        onload="this.rel='stylesheet'" media="all">
    <noscript>
        <link rel="stylesheet" href="assets/css/checkbox.css?v<?php echo time(); ?>" media="all">
    </noscript>

    <!-- Datepicker CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="preload stylesheet" as="style" onload="this.rel='stylesheet'" media="all">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" media="all">
    </noscript>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="preload stylesheet" as="style" onload="this.rel='stylesheet'" media="all">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all">
    </noscript>
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css"
        rel="stylesheet">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css"
        rel="stylesheet">

    <script src="assets/app/generic_function.js" defer></script>

    <script src="assets/angularjs/angular.min.js" defer></script>
    <script src="assets/app/campaign.js?v<?php echo time(); ?>" defer></script>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- jQuery File-->
    <script src="assets/js/jquery-3.5.1.min.js" defer></script>
    <!-- Popper JS -->
    <script src="assets/js/popper.min.js" defer></script>
    <!-- jQuery File-->
    <script src="assets/js/jquery-3.5.1.min.js" defer></script>
    <!-- Popper JS -->
    <script src="assets/js/popper.min.js" defer></script>

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-K7LLGW');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body ng-app="campaignApp" ng-controller="campaignCtrl" ng-init="pageLoad()">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K7LLGW" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Goto TOP -->
    <div id="top-btn">
        <button class="btn top-btn"><i class="icofont-arrow-up"></i></button>
    </div>
    <section class="header-donate">
        <div class="container-fluid pl-md-5 pr-md-5">
            <div class="row">
                <div class="col-6 text-left pt-2 pb-2">
                    <img src="assets/img/header-logo.png" class="header-logo" alt="header-logo">
                </div>
                <div class="col-6 text-right my-auto">
                    <a href="#offer-seva" class="btn btn-h-donate">Donate Now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="banner-section">
        <div class="container-fluid px-0">
            <div class="row mx-0">
                <div class="col-md-12 px-0">
                    <div class="banner-image d-md-block d-none">
                        <img src="assets/img/kartika-depotsava-desktop-banner.png?v<?php echo time(); ?>"
                            alt="banner-image" class="banner-img">
                    </div>
                    <div class="mobile-image d-md-none d-block">
                        <img src="assets/img/kartika-depotsava-mobile-banner.png?v<?php echo time(); ?>"
                            alt="mobile-image" class="mobile-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="form-section pt-md-3 pt-2 mt-md-2 mt-3">
        <div class="container-fluid container-fluid2 pl-md-5 pr-md-5 px-0">
            <div class="row mx-0">
                <div class="col-md-7 px-md-3">
                    <div class="row mx-0 justify-content-center">
                        <div class="col-md-9 mb-3 mt-md-4 mt-2 d-md-block d-none">
                            <ul class="desc-ul">
                                <li>
                                    <div class="row">
                                        <div class="col-md-9 col-8 my-auto">
                                            <h5 class="sv-title">Deepa Daana Seva</h5>
                                            <p class="mb-0 sv-para">
                                                During this auspicious
                                                month, the temple will be decorated gorgeously with
                                                ghee lamps.
                                            </p>
                                        </div>
                                        <div class="col-md-3 col-4">
                                            <img src="assets/img/deep-dan.png" alt="Image" class="w-100">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-9 col-8 my-auto">
                                            <h5 class="sv-title">Pushpalankara Seva</h5>
                                            <p class="mb-0 sv-para">
                                                Decorate the Lord
                                                everyday with beautiful garlands during His
                                                favourite month.
                                            </p>
                                        </div>
                                        <div class="col-md-3 col-4">
                                            <img src="assets/img/pushpa-alankara.png" alt="Image" class="w-100">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-9 col-8 my-auto">
                                            <h5 class="sv-title">Vishesha Naivedya Seva</h5>
                                            <p class="mb-0 sv-para">
                                                Offer special bhoga
                                                preparations for the Lord every day of the month of
                                                Kartika.
                                            </p>
                                        </div>
                                        <div class="col-md-3 col-4">
                                            <img src="assets/img/naivedya-seva.png" alt="Image" class="w-100">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-9 col-8 my-auto">
                                            <h5 class="sv-title">Annadana Seva</h5>
                                            <p class="mb-0 sv-para">
                                                Sponsor the distribution
                                                of prasadam during this auspicious month in the name
                                                of
                                                your family or loved ones.
                                            </p>
                                        </div>
                                        <div class="col-md-3 col-4">
                                            <img src="assets/img/annadana-seva.png" alt="Image" class="w-100">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-9 col-8 my-auto">
                                            <h5 class="sv-title">Gau Seva</h5>
                                            <p class="mb-0 sv-para">
                                                Serve Mother Cow by
                                                sponsoring for her feeding and care. Receive the
                                                Lord's special blessings.
                                            </p>
                                        </div>
                                        <div class="col-md-3 col-4">
                                            <img src="assets/img/gau-seva.png" alt="Image" class="w-100">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <p class="desc-para">
                                Kartika month is the dearest to Lord Krishna. The auspicious month of Kartika will be
                                celebrated from October 17 to November 15 this year. When devotional service to Krishna
                                is performed during this month, the benefits increase a thousandfold. Thus, Kartika is a
                                perfect time to render service to the Lord, His devotees, and Gaumata.
                            </p>
                            <p ng-hide="more" class="desc-para">We invite you to contribute towards the festival of
                                lights and receive the blessings of Lord Krishna. Here is a wonderful opportunity to
                                contribute towards Annadana and Go-Seva at ISKCON Bangalore temple. Also offer
                                Pushpalankara and Vishesha Naivedya Sevas to the Lord. Sponsor and be infinitely blessed
                                during this most auspicious month. Receive the special prasadam delivered to your home.
                                <span ng-show="dots"></span><span ng-hide="more" ng-click="readMore()"
                                    id="readBtn">{{btnText}}</span>
                            </p>
                            <span ng-show="more">
                                <p class="desc-para">The devotee is bestowed with unlimited prosperity, peace and
                                    happiness by offering sevas on this occasion. It is said in the Padma Purana, "Lord
                                    Krishna is pleased by the offering of a single lamp during the month of Karthika."
                                </p>
                                <p class="desc-para">
                                    In this month, the devotees decorate the temple every day with thousands of lamps.
                                    The radiance from these lamps spreads across the temple, immersing the visitors in a
                                    divine experience. We invite you to participate in the Deepa Dana seva and help us
                                    elevate the spiritual ambience of the temple.
                                </p>
                                <p class="desc-para">We invite you to contribute towards the festival of lights and
                                    receive the blessings of Lord Krishna. Here is a wonderful opportunity to contribute
                                    towards Annadana and Go-Seva at ISKCON Bangalore temple. Also offer Pushpalankara
                                    and Vishesha Naivedya Sevas to the Lord. Sponsor and be infinitely blessed during
                                    this most auspicious month. Receive the special prasadam delivered to your home.
                                    <span ng-show="more" ng-click="readMore()" id="readBtn">{{btnText}}</span>
                                </p>
                            </span>

                        </div>
                    </div>
                </div>
                <div class="col-md-5 px-0">
                    <div class="desk-form-div" id="offer-seva">
                        <h2 class="seva-offer-heading-desk card-desk-h5"><img src="assets/img/left-design.png" alt=""
                                class="dont-img">Donation
                            Details<img src="assets/img/right-design.png" alt="" class="dont-img"></h2>
                        <form action="#" name="campaignForm" method="post" class="mt-4">
                            <input type="hidden" name="noOfDonor" id="noOfDonor" value="6">
                            <input type="hidden" name="paymentOptions" id="paymentOptions" value="">
                            <input type="hidden" name="checkAddressOptions" id="checkAddressOptions" value="">
                            <input type="hidden" name="recurring" id="recurring" value="">
                            <input type="hidden" name="source" id="source" value="">
                            <input type="hidden" name="sevaDate" id="sevaDate" value="">
                            <input type="hidden" name="name" id="name" value="">
                            <input type="hidden" name="mobile" id="mobile" value="">
                            <input type="hidden" name="nationality" id="nationality" value="">
                            <input type="hidden" name="emailId" id="emailId" value="">
                            <input type="hidden" name="pan" id="pan" value="">

                            <?php
                            if($_GET['utm_source'] != '') {
                            $utmSource = $_GET['utm_source'];
                            } else if ($_GET['utm_sources'] != '') {
                            $utmSource = base64_decode($_GET['utm_sources']);
                            }
                            ?>
                            <input type="hidden" name="utm_source" id="utm_source" value="<?php echo $utmSource; ?>">
                            <input type="hidden" name="utm_medium" id="utm_medium"
                                value="<?php echo $_GET['utm_medium']; ?>">
                            <input type="hidden" name="utm_campaign" id="utm_campaign"
                                value="<?php echo $_GET['utm_campaign']; ?>">
                            <div class="form-row custom-form-desk mx-0">
                                <?php if($deviceType == 'D'){?>
                                <div class="col-md-12">
                                    <div class="row pt-1 pb-1">
                                        <div class="col-md-7 my-auto">
                                            <input type="hidden" name="selectedSevaName[]" id="selectedSevaName3"
                                                value="">
                                            <input type="hidden" name="sevaCode[]" id="sevaCode3" value="">
                                            <input type="hidden" name="sevaId[]" id="sevaId3" value="">
                                            <input type="hidden" name="finalSevaAmount[]" id="finalSevaAmount3"
                                                value="">
                                            <label class="lbl"><input type="checkbox" class="role-checkbox"
                                                    onclick="checkCheckbox(this)" data-id="3" value="3"
                                                    ng-model="checkboxes[3]" ng-click="showSevaAmount(3)">
                                                <p class="mb-0 seva-para">Deepa Daan Seva</p>
                                            </label>
                                        </div>
                                        <div class="col-md-5 hide-div openDiv3">
                                            <div class="group mt-0">
                                                <input type="number" class="input num max-length-number" maxlength="6"
                                                    data-id="3" required ng-keyup="validateAmount($event)"
                                                    id="otheramt3" data-minprice="{{sevaMinimumAmountOption3}}"
                                                    onkeypress="return isNumber(event)" />
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label class="google-material">₹ Enter Amount</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2 hide-div openDiv3">
                                            <div class="row">
                                                <div class="col-md-3 col-6 pr-1 text-center">
                                                    <button id="seva3-O1" type="button"
                                                        class="btn margin-seva-btn amt-btn-clr-desk amt-btn mb-2"
                                                        ng-click="selectedAmount(sevaAmountOption3[0],1,3)">
                                                        <p class="sub-amt-cls">₹ {{sevaAmountOption3[0] | INR}}</p>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-6 pl-1 pr-1 text-center">
                                                    <button id="seva3-O2" type="button"
                                                        class="btn margin-seva-btn amt-btn-clr-desk amt-btn mb-2"
                                                        ng-click="selectedAmount(sevaAmountOption3[1],2,3)">
                                                        <p class="sub-amt-cls">₹ {{sevaAmountOption3[1] | INR}}</p>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-6 pr-1 pl-1 text-center">
                                                    <button id="seva3-O3" type="button"
                                                        class="btn margin-seva-btn amt-btn-clr-desk amt-btn mb-2"
                                                        ng-click="selectedAmount(sevaAmountOption3[2],3,3)">
                                                        <p class="sub-amt-cls">₹ {{sevaAmountOption3[2] | INR}}</p>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-6 pl-1 text-center">
                                                    <button id="seva3-O4" type="button"
                                                        class="btn margin-seva-btn amt-btn-clr-desk amt-btn mb-2"
                                                        ng-click="selectedAmount(sevaAmountOption3[3],4,3)">
                                                        <p class="sub-amt-cls">₹ {{sevaAmountOption3[3] | INR}}</p>
                                                    </button>
                                                </div>
                                            </div>
                                            <span class="errorSpan error3 mt-1"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row pt-1 pb-1">
                                        <div class="col-md-7 my-auto">
                                            <input type="hidden" name="selectedSevaName[]" id="selectedSevaName4"
                                                value="">
                                            <input type="hidden" name="sevaCode[]" id="sevaCode4" value="">
                                            <input type="hidden" name="sevaId[]" id="sevaId4" value="">
                                            <input type="hidden" name="finalSevaAmount[]" id="finalSevaAmount4"
                                                value="">
                                            <label class="lbl"><input type="checkbox" class="role-checkbox"
                                                    onclick="checkCheckbox(this)" data-id="4" value="4"
                                                    ng-model="checkboxes[4]" ng-click="showSevaAmount(4)">
                                                <p class="mb-0 seva-para">Pushpalankara Seva</p>
                                            </label>
                                        </div>
                                        <div class="col-md-5 hide-div openDiv4">
                                            <div class="group mt-0">
                                                <input type="number" class="input num max-length-number" maxlength="6"
                                                    data-id="4" required ng-keyup="validateAmount($event)"
                                                    id="otheramt4" data-minprice="{{sevaMinimumAmountOption4}}"
                                                    onkeypress="return isNumber(event)" />
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label class="google-material">₹ Enter Amount</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2 hide-div openDiv4">
                                            <div class="row">
                                                <div class="col-md-3 col-6 text-center pr-1">
                                                    <button id="seva4-O1" type="button"
                                                        class="btn margin-seva-btn amt-btn-clr-desk amt-btn mb-2"
                                                        ng-click="selectedAmount(sevaAmountOption4[0],1,4)">
                                                        <p class="sub-amt-cls">₹ {{sevaAmountOption4[0] | INR}}</p>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-6 text-center pl-1 pr-1">
                                                    <button id="seva4-O2" type="button"
                                                        class="btn margin-seva-btn amt-btn-clr-desk amt-btn mb-2"
                                                        ng-click="selectedAmount(sevaAmountOption4[1],2,4)">
                                                        <p class="sub-amt-cls">₹ {{sevaAmountOption4[1] | INR}}</p>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-6 text-center pr-1 pl-1">
                                                    <button id="seva4-O3" type="button"
                                                        class="btn margin-seva-btn amt-btn-clr-desk amt-btn mb-2"
                                                        ng-click="selectedAmount(sevaAmountOption4[2],3,4)">
                                                        <p class="sub-amt-cls">₹ {{sevaAmountOption4[2] | INR}}</p>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-6 text-center pl-1">
                                                    <button id="seva4-O4" type="button"
                                                        class="btn margin-seva-btn amt-btn-clr-desk amt-btn mb-2"
                                                        ng-click="selectedAmount(sevaAmountOption4[3],4,4)">
                                                        <p class="sub-amt-cls">₹ {{sevaAmountOption4[3] | INR}}</p>
                                                    </button>
                                                </div>
                                            </div>
                                            <span class="errorSpan error4 mt-1"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row pt-1 pb-1">
                                        <div class="col-md-7 my-auto">
                                            <input type="hidden" name="selectedSevaName[]" id="selectedSevaName5"
                                                value="">
                                            <input type="hidden" name="sevaCode[]" id="sevaCode5" value="">
                                            <input type="hidden" name="sevaId[]" id="sevaId5" value="">
                                            <input type="hidden" name="finalSevaAmount[]" id="finalSevaAmount5"
                                                value="">
                                            <label class="lbl"><input type="checkbox" class="role-checkbox"
                                                    onclick="checkCheckbox(this)" data-id="5" value="5"
                                                    ng-model="checkboxes[5]" ng-click="showSevaAmount(5)">
                                                <p class="mb-0 seva-para">Vishesha Naivedya Seva</p>
                                            </label>
                                        </div>
                                        <div class="col-md-5 hide-div openDiv5">
                                            <div class="group mt-0">
                                                <input type="number" class="input num max-length-number" maxlength="6"
                                                    data-id="5" required ng-keyup="validateAmount($event)"
                                                    id="otheramt5" data-minprice="{{sevaMinimumAmountOption5}}"
                                                    onkeypress="return isNumber(event)" />
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label class="google-material">₹ Enter Amount</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2 hide-div openDiv5">
                                            <div class="row">
                                                <div class="col-md-3 col-6 text-center pr-1">
                                                    <button id="seva5-O1" type="button"
                                                        class="btn margin-seva-btn amt-btn-clr-desk amt-btn mb-2"
                                                        ng-click="selectedAmount(sevaAmountOption5[0],1,5)">
                                                        <p class="sub-amt-cls">₹ {{sevaAmountOption5[0] | INR}} </p>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-6 text-center pl-1 pr-1">
                                                    <button id="seva5-O2" type="button"
                                                        class="btn margin-seva-btn amt-btn-clr-desk amt-btn mb-2"
                                                        ng-click="selectedAmount(sevaAmountOption5[1],2,5)">
                                                        <p class="sub-amt-cls">₹ {{sevaAmountOption5[1] | INR}} </p>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-6 text-center pr-1 pl-1">
                                                    <button id="seva5-O3" type="button"
                                                        class="btn margin-seva-btn amt-btn-clr-desk amt-btn mb-2"
                                                        ng-click="selectedAmount(sevaAmountOption5[2],3,5)">
                                                        <p class="sub-amt-cls">₹ {{sevaAmountOption5[2] | INR}}</p>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-6 text-center pl-1">
                                                    <button id="seva5-O4" type="button"
                                                        class="btn margin-seva-btn amt-btn-clr-desk amt-btn mb-2"
                                                        ng-click="selectedAmount(sevaAmountOption5[3],4,5)">
                                                        <p class="sub-amt-cls">₹ {{sevaAmountOption5[3] | INR}}</p>
                                                    </button>
                                                </div>
                                            </div>
                                            <span class="errorSpan error5 mt-1"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row pt-1 pb-1">
                                        <div class="col-md-7 my-auto">
                                            <input type="hidden" name="selectedSevaName[]" id="selectedSevaName2"
                                                value="">
                                            <input type="hidden" name="sevaCode[]" id="sevaCode2" value="">
                                            <input type="hidden" name="sevaId[]" id="sevaId2" value="">
                                            <input type="hidden" name="finalSevaAmount[]" id="finalSevaAmount2"
                                                value="">
                                            <label class="lbl"><input type="checkbox" class="role-checkbox"
                                                    onclick="checkCheckbox(this)" data-id="2" value="2"
                                                    ng-model="checkboxes[2]" ng-click="showSevaAmount(2)">
                                                <p class="mb-0 seva-para">Annadana Seva</p>
                                            </label>
                                        </div>
                                        <div class="col-md-5 hide-div openDiv2">
                                            <div class="group mt-0">
                                                <input type="number" class="input num max-length-number" maxlength="6"
                                                    data-id="2" required ng-keyup="validateAmount($event)"
                                                    id="otheramt2" data-minprice="{{sevaMinimumAmountOption2}}"
                                                    onkeypress="return isNumber(event)" />
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label class="google-material">₹ Enter Amount</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2 hide-div openDiv2">
                                            <div class="row">
                                                <div class="col-md-3 col-6 pr-1 text-center">
                                                    <button id="seva2-O1" type="button"
                                                        class="btn margin-seva-btn amt-btn-clr-desk amt-btn mb-2"
                                                        ng-click="selectedAmount(sevaAmountOption2[0],1,2)">
                                                        <p class="sub-amt-cls">₹ {{sevaAmountOption2[0] | INR}}</p>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-6 pl-1 pr-1 text-center">
                                                    <button id="seva2-O2" type="button"
                                                        class="btn margin-seva-btn amt-btn-clr-desk amt-btn mb-2"
                                                        ng-click="selectedAmount(sevaAmountOption2[1],2,2)">
                                                        <p class="sub-amt-cls">₹ {{sevaAmountOption2[1] | INR}}</p>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-6 pr-1 pl-1 text-center">
                                                    <button id="seva2-O3" type="button"
                                                        class="btn margin-seva-btn amt-btn-clr-desk amt-btn mb-2"
                                                        ng-click="selectedAmount(sevaAmountOption2[2],3,2)">
                                                        <p class="sub-amt-cls">₹ {{sevaAmountOption2[2] | INR}}</p>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-6 text-center pl-1">
                                                    <button id="seva2-O4" type="button"
                                                        class="btn margin-seva-btn amt-btn-clr-desk amt-btn mb-2"
                                                        ng-click="selectedAmount(sevaAmountOption2[3],4,2)">
                                                        <p class="sub-amt-cls">₹ {{sevaAmountOption2[3] | INR}}</p>
                                                    </button>
                                                </div>
                                            </div>
                                            <span class="errorSpan error2 mt-1"></span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row pt-1 pb-1">
                                        <div class="col-md-7 my-auto">
                                            <input type="hidden" name="selectedSevaName[]" id="selectedSevaName1"
                                                value="">
                                            <input type="hidden" name="sevaCode[]" id="sevaCode1" value="">
                                            <input type="hidden" name="sevaId[]" id="sevaId1" value="">
                                            <input type="hidden" name="finalSevaAmount[]" id="finalSevaAmount1"
                                                value="">
                                            <label class="lbl"><input type="checkbox" class="role-checkbox"
                                                    onclick="checkCheckbox(this)" data-id="1" value="1"
                                                    ng-model="checkboxes[1]" ng-click="showSevaAmount(1)">
                                                <p class="mb-0 seva-para">Gau Seva</p>
                                            </label>
                                        </div>
                                        <div class="col-md-5 hide-div openDiv1">
                                            <div class="group mt-0">
                                                <input type="number" class="input num max-length-number" maxlength="6"
                                                    data-id="1" required ng-keyup="validateAmount($event)"
                                                    id="otheramt1" data-minprice="{{sevaMinimumAmountOption1}}"
                                                    onkeypress="return isNumber(event)" />
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label class="google-material">₹ Enter Amount</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2 hide-div openDiv1">
                                            <div class="row">
                                                <div class="col-md-3 col-6 text-center pr-1">
                                                    <button id="seva1-O1" type="button"
                                                        class="btn margin-seva-btn amt-btn-clr-desk amt-btn mb-2"
                                                        ng-click="selectedAmount(sevaAmountOption1[0],1,1)">
                                                        <p class="sub-amt-cls">₹ {{sevaAmountOption1[0] | INR}} </p>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-6 text-center pl-1 pr-1">
                                                    <button id="seva1-O2" type="button"
                                                        class="btn margin-seva-btn amt-btn-clr-desk amt-btn mb-2"
                                                        ng-click="selectedAmount(sevaAmountOption1[1],2,1)">
                                                        <p class="sub-amt-cls">₹ {{sevaAmountOption1[1] | INR}} </p>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-6 text-center pr-1 pl-1">
                                                    <button id="seva1-O3" type="button"
                                                        class="btn margin-seva-btn amt-btn-clr-desk amt-btn mb-2"
                                                        ng-click="selectedAmount(sevaAmountOption1[2],3,1)">
                                                        <p class="sub-amt-cls">₹ {{sevaAmountOption1[2] | INR}}</p>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-6 text-center pl-1">
                                                    <button id="seva1-O4" type="button"
                                                        class="btn margin-seva-btn amt-btn-clr-desk amt-btn mb-2"
                                                        ng-click="selectedAmount(sevaAmountOption1[3],4,1)">
                                                        <p class="sub-amt-cls">₹ {{sevaAmountOption1[3] | INR}}</p>
                                                    </button>
                                                </div>
                                            </div>
                                            <span class="errorSpan error1 mt-1"></span>
                                        </div>
                                    </div>
                                </div>
                                <?php }else{ ?>
                                <div class="col-md-12">
                                    <div class="row pt-1 pb-2">
                                        <div class="col-md-8 col-7 my-auto pl-md-3 pl-2 pr-md-3 pr-1">
                                            <input type="hidden" name="selectedSevaName[]" id="selectedSevaName3"
                                                value="">
                                            <input type="hidden" name="sevaCode[]" id="sevaCode3" value="">
                                            <input type="hidden" name="sevaId[]" id="sevaId3" value="">
                                            <input type="hidden" name="finalSevaAmount[]" id="finalSevaAmount3"
                                                value="">
                                            <label class="lbl"><input type="checkbox" class="role-checkbox" data-id="3"
                                                    onclick="checkMobCheckbox(this)" value="3" ng-model="checkboxes[3]"
                                                    ng-click="showSevaAmount(3)">
                                                <p class="mb-0 seva-para">Deepa Daan Seva</p>
                                            </label>
                                        </div>
                                        <div class="col-md-4 col-5 pl-1" id="dropdownContainer3">
                                            <select class="form-control custom-select amount-select round2"
                                                name="indianProfileCountry" tabindex="13" id="options3" data-id="3"
                                                onchange="handleDropdownChange(this)" required
                                                ng-click="selectSevaName('3')">
                                                <option value="">Select</option>
                                                <option value="{{sevaAmountOption3[0]}}">₹
                                                    {{sevaAmountOption3[0] | INR}}</option>
                                                <option value="{{sevaAmountOption3[1]}}">₹
                                                    {{sevaAmountOption3[1] | INR}}</option>
                                                <option value="{{sevaAmountOption3[2]}}">₹
                                                    {{sevaAmountOption3[2] | INR}}</option>
                                                <option value="{{sevaAmountOption3[3]}}">₹
                                                    {{sevaAmountOption3[3] | INR}}</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <div id="otherInput3" class="otherInput">
                                                <input type="number" class="cus-input2 num max-length-number"
                                                    maxlength="6" placeholder="Enter Amount"
                                                    oninput="handleInputChange(this)" data-id="3" required
                                                    ng-keyup="validateAmount($event)" id="otheramt3"
                                                    data-minprice="{{sevaMinimumAmountOption3}}"
                                                    onkeypress="return isNumber(event)">
                                                <span class="clear-input clearinput3" data-id="3"
                                                    onclick="clearInput(this)">✖</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="errorSpan error3"></span>
                                </div>
                                <div class="col-md-12">
                                    <div class="row pt-1 pb-2">
                                        <div class="col-md-8 col-7 my-auto pl-md-3 pl-2 pr-md-3 pr-1">
                                            <input type="hidden" name="selectedSevaName[]" id="selectedSevaName4"
                                                value="">
                                            <input type="hidden" name="sevaCode[]" id="sevaCode4" value="">
                                            <input type="hidden" name="sevaId[]" id="sevaId4" value="">
                                            <input type="hidden" name="finalSevaAmount[]" id="finalSevaAmount4"
                                                value="">
                                            <label class="lbl"><input type="checkbox" class="role-checkbox" data-id="4"
                                                    onclick="checkMobCheckbox(this)" value="4" ng-model="checkboxes[4]"
                                                    ng-click="showSevaAmount(4)">
                                                <p class="mb-0 seva-para">Pushpalankara Seva</p>
                                            </label>
                                        </div>
                                        <div class="col-md-4 col-5 pl-1" id="dropdownContainer4">
                                            <select class="form-control custom-select amount-select round2"
                                                name="indianProfileCountry" tabindex="13" id="options4" data-id="4"
                                                onchange="handleDropdownChange(this)" required
                                                ng-click="selectSevaName('4')">
                                                <option value="">Select</option>
                                                <option value="{{sevaAmountOption4[0]}}">₹
                                                    {{sevaAmountOption4[0] | INR}}</option>
                                                <option value="{{sevaAmountOption4[1]}}">₹
                                                    {{sevaAmountOption4[1] | INR}}</option>
                                                <option value="{{sevaAmountOption4[2]}}">₹
                                                    {{sevaAmountOption4[2] | INR}}</option>
                                                <option value="{{sevaAmountOption4[3]}}">₹
                                                    {{sevaAmountOption4[3] | INR}}</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <div id="otherInput4" class="otherInput">
                                                <input type="number" class="cus-input2 num max-length-number"
                                                    maxlength="6" placeholder="Enter Amount"
                                                    oninput="handleInputChange(this)" data-id="4" required
                                                    ng-keyup="validateAmount($event)" id="otheramt4"
                                                    data-minprice="{{sevaMinimumAmountOption4}}"
                                                    onkeypress="return isNumber(event)">
                                                <span class="clear-input clearinput4" data-id="4"
                                                    onclick="clearInput(this)">✖</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="errorSpan error4"></span>
                                </div>
                                <div class="col-md-12">
                                    <div class="row pt-1 pb-2">
                                        <div class="col-md-8 col-7 my-auto pl-md-3 pl-2 pr-md-3 pr-1">
                                            <input type="hidden" name="selectedSevaName[]" id="selectedSevaName5"
                                                value="">
                                            <input type="hidden" name="sevaCode[]" id="sevaCode5" value="">
                                            <input type="hidden" name="sevaId[]" id="sevaId5" value="">
                                            <input type="hidden" name="finalSevaAmount[]" id="finalSevaAmount5"
                                                value="">
                                            <label class="lbl"><input type="checkbox" class="role-checkbox"
                                                    onclick="checkMobCheckbox(this)" data-id="5" value="5"
                                                    ng-model="checkboxes[5]" ng-click="showSevaAmount(5)">
                                                <p class="mb-0 seva-para">Vishesha Naivedya Seva</p>
                                            </label>
                                        </div>
                                        <div class="col-md-4 col-5 pl-1" id="dropdownContainer5">
                                            <select class="form-control custom-select amount-select round2"
                                                name="indianProfileCountry" tabindex="13" id="options5" data-id="5"
                                                onchange="handleDropdownChange(this)" required
                                                ng-click="selectSevaName('5')">
                                                <option value="">Select</option>
                                                <option value="{{sevaAmountOption5[0]}}">₹
                                                    {{sevaAmountOption5[0] | INR}}</option>
                                                <option value="{{sevaAmountOption5[1]}}">₹
                                                    {{sevaAmountOption5[1] | INR}}</option>
                                                <option value="{{sevaAmountOption5[2]}}">₹
                                                    {{sevaAmountOption5[2] | INR}}</option>
                                                <option value="{{sevaAmountOption5[3]}}">₹
                                                    {{sevaAmountOption5[3] | INR}}</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <div id="otherInput5" class="otherInput">
                                                <input type="number" class="cus-input2 num max-length-number"
                                                    maxlength="6" placeholder="Enter Amount"
                                                    oninput="handleInputChange(this)" data-id="5" required
                                                    ng-keyup="validateAmount($event)" id="otheramt5"
                                                    data-minprice="{{sevaMinimumAmountOption5}}"
                                                    onkeypress="return isNumber(event)">
                                                <span class="clear-input clearinput5" data-id="5"
                                                    onclick="clearInput(this)">✖</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="errorSpan error5"></span>
                                </div>
                                <div class="col-md-12">
                                    <div class="row pt-1 pb-2">
                                        <div class="col-md-8 col-7 my-auto pl-md-3 pl-2 pr-md-3 pr-1">
                                            <input type="hidden" name="selectedSevaName[]" id="selectedSevaName2"
                                                value="">
                                            <input type="hidden" name="sevaCode[]" id="sevaCode2" value="">
                                            <input type="hidden" name="sevaId[]" id="sevaId2" value="">
                                            <input type="hidden" name="finalSevaAmount[]" id="finalSevaAmount2"
                                                value="">
                                            <label class="lbl"><input type="checkbox" class="role-checkbox" data-id="2"
                                                    onclick="checkMobCheckbox(this)" value="2" ng-model="checkboxes[2]"
                                                    ng-click="showSevaAmount(2)">
                                                <p class="mb-0 seva-para">Annadana Seva</p>
                                            </label>
                                        </div>
                                        <div class="col-md-4 col-5 pl-1" id="dropdownContainer2">
                                            <select class="form-control custom-select amount-select round2"
                                                name="indianProfileCountry" tabindex="13" id="options2" data-id="2"
                                                onchange="handleDropdownChange(this)" required
                                                ng-click="selectSevaName('2')">
                                                <option value="">Select</option>
                                                <option value="{{sevaAmountOption2[0]}}">₹
                                                    {{sevaAmountOption2[0] | INR}}</option>
                                                <option value="{{sevaAmountOption2[1]}}">₹
                                                    {{sevaAmountOption2[1] | INR}}</option>
                                                <option value="{{sevaAmountOption2[2]}}">₹
                                                    {{sevaAmountOption2[2] | INR}}</option>
                                                <option value="{{sevaAmountOption2[3]}}">₹
                                                    {{sevaAmountOption2[3] | INR}}</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <div id="otherInput2" class="otherInput">
                                                <input type="number" class="cus-input2 num max-length-number"
                                                    maxlength="6" placeholder="Enter Amount"
                                                    oninput="handleInputChange(this)" data-id="2" required
                                                    ng-keyup="validateAmount($event)" id="otheramt2"
                                                    data-minprice="{{sevaMinimumAmountOption2}}"
                                                    onkeypress="return isNumber(event)">
                                                <span class="clear-input clearinput2" data-id="2"
                                                    onclick="clearInput(this)">✖</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="errorSpan error2"></span>
                                </div>
                                <div class="col-md-12">
                                    <div class="row pt-1 pb-2">
                                        <div class="col-md-8 col-7 my-auto pl-md-3 pl-2 pr-md-3 pr-1">
                                            <input type="hidden" name="selectedSevaName[]" id="selectedSevaName1"
                                                value="">
                                            <input type="hidden" name="sevaCode[]" id="sevaCode1" value="">
                                            <input type="hidden" name="sevaId[]" id="sevaId1" value="">
                                            <input type="hidden" name="finalSevaAmount[]" id="finalSevaAmount1"
                                                value="">
                                            <label class="lbl"><input type="checkbox" class="role-checkbox"
                                                    onclick="checkMobCheckbox(this)" data-id="1" value="1"
                                                    ng-model="checkboxes[1]" ng-click="showSevaAmount(1)">
                                                <p class="mb-0 seva-para">Gau Seva</p>
                                            </label>
                                        </div>
                                        <div class="col-md-4 col-5 pl-1" id="dropdownContainer1">
                                            <select class="form-control custom-select amount-select round2"
                                                name="indianProfileCountry" tabindex="13" id="options1" data-id="1"
                                                onchange="handleDropdownChange(this)" required
                                                ng-click="selectSevaName('1')">
                                                <option value="">Select</option>
                                                <option value="{{sevaAmountOption1[0]}}">₹
                                                    {{sevaAmountOption1[0] | INR}}</option>
                                                <option value="{{sevaAmountOption1[1]}}">₹
                                                    {{sevaAmountOption1[1] | INR}}</option>
                                                <option value="{{sevaAmountOption1[2]}}">₹
                                                    {{sevaAmountOption1[2] | INR}}</option>
                                                <option value="{{sevaAmountOption1[3]}}">₹
                                                    {{sevaAmountOption1[3] | INR}}</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <div id="otherInput1" class="otherInput">
                                                <input type="number" class="cus-input2 num max-length-number"
                                                    maxlength="6" placeholder="Enter Amount"
                                                    oninput="handleInputChange(this)" data-id="1" required
                                                    ng-keyup="validateAmount($event)" id="otheramt1"
                                                    data-minprice="{{sevaMinimumAmountOption1}}"
                                                    onkeypress="return isNumber(event)">
                                                <span class="clear-input clearinput1" data-id="1"
                                                    onclick="clearInput(this)">✖</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="errorSpan error1"></span>
                                </div>
                                <?php } ?>
                                <div class="col-md-12 mt-2" ng-show="sevaAmountBox">
                                    <div class="group">
                                        <select
                                            class="form-control reservation-input reservation-input2 custom-select round"
                                            name="selectSevaDate" ng-model="selectSevaDate" id="selectSevaDate"
                                            required>
                                            <option value=""> Select Seva Date *</option>
                                            <?php
                                                $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
                                                $date = new DateTime('16-Oct-2024', new DateTimeZone('Asia/Kolkata'));
                                                $dateLoop = $date->format('Y-m-d');
                                                $endDate = '15-Nov-2024';
                                                for($count=1; $count<=31; $count++) {
                                                    $repeat = strtotime("+1 day",strtotime($dateLoop));
                                                    $dateLoop = date('d-M-Y',$repeat); ?>
                                            <option value="<?php echo $dateLoop; ?>"> <?php echo $dateLoop; ?>
                                            </option>
                                            <?php            
                                                    if($dateLoop == $endDate) {
                                                        break;
                                                    }
                                                }                             
											?>
                                        </select>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center mt-4">
                                            <h2 class="personal-details text-black">Personal Details</h2>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                                            <div class="group">
                                                <input type="text" class="input checkchar" id="donorName"
                                                    name="donorName" ng-model="donorName" required tabindex="1"
                                                    maxlength="100" onkeypress="return isAlpha(event); "
                                                    onBlur="properCase(this); return removeExtraSpace(this);" />
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label class="google-material">Donor Name <span
                                                        class="red">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                                            <div class="group">
                                                <input type="text" class="input" id="donorEmailId" name="donorEmailId"
                                                    tabindex="3" maxlength="80" ng-model="donorEmailId" required />
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label class="google-material">Email ID <span
                                                        class="red">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-2 pr-lg-1">
                                            <div class="group">
                                                <input type="text" class="input num" id="donorMobile" name="donorMobile"
                                                    ng-model="donorMobile" required tabindex="2" maxlength="15"
                                                    onkeypress="return isNumber(event);" />
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label class="google-material">Mobile Number <span
                                                        class="red">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-2 pl-lg-1">
                                            <div class="group">
                                                <input type="text" class="input" id="birthdatepicker" name="dateOfBirth"
                                                    ng-model="dateOfBirth" required tabindex="4"
                                                    onkeydown="return false;" ng-change="dateicon()"
                                                    onclick="return false;" />
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label class="google-material readonly-field">Date of Birth
                                                </label>
                                                <i ng-show="datePickerIcon" class="fa fa-calendar cal-icon"
                                                    aria-hidden="true"></i>
                                                <i ng-hide="datePickerIcon"
                                                    class="fa fa-times-circle cal-icon icon-over" aria-hidden="true"
                                                    ng-click="clearDOB()"></i>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-1">
                                            <p class="text-center tax-note">(Sankalpa and
                                                Archana will
                                                be performed for you on your birthday)</p>
                                            <p class="pg-note desk payment-message mt-3">
                                                By continuing, you are agreeing to
                                                <a href="https://www.iskconbangalore.org/privacy-policy/"
                                                    target="_blank">
                                                    Terms of Use and Privacy Policy</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-1">
                                    <div class="row">
                                        <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3 d-none">
                                            <p class="pay-option m-0"> <b>Payment Option</b> </p>
                                            <div class="custom-control custom-radio custom-control-inline mt-3">
                                                <input type="radio" class="custom-control-input" id="OTDomestic"
                                                    name="paymentOption" tabindex="4" value="Domestic"
                                                    ng-model="paymentOption" ng-click="checkCitizen()">
                                                <label class="custom-control-label" for="OTDomestic">Indian
                                                    Citizen</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline mt-3 d-none">
                                                <input type="radio" class="custom-control-input" id="OTInternational"
                                                    name="paymentOption" tabindex="5" value="International"
                                                    ng-model="paymentOption" ng-click="checkCitizen()">
                                                <label class="custom-control-label" for="OTInternational">
                                                    Foreign
                                                    Citizen</label>
                                            </div>
                                        </div> -->
                                        <input type="hidden" id="OTDomestic" name="paymentOption" value="Domestic"
                                            ng-model="paymentOption">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3"
                                            ng-show="certificateOption">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="taxOption"
                                                    name="taxOption" ng-model="taxOption" value="Y"
                                                    ng-checked="taxCheckboxOption" ng-click="enableTaxOption()">
                                                <label for="taxOption" class="custom-control-label label-padding"> I
                                                    would like to receive 80(G) Certificate </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3"
                                            ng-show="taxOptionBox">

                                            <p class="tax-note"> Finance Act 2021 has made it mandatory to
                                                upload
                                                the details of donations collected by all those
                                                organisations
                                                collecting
                                                donations which qualify for 80G deduction in Form No. 10BD.
                                                The PAN
                                                and Address are mandatory details to be uploaded. </p>

                                            <div class="group mt-4">
                                                <input type="text" class="pan-number checkalpha" id="donorPAN"
                                                    name="donorPAN" ng-model="donorPAN" required tabindex="8"
                                                    maxlength="10" />
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label class="google-material">PAN Number<span
                                                        class="red">*</span></label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mt-2">
                                                    <div class="group">
                                                        <input type="text" ng-model="indianProfileDoorNo"
                                                            name="indianProfileDoorNo" tabindex="9"
                                                            id="indianProfileDoorNo" maxlength="40"
                                                            onBlur="return removeExtraSpace(this);" required />
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label class="google-material">Door Number <span
                                                                class="red">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-md-2 mt-2">
                                                    <div class="group">
                                                        <input type="text" ng-model="indianProfileApartmentName"
                                                            tabindex="10" name="indianProfileApartmentName"
                                                            class="checkalpha" id="indianProfileApartmentName"
                                                            maxlength="40" onBlur="return removeExtraSpace(this);"
                                                            required />
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label class="google-material">House / Apartment /
                                                            Building
                                                            Name <span class="red">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <div class="group">
                                                        <input type="text" ng-model="indianProfileStreetName"
                                                            name="indianProfileStreetName" tabindex="11"
                                                            class="checkalpha" id="indianProfileStreetName"
                                                            maxlength="40" onBlur="return removeExtraSpace(this);"
                                                            required />
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label class="google-material">Street Name <span
                                                                class="red">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <div class="group">
                                                        <input type="text" ng-model="indianProfileAreaLocation"
                                                            name="indianProfileAreaLocation" tabindex="12"
                                                            class="checkalpha" id="indianProfileAreaLocation"
                                                            maxlength="40" required />
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label class="google-material">Location / Area <span
                                                                class="red">*</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mt-2">
                                                    <label class="select-label-desk">Country <span
                                                            class="red">*</span></label>
                                                    <div class="group">
                                                        <select
                                                            class="form-control reservation-input custom-select round2"
                                                            name="indianProfileCountry" ng-model="indianProfileCountry"
                                                            disabled tabindex="13" id="indianProfileCountry" required>
                                                            <option value="India" selected>India</option>
                                                        </select>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <label class="select-label-desk">State <span
                                                            class="red">*</span></label>
                                                    <div class="group">
                                                        <select
                                                            class="form-control reservation-input custom-select round2"
                                                            name="indianProfileState" ng-model="indianProfileState"
                                                            id="indianProfileState" tabindex="14" required>
                                                            <option value="">Select State *</option>
                                                            <option value="Andaman and Nicobar Islands">
                                                                Andaman and
                                                                Nicobar Islands</option>
                                                            <option value="Andhra Pradesh">Andhra Pradesh
                                                            </option>
                                                            <option value="Arunachal Pradesh">Arunachal
                                                                Pradesh
                                                            </option>
                                                            <option value="Assam">Assam</option>
                                                            <option value="Bihar">Bihar</option>
                                                            <option value="Chandigarh">Chandigarh</option>
                                                            <option value="Chhattisgarh">Chhattisgarh
                                                            </option>
                                                            <option value="Dadra and Nagar Haveli">Dadra and
                                                                Nagar
                                                                Haveli</option>
                                                            <option value="Daman and Diu">Daman and Diu
                                                            </option>
                                                            <option value="Delhi">Delhi</option>
                                                            <option value="Goa">Goa</option>
                                                            <option value="Gujarat">Gujarat</option>
                                                            <option value="Haryana">Haryana</option>
                                                            <option value="Himachal Pradesh">Himachal
                                                                Pradesh
                                                            </option>
                                                            <option value="Jammu and Kashmir">Jammu and
                                                                Kashmir
                                                            </option>
                                                            <option value="Jharkhand">Jharkhand</option>
                                                            <option value="Karnataka">Karnataka</option>
                                                            <option value="Kerala">Kerala</option>
                                                            <option value="Lakshadweep">Lakshadweep</option>
                                                            <option value="Madhya Pradesh">Madhya Pradesh
                                                            </option>
                                                            <option value="Maharashtra">Maharashtra</option>
                                                            <option value="Manipur">Manipur</option>
                                                            <option value="Meghalaya">Meghalaya</option>
                                                            <option value="Mizoram">Mizoram</option>
                                                            <option value="Nagaland">Nagaland</option>
                                                            <option value="Odisha">Odisha</option>
                                                            <option value="Pondicherry">Pondicherry</option>
                                                            <option value="Punjab">Punjab</option>
                                                            <option value="Rajasthan">Rajasthan</option>
                                                            <option value="Sikkim">Sikkim</option>
                                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                                            <option value="Telangana">Telangana</option>
                                                            <option value="Tripura">Tripura</option>
                                                            <option value="Uttar Pradesh">Uttar Pradesh
                                                            </option>
                                                            <option value="Uttaranchal">Uttaranchal</option>
                                                            <option value="West Bengal">West Bengal</option>
                                                        </select>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <div class="group">
                                                        <input type="text" maxlength="40" tabindex="15"
                                                            id="indianProfileCity" ng-model="indianProfileCity"
                                                            name="indianProfileCity" class="checkalpha"
                                                            onkeypress="return isAlpha(event); "
                                                            onBlur="properCase(this); return removeExtraSpace(this);"
                                                            required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label class="google-material">City <span
                                                                class="red">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                                                    <div class="group">
                                                        <input type="text" maxlength="6" tabindex="16" class="num"
                                                            id="indianProfilePincode" ng-model="indianProfilePincode"
                                                            name="indianProfilePincode"
                                                            onkeypress="return isNumber(event)" required />
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label class="google-material">Pincode <span
                                                                class="red">*</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-0"
                                            ng-show="profileAddressSection">
                                            <div class="row">
                                                <div class="col-md-12 mt-3">
                                                    <div class="group">
                                                        <input type="text" ng-model="profileDoorNo" name="profileDoorNo"
                                                            tabindex="17" id="profileDoorNo" maxlength="40"
                                                            onBlur="return removeExtraSpace(this);" required />
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label class="google-material">Door Number <span
                                                                class="red">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-md-3 mt-2">
                                                    <div class="group">
                                                        <input type="text" ng-model="profileApartmentName" tabindex="18"
                                                            name="profileApartmentName" id="profileApartmentName"
                                                            maxlength="40" onBlur="return removeExtraSpace(this);"
                                                            required />
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label class="google-material">House / Apartment /
                                                            Building
                                                            Name <span class="red">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <div class="group">
                                                        <input type="text" ng-model="profileStreetName"
                                                            name="profileStreetName" tabindex="19"
                                                            id="profileStreetName" maxlength="40"
                                                            onBlur="return removeExtraSpace(this);" required />
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label class="google-material">Street Name <span
                                                                class="red">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <div class="group">
                                                        <input type="text" ng-model="profileAreaLocation"
                                                            name="profileAreaLocation" tabindex="20"
                                                            id="profileAreaLocation" maxlength="40"
                                                            onBlur="return removeExtraSpace(this);" required />
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label class="google-material">Location / Area <span
                                                                class="red">*</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mt-2">
                                                    <label class="select-label-desk">Country <span
                                                            class="red">*</span></label>
                                                    <div class="group">
                                                        <select
                                                            class="form-control reservation-input custom-select round2"
                                                            name="profileCountry" ng-model="profileCountry"
                                                            tabindex="21" id="profileCountry" required>
                                                        </select>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <label class="select-label-desk">State <span
                                                            class="red">*</span></label>
                                                    <div class="group">
                                                        <select
                                                            class="form-control reservation-input custom-select round2"
                                                            name="profileState" ng-model="profileState"
                                                            id="profileState" tabindex="22" required>
                                                        </select>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                    </div>
                                                </div>
                                                <script language="javascript"> </script>
                                                <div class="col-md-12 mt-2">
                                                    <div class="group">
                                                        <input type="text" maxlength="40" tabindex="23" id="profileCity"
                                                            ng-model="profileCity" name="profileCity"
                                                            onkeypress="return isAlpha(event); "
                                                            onBlur="properCase(this); return removeExtraSpace(this);"
                                                            required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label class="google-material">City <span
                                                                class="red">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                                                    <div class="group">
                                                        <input type="text" maxlength="15" tabindex="24"
                                                            id="profilePincode" ng-model="profilePincode"
                                                            name="profilePincode"
                                                            onBlur="return removeExtraSpace(this);" required />
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label class="google-material">ZIP Code <span
                                                                class="red">*</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="bahumana"
                                            name="bahumana" ng-model="bahumana" tabindex="6" value="Y"
                                            ng-checked="checkboxOption" ng-click="enableAddress()">
                                        <label for="bahumana" class="custom-control-label label-padding"> I
                                            would
                                            like to receive Maha prasadam (Only within India) </label>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-1"
                                    ng-show="addressSection">
                                    <div class="custom-control custom-radio custom-control-inline mt-2">
                                        <input type="radio" class="custom-control-input" id="sameAddressInfo"
                                            name="checkAddressOption" tabindex="7" value="SAME"
                                            ng-model="checkAddressOption" ng-click="provideAddressOption()">
                                        <label class="custom-control-label" for="sameAddressInfo"> Same as
                                            above
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline mt-1">
                                        <input type="radio" class="custom-control-input" id="differentAddressInfo"
                                            name="checkAddressOption" tabindex="8" value="DIFFERENT"
                                            ng-model="checkAddressOption" ng-click="provideAddressOption()">
                                        <label class="custom-control-label" for="differentAddressInfo"> I
                                            want to
                                            provide different address </label>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-0"
                                    ng-show="provideAddress">
                                    <div class="row">
                                        <div class="col-md-12 mt-2">
                                            <div class="group">
                                                <input type="text" ng-model="doorNo" name="doorNo" tabindex="25"
                                                    id="doorNo" maxlength="40" onBlur="return removeExtraSpace(this);"
                                                    required />
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label class="google-material">Door Number <span
                                                        class="red">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <div class="group">
                                                <input type="text" ng-model="apartmentName" tabindex="26"
                                                    class="checkalpha" name="apartmentName" id="apartmentName"
                                                    maxlength="40" onBlur="return removeExtraSpace(this);" required />
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label class="google-material">House / Apartment / Building
                                                    Name
                                                    <span class="red">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <div class="group">
                                                <input type="text" ng-model="streetName" name="streetName" tabindex="27"
                                                    id="streetName" maxlength="40" class="checkalpha"
                                                    onBlur="return removeExtraSpace(this);" required />
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label class="google-material">Street Name <span
                                                        class="red">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <div class="group">
                                                <input type="text" ng-model="areaLocation" name="areaLocation"
                                                    class="checkalpha" tabindex="28" id="areaLocation" maxlength="40"
                                                    required />
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label class="google-material">Location / Area <span
                                                        class="red">*</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mt-2">
                                            <label class="select-label-desk">Country <span class="red">*</span></label>
                                            <div class="group">
                                                <select class="form-control reservation-input custom-select round2"
                                                    name="country" ng-model="country" disabled tabindex="29"
                                                    id="country" required>
                                                    <option value="India" selected>India</option>
                                                </select>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <label class="select-label-desk">State <span class="red">*</span></label>
                                            <div class="group">
                                                <select class="form-control reservation-input custom-select round2"
                                                    name="state" ng-model="state" id="state" tabindex="30" required>
                                                    <option value="">Select State *</option>
                                                    <option value="Andaman and Nicobar Islands">Andaman and
                                                        Nicobar
                                                        Islands</option>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh
                                                    </option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Dadra and Nagar Haveli">Dadra and Nagar
                                                        Haveli
                                                    </option>
                                                    <option value="Daman and Diu">Daman and Diu</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh
                                                    </option>
                                                    <option value="Jammu and Kashmir">Jammu and Kashmir
                                                    </option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Lakshadweep">Lakshadweep</option>
                                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Odisha">Odisha</option>
                                                    <option value="Pondicherry">Pondicherry</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Telangana">Telangana</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="Uttaranchal">Uttaranchal</option>
                                                    <option value="West Bengal">West Bengal</option>
                                                </select>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <div class="group">
                                                <input type="text" maxlength="40" tabindex="31" id="city"
                                                    class="checkalpha" ng-model="city" name="city"
                                                    onkeypress="return isAlpha(event); "
                                                    onBlur="properCase(this); return removeExtraSpace(this);" required>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label class="google-material">City <span class="red">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                                            <div class="group">
                                                <input type="text" maxlength="6" tabindex="32" id="pincode"
                                                    ng-model="pincode" name="pincode" class="num"
                                                    onkeypress="return isNumber(event)" required />
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label class="google-material">Pincode <span
                                                        class="red">*</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-left mt-1">
                                            <div id="errorMsg"></div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-md-3 mt-1">
                                            <span class="seva-btn count-seva"> Seva(s) added</span>
                                            <button type="button" class="btn donate-now" tabindex="7"
                                                ng-disabled="processPaymentBtn" ng-click="verifyForm()"><span
                                                    class="dontprice">Donate</span></button>

                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3 mb-3">
                                            <p class="eightg"><b>Avail 80G tax exemption on your donation.</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12 pl-5 pr-4 mb-3 mt-md-4 mt-4 d-md-none d-block">
                    <ul class="desc-ul">
                        <li>
                            <div class="row">
                                <div class="col-md-9 col-8 my-auto">
                                    <h5 class="sv-title">Deepa Daana Seva</h5>
                                    <p class="mb-0 sv-para">
                                        During this auspicious
                                        month, the temple will be decorated gorgeously with
                                        ghee lamps.
                                    </p>
                                </div>
                                <div class="col-md-3 col-4">
                                    <img src="assets/img/deep-dan.png" alt="Image" class="w-100">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-9 col-8 my-auto">
                                    <h5 class="sv-title">Pushpalankara Seva</h5>
                                    <p class="mb-0 sv-para">
                                        Decorate the Lord
                                        everyday with beautiful garlands during His
                                        favourite month.
                                    </p>
                                </div>
                                <div class="col-md-3 col-4">
                                    <img src="assets/img/pushpa-alankara.png" alt="Image" class="w-100">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-9 col-8 my-auto">
                                    <h5 class="sv-title">Vishesha Naivedya Seva</h5>
                                    <p class="mb-0 sv-para">
                                        Offer special bhoga
                                        preparations for the Lord every day of the month of
                                        Kartika.
                                    </p>
                                </div>
                                <div class="col-md-3 col-4">
                                    <img src="assets/img/naivedya-seva.png" alt="Image" class="w-100">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-9 col-8 my-auto">
                                    <h5 class="sv-title">Annadana Seva</h5>
                                    <p class="mb-0 sv-para">
                                        Sponsor the distribution
                                        of prasadam during this auspicious month in the name
                                        of
                                        your family or loved ones.
                                    </p>
                                </div>
                                <div class="col-md-3 col-4">
                                    <img src="assets/img/annadana-seva.png" alt="Image" class="w-100">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-9 col-8 my-auto">
                                    <h5 class="sv-title">Gau Seva</h5>
                                    <p class="mb-0 sv-para">
                                        Serve Mother Cow by
                                        sponsoring for her feeding and care. Receive the
                                        Lord's special blessings.
                                    </p>
                                </div>
                                <div class="col-md-3 col-4">
                                    <img src="assets/img/gau-seva.png" alt="Image" class="w-100">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-section mt-md-5 mt-2">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center p-md-3 p-2">
                    <p>Copyrights © <?php echo date('Y');?> <b>ISKCON Bangalore.</b> All rights reserved.</p>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="assets/js/slick.min.js" defer></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js" defer></script>
<!-- Venobox JS -->
<script src="assets/js/venobox.min.js" defer></script>
<!-- main.js -->
<script src="assets/js/main.js" defer></script>
<script src="assets/js/custom.js?v<?php echo time(); ?>"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</html>
<script>
function checkCheckbox(checkbox) {
    var checkedCheckboxes = $('.role-checkbox:checked');
    var numOfChebox = checkedCheckboxes.length;
    var dataIdValue = checkbox.getAttribute('data-id');
    if (checkbox.checked) {
        $('.openDiv' + dataIdValue).show();
    } else {
        $('.openDiv' + dataIdValue).hide();
        $('#selectedSevaName' + dataIdValue).val('');
        $('#sevaCode' + dataIdValue).val('');
        $('#sevaId' + dataIdValue).val('');
        $('#finalSevaAmount' + dataIdValue).val('');
        $('#otheramt' + dataIdValue).val('');
        $('#seva' + dataIdValue + '-O1').removeClass('added');
        $('#seva' + dataIdValue + '-O2').removeClass('added');
        $('#seva' + dataIdValue + '-O3').removeClass('added');
        $('#seva' + dataIdValue + '-O4').removeClass('added');
    }
    var sum = 0;
    if (numOfChebox == 0) {
        $('.count-seva').hide();
        $('.dontprice').text('Donate');
    } else {
        var hiddenInputs = document.getElementsByName("finalSevaAmount[]");
        for (var i = 0; i < hiddenInputs.length; i++) {
            sum += parseFloat(hiddenInputs[i].value) || 0; // Ensure to parse as float, handle NaN
        }
        console.log(sum);
        if (sum != 0) {
            $('.dontprice').text('Donate ₹ ' + sum + '');
        }
        if (numOfChebox == 1) {
            $('.count-seva').css('display', 'block').text(numOfChebox + ' Seva added');
        } else if (numOfChebox > 1) {
            $('.count-seva').css('display', 'block').text(numOfChebox + ' Sevas added');
        }

    }
}

function checkMobCheckbox(checkbox) {
    var checkedCheckboxes = $('.role-checkbox:checked');
    var numOfChebox = checkedCheckboxes.length;

    var dataIdValue = checkbox.getAttribute('data-id');
    var otherInput = document.getElementById('otherInput' + dataIdValue);
    var otherValueInput = document.getElementById('otheramt' + dataIdValue);
    var dropdown = document.getElementById('options' + dataIdValue);
    if (checkbox.checked) {
        dropdown.disabled = false;
    } else {
        // dropdown.disabled = true;
        dropdown.style.display = 'inline-block';
        dropdown.value = '';
        otherInput.style.display = 'none';
        otherValueInput.required = false;
        otherValueInput.value = '';

        $('#selectedSevaName' + dataIdValue).val('');
        $('#sevaCode' + dataIdValue).val('');
        $('#sevaId' + dataIdValue).val('');
        $('#finalSevaAmount' + dataIdValue).val('');
    }

    var sum = 0;
    if (numOfChebox == 0) {
        $('.count-seva').hide();
        $('.dontprice').text('Donate');
    } else {
        var hiddenInputs = document.getElementsByName("finalSevaAmount[]");
        for (var i = 0; i < hiddenInputs.length; i++) {
            sum += parseFloat(hiddenInputs[i].value) || 0; // Ensure to parse as float, handle NaN
        }
        console.log(sum);
        if (sum != 0) {
            $('.dontprice').text('Donate ₹ ' + sum + '');
        }
        if (sum == 0) {
            $('.dontprice').text('Donate');
        }
        if (numOfChebox == 1) {
            $('.count-seva').css('display', 'block').text(numOfChebox + ' Seva added');
        } else if (numOfChebox > 1) {
            $('.count-seva').css('display', 'block').text(numOfChebox + ' Sevas added');
        }

    }
}

function handleDropdownChange(select) {
    var checkedCheckboxes = $('.role-checkbox:checked');
    var numOfChebox = checkedCheckboxes.length;

    var dataIdValue = select.getAttribute('data-id');
    var dropdownContainer = document.getElementById('dropdownContainer' + dataIdValue);
    var otherInput = document.getElementById('otherInput' + dataIdValue);
    var otherValueInput = document.getElementById('otheramt' + dataIdValue);
    var clearInput = document.querySelector('.clearinput' + dataIdValue);
    clearInput.style.display = 'inline-block';
    if (select.value === 'other') {
        select.style.display = 'none';
        otherInput.style.display = 'block';
        otherValueInput.required = true;
        $('#finalSevaAmount' + dataIdValue).val('');
    } else {
        select.style.display = 'inline-block';
        otherInput.style.display = 'none';
        otherValueInput.required = false;
        $('#finalSevaAmount' + dataIdValue).val(select.value);
        $(".error" + dataIdValue).text("");

    }

    var sum = 0;
    if (numOfChebox == 0) {
        $('.count-seva').hide();
        $('.dontprice').text('Donate');
    } else {
        var hiddenInputs = document.getElementsByName("finalSevaAmount[]");
        for (var i = 0; i < hiddenInputs.length; i++) {
            sum += parseFloat(hiddenInputs[i].value) || 0; // Ensure to parse as float, handle NaN
        }
        console.log(sum);
        if (sum != 0) {
            $('.dontprice').text('Donate ₹ ' + sum + '');
        }
        if (sum == 0) {
            $('.dontprice').text('Donate');
        }
        if (numOfChebox == 1) {
            $('.count-seva').css('display', 'block').text(numOfChebox + ' Seva added');
        } else if (numOfChebox > 1) {
            $('.count-seva').css('display', 'block').text(numOfChebox + ' Sevas added');
        }

    }
}

function handleInputChange(otherValueInput) {
    var dataIdValue = otherValueInput.getAttribute('data-id');
    var dropdown = document.getElementById('options' + dataIdValue);
    var otherInput = document.getElementById('otherInput' + dataIdValue);
    var clearInput = document.querySelector('.clearinput' + dataIdValue);
    clearInput.style.display = 'inline-block';
    if (otherValueInput.value === '') {
        dropdown.style.display = 'inline-block';
        dropdown.value = '';
        otherInput.style.display = 'none';
    }
}

function clearInput(clearInput) {
    var checkedCheckboxes = $('.role-checkbox:checked');
    var numOfChebox = checkedCheckboxes.length;

    var dataIdValue = clearInput.getAttribute('data-id');
    var dropdown = document.getElementById('options' + dataIdValue);
    var otherInput = document.getElementById('otherInput' + dataIdValue);
    var otherValueInput = document.getElementById('otheramt' + dataIdValue);

    otherValueInput.value = '';
    clearInput.style.display = 'none';
    dropdown.style.display = 'inline-block';
    dropdown.value = '';
    otherInput.style.display = 'none';
    $('#finalSevaAmount' + dataIdValue).val('');
    $(".error" + dataIdValue).text("");
    var sum = 0;
    if (numOfChebox == 0) {
        $('.count-seva').hide();
        $('.dontprice').text('Donate');
    } else {
        var hiddenInputs = document.getElementsByName("finalSevaAmount[]");
        for (var i = 0; i < hiddenInputs.length; i++) {
            sum += parseFloat(hiddenInputs[i].value) || 0; // Ensure to parse as float, handle NaN
        }
        console.log(sum);
        if (sum != 0) {
            $('.dontprice').text('Donate ₹ ' + sum + '');
        }
        if (sum == 0) {
            $('.dontprice').text('Donate');
        }
        if (numOfChebox == 1) {
            $('.count-seva').css('display', 'block').text(numOfChebox + ' Seva added');
        } else if (numOfChebox > 1) {
            $('.count-seva').css('display', 'block').text(numOfChebox + ' Sevas added');
        }

    }
}

$('#birthdatepicker').datepicker({
    weekStart: 1,
    daysOfWeekHighlighted: "6,0",
    autoclose: true,
    todayHighlight: true,
    dateFormat: 'dd-M-yy',
    minDate: '01-Jan-1941',
    maxDate: '0d',
    changeMonth: true,
    changeYear: true,
    yearRange: "-90:"
});
$('#selectSevaDate2').datepicker({
    weekStart: 1,
    daysOfWeekHighlighted: "6,0",
    autoclose: true,
    todayHighlight: true,
    dateFormat: 'dd-M-yy',
    minDate: '0d',
    changeMonth: true,
    changeYear: true,
});
</script>
<script>
var owl = $('.owl-carousel');
owl.owlCarousel({
    items: 1.3,
    // items change number for slider display on desktop
    loop: false,
    margin: 15,
    autoplay: true,
    autoplayTimeout: 400000,
    autoplayHoverPause: true,
    responsiveClass: true,
    dots: true,
    responsive: {
        0: {
            items: 1,
            nav: true,
            loop: false,
            stagePadding: 30,
            margin: 10,
            // onTranslated: function(event) {
            //     var items = event.item.count;
            //     var item = event.item.index + 1;
            //     if (item == 5) {
            //         stopsliding();
            //     }
            // }
        },
        600: {
            items: 2.3,
            nav: true,
            loop: false

        },
        900: {
            items: 3,
            nav: true,
            loop: false,
            dots: true,
        },
        1100: {
            items: 3,
            nav: true,
            loop: false,
            dots: true,
        },
        1000: {
            items: 3,
            nav: true,
            loop: false,
            dots: true,
        }
    }
});

function stopsliding() {
    alert('Hi');
    var element = document.getElementById('owlID');
    element.addEventListener('mousedown', function(event) {
        event.preventDefault();
    });
    element.addEventListener('touchstart', function(event) {
        event.preventDefault();
    });
}
</script>
<style>
@font-face {
    font-family: 'SFB';
    src: url("assets/fonts/iskcon-font/sfuitext-bold.otf") format("otf"), url('assets/fonts/iskcon-font/sfuitext-bold.ttf') format("truetype");
}

@font-face {
    font-family: 'SFR';
    src: url("assets/fonts/iskcon-font/sfuitext-regular.otf") format("otf"), url('assets/fonts/iskcon-font/sfuitext-regular.ttf') format("truetype");
}

.html5-video-player video {
    width: 100% !important;
    height: 449px;
    left: 0px !important;
    top: 0px !important;
}

body {
    font-family: 'SFR' !important;
}

.card-desk-h5 {
    font-family: 'SFB' !important;
}

.desktop .owl-dots {
    display: block !important;
}

.desktop .owl-dots .owl-dot span {
    width: 11px !important;
    height: 6px !important;
}

.desktop .owl-dots .owl-dot.active span {
    background: #f6d25a;
    width: 14px !important;
}

/*  */
</style>