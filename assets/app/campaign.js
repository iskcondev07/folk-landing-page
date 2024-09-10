// MODULE
var onlineCampaignApp = angular.module('campaignApp', []);

onlineCampaignApp.filter('INR', function () {        
    return function (input) {
        if (! isNaN(input)) {
            var currencySymbol = '';
            //var output = Number(input).toLocaleString('en-IN');   <-- This method is not working fine in all browsers!           
            var result = input.toString().split('.');

            var lastThree = result[0].substring(result[0].length - 3);
            var otherNumbers = result[0].substring(0, result[0].length - 3);
            if (otherNumbers != '')
                lastThree = ',' + lastThree;
            var output = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
            
            /* if (result.length > 1) {
                output += "." + result[1];
            }   */          

            return currencySymbol + output;
        }
    }
});

// CONTROLLERS
onlineCampaignApp.controller('campaignCtrl', function($rootScope,$scope,$http,$sce,$timeout,$filter, $interval) {
    $scope.pageLoad = function() {
    	$scope.sevaAmountBox = true;
    	$scope.sevaAmountBoxBtn = false;
    	$scope.emailBox = false;
    	$scope.otpBox = false;
    	$scope.sevaAmount = "";
    	$scope.customAmount = "";
    	$("#errorMsg").html("");	
    	$scope.emailTB = false;
    	$scope.otpTB = false;
    	$scope.otpVerified = true;
    	$scope.emailId = "";
    	$scope.otp = "";
    	$scope.addressBox = false;
    	$scope.addressSection = false;	
    	$scope.sevaRashi1 = "";
    	$scope.processPaymentBtn = false;
    	$scope.sevaDateOption = true;
    	$scope.selectSevaDate = "";
    	$scope.sevaCustomDate = "";
		$scope.sankalpaBtn = false;
		$scope.finalSevaAmount = "";
		// $scope.selectSevaName('1');
		$scope.btnText = "Read more";
		$scope.dots = true;
		$scope.more = false;
		$scope.taxOptionBox = false;
		$scope.certificateOption = false;
		$scope.amountOptionBtn = false;
		$scope.profileAddressSection = false;
		$scope.provideAddress = false;
		$scope.addressSection = false;
		$scope.taxOption = "";
		$scope.customLamp = false;
		$scope.abhishekaSeva = false;
		$scope.datePickerIcon = true;
		$scope.datePickerIcon2 = true;
		$scope.mobileBanner = true;
		$scope.desktopBanner = true;	
		$scope.defaultSeva();
    }
	  
	$scope.dateicon = function() {
        if($scope.dateOfBirth != "") {
            $scope.datePickerIcon = false;
        } else {
            $scope.datePickerIcon = true;
        }
    }
    $scope.dateicon2 = function() {
        if($scope.selectSevaDate != "") {
            $scope.datePickerIcon2 = false;
        } else {
            $scope.datePickerIcon2 = true;
        }
    }
    $scope.clearDOB = function() {
        $scope.dateOfBirth = "";
        $scope.dateicon();
    }
	$scope.clearSevaDate = function() {
        $scope.selectSevaDate = "";
        $scope.dateicon2();
    }
    
    $scope.readMore = function() {
		if ($scope.dots === false) {
			$scope.dots = true;
			$scope.more = false;
			$scope.btnText = "Read more"; 
		} else {
			$scope.dots = false;
			$scope.more = true;
			$scope.btnText = "Read less"; 
		}
	}
	
	$scope.checkCitizen = function() {
		    if($scope.showtax == true || ($scope.checkboxes[1] == true || $scope.checkboxes[2] == true)) {
    	        $scope.certificateOption = true;
    	        $scope.taxOptionBox = false;
    	        $scope.taxCheckboxOption = false;
    	        $("#taxOption").prop("checked", false);
				$('.eightg').show();
	        } else {
				$('.eightg').hide();
	            $scope.certificateOption = false;
    		    $scope.taxOptionBox = false;
    		    $scope.taxCheckboxOption = false;
    		    $("#taxOption").prop("checked", false);
				document.getElementById('donorPAN').value = "";
				document.getElementById('indianProfileDoorNo').value = "";
				document.getElementById('indianProfileApartmentName').value = "";
				document.getElementById('indianProfileStreetName').value = "";
				document.getElementById('indianProfileAreaLocation').value = "";
				document.getElementById('indianProfileState').value = "";
				document.getElementById('indianProfileCity').value = "";
				document.getElementById('indianProfilePincode').value = "";	
	        }
			$scope.profileAddressSection = false;
			$scope.profileDoorNo = "";
			$scope.profileApartmentName = "";
			$scope.profileStreetName = "";
			$scope.profileAreaLocation = "";
			$scope.profileState = "";
			$scope.profileCity = "";
			$scope.profilePincode = "";
		
	}
	$scope.checkboxes = {};
	$scope.selectSevaName =  function(sevaId) {
		$('.openDiv' + sevaId).show();
		$scope.checkboxes[sevaId] = true;
        $scope.showSevaAmount(sevaId);
	}
	$scope.selectMobSevaName =  function(sevaId) {
		$('#options' + sevaId).prop('disabled', false);
		$scope.checkboxes[sevaId] = true;
        $scope.showSevaAmount(sevaId);
	}

	$('.eightg').hide();
	$scope.defaultSeva = function() {
		$scope.sevaAmountOption1 = ["10000","5000","2500","1000"];
		$scope.sevaMinimumAmountOption1 = '500';
		$scope.sevaAmountOption2 = ["10000","5000","2500","1000"];
		$scope.sevaMinimumAmountOption2 = '500';
		$scope.sevaAmountOption3 = ["10000","5000","2500","1000"];
		$scope.sevaMinimumAmountOption3 = '500';
		$scope.sevaAmountOption4 = ["10000","5000","2500","1000"];
		$scope.sevaMinimumAmountOption4 = '500';
		$scope.sevaAmountOption5 = ["10000","5000","2500","1000"];
		$scope.sevaMinimumAmountOption5 = '500';
    }
	$scope.showSevaAmount = function(event) {
		$scope.emailBox = false;
		$scope.showtax = false;
		$scope.selectSevaDate = "";
		var val = event;
		if(val == '1') {
			$scope.sevaName = 1;
			if($scope.checkboxes[event] == true)
			{
				$scope.showtax = true;
				$('#selectedSevaName'+val).val("Deepotsava - Gau Seva");
				$('#sevaCode'+val).val("HK-FD-DEEP-GOSEVA");
				$('#sevaId'+val).val("413");
			}
			$scope.sevaAmountOption1 = ["10000","5000","2500","1000"];
			$scope.sevaMinimumAmountOption1 = '500';
			$scope.checkCitizen();
		}else if(val == '2') {
			$scope.sevaName = 2;
			if($scope.checkboxes[event] == true)
		    {
				$scope.showtax = true;
				$('#selectedSevaName'+val).val("Deepotsava - Annadana Seva");
				$('#sevaCode'+val).val("HK-FD-DEEP-ANNADANA");
				$('#sevaId'+val).val("77");
			}
			$scope.sevaAmountOption2 = ["10000","5000","2500","1000"];
			$scope.sevaMinimumAmountOption2 = '500';
			$scope.checkCitizen();
		}else if(val == '3') {
			$scope.sevaName = 3;
			if($scope.checkboxes[event] == true)
		    {
				$scope.showtax = false;
				$('#selectedSevaName'+val).val("Deepotsava - Deepa Daan Seva");
				$('#sevaCode'+val).val("HK-FD-DEEP-DIPADAAN");
				$('#sevaId'+val).val("412");
			}
			$scope.sevaAmountOption3 = ["10000","5000","2500","1000"];
			$scope.sevaMinimumAmountOption3 = '500';
			
		}else if(val == '4') {
			$scope.sevaName = 4;
			if($scope.checkboxes[event] == true)
		    {
				$scope.showtax = false;
				$('#selectedSevaName'+val).val("Deepotsava - Pushpalankara Seva");
				$('#sevaCode'+val).val("HK-FD-DEEP-PSHPLNKAR");
				$('#sevaId'+val).val("448");
			}
			$scope.sevaAmountOption4 = ["10000","5000","2500","1000"];
			$scope.sevaMinimumAmountOption4 = '500';
			
		}else if(val == '5') {
			$scope.sevaName = 5;
			if($scope.checkboxes[event] == true)
		    {
				$scope.showtax = false;
				$('#selectedSevaName'+val).val("Deepotsava - Vishesha Naivedya Seva");
				$('#sevaCode'+val).val("HK-FD-DEEP-NAIVEDYA");
				$('#sevaId'+val).val("449");
			}
			$scope.sevaAmountOption5 = ["10000","5000","2500","1000"];
			$scope.sevaMinimumAmountOption5 = '500';
		}

		$scope.recurring = 'N';
		$scope.source = 'CAMPAIGN';
		$scope.sevaDate = '';
		$scope.sevaCustomDate = "Y";
		$scope.sevaDateOption = true;
		$scope.amountOptionBtn = true;
		
		//$scope.finalSevaAmount = $scope.sevaAmountOption;
		
		if($scope.sevaName != '') {
			$scope.sevaAmountBox = true;
			$scope.sevaAmountBoxBtn = true;
		} else {
			$scope.sevaAmountBox = true;
			$scope.sevaAmountBoxBtn = false;
			$scope.emailBox = false;
		}
	}

	$scope.selectedAmount = function(amount,btnOption,seva) {
		// $('.btn').removeClass('added');
		// $('#O5').removeClass('added');
		$(".error"+seva).text("");
		if (btnOption == '1') {
			$('#seva'+seva+'-O1').addClass('added');
			$('#seva'+seva+'-O2').removeClass('added');
			$('#seva'+seva+'-O3').removeClass('added');
			$('#seva'+seva+'-O4').removeClass('added');
			$('#otheramt'+seva).val('');
			
		} else if (btnOption == '2') {
			$('#seva'+seva+'-O2').addClass('added');
			$('#seva'+seva+'-O1').removeClass('added');
			$('#seva'+seva+'-O3').removeClass('added');
			$('#seva'+seva+'-O4').removeClass('added');
			$('#otheramt'+seva).val('');
			
		} else if (btnOption == '3') {
			$('#seva'+seva+'-O3').addClass('added');
			$('#seva'+seva+'-O2').removeClass('added');
			$('#seva'+seva+'-O1').removeClass('added');
			$('#seva'+seva+'-O4').removeClass('added');
			$('#otheramt'+seva).val('');
			
		} else if (btnOption == '4') {
			$('#seva'+seva+'-O4').addClass('added');
			$('#seva'+seva+'-O2').removeClass('added');
			$('#seva'+seva+'-O3').removeClass('added');
			$('#seva'+seva+'-O1').removeClass('added');
			$('#otheramt'+seva).val('');
		}
		$('#finalSevaAmount'+seva).val(amount);

		var hiddenInputs = document.getElementsByName("finalSevaAmount[]");
		// Calculate the sum
		var sum = 0;
		for (var i = 0; i < hiddenInputs.length; i++) {
			sum += parseFloat(hiddenInputs[i].value) || 0; // Ensure to parse as float, handle NaN
		}
		console.log(sum);
		if(sum != 0)
        {
            $('.dontprice').text('Donate ₹ ' + sum);
        }
		$("#errorMsg").html("");	
	}

	$scope.verifyForm = function() {
		// if($scope.finalSevaAmount == '') {
		// 	$scope.validateAmount('verifyCustomAmount');
		// } else {
			$scope.processPayment();
		// }
	}		

	// $scope.validateAmount = function(parameter) {
	    
	//     $('.btn').removeClass('added');
	// 	$('#O5').removeClass('added');
		
	// 	if($scope.sevaName == '' || $scope.sevaName == null) {
	// 		$("#errorMsg").html("Please select seva name");
	// 		document.getElementById("sevaName").focus();
	// 		return false;
	// 	} else {
	// 		$("#errorMsg").html("");
	// 	}
		
	// 	$scope.sevaAmount = '';
	// 	$scope.finalSevaAmount = '';
	// 	$scope.sevaAmountBoxBtn = true;
	// 	$("#errorMsg").html("");				
	// 	$scope.emailBox = false;

	// 	if($scope.sevaAmount == '' && $scope.customAmount == '') {
	// 		$("#errorMsg").html("Please choose or enter seva amount");
	// 		document.getElementById("customAmount").focus();
	// 		return false;
	// 	} else if($scope.customAmount != ""){ 
	// 	    $('.btn').removeClass('added');
	// 		// $('#O5').addClass('added');
	// 		if (parseInt($scope.customAmount) < parseInt($scope.sevaMinimumAmountOption)) {
	// 			$("#errorMsg").html("Seva Amount should be more than ₹. "+$scope.sevaMinimumAmountOption);
	// 			document.getElementById("customAmount").focus();
	// 			return false;
	// 		} else {
	// 			$('.btn').removeClass('added');
	// 			// $('#O5').addClass('added');
	// 			$scope.finalSevaAmount = $scope.customAmount;					
	// 			$("#errorMsg").html("");
	// 			if(parameter == 'verifyCustomAmount') {
	// 			    $scope.processPayment();
	// 			}  else {
	// 			    $scope.finalSevaAmount = "";
	// 			}
	// 		}
	// 	} else if($scope.sevaAmount !="" && $scope.customAmount == ""){
	// 		$scope.finalSevaAmount = $scope.sevaAmount;
	// 		$("#errorMsg").html("");
	// 		$scope.processPayment();
	// 	}
	// }
	$scope.validateAmount = function(event) {
		var val = event.target.value;
		var dataId = event.target.getAttribute('data-id');
		var sevaMinimumAmountOption = event.target.getAttribute('data-minprice');
		$('#finalSevaAmount'+dataId).val('');
		$('.dontprice').text('Donate');
		var hdintp = document.getElementsByName("finalSevaAmount[]");
		var sm = 0;
		for (var i = 0; i < hdintp.length; i++) {
			sm += parseFloat(hdintp[i].value) || 0; // Ensure to parse as float, handle NaN
		}
		if(sm != 0)
		{
			$('.dontprice').text('Donate ₹ ' + sum);
		}		

		$('#seva'+dataId+'-O1').removeClass('added');
		$('#seva'+dataId+'-O2').removeClass('added');
		$('#seva'+dataId+'-O3').removeClass('added');
		$('#seva'+dataId+'-O4').removeClass('added');
		$('#seva'+dataId+'-O5').removeClass('added');
		if (parseInt(val) < parseInt(sevaMinimumAmountOption)) {
			$("#errorMsg").html("Seva Amount should be more than ₹ "+sevaMinimumAmountOption);
			$(".error"+dataId).text("Seva Amount should be more than ₹ "+sevaMinimumAmountOption);
			return false;
		} else {
			$(".error"+dataId).text("");
			$('#finalSevaAmount'+dataId).val(val);
			var hiddenInputs = document.getElementsByName("finalSevaAmount[]");
			// Calculate the sum
			var sum = 0;
			for (var i = 0; i < hiddenInputs.length; i++) {
				sum += parseFloat(hiddenInputs[i].value) || 0; // Ensure to parse as float, handle NaN
			}
			console.log(sum);
			if(sum != 0)
			{
				$('.dontprice').text('Donate ₹ ' + sum);
			}				
			$("#errorMsg").html("");
		}

	}
	$scope.enableAddress = function() {
		$scope.checkAddressOption = false;
		if($scope.bahumana) {			
			if($scope.taxOption) {
				$scope.addressSection = true;
				$scope.provideAddress = false;
			} else {
				$scope.addressSection = false;
				$scope.provideAddress = true;
			}
			$scope.country = "India";			
		} else {
			$scope.addressSection = false;
			$scope.provideAddress = false;
		}
	}
	
	$scope.enableTaxOption = function() {
		$scope.checkAddressOption = false;
		if($scope.taxOption) {
			$scope.taxOptionBox = true;			
			$scope.indianProfileCountry = "India";
			$scope.addressSection = true;
			$scope.provideAddress = false;
			document.getElementById('doorNo').value = "";
			document.getElementById('apartmentName').value = "";
			document.getElementById('streetName').value = "";
			document.getElementById('areaLocation').value = "";
			document.getElementById('state').value = "";
			document.getElementById('city').value = "";
			document.getElementById('pincode').value = "";	
		} else {
			$scope.taxOptionBox = false;
			document.getElementById('donorPAN').value = "";
			document.getElementById('indianProfileDoorNo').value = "";
			document.getElementById('indianProfileApartmentName').value = "";
			document.getElementById('indianProfileStreetName').value = "";
			document.getElementById('indianProfileAreaLocation').value = "";
			document.getElementById('indianProfileState').value = "";
			document.getElementById('indianProfileCity').value = "";
			document.getElementById('indianProfilePincode').value = "";
			$scope.addressSection = false;
			if($scope.bahumana)
			{
				$scope.provideAddress = true;	
			}else{
				$scope.provideAddress = false;	
			}			
		}
	}
	
	$scope.provideAddressOption = function() {
		if($scope.checkAddressOption == 'SAME') {
			$scope.provideAddress = false;
			document.getElementById('doorNo').value = "";
			document.getElementById('apartmentName').value = "";
			document.getElementById('streetName').value = "";
			document.getElementById('areaLocation').value = "";
			document.getElementById('state').value = "";
			document.getElementById('city').value = "";
			document.getElementById('pincode').value = "";
		} else {
			$scope.provideAddress = true;
		}		
	}

	//Rashi, Nakshatra list
	var rashi_arr = new Array("I do not know", "Mesha", "Rishaba", "Mithuna", "Karka", "Simha", "Kanya", "Thula", "Vrishchika", "Dhanu", "Makara", "Kumbha", "Meena");

	var nakshatra_arr = new Array();
	nakshatra_arr[0] = "I do not know|Aswini (Ashwati)|Bharani|Krittika (Karthigai)|Rohini|Mrigasira (Mrigaseersham)|Ardra (Thiruvadhirai)|Punarvasu (Punarpoosam)|Pushyami (Poosam / Pubba)|Aslesha (Ayilyam)|Makha (Magham)|Poorva Phalguni (Pooram)|Uttara Phalguni (Uttaram)|Hasta (Hastham)|Chitra (Chitta / Chittirai)|Swati|Visakha (Visakham)|Anuradha (Anusham)|Jyeshta (Kettai)|Moola (Moolam)|Poorvashada (Pooradam)|Uttarashada (Uttiradam)|Sravana (Thiruvonam)|Dhanishta (Avittam)|Satabhishak (Sadhayam)|Poorvabhadra (Pooratadhi)|Uttarabhadra (Uttiratadhi)|Revati";
	nakshatra_arr[1] = "I do not know|Aswini (Ashwati)|Bharani|Krittika (Karthigai)|Rohini|Mrigasira (Mrigaseersham)|Ardra (Thiruvadhirai)|Punarvasu (Punarpoosam)|Pushyami (Poosam / Pubba)|Aslesha (Ayilyam)|Makha (Magham)|Poorva Phalguni (Pooram)|Uttara Phalguni (Uttaram)|Hasta (Hastham)|Chitra (Chitta / Chittirai)|Swati|Visakha (Visakham)|Anuradha (Anusham)|Jyeshta (Kettai)|Moola (Moolam)|Poorvashada (Pooradam)|Uttarashada (Uttiradam)|Sravana (Thiruvonam)|Dhanishta (Avittam)|Satabhishak (Sadhayam)|Poorvabhadra (Pooratadhi)|Uttarabhadra (Uttiratadhi)|Revati";
	nakshatra_arr[2] = "Aswini (Ashwati)|Bharani|Krittika (Karthigai)|I do not know";
	nakshatra_arr[3] = "Krittika (Karthigai)|Rohini|Mrigasira (Mrigaseersham)|I do not know";
	nakshatra_arr[4] = "Mrigasira (Mrigaseersham)|Ardra (Thiruvadhirai)|Punarvasu (Punarpoosam)|I do not know";
	nakshatra_arr[5] = "Punarvasu (Punarpoosam)|Pushyami (Poosam / Pubba)|Aslesha (Ayilyam)|I do not know";
	nakshatra_arr[6] = "Makha (Magham)|Poorva Phalguni (Pooram)|Uttara Phalguni (Uttaram)|I do not know";
	nakshatra_arr[7] = "Uttara Phalguni (Uttaram)|Hasta (Hastham)|Chitra (Chitta / Chittirai)|I do not know";
	nakshatra_arr[8] = "Chitra (Chitta / Chittirai)|Swati|Visakha (Visakham)|I do not know";
	nakshatra_arr[9] = "Visakha (Visakham)|Anuradha (Anusham)|Jyeshta (Kettai)|I do not know";
	nakshatra_arr[10] = "Moola (Moolam)|Poorvashada (Pooradam)|Uttarashada (Uttiradam)|I do not know";
	nakshatra_arr[11] = "Uttarashada (Uttiradam)|Sravana (Thiruvonam)|Dhanishta (Avittam)|I do not know";
	nakshatra_arr[12] = "Dhanishta (Avittam)|Satabhishak (Sadhayam)|Poorvabhadra (Pooratadhi)|I do not know";
	nakshatra_arr[13] = "Poorvabhadra (Pooratadhi)|Uttarabhadra (Uttiratadhi)|Revati|I do not know";

	$scope.populateNakshatra = function(rashiID, nakshatraID) {
		var rashiIndex = document.getElementById(rashiID).selectedIndex;
		var nakshatraElement = document.getElementById(nakshatraID);
		nakshatraElement.length = 0; // Fixed by Julian Woods
		nakshatraElement.options[0] = new Option('Nakshatra', '');
		nakshatraElement.selectedIndex = 0;	
		var nakshatra = nakshatra_arr[rashiIndex].split("|");
		for (var i = 0; i < nakshatra.length; i++) {
			nakshatraElement.options[nakshatraElement.length] = new Option(nakshatra[i], nakshatra[i]);
		}
	}

	$scope.populateRashi = function(rashiID, nakshatraID) {
	// given the id of the <select> tag as function argument, it inserts <option> tags    
		var rashiElement = document.getElementById(rashiID);
		var nakshatraElement = document.getElementById(nakshatraID);	
		rashiElement.length = 0;
		rashiElement.options[0] = new Option('Rashi', '');
		rashiElement.selectedIndex = 0;	
		nakshatraElement.length = 0;
		nakshatraElement.options[0] = new Option('Nakshatra', '');
		nakshatraElement.selectedIndex = 0;	
		for (var i = 0; i < rashi_arr.length; i++) {
			rashiElement.options[rashiElement.length] = new Option(rashi_arr[i], rashi_arr[i]);
		}	
		$scope.populateNakshatra(rashiID, nakshatraID);
		// Assigned all rashis. Now assign event listener for the nakshatras.
		if (nakshatraID) {
			rashiElement.onchange = function () {
				$scope.populateNakshatra(rashiID, nakshatraID);
			};
		}
	}
	
	$scope.processPayment = function() {
		var checkedCheckboxes = $('.role-checkbox:checked');
		var numOfChebox = checkedCheckboxes.length;
        if(numOfChebox == 0)
		{
			$("#errorMsg").html("Please select any seva");
			return false;
		}
		// Assuming your checkboxes are associated with an array in your model
		$scope.next = true;
		angular.forEach($scope.checkboxes, function(value, key) {
			if (value) { 
				var finalSevaAmountField = angular.element('#finalSevaAmount' + key);
				if (finalSevaAmountField.val()== '' || finalSevaAmountField.val() == null) {
					$scope.next = false; 
				}
			}
		});
		if($scope.next == false)
		{
			$("#errorMsg").html("Please select the donation amount");
			return false;
		}
		if($scope.sevaDate == '') {
			if($scope.selectSevaDate == '' || $scope.selectSevaDate == null) {
				$("#errorMsg").html("Please select seva date");
				document.getElementById("selectSevaDate").focus();
				return false;
			} else {
				$scope.sevaDate = $scope.selectSevaDate;
			}
		}

		if ($scope.donorName == null || $scope.donorName == "") {
			$("#errorMsg").html("Please enter your name");
			document.getElementById("donorName").focus();
			return false;
		} else {			
			$("#errorMsg").html("");
		}
		
		if ($scope.donorMobile == null || $scope.donorMobile == "") {
			$("#errorMsg").html("Please enter mobile number");
			document.getElementById("donorMobile").focus();
			return false;
		} else if (parseInt($scope.donorMobile) <= 0) {
			$("#errorMsg").html("Invalid mobile number");
			document.getElementById("donorMobile").focus();
			return false;
		} else if ($scope.donorMobile != "" || $scope.donorMobile != null){
			var result  = checkValidMobile($scope.donorMobile);
			if(result == false){
				$("#errorMsg").html("Invalid mobile number");
				document.getElementById("donorMobile").focus();
				return false;    
			} else {
				$("#errorMsg").html("");
			}			
		} else {
			$("#errorMsg").html("");
		}
		
		$scope.donorEmailId = document.getElementById("donorEmailId").value;

		if($scope.donorEmailId == ''){
			$('#errorMsg').html('Please enter your email id');
			document.getElementById("donorEmailId").focus();
			return false;     
        } else if($scope.donorEmailId != ''){ 
			if (!isValidateEmail($scope.donorEmailId)) {
				$('#errorMsg').html($scope.donorEmailId + ' not a proper Email Address.');
				document.getElementById("donorEmailId").focus();
				return false;
			} else {				
				$('#errorMsg').html('');
			}
        } 		

		var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;
        panValue = document.getElementById("donorPAN").value;
		
		if($scope.taxOption) {
		    if(document.getElementById("donorPAN").value == null || document.getElementById("donorPAN").value == '') {
    		    $("#errorMsg").html("Please enter PAN number");
    		    return false;
    		} else {    
    		    if (regpan.test(panValue) == false) {
        			$("#errorMsg").html("Invalid PAN");
        			document.getElementById("donorPAN").focus();
        			return false;  
    		    }	
    		}
			if ($scope.indianProfileDoorNo == null || $scope.indianProfileDoorNo == "") {
				$("#errorMsg").html("Please enter the door number");
				document.getElementById("indianProfileDoorNo").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
			
			if ($scope.indianProfileApartmentName == null || $scope.indianProfileApartmentName == "") {
				$("#errorMsg").html("Please enter the house / apartment / building name");
				document.getElementById("indianProfileApartmentName").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
			
			if ($scope.indianProfileStreetName == null || $scope.indianProfileStreetName == "") {
				$("#errorMsg").html("Please enter the street name");
				document.getElementById("indianProfileStreetName").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
			
			if ($scope.indianProfileAreaLocation == null || $scope.indianProfileAreaLocation == "") {
				$("#errorMsg").html("Please enter the location / area");
				document.getElementById("indianProfileAreaLocation").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
	
			if ($scope.indianProfileCountry == null || $scope.indianProfileCountry == "") {
				$("#errorMsg").html("Please select the country");
				document.getElementById("indianProfileCountry").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
	
			if ($scope.indianProfileState == null || $scope.indianProfileState == "") {
				$("#errorMsg").html("Please select the state");
				document.getElementById("indianProfileState").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
	
			if ($scope.indianProfileCity == null || $scope.indianProfileCity == "") {
				$("#errorMsg").html("Please enter the city");
				document.getElementById("indianProfileCity").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
	
			if ($scope.indianProfilePincode == "" || $scope.indianProfilePincode == null) {
				$("#errorMsg").html("Please enter your pincode");
				document.getElementById("indianProfilePincode").focus();
				return false;
			} else if (parseInt($scope.indianProfilePincode) <= 0) {
				$("#errorMsg").html("Invalid pincode");
				document.getElementById("indianProfilePincode").focus();
				return false;
			} else if ($scope.indianProfilePincode != "" || $scope.indianProfilePincode != null) {
				var result = checkValidPincode($scope.indianProfilePincode);
				if (result == false) {
					$("#errorMsg").html("Invalid pincode");
					document.getElementById("indianProfilePincode").focus();
					return false;
				} else {
					$("#errorMsg").html("");
				}
			} else {
				$("#errorMsg").html("");
			}
		}
		
		
		if($scope.bahumana) {
			$scope.checkAddressOption = $("input[name='checkAddressOption']:checked").val();
			if($scope.taxOption) {
    			if($scope.checkAddressOption == undefined || $scope.checkAddressOption == "") {
    				$("#errorMsg").html("Please choose the maha prasadam address option.");
    				return false;
    			}
		    }	
		}	
		
		$scope.donorCount = document.getElementById('noOfDonor').value;	
		
		if($scope.bahumana == true && $scope.checkAddressOption != 'SAME') {
			
			if ($scope.doorNo == null || $scope.doorNo == "") {
				$("#errorMsg").html("Please enter the door number");
				document.getElementById("doorNo").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
			
			if ($scope.apartmentName == null || $scope.apartmentName == "") {
				$("#errorMsg").html("Please enter the house / apartment / building name");
				document.getElementById("apartmentName").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
			
			if ($scope.streetName == null || $scope.streetName == "") {
				$("#errorMsg").html("Please enter the street name");
				document.getElementById("streetName").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
			
			if ($scope.areaLocation == null || $scope.areaLocation == "") {
				$("#errorMsg").html("Please enter the location / area");
				document.getElementById("areaLocation").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
	
			if ($scope.country == null || $scope.country == "") {
				$("#errorMsg").html("Please select the country");
				document.getElementById("country").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
	
			if ($scope.state == null || $scope.state == "") {
				$("#errorMsg").html("Please select the state");
				document.getElementById("state").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
	
			if ($scope.city == null || $scope.city == "") {
				$("#errorMsg").html("Please enter the city");
				document.getElementById("city").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
	
			if ($scope.pincode == "" || $scope.pincode == null) {
				$("#errorMsg").html("Please enter your pincode");
				document.getElementById("pincode").focus();
				return false;
			} else if (parseInt($scope.pincode) <= 0) {
				$("#errorMsg").html("Invalid pincode");
				document.getElementById("pincode").focus();
				return false;
			} else if ($scope.pincode != "" || $scope.pincode != null) {
				var result = checkValidPincode($scope.pincode);
				if (result == false) {
					$("#errorMsg").html("Invalid pincode");
					document.getElementById("pincode").focus();
					return false;
				} else {
					$("#errorMsg").html("");
				}
			} else {
				$("#errorMsg").html("");
			}
		}
		
		// $scope.paymentOption = $("input[name='paymentOption']:checked").val();
		$scope.paymentOption = 'Domestic';
		/*if($scope.paymentOption == undefined || $scope.paymentOption == "") {
			$("#errorMsg").html("Please choose the payment option.");
            return false;
		}*/
		
		if($scope.paymentOption == 'Domestic') {
		    $scope.donorNationality = 'I'; 
		} else if($scope.paymentOption == 'International') {
		    $scope.donorNationality = 'O'; 
		}
		
		if($scope.paymentOption == 'International') {
			if ($scope.profileDoorNo == null || $scope.profileDoorNo == "") {
				$("#errorMsg").html("Please enter the door number");
				document.getElementById("profileDoorNo").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
			
			if ($scope.profileApartmentName == null || $scope.profileApartmentName == "") {
				$("#errorMsg").html("Please enter the house / apartment / building name");
				document.getElementById("profileApartmentName").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
			
			if ($scope.profileStreetName == null || $scope.profileStreetName == "") {
				$("#errorMsg").html("Please enter the street name");
				document.getElementById("profileStreetName").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
			
			if ($scope.profileAreaLocation == null || $scope.profileAreaLocation == "") {
				$("#errorMsg").html("Please enter the location / area");
				document.getElementById("profileAreaLocation").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
	
			if ($scope.profileCountry == null || $scope.profileCountry == "") {
				$("#errorMsg").html("Please select the country");
				document.getElementById("profileCountry").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
	
			if ($scope.profileState == null || $scope.profileState == "") {
				$("#errorMsg").html("Please select the state");
				document.getElementById("profileState").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
	
			if ($scope.profileCity == null || $scope.profileCity == "") {
				$("#errorMsg").html("Please enter the city");
				document.getElementById("profileCity").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
	
			if ($scope.profilePincode == "" || $scope.profilePincode == null) {
				$("#errorMsg").html("Please enter your ZIP code");
				document.getElementById("profilePincode").focus();
				return false;
			} else {
				$("#errorMsg").html("");
			}
		}
		
		document.campaignForm.checkAddressOptions.value = $scope.checkAddressOption;
		document.campaignForm.paymentOptions.value = $scope.paymentOption;
		// document.campaignForm.selectedSevaName.value = $scope.selectedSevaName;
		// document.campaignForm.sevaCode.value = $scope.sevaCode;
		// document.campaignForm.sevaId.value = $scope.sevaId;
		document.campaignForm.recurring.value = $scope.recurring;
		document.campaignForm.source.value = $scope.source;
		document.campaignForm.sevaDate.value = $scope.sevaDate;
		// document.campaignForm.finalSevaAmount.value = $scope.finalSevaAmount;
		
		document.campaignForm.name.value = $scope.donorName;
		document.campaignForm.mobile.value = $scope.donorMobile;
		document.campaignForm.nationality.value = $scope.donorNationality;
		document.campaignForm.emailId.value = $scope.donorEmailId;
		document.campaignForm.pan.value = $scope.donorPAN;
        /********         Donor DOB Addition   *******/		 
		document.campaignForm.pan.value = $scope.donorPAN;
		/********         Donor DOB Addition   *******/
		$scope.processPaymentBtn = true;
		document.campaignForm.action = 'actions/process-donation';
		document.campaignForm.submit();
	}
	
	$scope.loadSankalpaForm = function() {
	    var sevaKartaName = document.getElementById("sevaKartaName1").value;
		if(sevaKartaName == "" || sevaKartaName == null){
		    document.getElementById("sevaKartaName1").value = document.campaignForm.donorName.value;
		    $scope.sevaKartaName1 = document.campaignForm.donorName.value;
		}
	}
	
	$scope.addSankalpa = function() {
		$scope.donorCount = document.getElementById('noOfDonor').value;
		$scope.count = 0;
		$("#sankalpaErrorMsg").html("");
		
		for($scope.count; $scope.donorCount>$scope.count; $scope.count++) {
			$scope.id = $scope.count+1;
			var sevaKartaName = document.getElementById("sevaKartaName"+$scope.id).value;
			var sevaGotra = document.getElementById("sevaGotra"+$scope.id).value;
			var sevaRashi = document.getElementById("sevaRashi"+$scope.id).value;
			var sevaNakshatra = document.getElementById("sevaNakshatra"+$scope.id).value;
			if((sevaGotra != "" || sevaRashi != "" || sevaNakshatra != "") && (sevaKartaName == "" || sevaKartaName == null)){
				$("#sankalpaErrorMsg").html("Please enter the seva karta name");
				document.getElementById("sevaKartaName"+$scope.id).focus();
				return false;
			}
		}
		$scope.sankalpaBtn = true;
		document.campaignForm.action = 'actions/sankalpa-info';
		document.campaignForm.submit();
	}

});

function verifySpecialCharacter(stringValue) {
    //Regex for Valid Characters i.e. Alphabets, Numbers and Space.
    var regex = /^[0-9]+$/
    //Validate TextBox value against the Regex.
    var isValid = regex.test(stringValue);
    if (!isValid) {
        return false;
    } else {
        return true;
    }
}
