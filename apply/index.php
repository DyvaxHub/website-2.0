    <!DOCTYPE html>
	
	<?php
	if(isset($_GET['s'])){
		$rr = $_GET['s'];
		
		echo '<script>alert("Application Sent Succesfully")</script>';
	}
		
	?>

    <html class="no-js" lang="en">


    <head>
    	<meta charset="UTF-8" />
    	<link rel="icon" type="image/x-icon" href="../images/logo.png">
    	<meta property="og:image:width" content="1200" />
    	<meta property="og:image:height" content="630" />
    	<meta property="og:title" content="Apply Now with dyvaxhub" />
    	<meta property="og:description" content="We are a healthcare training and recruitment agency with its head offices in Kenya" />
    	<meta property="og:image" content="../images/logo.jpg" />
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="format-detection" content="telephone=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.min.css">

    	<script src="../js/app.min.js"></script>

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
    				'../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
    			f.parentNode.insertBefore(j, f);
    		})(window, document, 'script', 'dataLayer', 'GTM-W43MN6Q');
    	</script>
    	<!-- End Google Tag Manager -->

    	<title>Apply Now with Dyvaxhub</title>
    	<meta name="keywords" content="Dyvax, NCLEX application, NCLEX tests, NCLEX tutors, NCLEX  India, Nclex South Africa, Book NCLEX">
    	<meta content="Dyvax" name="author">
    	<meta name="description" content="Help with NCLEX test">

    	<meta name="title" content="Apply Now with dyvaxhub" />
    	<meta name="https" content="1">
    	<link rel="canonical" href="index.html" />
    	<meta content="https://dyvaxhub.com/apply/" property="og:url">
    	<meta content="website" property="og:type">
    	<meta content="Apply Now with dyvaxhub" property="og:title">
    	<meta content="We are a healthcare training and recruitment agency with its head offices in Kenya!" property="og:description">
    	<meta property="og:site_name" content="" />
    	<meta property="og:locale" content="en_US" />
    	<meta name="twitter:card" content="summary" />
    	<meta name="twitter:site" content="" />
    	<meta name="twitter:title" content="Apply Now with dyvaxhub" />
    	<meta name="twitter:description" content="We are a healthcare training and recruitment agency with its head offices in Kenya!" />
    	<meta name="twitter:image" content="" />
    	<script>
    		<!--
    		function highlight(blank) {}
    		var pageName = '';
    		var pageId = '29100';

    		function updateContent() {}

    		function setWait() {}
    		//
    		-->
    	</script>

    	<?php
		$success = 0;
		if (isset($_GET['s'])) {
			$success = $_GET['s'];
		}

		?>
	
	<link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
   
    </head>

    <body>

    	<!-- Mobile Menu-->
    	<?php
			include('../mobile_menu.php');
		?>

