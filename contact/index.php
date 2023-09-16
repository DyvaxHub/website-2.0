    <!DOCTYPE html>

    <html class="no-js" lang="en">

    <head>
    	<meta charset="UTF-8" />
    	<link rel="icon" type="image/x-icon" href="../images/logo.png">
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
    				'../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
    			f.parentNode.insertBefore(j, f);
    		})(window, document, 'script', 'dataLayer', 'GTM-W43MN6Q');
    	</script>
    	<!-- End Google Tag Manager -->

    	<title>Contact Us</title>
    	<title>Apply Now with Dyvaxhub</title>
    	<meta name="keywords" content="dyvaxhub,status,applicants,qualified,consideration,employment,equal,sponsorship,immigrant,support">
    	<meta content="ROK" name="author">
    	<meta name="description" content="Contact Dyvax Hub today">
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
    		var pageId = '31631';

    		function updateContent() {}

    		function setWait() {}
    		//
    		-->
    	</script>


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
                    <div class="card mb-3 shadow-lg py-3">
                        <div class="row g-0">
                            <h2 class="mt-3">Contact Us</h2>
                            <form class="row g-3 p-sm-3" >
                                <div class="col-md-12 col-lg-6">
                                    <label for="FirstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control text-center border-bottom border-0 border-dark-subtle" name="firstname" placeholder="John"  autocomplete="off" required>
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
                                    <label for="FirstName" class="form-label">Phone Number</label> <br>
                                    <!-- <input type="tel" class="form-control text-center border-bottom border-0 border-dark-subtle" name="phoneNumber" placeholder="+254 769 136787" autocomplete="off" required> -->
                                    <input id="phone" class="form-control text-center border-bottom border-0 border-dark-subtle" name="phoneNumber" autocomplete="off" required type="tel">
                                    <p id="output" class="text-warning text-center"></p>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <label for="FirstName" class="form-label">Message</label>
                                    <textarea type="text" class="form-control text-center border-bottom border-0 border-dark-subtle" autocomplete="off" name="phoneNumber" placeholder="Write your message here" required></textarea>
                                </div>

                                <!-- <div class="col-4"></div> -->
                                <div class="">
                                    <button type="" class="btn text-white text-white" id="form2" style="background-color: #124958;">Submit</button>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.min.js"></script>

<script>
    const input = document.querySelector("#phone");
const output = document.querySelector("#output");

const iti = window.intlTelInput(input, {
  nationalMode: true,
  utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.js", 
});

const handleChange = () => {
  let text;
  if (input.value) {
    text = iti.isValidNumber()
      ? ""
      : "Invalid number - please try again";
  } else {
    text = "Please enter a valid number below";
  }
  const textNode = document.createTextNode(text);
  output.innerHTML = "";
  output.appendChild(textNode);
};

// listen to "keyup", but also "change" to update when the user selects a country
input.addEventListener("change", handleChange);
input.addEventListener("keyup", handleChange);

</script>
<script src="..js/nclex.js"></script>
<script>
    window.addEventListener("load", function () {
        const loader = document.getElementById("loader");
        loader.style.display = "none";
    });
</script>
    </body>

    </html>