    <!DOCTYPE html>

    <html class="no-js" lang="en">

    <head>
    	<meta charset="UTF-8" />
    	<link rel="icon" type="image/x-icon" href="../images/logo.png">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="format-detection" content="telephone=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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

    	<title>NCLEX-RN</title>
    	<meta name="keywords" content="healthcare,recruitment,professionals,organizations,dyvaxhub">
    	<meta content="Richard" name="author">
    	<meta name="description" content="NCLEX-RN. ">
    	<meta name="title" content="NCLEX-RN" />
    	<meta name="https" content="1">
    	<link rel="canonical" href="our-partners.html" />
    	<meta content="https://dyvaxhub.com/about-us/our-partners.stml" property="og:url">
    	<meta content="website" property="og:type">
    	<meta content="Our Partners" property="og:title">
    	<meta content="Learn more about our valuable partners that help make changing lives possible. " property="og:description">
    	<meta property="og:site_name" content="" />
    	<meta property="og:locale" content="en_US" />
    	<meta name="twitter:card" content="summary" />
    	<meta name="twitter:site" content="" />
    	<meta name="twitter:title" content="Our Partners" />
    	<meta name="twitter:description" content="Learn more about NCLEX that help make changing lives possible. " />
    	<meta name="twitter:image" content="" />
    	<script>
    		<!--
    		function highlight(blank) {}
    		var pageName = '';
    		var pageId = '312';

    		function updateContent() {}

    		function setWait() {}
    		//
    		-->
    	</script>

	<link href="../css/pricing_table.css" rel="stylesheet">
	
	<script>
//payonline119,payonline149,payonline219,payonline2539
$(document).ready(function () {
   $("#lpayonline119").click(function () {
        $("#payonline119").show();
    });
	  $("#lpayonline1191").click(function () {
        $("#payonline119").hide();
    });
	  $("#lpayonline149").click(function () {
        $("#payonline149").show();
    });
	 $("#lpayonline1491").click(function () {
        $("#payonline149").hide();
    });
	  $("#lpayonline219").click(function () {
        $("#payonline219").show();
    });
	 $("#lpayonline2191").click(function () {
        $("#payonline219").hide();
    });
	  $("#lpayonline2539").click(function () {
        $("#payonline2539").show();
    });
	 $("#lpayonline25391").click(function () {
        $("#payonline2539").hide();
    });
    //Contact Form validation on click event
    $("#contact-form").on("submit", function () {
        var valid = true;
        $(".info").html("");
        $("inputBox").removeClass("input-error");

        var userName = $("#userName").val();
        var userEmail = $("#userEmail").val();
        var userPhone = $("#userPhone").val();
        var country_billing = $("#country_billing").val();
//phone-info,country-info,userPhone,country_billing
        if (userName == "") {
            $("#userName-info").html("required.");
            $("#userName").addClass("input-error");
        }
        if (userEmail == "") {
            $("#userEmail-info").html("required.");
            $("#userEmail").addClass("input-error");
            valid = false;
        }
        if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
        {
            $("#userEmail-info").html("invalid.");
            $("#userEmail").addClass("input-error");
            valid = false;
        }

        if (userPhone == "") {
            $("#phone-info").html("required.");
            $("#userPhone").addClass("input-error");
            valid = false;
        }
        if (country_billing == "") {
            $("#country-info").html("required.");
            $("#country_billing").addClass("input-error");
            valid = false;
        }
        return valid;

    });
});
</script>
	
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="../css/style.css" />
    </head>

    <body>
	
	
<?php

 abstract class JsonDeserializer
{

    public static function Deserialize($json)
    {
        $className = get_called_class();
        $classInstance = new $className();
        if (is_string($json))
            $json = json_decode($json);
        foreach ($json as $key => $value)
            $classInstance->{$key} = $value;
        return $classInstance;
    }

    public static function DeserializeArray($json)
    {
        $json = json_decode($json);
        $items = [];
        foreach ($json as $item)
            $items[] = self::Deserialize($item);
        return $items;
    }
}
 
class PaymentIntitiazeObj extends JsonDeserializer
{
    public $redirect_url;
    public $status;
    public $errorMessage;
}
?>



    	<!-- Mobile Menu-->
    		<?php
	include('../mobile_menu.php');
?>