<div id="loader" class="loader-container">
            <div class="loader"></div>
        </div>

    <div class="form_wrap p-lg-3">

            <div class="form_1 data_info">
                <div class="container text-center p-4 " style="margin-top: 2rem;justify-content: center;">
                    <div class="card mb-3 shadow-lg">
                        <div class="row g-0">
                            <h2 class="mt-3">General Information</h2>
                            <form class="row g-3 p-sm-3" action="saveApp.php" method="POST" enctype="multipart/form-data" >
                                <div class="col-md-12 col-lg-6">
                                    <label for="FirstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control text-center border-bottom border-0 border-dark-subtle" name="firstname" placeholder="John" autocomplete="off" required>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="LastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control text-center border-bottom border-0 border-dark-subtle" name="lastname" placeholder="Doe" autocomplete="off" required>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="Email" class="form-label">Email</label>
                                    <input type="email" class="form-control text-center border-bottom border-0 border-dark-subtle" name="email" placeholder="info@dyvax.co.ke" autocomplete="off" required>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="FirstName" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control text-center border-bottom border-0 border-dark-subtle" name="phoneNumber" placeholder="+254 769 136787" autocomplete="off" required>
                                </div>

                                <div class="col-4"></div>
                                <div class="col-4">
                                    <button type="" class="btn text-white" style="background:  #124958" id="form2">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form_2 data_info" style="display: none">
                <div class="container text-center p-4" style="margin-top: 2rem;justify-content: center;">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <h2 class="mt-3">Add Landlord</h2>

                            <form class="row g-3 p-sm-3" action="saveApp.php" method="POST" enctype="multipart/form-data">
                    
                                <div class="col-md-12 col-lg-6">
                                    <label for="FirstName" class="form-label">Name</label>
                                    <input type="text" class="form-control text-center border-bottom border-0 border-dark-subtle" name="FirstName" placeholder="John" autocomplete="off" required>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="SecondName" class="form-label"> Name</label>
                                    <input type="text" class="form-control text-center border-bottom border-0 border-dark-subtle" name="SecondName" placeholder="Demethew" autocomplete="off" required>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="mobile" class="form-label">bel>Mobile Number</label>
                                    <input type="number" class="form-control text-center border-bottom border-0 border-dark-subtle" name="mobile" placeholder="254712345678" autocomplete="off" required>
                                    <div class="col-auto mt-3">
                                        <span id="passwordHelpInline" class="form-text">
                                            Use the 254 format 254712345678.
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="email" class="form-label">>Landlord Email</label>
                                    <input type="email" class="form-control text-center border-bottom border-0 border-dark-subtle" name="email" placeholder="kaya@gmail.com" autocomplete="off" required>
                                </div>
                                <div class="col-lg-12">
                                    <label for="password" class="form-label"></label>
                                    <input type="password" class="form-control text-center border-bottom border-0 border-dark-subtle" name="password" placeholder="*********" autocomplete="off" required>
                                    <div class="col-auto mt-3">
                                        <span id="passwordHelpInline" class="form-text">
                                            Must be 8-20 characters long.
                                        </span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button class="btn text-white btn-primary" id="form2back">Back</button>
                                </div>
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <button type="submit" class="btn text-white" style="background:  #124958" id="form2">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form_3 data_info" style="display: none">
                <div class="container text-center p-4 " style="margin-top: 2rem;justify-content: center;">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <h2 class="mt-3">Add apartment</h2>

                            <form class="row g-3 p-sm-3" action="saveApp.php" method="POST" enctype="multipart/form-data">
                    
                                <div class="col-md-12 col-lg-6">
                                    <label for="ApartmentName" class="form-label">ent Name</label>
                                    <input type="text" class="form-control text-center border-bottom border-0 border-dark-subtle" autocomplete="off" name="name" placeholder="The Residence" required>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="landlord" class="form-label">rd Name</label>
                                    <select class="form-select border-bottom border-0 border-dark-subtle" id="landlord" autocomplete="off" name="landlord" type="landlord" list="landlords" required>
                                        <option class="text-center" value="" selected="" disabled="">Select Landlord</option>
                                        @foreach ($landlords as $landlord)
                                        <option class="text-center" value="{{$landlord->id}}" {{(@$landlord_id == $landlord->id) ? "selected" : ""}}>{{$landlord->firstName}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="units" class="form-label">abel>Number of Units</label>
                                    <input type="number" class="form-control text-center border-bottom border-0 border-dark-subtle" autocomplete="off" name="units" placeholder="Enter number of units" required>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="location" class="form-label">>Apartment Location</label>
                                    <input type="text" class="form-control text-center border-bottom border-0 border-dark-subtle" autocomplete="off" name="location" placeholder="Enter apartment location" required>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="payment_type" class="form-label">ayment Type</label>
                                    <select class="form-select border-bottom border-0 border-dark-subtle" id="payment_type" autocomplete="off" name="payment_type" type="payment_type" list="payment_type" onchange="togglePaymentFields()">
                                        <option class="text-center" value="" selected="" disabled="">Select Payment Method</option>
                                        @foreach ($payments as $payment)
                                        <option class="text-center" value="{{$payment->id}}" {{(@$payment_id == $payment->id) ? "selected" : ""}}>{{$payment->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div id="tillNumberFields" style="display: none;">
                                    <div class="col-md-12 col-lg-6">
                                        <label for="till_number" class="form-label"></label>Till Number</label>
                                        <input type="text" class="form-control text-center border-bottom border-0 border-dark-subtle" autocomplete="off" name="till_number" placeholder="Enter till number">
                                    </div>
                                </div>

                                <div id="paybillFields" style="display: none;">
                                    <div class="col-md-12 col-lg-6">
                                        <label for="paybill_account" class="form-label">px"></label>Paybill Account</label>
                                        <input type="text" class="form-control text-center border-bottom border-0 border-dark-subtle" autocomplete="off" name="paybill_account" placeholder="Enter paybill account number">
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <label for="paybill_acc" class="form-label">bel>Account Number</label>
                                        <input type="text" class="form-control text-center border-bottom border-0 border-dark-subtle" autocomplete="off" name="paybill_acc" placeholder="Enter payment details">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="water_rate" class="form-label">abel>Water Rate</label>
                                    <input type="number" class="form-control text-center border-bottom border-0 border-dark-subtle" name="water_rate" placeholder="Enter rate per unit">
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="garbage" class="form-label">/label>Garbage Charge</label>
                                    <input type="number" class="form-control text-center border-bottom border-0 border-dark-subtle" autocomplete="off" name="garbage" placeholder="Enter monthly charge">
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="service" class="form-label">rvice Charge</label>
                                    <input type="number" class="form-control text-center border-bottom border-0 border-dark-subtle" autocomplete="off" name="service" placeholder="Enter amount">
                                </div>
                                <div class="col-12 mt-3">
                                    <span id="passwordHelpInline" class="form-text">
                                        Choose only one that applies.
                                    </span>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="comissin_rate" class="form-label">Comission Rate</label>
                                    <input type="number" class="form-control text-center border-bottom border-0 border-dark-subtle" autocomplete="off" name="comissin_rate" placeholder="Enter % comission.">
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="comission_amount" class="form-label">Comission Amount</label>
                                    <input type="number" class="form-control text-center border-bottom border-0 border-dark-subtle" autocomplete="off" name="comission_amount" placeholder="Enter comission amount">
                                </div>
                                <div class="mt-4 col-6">
                                    <button class="btn text-white btn-primary" id="form3back">Back</button>
                                </div>
                                 <div class="mt-4 col-4"></div>
                                <div class="mt-4 col-6">
                                    <button type="submit" class="btn text-white" style="background:  #8A2BE2" id="form3">Done</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</div>
</div>

<a href="https://wa.me/254769136787" target="_blank" class="whatsapp-icon">
    <img src="/images/whatsapp.png" alt="WhatsApp Chat">
    </a>

    		<?php
			include('../layout/footer.php')
			?>

    </body>

    <script>
    	function myFunction() {
    		// Get the value of the input field with id="numb"
    		let x = document.getElementById("fname").value;
    		// If x is Not a Number or less than one or greater than 10
    		let text;
    		if (x == '') {
    			text = "Input not valid";
    		} else {
    			text = "Input OK <br>";
    		}
    		//document.getElementById("demo").innerHTML = text;
    	}
    </script>
	
	<script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
 </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../js/index.js"></script>
<script src="..js/nclex.js"></script>
<script>
    window.addEventListener("load", function () {
        const loader = document.getElementById("loader");
        loader.style.display = "none";
    });
</script>
    </html>