<?php
function function_alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
if (! empty($_POST["sendA"])) {

    if (! filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL)) {
        echo "The email address is invalid.";
    } else {
        $name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
        $phone = filter_var($_POST["userPhone"], FILTER_SANITIZE_STRING);
        $country = filter_var($_POST["country_billing"], FILTER_SANITIZE_STRING);	
		$amount='119';
		$plan='dvx119';
		$plan = filter_var($plan, FILTER_SANITIZE_STRING);
		$url = "https://elearning.dyvaxhub.com/pesapal/initialize/";
		$resp ="";
		$data = array("Name" => $name, "email" => $email, "phone_number" => $phone, "amount" => $amount,"country" => $country,"plan" => $plan);
		$jdata = json_encode($data );
		//echo $jdata;
		$options = array(
		'http' => array(
			'header'  => "Content-type: application/json",
			'method'  => 'POST',
		//  'content' => http_build_query($data)
			'content' => $jdata
		)
		);
		$context  = stream_context_create($options);
		$resp = file_get_contents($url, false, $context);
		echo $resp;
		$deserializedInstance = PaymentIntitiazeObj::Deserialize($resp);
		
	if ($deserializedInstance->status =='00'){
	    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$deserializedInstance->redirect_url.'">';
	}
	else{
		function_alert($deserializedInstance->errorMessage);
	}
    }
}
if (! empty($_POST["sendB"])) {

    if (! filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL)) {
        echo "The email address is invalid.";
    } else {
        $name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
        $phone = filter_var($_POST["userPhone"], FILTER_SANITIZE_STRING);
        $country = filter_var($_POST["country_billing"], FILTER_SANITIZE_STRING);
		$amount='149';
		$plan='dvx149';
		$plan = filter_var($plan, FILTER_SANITIZE_STRING);
$url = "https://elearning.dyvaxhub.com/pesapal/initialize/";
$resp ="";
$data = array("Name" => $name, "email" => $email, "phone_number" => $phone, "amount" => $amount,"country" => $country,"plan"=>$plan);
$jdata = json_encode($data );
//echo $jdata;
$options = array(
  'http' => array(
    'header'  => "Content-type: application/json",
    'method'  => 'POST',
   // 'content' => http_build_query($data)
	'content' => $jdata
  )
);
$context  = stream_context_create($options);
$resp = file_get_contents($url, false, $context);

$deserializedInstance = PaymentIntitiazeObj::Deserialize($resp);

	if ($deserializedInstance->status =='00'){
	    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$deserializedInstance->redirect_url.'">';
	}
	else{
		function_alert($deserializedInstance->errorMessage);
	}
    }
}
if (! empty($_POST["sendC"])) {

    if (! filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL)) {
        echo "The email address is invalid.";
    } else {
        $name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
        $phone = filter_var($_POST["userPhone"], FILTER_SANITIZE_STRING);
        $country = filter_var($_POST["country_billing"], FILTER_SANITIZE_STRING);
		$amount='219';
		$plan='dvx219';
		$plan = filter_var($plan, FILTER_SANITIZE_STRING);
$url = "https://elearning.dyvaxhub.com/pesapal/initialize/";
$resp ="";
$data = array("Name" => $name, "email" => $email, "phone_number" => $phone, "amount" => $amount,"country" => $country,"plan"=>$plan);
$jdata = json_encode($data );
//echo $jdata;
$options = array(
  'http' => array(
    'header'  => "Content-type: application/json",
    'method'  => 'POST',
   // 'content' => http_build_query($data)
	'content' => $jdata
  )
);
$context  = stream_context_create($options);
$resp = file_get_contents($url, false, $context);

$deserializedInstance = PaymentIntitiazeObj::Deserialize($resp);

	if ($deserializedInstance->status =='00'){
	    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$deserializedInstance->redirect_url.'">';
	}
	else{
		function_alert($deserializedInstance->errorMessage);
	}
    }
}
if (! empty($_POST["sendD"])) {

    if (! filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL)) {
        echo "The email address is invalid.";
    } else {
        $name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
        $phone = filter_var($_POST["userPhone"], FILTER_SANITIZE_STRING);
        $country = filter_var($_POST["country_billing"], FILTER_SANITIZE_STRING);
		$amount='299';
		$plan='dvx2539';
		$plan = filter_var($plan, FILTER_SANITIZE_STRING);
$url = "https://elearning.dyvaxhub.com/pesapal/initialize/";
$resp ="";
$data = array("Name" => $name, "email" => $email, "phone_number" => $phone, "amount" => $amount,"country" => $country,"plan"=>$plan);
$jdata = json_encode($data );
//echo $jdata;
$options = array(
  'http' => array(
    'header'  => "Content-type: application/json",
    'method'  => 'POST',
   // 'content' => http_build_query($data)
	'content' => $jdata
  )
);
$context  = stream_context_create($options);
$resp = file_get_contents($url, false, $context);

$deserializedInstance = PaymentIntitiazeObj::Deserialize($resp);

	if ($deserializedInstance->status =='00'){
	    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$deserializedInstance->redirect_url.'">';
	}
	else{
		function_alert($deserializedInstance->errorMessage);
	}
    }
}
?>


<div id="loader" class="loader-container">
            <div class="loader"></div>
        </div>
		
			
        <div class="scroll-indicator">
        <i class="fa fa-angle-double-down"></i>
        </div>
        

    <div class="p-5">
                <!-- <h5 class="text-center">We Have Registered Nurses and A Long List of Unskilled Workers</h5> -->
                <h5 class="text-center">Registered Nurses and Unskilled Workers</h5>
                <div class="pt-2 m-5">
                    <blockquote class="blockquote mb-0 text-center card shadow-lg mx-5 p-4">
                                "Dyvax Hub is a top-ranking recruitment agency with a big database of nurses who have passed the NCLEX-RN test and well-vetted unskilled workers"     
                    </blockquote>
                    <div class="row pt-4">
                        <div class="col-12 col-md-6 p-3 text-center p-4 my-auto p-lg-5">
                            <h3>Registered Nurses</h3>
                            <p class="d-none d-md-block m-5" >We have registered nurses in theses specialties among others: </h>
                            
                            <ul class="links">
                                <li>Medical-Surgical</li>
                                <li>Labor and Delivery</li>
                                <li>Pediatrics</li>
                                <li>Operating room</li>
                                <li>Critical Care</li>
                                <li>ER</li>
                            </ul>
                            </div>
                            <div class="col-12 col-md-6 p-5 m-auto rounded" style="background-color: #124958;">
                            <img src="/images/MOK_1053.jpg" class="d-block img-fluid rounded m-auto" alt="..." width="350px">
                            </div>

                            <span class="border-top border-3 my-5"></span>

                            <div class="col-12 col-md-6 p-5 m-auto rounded" width="300px" style="background-color: #124958;">
                                <img src="/images/unskilled.jpg" class="d-block img-fluid rounded m-auto" alt="..." width="650px">
                            </div>
                        <div class="col-12 col-md-6 p-5 text-center p-4 my-auto p-lg-5">
                            <h5>Unskilled Workers</h5>
                            <p>We have registered nurses in theses specialties among others: </h>
                            
                            <ul class="links">
                                <li>Caregivers</li>
                                <li>Painters</li>
                                <li>Farmworkers</li>
                                <li>Information Desk Clerks</li>
                                <li>Store/Supermarket workers</li>
                                <li>Housekeepers</li>
<li>Janitors/Cleaners</li>
<li>Cooks</li>
<li>Factory workers</li>
                            </ul>
                        </div>
                        </div>
                </div>
            </div>

            <div class="form_1 data_info">
                <div class="container text-center p-4 " style="margin-top: 2rem;justify-content: center;">
                    <div class="card mb-3 shadow-lg">
                        <div class="row g-0 py-5">
                            <h2 class="mt-3">Recruiters Form</h2>
                            <form class="row g-3 p-sm-3" >
                                <div class="col-md-12 col-lg-6">
                                    <label for="FirstName" class="form-label">Name</label>
                                    <input type="text" class="form-control text-center border-bottom border-0 border-dark-subtle" name="firstname" placeholder="John McDaniel" required>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="LastName" class="form-label">Company Name</label>
                                    <input type="text" class="form-control text-center border-bottom border-0 border-dark-subtle" name="lastname" placeholder="Dyvax Hub" required>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="Email" class="form-label">Email</label>
                                    <input type="email" class="form-control text-center border-bottom border-0 border-dark-subtle" name="email" placeholder="info@dyvax.co.ke" required>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="FirstName" class="form-label">Phone Number</label> <br>
                                    <!-- <input type="tel" class="form-control text-center border-bottom border-0 border-dark-subtle" name="phoneNumber" placeholder="+254 769 136787" required> -->
                                    <input id="phone" class="form-control text-center border-bottom border-0 border-dark-subtle" name="phoneNumber" required type="tel">
                                    <p id="output" class="text-warning text-center"></p>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="Email" class="form-label">Staff Criteria</label>
                                    <input type="text" class="form-control text-center border-bottom border-0 border-dark-subtle" name="email" placeholder="Nurses, Caregivers " required>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="Email" class="form-label">Number of Staff</label>
                                    <input type="number" class="form-control text-center border-bottom border-0 border-dark-subtle" name="email" placeholder="10" required>
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
<script>
    window.addEventListener("load", function () {
        const loader = document.getElementById("loader");
        loader.style.display = "none";
    });
</script>
    </body>

    </html>