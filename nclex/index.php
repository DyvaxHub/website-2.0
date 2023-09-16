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

 <div id="page">
    		<!-- Main Navigation-->    		
			
			   <div class="position-relative">
   <img src="/images/study-final.jpg" class="d-block w-100 img-fluid rounded" alt="..." style="max-height: 750px">
   <div class="carousel-caption d-md-block fs-5 shadow-bottom text-center">
    <h5 class="d-md-none d-lg-block">NCLEX-RN</h5>
    <p class="d-none d-md-block">Embark on a transformative journey by enrolling in our comprehensive in-house NCLEX-RN Training program. This program offers a strategic pathway to enhance your qualifications and boost your prospects for securing coveted healthcare positions in the USA, UK, or Canada. Through rigorous training and skill refinement, you'll be equipped with the expertise and confidence to excel in your nursing career across international borders. Seize the opportunity to unlock new horizons and embrace rewarding opportunities in global healthcare environments.</p>
    <p class="d-md-none">Embark on a transformative journey with our NCLEX-RN Training program. Enhance your qualifications and boost your prospects for healthcare positions in the USA, UK, or Canada. Excel in your nursing career across borders. Unlock new horizons in global healthcare.</p>
    <a href="#pricing" class="btn text-white px-lg-3 mx-lg-3" style="background-color: #124958;">Buy Now</a>
  </div>
</div>

        
        <div class="containe text-center row mx-5 pt-sm-5">

          <div class="col-12 col-md-6 text-center px-4 my-auto p-lg-5">
              <h5 class="text-center">Challenging NCLEX-RN Practice Questions</h5>
                 <p class="m-5 d-none d-md-block">
                  Crafted by dedicated nurse educators and practicing professionals, our collection of NCLEX-RN practice questions comprises an impressive array of 2,800+ questions, including an essential 500+ questions specifically focused on the Next Generation NCLEX-RN. These thoughtfully designed questions are strategically aimed at both challenging and enhancing your clinical judgment capabilities. Each question is accompanied by an extensive rationale that not only explains the correct answer but delves into the intricacies of incorrect choices as well, granting you a profound understanding of the underlying concepts. To further enrich your learning experience, we've incorporated over 700 vivid medical illustrations and images. These visuals serve as powerful tools to demystify complex processes, provide context to clinical manifestations, and aid in retaining crucial concepts. Step into an enriched learning journey that truly empowers your nursing expertise.
                </p>
                <p class="m-5 d-md-none">
                  Discover comprehensive NCLEX-RN practice questions designed to enhance your clinical judgment and nursing expertise.
                </p>
                  
              </div>
              <div class="col-12 col-md-6 p-5 my-5 m-auto" style="background-color: #124958;">
                  <img src="/images/nclex.jpg" class="d-block img-fluid rounded m-auto" alt="...">
              </div>

              <div class="col-12 col-md-6 p-3 text-center p-4 my-auto p-lg-5 d-flex" style="background-color: #124958;">
                <div class="col-3 m-auto rounded-circle">
                  <img src="/images/1.jpg" class="img-fluid rounded m-aut" alt="...">
                </div>
                <div class="col-6 px-2 m-auto rounded-circle">
                  <img src="/images/2 (2).jpg" class="img-fluid rounded m-aut" alt="..." style="transform: translateX(1.3);">
                </div>
                <div class="colmd-3 m-auto rounded-circle">
                <img src="/images/10.jpg" class="img-fluid rounded m-aut" alt="...">
                </div>
              </div>

              <div class="col-12 col-md-6 p-3 text-center p-4 my-auto p-lg-5">
              <h5 class="text-center">Pass the Next Generation NCLEX-RN on Your First Attempt</h5>
                        <p class="m-5 d-none d-md-block">Achieve success with confidence in your Next Generation NCLEX-RN exam by choosing our comprehensive review resources. We're dedicated to empowering students with top-notch preparatory tools, and that's why over a million nurses have placed their trust in us for their nursing licensing exam journey. You now have the exciting opportunity to elevate your preparation through our dynamic videos, skill-refining practice questions, adaptive (CAT) tests, readiness exams, and interactive flashcards, all tailored for the Next Generation NCLEX-RN. Our revamped NGN practice questions retain the hallmark features that have guided countless nurses to triumph – offering clinically-relevant content, vibrant imagery, detailed explanations for right and wrong answers. Experience personalized guidance that resonates with your nursing aspirations and sets you on a path to excel.</p>
                <p class="m-5 d-md-none">
                  Achieve success with confidence in your Next Generation NCLEX-RN exam by choosing our comprehensive review resources.
                </p>

              </div>

              </div> 



            <div class="pricing pt-5" id="pricing">
            <h5 class="text-center" style="color: #124958;">Payment Plans</h5>
            <div class="row text-center p-lg-4 mx-sm-2">
                <div class="col-sm-6 col-lg-3 pt-4 px-3">
                    <div class="card py-2 mx-2">
                    <div class="card-body">
                        <h5 class="card-header text-dark" style="background-color: #CD7F32;">Bronze <br> 30 Days</h5>
                        <p class="card-title pt-4 fs-4"><sup>$</sup><strong>119</strong></p>
                          <ul class="list-group list-group-flush py-5 test">
                            <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>  <span class="mx-1">2500+ Practice Questions</span></li>
                            <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>  <span class="mx-1">500+ NGN Questions</span></li>
                            <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>  <span class="mx-1">Digital Flashcards</span></li>
                            <li class="list-group-item"> <i class="fa fa-check" aria-hidden="true"></i>  <span class="mx-1">1 Self Assessment</span></li>
                        </ul>
                        <a href="" id="lpayonline119" class="btn text-white" style="background-color: #124958;">Buy Now</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 pt-4 px-3">
                    <div class="card py-2 mx-2">
                    <div class="card-body">
                        <h5 class="card-header text-dark" style="background-color: #C0C0C0;">Silver <br> 60 Days</h5>
                        <p class="card-title pt-4 fs-4"><sup>$</sup><strong>149</strong></p>
                          <ul class="list-group list-group-flush py-5 test">
                            <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>  <span class="mx-1">2500+ Practice Questions</span></li>
                            <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>  <span class="mx-1">500+ NGN Questions</span></li>
                            <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>  <span class="mx-1">Digital Flashcards</span></li>
                            <li class="list-group-item"> <i class="fa fa-check" aria-hidden="true"></i>  <span class="mx-1">2 Self Assessment</span></li>
                           
                        </ul>
                        <a href="" id="lpayonline119" class="btn text-white" style="background-color: #124958;">Buy Now</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 pt-4 px-3">
                    <div class="card py-2 mx-2">
                    <div class="card-body">
                        <h5 class="card-header text-dark" style="background-color: #FFD700  ;">Gold <br> 120 Days</h5>
                        <p class="card-title pt-4 fs-4"><sup>$</sup><strong>219</strong></p>
                          <ul class="list-group list-group-flush py-4 test">
                            <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>  <span class="mx-1">2500+ Practice Questions</span></li>
                            <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>  <span class="mx-1">500+ NGN Questions</span></li>
                            <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>  <span class="mx-1">Digital Flashcards</span></li>
                            <li class="list-group-item"> <i class="fa fa-check" aria-hidden="true"></i>  <span class="mx-1">3 Self Assessment</span></li>
                            <li class="list-group-item"> <i class="fa fa-check" aria-hidden="true"></i>  <span class="mx-1">1-time reset option</span></li>
                        </ul>
                        <a href="" id="lpayonline119" class="btn text-white" style="background-color: #124958;">Buy Now</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 pt-4 px-3">
                    <div class="card py-2 mx-2">
                    <div class="card-body">
                        <h5 class="card-header text-dark" style="background-color: #E5E4E2 ;">Platinum <br> 180 Days</h5>
                        <p class="card-title pt-4 fs-4"><sup>$</sup><strong>299</strong></p>
                          <ul class="list-group list-group-flush py-4 test">
                            <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>  <span class="mx-1">2500+ Practice Questions</span></li>
                            <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>  <span class="mx-1">500+ NGN Questions</span></li>
                            <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>  <span class="mx-1">Digital Flashcards</span></li>
                            <li class="list-group-item"> <i class="fa fa-check" aria-hidden="true"></i>  <span class="mx-1">4 Self Assessment</span></li>
                            <li class="list-group-item"> <i class="fa fa-check" aria-hidden="true"></i>  <span class="mx-1">1 reset option</span></li>
                        </ul>
                        <a href="" id="lpayonline119" class="btn text-white" style="background-color: #124958;">Buy Now</a>
                    </div>
                    </div>
                </div>
                </div>
        </div>

		


						</div>
					</div>
				</div>
				</div>
    		</div>

    		<div class="dynamicDiv" id="dd.0.5"></div>

    		<div class="dynamicDiv" id="dd.0.6"></div>

    		<div class="dynamicDiv" id="dd.0.7"></div>
			
<div id="payonline119"  >

		<form class="contact-form" action="" id="contact-form" method="post" enctype="multipart/form-data"  >
		
		<div align="right">
			<a id="lpayonline1191" style="font-size:15px;" class="button">X</a>
					
			</div>
			<h1>Billing Address</h1>			
			   		
			<div>
				<div>
					<label>Name: </label><span id="userName-info" class="info"></span>
				</div>
				<div>
					<input type="text" id="userName" name="userName" class="inputBox" />
				</div>
			</div>
			<div>
				<div>
					<label>Email: </label><span id="userEmail-info" class="info"></span>
				</div>
				<div>
					<input type="text" id="userEmail" name="userEmail" class="inputBox" />
				</div>
			</div>
			<div>
				<div>
					<label>Phone: </label><span id="phone-info" class="info"></span>
				</div>
				<div>
					<input type="text" id="userPhone" name="userPhone" class="inputBox" />
				</div>
			</div>				       
			<div>
				<div>
					<label>Country: </label><span id="country-info" class="info"></span>					
				</div>
				<div>
					  <select class="select" id="country_billing" name="country_billing">
        <option value="0" label="Select a country ... " selected="selected">Select a country ... </option>
        <optgroup id="country-optgroup-Africa" label="Africa">
            <option value="DZ" label="Algeria">Algeria</option>
            <option value="AO" label="Angola">Angola</option>
            <option value="BJ" label="Benin">Benin</option>
            <option value="BW" label="Botswana">Botswana</option>
            <option value="BF" label="Burkina Faso">Burkina Faso</option>
            <option value="BI" label="Burundi">Burundi</option>
            <option value="CM" label="Cameroon">Cameroon</option>
            <option value="CV" label="Cape Verde">Cape Verde</option>
            <option value="CF" label="Central African Republic">Central African Republic</option>
            <option value="TD" label="Chad">Chad</option>
            <option value="KM" label="Comoros">Comoros</option>
            <option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
            <option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
            <option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
            <option value="DJ" label="Djibouti">Djibouti</option>
            <option value="EG" label="Egypt">Egypt</option>
            <option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
            <option value="ER" label="Eritrea">Eritrea</option>
            <option value="ET" label="Ethiopia">Ethiopia</option>
            <option value="GA" label="Gabon">Gabon</option>
            <option value="GM" label="Gambia">Gambia</option>
            <option value="GH" label="Ghana">Ghana</option>
            <option value="GN" label="Guinea">Guinea</option>
            <option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
            <option value="KE" label="Kenya">Kenya</option>
            <option value="LS" label="Lesotho">Lesotho</option>
            <option value="LR" label="Liberia">Liberia</option>
            <option value="LY" label="Libya">Libya</option>
            <option value="MG" label="Madagascar">Madagascar</option>
            <option value="MW" label="Malawi">Malawi</option>
            <option value="ML" label="Mali">Mali</option>
            <option value="MR" label="Mauritania">Mauritania</option>
            <option value="MU" label="Mauritius">Mauritius</option>
            <option value="YT" label="Mayotte">Mayotte</option>
            <option value="MA" label="Morocco">Morocco</option>
            <option value="MZ" label="Mozambique">Mozambique</option>
            <option value="NA" label="Namibia">Namibia</option>
            <option value="NE" label="Niger">Niger</option>
            <option value="NG" label="Nigeria">Nigeria</option>
            <option value="RW" label="Rwanda">Rwanda</option>
            <option value="RE" label="Réunion">Réunion</option>
            <option value="SH" label="Saint Helena">Saint Helena</option>
            <option value="SN" label="Senegal">Senegal</option>
            <option value="SC" label="Seychelles">Seychelles</option>
            <option value="SL" label="Sierra Leone">Sierra Leone</option>
            <option value="SO" label="Somalia">Somalia</option>
            <option value="ZA" label="South Africa">South Africa</option>
            <option value="SD" label="Sudan">Sudan</option>
            <option value="SZ" label="Swaziland">Swaziland</option>
            <option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
            <option value="TZ" label="Tanzania">Tanzania</option>
            <option value="TG" label="Togo">Togo</option>
            <option value="TN" label="Tunisia">Tunisia</option>
            <option value="UG" label="Uganda">Uganda</option>
            <option value="EH" label="Western Sahara">Western Sahara</option>
            <option value="ZM" label="Zambia">Zambia</option>
            <option value="ZW" label="Zimbabwe">Zimbabwe</option>
        </optgroup>
        <optgroup id="country-optgroup-Americas" label="Americas">
            <option value="AI" label="Anguilla">Anguilla</option>
            <option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
            <option value="AR" label="Argentina">Argentina</option>
            <option value="AW" label="Aruba">Aruba</option>
            <option value="BS" label="Bahamas">Bahamas</option>
            <option value="BB" label="Barbados">Barbados</option>
            <option value="BZ" label="Belize">Belize</option>
            <option value="BM" label="Bermuda">Bermuda</option>
            <option value="BO" label="Bolivia">Bolivia</option>
            <option value="BR" label="Brazil">Brazil</option>
            <option value="VG" label="British Virgin Islands">British Virgin Islands</option>
            <option value="CA" label="Canada">Canada</option>
            <option value="KY" label="Cayman Islands">Cayman Islands</option>
            <option value="CL" label="Chile">Chile</option>
            <option value="CO" label="Colombia">Colombia</option>
            <option value="CR" label="Costa Rica">Costa Rica</option>
            <option value="CU" label="Cuba">Cuba</option>
            <option value="DM" label="Dominica">Dominica</option>
            <option value="DO" label="Dominican Republic">Dominican Republic</option>
            <option value="EC" label="Ecuador">Ecuador</option>
            <option value="SV" label="El Salvador">El Salvador</option>
            <option value="FK" label="Falkland Islands">Falkland Islands</option>
            <option value="GF" label="French Guiana">French Guiana</option>
            <option value="GL" label="Greenland">Greenland</option>
            <option value="GD" label="Grenada">Grenada</option>
            <option value="GP" label="Guadeloupe">Guadeloupe</option>
            <option value="GT" label="Guatemala">Guatemala</option>
            <option value="GY" label="Guyana">Guyana</option>
            <option value="HT" label="Haiti">Haiti</option>
            <option value="HN" label="Honduras">Honduras</option>
            <option value="JM" label="Jamaica">Jamaica</option>
            <option value="MQ" label="Martinique">Martinique</option>
            <option value="MX" label="Mexico">Mexico</option>
            <option value="MS" label="Montserrat">Montserrat</option>
            <option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
            <option value="NI" label="Nicaragua">Nicaragua</option>
            <option value="PA" label="Panama">Panama</option>
            <option value="PY" label="Paraguay">Paraguay</option>
            <option value="PE" label="Peru">Peru</option>
            <option value="PR" label="Puerto Rico">Puerto Rico</option>
            <option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
            <option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
            <option value="LC" label="Saint Lucia">Saint Lucia</option>
            <option value="MF" label="Saint Martin">Saint Martin</option>
            <option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
            <option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
            <option value="SR" label="Suriname">Suriname</option>
            <option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
            <option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
            <option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
            <option value="US" label="United States">United States</option>
            <option value="UY" label="Uruguay">Uruguay</option>
            <option value="VE" label="Venezuela">Venezuela</option>
        </optgroup>
        <optgroup id="country-optgroup-Asia" label="Asia">
            <option value="AF" label="Afghanistan">Afghanistan</option>
            <option value="AM" label="Armenia">Armenia</option>
            <option value="AZ" label="Azerbaijan">Azerbaijan</option>
            <option value="BH" label="Bahrain">Bahrain</option>
            <option value="BD" label="Bangladesh">Bangladesh</option>
            <option value="BT" label="Bhutan">Bhutan</option>
            <option value="BN" label="Brunei">Brunei</option>
            <option value="KH" label="Cambodia">Cambodia</option>
            <option value="CN" label="China">China</option>
            <option value="GE" label="Georgia">Georgia</option>
            <option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
            <option value="IN" label="India">India</option>
            <option value="ID" label="Indonesia">Indonesia</option>
            <option value="IR" label="Iran">Iran</option>
            <option value="IQ" label="Iraq">Iraq</option>
            <option value="IL" label="Israel">Israel</option>
            <option value="JP" label="Japan">Japan</option>
            <option value="JO" label="Jordan">Jordan</option>
            <option value="KZ" label="Kazakhstan">Kazakhstan</option>
            <option value="KW" label="Kuwait">Kuwait</option>
            <option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
            <option value="LA" label="Laos">Laos</option>
            <option value="LB" label="Lebanon">Lebanon</option>
            <option value="MO" label="Macau SAR China">Macau SAR China</option>
            <option value="MY" label="Malaysia">Malaysia</option>
            <option value="MV" label="Maldives">Maldives</option>
            <option value="MN" label="Mongolia">Mongolia</option>
            <option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
            <option value="NP" label="Nepal">Nepal</option>
            <option value="NT" label="Neutral Zone">Neutral Zone</option>
            <option value="KP" label="North Korea">North Korea</option>
            <option value="OM" label="Oman">Oman</option>
            <option value="PK" label="Pakistan">Pakistan</option>
            <option value="PS" label="Palestinian Territories">Palestinian Territories</option>
            <option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
            <option value="PH" label="Philippines">Philippines</option>
            <option value="QA" label="Qatar">Qatar</option>
            <option value="SA" label="Saudi Arabia">Saudi Arabia</option>
            <option value="SG" label="Singapore">Singapore</option>
            <option value="KR" label="South Korea">South Korea</option>
            <option value="LK" label="Sri Lanka">Sri Lanka</option>
            <option value="SY" label="Syria">Syria</option>
            <option value="TW" label="Taiwan">Taiwan</option>
            <option value="TJ" label="Tajikistan">Tajikistan</option>
            <option value="TH" label="Thailand">Thailand</option>
            <option value="TL" label="Timor-Leste">Timor-Leste</option>
            <option value="TR" label="Turkey">Turkey</option>
            <option value="TM" label="Turkmenistan">Turkmenistan</option>
            <option value="AE" label="United Arab Emirates">United Arab Emirates</option>
            <option value="UZ" label="Uzbekistan">Uzbekistan</option>
            <option value="VN" label="Vietnam">Vietnam</option>
            <option value="YE" label="Yemen">Yemen</option>
        </optgroup>
        <optgroup id="country-optgroup-Europe" label="Europe">
            <option value="AL" label="Albania">Albania</option>
            <option value="AD" label="Andorra">Andorra</option>
            <option value="AT" label="Austria">Austria</option>
            <option value="BY" label="Belarus">Belarus</option>
            <option value="BE" label="Belgium">Belgium</option>
            <option value="BA" label="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
            <option value="BG" label="Bulgaria">Bulgaria</option>
            <option value="HR" label="Croatia">Croatia</option>
            <option value="CY" label="Cyprus">Cyprus</option>
            <option value="CZ" label="Czech Republic">Czech Republic</option>
            <option value="DK" label="Denmark">Denmark</option>
            <option value="DD" label="East Germany">East Germany</option>
            <option value="EE" label="Estonia">Estonia</option>
            <option value="FO" label="Faroe Islands">Faroe Islands</option>
            <option value="FI" label="Finland">Finland</option>
            <option value="FR" label="France">France</option>
            <option value="DE" label="Germany">Germany</option>
            <option value="GI" label="Gibraltar">Gibraltar</option>
            <option value="GR" label="Greece">Greece</option>
            <option value="GG" label="Guernsey">Guernsey</option>
            <option value="HU" label="Hungary">Hungary</option>
            <option value="IS" label="Iceland">Iceland</option>
            <option value="IE" label="Ireland">Ireland</option>
            <option value="IM" label="Isle of Man">Isle of Man</option>
            <option value="IT" label="Italy">Italy</option>
            <option value="JE" label="Jersey">Jersey</option>
            <option value="LV" label="Latvia">Latvia</option>
            <option value="LI" label="Liechtenstein">Liechtenstein</option>
            <option value="LT" label="Lithuania">Lithuania</option>
            <option value="LU" label="Luxembourg">Luxembourg</option>
            <option value="MK" label="Macedonia">Macedonia</option>
            <option value="MT" label="Malta">Malta</option>
            <option value="FX" label="Metropolitan France">Metropolitan France</option>
            <option value="MD" label="Moldova">Moldova</option>
            <option value="MC" label="Monaco">Monaco</option>
            <option value="ME" label="Montenegro">Montenegro</option>
            <option value="NL" label="Netherlands">Netherlands</option>
            <option value="NO" label="Norway">Norway</option>
            <option value="PL" label="Poland">Poland</option>
            <option value="PT" label="Portugal">Portugal</option>
            <option value="RO" label="Romania">Romania</option>
            <option value="RU" label="Russia">Russia</option>
            <option value="SM" label="San Marino">San Marino</option>
            <option value="RS" label="Serbia">Serbia</option>
            <option value="CS" label="Serbia and Montenegro">Serbia and Montenegro</option>
            <option value="SK" label="Slovakia">Slovakia</option>
            <option value="SI" label="Slovenia">Slovenia</option>
            <option value="ES" label="Spain">Spain</option>
            <option value="SJ" label="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
            <option value="SE" label="Sweden">Sweden</option>
            <option value="CH" label="Switzerland">Switzerland</option>
            <option value="UA" label="Ukraine">Ukraine</option>
            <option value="SU" label="Union of Soviet Socialist Republics">Union of Soviet Socialist Republics</option>
            <option value="GB" label="United Kingdom">United Kingdom</option>
            <option value="VA" label="Vatican City">Vatican City</option>
            <option value="AX" label="Åland Islands">Åland Islands</option>
        </optgroup>
        <optgroup id="country-optgroup-Oceania" label="Oceania">
            <option value="AS" label="American Samoa">American Samoa</option>
            <option value="AQ" label="Antarctica">Antarctica</option>
            <option value="AU" label="Australia">Australia</option>
            <option value="BV" label="Bouvet Island">Bouvet Island</option>
            <option value="IO" label="British Indian Ocean Territory">British Indian Ocean Territory</option>
            <option value="CX" label="Christmas Island">Christmas Island</option>
            <option value="CC" label="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option>
            <option value="CK" label="Cook Islands">Cook Islands</option>
            <option value="FJ" label="Fiji">Fiji</option>
            <option value="PF" label="French Polynesia">French Polynesia</option>
            <option value="TF" label="French Southern Territories">French Southern Territories</option>
            <option value="GU" label="Guam">Guam</option>
            <option value="HM" label="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
            <option value="KI" label="Kiribati">Kiribati</option>
            <option value="MH" label="Marshall Islands">Marshall Islands</option>
            <option value="FM" label="Micronesia">Micronesia</option>
            <option value="NR" label="Nauru">Nauru</option>
            <option value="NC" label="New Caledonia">New Caledonia</option>
            <option value="NZ" label="New Zealand">New Zealand</option>
            <option value="NU" label="Niue">Niue</option>
            <option value="NF" label="Norfolk Island">Norfolk Island</option>
            <option value="MP" label="Northern Mariana Islands">Northern Mariana Islands</option>
            <option value="PW" label="Palau">Palau</option>
            <option value="PG" label="Papua New Guinea">Papua New Guinea</option>
            <option value="PN" label="Pitcairn Islands">Pitcairn Islands</option>
            <option value="WS" label="Samoa">Samoa</option>
            <option value="SB" label="Solomon Islands">Solomon Islands</option>
            <option value="GS" label="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
            <option value="TK" label="Tokelau">Tokelau</option>
            <option value="TO" label="Tonga">Tonga</option>
            <option value="TV" label="Tuvalu">Tuvalu</option>
            <option value="UM" label="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
            <option value="VU" label="Vanuatu">Vanuatu</option>
            <option value="WF" label="Wallis and Futuna">Wallis and Futuna</option>
        </optgroup>
    </select>
				</div>
			</div>			
			<div>
				<input type="submit" id="send" name="sendA" value="send" />
			</div>
		</form>
	</div>


<div id="payonline149">
	
		<form class="contact-form" action="" id="contact-form" method="post"
			enctype="multipart/form-data">
			<div align="right">
					<a id="lpayonline1491" style="font-size:15px;" class="button">X</a>
			</div>
			<h1>Billing Address</h1>
			<div>
				<div>
					<label>Name: </label><span id="userName-info" class="info"></span>
				</div>
				<div>
					<input type="text" id="userName" name="userName" class="inputBox" />
				</div>
			</div>
			<div>
				<div>
					<label>Email: </label><span id="userEmail-info" class="info"></span>
				</div>
				<div>
					<input type="text" id="userEmail" name="userEmail" class="inputBox" />
				</div>
			</div>
			<div>
				<div>
					<label>Phone: </label><span id="phone-info class="info"></span>
				</div>
				<div>
					<input type="text" id="userPhone" name="userPhone" class="inputBox" />
				</div>
			</div>
			<div>
				<div>
					<label>Country: </label><span id="country-info" class="info"></span>					
				</div>
				<div>
					  <select class="select" id="country_billing" name="country_billing">
        <option value="0" label="Select a country ... " selected="selected">Select a country ... </option>
        <optgroup id="country-optgroup-Africa" label="Africa">
            <option value="DZ" label="Algeria">Algeria</option>
            <option value="AO" label="Angola">Angola</option>
            <option value="BJ" label="Benin">Benin</option>
            <option value="BW" label="Botswana">Botswana</option>
            <option value="BF" label="Burkina Faso">Burkina Faso</option>
            <option value="BI" label="Burundi">Burundi</option>
            <option value="CM" label="Cameroon">Cameroon</option>
            <option value="CV" label="Cape Verde">Cape Verde</option>
            <option value="CF" label="Central African Republic">Central African Republic</option>
            <option value="TD" label="Chad">Chad</option>
            <option value="KM" label="Comoros">Comoros</option>
            <option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
            <option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
            <option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
            <option value="DJ" label="Djibouti">Djibouti</option>
            <option value="EG" label="Egypt">Egypt</option>
            <option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
            <option value="ER" label="Eritrea">Eritrea</option>
            <option value="ET" label="Ethiopia">Ethiopia</option>
            <option value="GA" label="Gabon">Gabon</option>
            <option value="GM" label="Gambia">Gambia</option>
            <option value="GH" label="Ghana">Ghana</option>
            <option value="GN" label="Guinea">Guinea</option>
            <option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
            <option value="KE" label="Kenya">Kenya</option>
            <option value="LS" label="Lesotho">Lesotho</option>
            <option value="LR" label="Liberia">Liberia</option>
            <option value="LY" label="Libya">Libya</option>
            <option value="MG" label="Madagascar">Madagascar</option>
            <option value="MW" label="Malawi">Malawi</option>
            <option value="ML" label="Mali">Mali</option>
            <option value="MR" label="Mauritania">Mauritania</option>
            <option value="MU" label="Mauritius">Mauritius</option>
            <option value="YT" label="Mayotte">Mayotte</option>
            <option value="MA" label="Morocco">Morocco</option>
            <option value="MZ" label="Mozambique">Mozambique</option>
            <option value="NA" label="Namibia">Namibia</option>
            <option value="NE" label="Niger">Niger</option>
            <option value="NG" label="Nigeria">Nigeria</option>
            <option value="RW" label="Rwanda">Rwanda</option>
            <option value="RE" label="Réunion">Réunion</option>
            <option value="SH" label="Saint Helena">Saint Helena</option>
            <option value="SN" label="Senegal">Senegal</option>
            <option value="SC" label="Seychelles">Seychelles</option>
            <option value="SL" label="Sierra Leone">Sierra Leone</option>
            <option value="SO" label="Somalia">Somalia</option>
            <option value="ZA" label="South Africa">South Africa</option>
            <option value="SD" label="Sudan">Sudan</option>
            <option value="SZ" label="Swaziland">Swaziland</option>
            <option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
            <option value="TZ" label="Tanzania">Tanzania</option>
            <option value="TG" label="Togo">Togo</option>
            <option value="TN" label="Tunisia">Tunisia</option>
            <option value="UG" label="Uganda">Uganda</option>
            <option value="EH" label="Western Sahara">Western Sahara</option>
            <option value="ZM" label="Zambia">Zambia</option>
            <option value="ZW" label="Zimbabwe">Zimbabwe</option>
        </optgroup>
        <optgroup id="country-optgroup-Americas" label="Americas">
            <option value="AI" label="Anguilla">Anguilla</option>
            <option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
            <option value="AR" label="Argentina">Argentina</option>
            <option value="AW" label="Aruba">Aruba</option>
            <option value="BS" label="Bahamas">Bahamas</option>
            <option value="BB" label="Barbados">Barbados</option>
            <option value="BZ" label="Belize">Belize</option>
            <option value="BM" label="Bermuda">Bermuda</option>
            <option value="BO" label="Bolivia">Bolivia</option>
            <option value="BR" label="Brazil">Brazil</option>
            <option value="VG" label="British Virgin Islands">British Virgin Islands</option>
            <option value="CA" label="Canada">Canada</option>
            <option value="KY" label="Cayman Islands">Cayman Islands</option>
            <option value="CL" label="Chile">Chile</option>
            <option value="CO" label="Colombia">Colombia</option>
            <option value="CR" label="Costa Rica">Costa Rica</option>
            <option value="CU" label="Cuba">Cuba</option>
            <option value="DM" label="Dominica">Dominica</option>
            <option value="DO" label="Dominican Republic">Dominican Republic</option>
            <option value="EC" label="Ecuador">Ecuador</option>
            <option value="SV" label="El Salvador">El Salvador</option>
            <option value="FK" label="Falkland Islands">Falkland Islands</option>
            <option value="GF" label="French Guiana">French Guiana</option>
            <option value="GL" label="Greenland">Greenland</option>
            <option value="GD" label="Grenada">Grenada</option>
            <option value="GP" label="Guadeloupe">Guadeloupe</option>
            <option value="GT" label="Guatemala">Guatemala</option>
            <option value="GY" label="Guyana">Guyana</option>
            <option value="HT" label="Haiti">Haiti</option>
            <option value="HN" label="Honduras">Honduras</option>
            <option value="JM" label="Jamaica">Jamaica</option>
            <option value="MQ" label="Martinique">Martinique</option>
            <option value="MX" label="Mexico">Mexico</option>
            <option value="MS" label="Montserrat">Montserrat</option>
            <option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
            <option value="NI" label="Nicaragua">Nicaragua</option>
            <option value="PA" label="Panama">Panama</option>
            <option value="PY" label="Paraguay">Paraguay</option>
            <option value="PE" label="Peru">Peru</option>
            <option value="PR" label="Puerto Rico">Puerto Rico</option>
            <option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
            <option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
            <option value="LC" label="Saint Lucia">Saint Lucia</option>
            <option value="MF" label="Saint Martin">Saint Martin</option>
            <option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
            <option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
            <option value="SR" label="Suriname">Suriname</option>
            <option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
            <option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
            <option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
            <option value="US" label="United States">United States</option>
            <option value="UY" label="Uruguay">Uruguay</option>
            <option value="VE" label="Venezuela">Venezuela</option>
        </optgroup>
        <optgroup id="country-optgroup-Asia" label="Asia">
            <option value="AF" label="Afghanistan">Afghanistan</option>
            <option value="AM" label="Armenia">Armenia</option>
            <option value="AZ" label="Azerbaijan">Azerbaijan</option>
            <option value="BH" label="Bahrain">Bahrain</option>
            <option value="BD" label="Bangladesh">Bangladesh</option>
            <option value="BT" label="Bhutan">Bhutan</option>
            <option value="BN" label="Brunei">Brunei</option>
            <option value="KH" label="Cambodia">Cambodia</option>
            <option value="CN" label="China">China</option>
            <option value="GE" label="Georgia">Georgia</option>
            <option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
            <option value="IN" label="India">India</option>
            <option value="ID" label="Indonesia">Indonesia</option>
            <option value="IR" label="Iran">Iran</option>
            <option value="IQ" label="Iraq">Iraq</option>
            <option value="IL" label="Israel">Israel</option>
            <option value="JP" label="Japan">Japan</option>
            <option value="JO" label="Jordan">Jordan</option>
            <option value="KZ" label="Kazakhstan">Kazakhstan</option>
            <option value="KW" label="Kuwait">Kuwait</option>
            <option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
            <option value="LA" label="Laos">Laos</option>
            <option value="LB" label="Lebanon">Lebanon</option>
            <option value="MO" label="Macau SAR China">Macau SAR China</option>
            <option value="MY" label="Malaysia">Malaysia</option>
            <option value="MV" label="Maldives">Maldives</option>
            <option value="MN" label="Mongolia">Mongolia</option>
            <option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
            <option value="NP" label="Nepal">Nepal</option>
            <option value="NT" label="Neutral Zone">Neutral Zone</option>
            <option value="KP" label="North Korea">North Korea</option>
            <option value="OM" label="Oman">Oman</option>
            <option value="PK" label="Pakistan">Pakistan</option>
            <option value="PS" label="Palestinian Territories">Palestinian Territories</option>
            <option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
            <option value="PH" label="Philippines">Philippines</option>
            <option value="QA" label="Qatar">Qatar</option>
            <option value="SA" label="Saudi Arabia">Saudi Arabia</option>
            <option value="SG" label="Singapore">Singapore</option>
            <option value="KR" label="South Korea">South Korea</option>
            <option value="LK" label="Sri Lanka">Sri Lanka</option>
            <option value="SY" label="Syria">Syria</option>
            <option value="TW" label="Taiwan">Taiwan</option>
            <option value="TJ" label="Tajikistan">Tajikistan</option>
            <option value="TH" label="Thailand">Thailand</option>
            <option value="TL" label="Timor-Leste">Timor-Leste</option>
            <option value="TR" label="Turkey">Turkey</option>
            <option value="TM" label="Turkmenistan">Turkmenistan</option>
            <option value="AE" label="United Arab Emirates">United Arab Emirates</option>
            <option value="UZ" label="Uzbekistan">Uzbekistan</option>
            <option value="VN" label="Vietnam">Vietnam</option>
            <option value="YE" label="Yemen">Yemen</option>
        </optgroup>
        <optgroup id="country-optgroup-Europe" label="Europe">
            <option value="AL" label="Albania">Albania</option>
            <option value="AD" label="Andorra">Andorra</option>
            <option value="AT" label="Austria">Austria</option>
            <option value="BY" label="Belarus">Belarus</option>
            <option value="BE" label="Belgium">Belgium</option>
            <option value="BA" label="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
            <option value="BG" label="Bulgaria">Bulgaria</option>
            <option value="HR" label="Croatia">Croatia</option>
            <option value="CY" label="Cyprus">Cyprus</option>
            <option value="CZ" label="Czech Republic">Czech Republic</option>
            <option value="DK" label="Denmark">Denmark</option>
            <option value="DD" label="East Germany">East Germany</option>
            <option value="EE" label="Estonia">Estonia</option>
            <option value="FO" label="Faroe Islands">Faroe Islands</option>
            <option value="FI" label="Finland">Finland</option>
            <option value="FR" label="France">France</option>
            <option value="DE" label="Germany">Germany</option>
            <option value="GI" label="Gibraltar">Gibraltar</option>
            <option value="GR" label="Greece">Greece</option>
            <option value="GG" label="Guernsey">Guernsey</option>
            <option value="HU" label="Hungary">Hungary</option>
            <option value="IS" label="Iceland">Iceland</option>
            <option value="IE" label="Ireland">Ireland</option>
            <option value="IM" label="Isle of Man">Isle of Man</option>
            <option value="IT" label="Italy">Italy</option>
            <option value="JE" label="Jersey">Jersey</option>
            <option value="LV" label="Latvia">Latvia</option>
            <option value="LI" label="Liechtenstein">Liechtenstein</option>
            <option value="LT" label="Lithuania">Lithuania</option>
            <option value="LU" label="Luxembourg">Luxembourg</option>
            <option value="MK" label="Macedonia">Macedonia</option>
            <option value="MT" label="Malta">Malta</option>
            <option value="FX" label="Metropolitan France">Metropolitan France</option>
            <option value="MD" label="Moldova">Moldova</option>
            <option value="MC" label="Monaco">Monaco</option>
            <option value="ME" label="Montenegro">Montenegro</option>
            <option value="NL" label="Netherlands">Netherlands</option>
            <option value="NO" label="Norway">Norway</option>
            <option value="PL" label="Poland">Poland</option>
            <option value="PT" label="Portugal">Portugal</option>
            <option value="RO" label="Romania">Romania</option>
            <option value="RU" label="Russia">Russia</option>
            <option value="SM" label="San Marino">San Marino</option>
            <option value="RS" label="Serbia">Serbia</option>
            <option value="CS" label="Serbia and Montenegro">Serbia and Montenegro</option>
            <option value="SK" label="Slovakia">Slovakia</option>
            <option value="SI" label="Slovenia">Slovenia</option>
            <option value="ES" label="Spain">Spain</option>
            <option value="SJ" label="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
            <option value="SE" label="Sweden">Sweden</option>
            <option value="CH" label="Switzerland">Switzerland</option>
            <option value="UA" label="Ukraine">Ukraine</option>
            <option value="SU" label="Union of Soviet Socialist Republics">Union of Soviet Socialist Republics</option>
            <option value="GB" label="United Kingdom">United Kingdom</option>
            <option value="VA" label="Vatican City">Vatican City</option>
            <option value="AX" label="Åland Islands">Åland Islands</option>
        </optgroup>
        <optgroup id="country-optgroup-Oceania" label="Oceania">
            <option value="AS" label="American Samoa">American Samoa</option>
            <option value="AQ" label="Antarctica">Antarctica</option>
            <option value="AU" label="Australia">Australia</option>
            <option value="BV" label="Bouvet Island">Bouvet Island</option>
            <option value="IO" label="British Indian Ocean Territory">British Indian Ocean Territory</option>
            <option value="CX" label="Christmas Island">Christmas Island</option>
            <option value="CC" label="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option>
            <option value="CK" label="Cook Islands">Cook Islands</option>
            <option value="FJ" label="Fiji">Fiji</option>
            <option value="PF" label="French Polynesia">French Polynesia</option>
            <option value="TF" label="French Southern Territories">French Southern Territories</option>
            <option value="GU" label="Guam">Guam</option>
            <option value="HM" label="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
            <option value="KI" label="Kiribati">Kiribati</option>
            <option value="MH" label="Marshall Islands">Marshall Islands</option>
            <option value="FM" label="Micronesia">Micronesia</option>
            <option value="NR" label="Nauru">Nauru</option>
            <option value="NC" label="New Caledonia">New Caledonia</option>
            <option value="NZ" label="New Zealand">New Zealand</option>
            <option value="NU" label="Niue">Niue</option>
            <option value="NF" label="Norfolk Island">Norfolk Island</option>
            <option value="MP" label="Northern Mariana Islands">Northern Mariana Islands</option>
            <option value="PW" label="Palau">Palau</option>
            <option value="PG" label="Papua New Guinea">Papua New Guinea</option>
            <option value="PN" label="Pitcairn Islands">Pitcairn Islands</option>
            <option value="WS" label="Samoa">Samoa</option>
            <option value="SB" label="Solomon Islands">Solomon Islands</option>
            <option value="GS" label="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
            <option value="TK" label="Tokelau">Tokelau</option>
            <option value="TO" label="Tonga">Tonga</option>
            <option value="TV" label="Tuvalu">Tuvalu</option>
            <option value="UM" label="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
            <option value="VU" label="Vanuatu">Vanuatu</option>
            <option value="WF" label="Wallis and Futuna">Wallis and Futuna</option>
        </optgroup>
    </select>	
				</div>
			</div>
			<div>
				<input type="submit" id="send" name="sendB" value="send" />
			</div>
		</form>
	</div>

<div id="payonline219">
	
		<form class="contact-form" action="" id="contact-form" method="post"
			enctype="multipart/form-data">
			<div align="right">
					<a id="lpayonline2191" style="font-size:15px;" class="button">X</a>
			</div>
			<h1>Billing Address</h1>
			<div>
				<div>
					<label>Name: </label><span id="userName-info" class="info"></span>
				</div>
				<div>
					<input type="text" id="userName" name="userName" class="inputBox" />
				</div>
			</div>
			<div>
				<div>
					<label>Email: </label><span id="userEmail-info" class="info"></span>
				</div>
				<div>
					<input type="text" id="userEmail" name="userEmail" class="inputBox" />
				</div>
			</div>
			<div>
				<div>
					<label>Phone: </label><span id="phone-info" class="info"></span>
				</div>
				<div>
					<input type="text" id="userPhone" name="userPhone" class="inputBox" />
				</div>
			</div>
						<div>
				<div>
					<label>Country: </label><span id="country-info" class="info"></span>					
				</div>
				<div>
					  <select class="select" id="country_billing" name="country_billing">
        <option value="0" label="Select a country ... " selected="selected">Select a country ... </option>
        <optgroup id="country-optgroup-Africa" label="Africa">
            <option value="DZ" label="Algeria">Algeria</option>
            <option value="AO" label="Angola">Angola</option>
            <option value="BJ" label="Benin">Benin</option>
            <option value="BW" label="Botswana">Botswana</option>
            <option value="BF" label="Burkina Faso">Burkina Faso</option>
            <option value="BI" label="Burundi">Burundi</option>
            <option value="CM" label="Cameroon">Cameroon</option>
            <option value="CV" label="Cape Verde">Cape Verde</option>
            <option value="CF" label="Central African Republic">Central African Republic</option>
            <option value="TD" label="Chad">Chad</option>
            <option value="KM" label="Comoros">Comoros</option>
            <option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
            <option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
            <option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
            <option value="DJ" label="Djibouti">Djibouti</option>
            <option value="EG" label="Egypt">Egypt</option>
            <option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
            <option value="ER" label="Eritrea">Eritrea</option>
            <option value="ET" label="Ethiopia">Ethiopia</option>
            <option value="GA" label="Gabon">Gabon</option>
            <option value="GM" label="Gambia">Gambia</option>
            <option value="GH" label="Ghana">Ghana</option>
            <option value="GN" label="Guinea">Guinea</option>
            <option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
            <option value="KE" label="Kenya">Kenya</option>
            <option value="LS" label="Lesotho">Lesotho</option>
            <option value="LR" label="Liberia">Liberia</option>
            <option value="LY" label="Libya">Libya</option>
            <option value="MG" label="Madagascar">Madagascar</option>
            <option value="MW" label="Malawi">Malawi</option>
            <option value="ML" label="Mali">Mali</option>
            <option value="MR" label="Mauritania">Mauritania</option>
            <option value="MU" label="Mauritius">Mauritius</option>
            <option value="YT" label="Mayotte">Mayotte</option>
            <option value="MA" label="Morocco">Morocco</option>
            <option value="MZ" label="Mozambique">Mozambique</option>
            <option value="NA" label="Namibia">Namibia</option>
            <option value="NE" label="Niger">Niger</option>
            <option value="NG" label="Nigeria">Nigeria</option>
            <option value="RW" label="Rwanda">Rwanda</option>
            <option value="RE" label="Réunion">Réunion</option>
            <option value="SH" label="Saint Helena">Saint Helena</option>
            <option value="SN" label="Senegal">Senegal</option>
            <option value="SC" label="Seychelles">Seychelles</option>
            <option value="SL" label="Sierra Leone">Sierra Leone</option>
            <option value="SO" label="Somalia">Somalia</option>
            <option value="ZA" label="South Africa">South Africa</option>
            <option value="SD" label="Sudan">Sudan</option>
            <option value="SZ" label="Swaziland">Swaziland</option>
            <option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
            <option value="TZ" label="Tanzania">Tanzania</option>
            <option value="TG" label="Togo">Togo</option>
            <option value="TN" label="Tunisia">Tunisia</option>
            <option value="UG" label="Uganda">Uganda</option>
            <option value="EH" label="Western Sahara">Western Sahara</option>
            <option value="ZM" label="Zambia">Zambia</option>
            <option value="ZW" label="Zimbabwe">Zimbabwe</option>
        </optgroup>
        <optgroup id="country-optgroup-Americas" label="Americas">
            <option value="AI" label="Anguilla">Anguilla</option>
            <option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
            <option value="AR" label="Argentina">Argentina</option>
            <option value="AW" label="Aruba">Aruba</option>
            <option value="BS" label="Bahamas">Bahamas</option>
            <option value="BB" label="Barbados">Barbados</option>
            <option value="BZ" label="Belize">Belize</option>
            <option value="BM" label="Bermuda">Bermuda</option>
            <option value="BO" label="Bolivia">Bolivia</option>
            <option value="BR" label="Brazil">Brazil</option>
            <option value="VG" label="British Virgin Islands">British Virgin Islands</option>
            <option value="CA" label="Canada">Canada</option>
            <option value="KY" label="Cayman Islands">Cayman Islands</option>
            <option value="CL" label="Chile">Chile</option>
            <option value="CO" label="Colombia">Colombia</option>
            <option value="CR" label="Costa Rica">Costa Rica</option>
            <option value="CU" label="Cuba">Cuba</option>
            <option value="DM" label="Dominica">Dominica</option>
            <option value="DO" label="Dominican Republic">Dominican Republic</option>
            <option value="EC" label="Ecuador">Ecuador</option>
            <option value="SV" label="El Salvador">El Salvador</option>
            <option value="FK" label="Falkland Islands">Falkland Islands</option>
            <option value="GF" label="French Guiana">French Guiana</option>
            <option value="GL" label="Greenland">Greenland</option>
            <option value="GD" label="Grenada">Grenada</option>
            <option value="GP" label="Guadeloupe">Guadeloupe</option>
            <option value="GT" label="Guatemala">Guatemala</option>
            <option value="GY" label="Guyana">Guyana</option>
            <option value="HT" label="Haiti">Haiti</option>
            <option value="HN" label="Honduras">Honduras</option>
            <option value="JM" label="Jamaica">Jamaica</option>
            <option value="MQ" label="Martinique">Martinique</option>
            <option value="MX" label="Mexico">Mexico</option>
            <option value="MS" label="Montserrat">Montserrat</option>
            <option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
            <option value="NI" label="Nicaragua">Nicaragua</option>
            <option value="PA" label="Panama">Panama</option>
            <option value="PY" label="Paraguay">Paraguay</option>
            <option value="PE" label="Peru">Peru</option>
            <option value="PR" label="Puerto Rico">Puerto Rico</option>
            <option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
            <option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
            <option value="LC" label="Saint Lucia">Saint Lucia</option>
            <option value="MF" label="Saint Martin">Saint Martin</option>
            <option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
            <option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
            <option value="SR" label="Suriname">Suriname</option>
            <option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
            <option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
            <option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
            <option value="US" label="United States">United States</option>
            <option value="UY" label="Uruguay">Uruguay</option>
            <option value="VE" label="Venezuela">Venezuela</option>
        </optgroup>
        <optgroup id="country-optgroup-Asia" label="Asia">
            <option value="AF" label="Afghanistan">Afghanistan</option>
            <option value="AM" label="Armenia">Armenia</option>
            <option value="AZ" label="Azerbaijan">Azerbaijan</option>
            <option value="BH" label="Bahrain">Bahrain</option>
            <option value="BD" label="Bangladesh">Bangladesh</option>
            <option value="BT" label="Bhutan">Bhutan</option>
            <option value="BN" label="Brunei">Brunei</option>
            <option value="KH" label="Cambodia">Cambodia</option>
            <option value="CN" label="China">China</option>
            <option value="GE" label="Georgia">Georgia</option>
            <option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
            <option value="IN" label="India">India</option>
            <option value="ID" label="Indonesia">Indonesia</option>
            <option value="IR" label="Iran">Iran</option>
            <option value="IQ" label="Iraq">Iraq</option>
            <option value="IL" label="Israel">Israel</option>
            <option value="JP" label="Japan">Japan</option>
            <option value="JO" label="Jordan">Jordan</option>
            <option value="KZ" label="Kazakhstan">Kazakhstan</option>
            <option value="KW" label="Kuwait">Kuwait</option>
            <option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
            <option value="LA" label="Laos">Laos</option>
            <option value="LB" label="Lebanon">Lebanon</option>
            <option value="MO" label="Macau SAR China">Macau SAR China</option>
            <option value="MY" label="Malaysia">Malaysia</option>
            <option value="MV" label="Maldives">Maldives</option>
            <option value="MN" label="Mongolia">Mongolia</option>
            <option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
            <option value="NP" label="Nepal">Nepal</option>
            <option value="NT" label="Neutral Zone">Neutral Zone</option>
            <option value="KP" label="North Korea">North Korea</option>
            <option value="OM" label="Oman">Oman</option>
            <option value="PK" label="Pakistan">Pakistan</option>
            <option value="PS" label="Palestinian Territories">Palestinian Territories</option>
            <option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
            <option value="PH" label="Philippines">Philippines</option>
            <option value="QA" label="Qatar">Qatar</option>
            <option value="SA" label="Saudi Arabia">Saudi Arabia</option>
            <option value="SG" label="Singapore">Singapore</option>
            <option value="KR" label="South Korea">South Korea</option>
            <option value="LK" label="Sri Lanka">Sri Lanka</option>
            <option value="SY" label="Syria">Syria</option>
            <option value="TW" label="Taiwan">Taiwan</option>
            <option value="TJ" label="Tajikistan">Tajikistan</option>
            <option value="TH" label="Thailand">Thailand</option>
            <option value="TL" label="Timor-Leste">Timor-Leste</option>
            <option value="TR" label="Turkey">Turkey</option>
            <option value="TM" label="Turkmenistan">Turkmenistan</option>
            <option value="AE" label="United Arab Emirates">United Arab Emirates</option>
            <option value="UZ" label="Uzbekistan">Uzbekistan</option>
            <option value="VN" label="Vietnam">Vietnam</option>
            <option value="YE" label="Yemen">Yemen</option>
        </optgroup>
        <optgroup id="country-optgroup-Europe" label="Europe">
            <option value="AL" label="Albania">Albania</option>
            <option value="AD" label="Andorra">Andorra</option>
            <option value="AT" label="Austria">Austria</option>
            <option value="BY" label="Belarus">Belarus</option>
            <option value="BE" label="Belgium">Belgium</option>
            <option value="BA" label="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
            <option value="BG" label="Bulgaria">Bulgaria</option>
            <option value="HR" label="Croatia">Croatia</option>
            <option value="CY" label="Cyprus">Cyprus</option>
            <option value="CZ" label="Czech Republic">Czech Republic</option>
            <option value="DK" label="Denmark">Denmark</option>
            <option value="DD" label="East Germany">East Germany</option>
            <option value="EE" label="Estonia">Estonia</option>
            <option value="FO" label="Faroe Islands">Faroe Islands</option>
            <option value="FI" label="Finland">Finland</option>
            <option value="FR" label="France">France</option>
            <option value="DE" label="Germany">Germany</option>
            <option value="GI" label="Gibraltar">Gibraltar</option>
            <option value="GR" label="Greece">Greece</option>
            <option value="GG" label="Guernsey">Guernsey</option>
            <option value="HU" label="Hungary">Hungary</option>
            <option value="IS" label="Iceland">Iceland</option>
            <option value="IE" label="Ireland">Ireland</option>
            <option value="IM" label="Isle of Man">Isle of Man</option>
            <option value="IT" label="Italy">Italy</option>
            <option value="JE" label="Jersey">Jersey</option>
            <option value="LV" label="Latvia">Latvia</option>
            <option value="LI" label="Liechtenstein">Liechtenstein</option>
            <option value="LT" label="Lithuania">Lithuania</option>
            <option value="LU" label="Luxembourg">Luxembourg</option>
            <option value="MK" label="Macedonia">Macedonia</option>
            <option value="MT" label="Malta">Malta</option>
            <option value="FX" label="Metropolitan France">Metropolitan France</option>
            <option value="MD" label="Moldova">Moldova</option>
            <option value="MC" label="Monaco">Monaco</option>
            <option value="ME" label="Montenegro">Montenegro</option>
            <option value="NL" label="Netherlands">Netherlands</option>
            <option value="NO" label="Norway">Norway</option>
            <option value="PL" label="Poland">Poland</option>
            <option value="PT" label="Portugal">Portugal</option>
            <option value="RO" label="Romania">Romania</option>
            <option value="RU" label="Russia">Russia</option>
            <option value="SM" label="San Marino">San Marino</option>
            <option value="RS" label="Serbia">Serbia</option>
            <option value="CS" label="Serbia and Montenegro">Serbia and Montenegro</option>
            <option value="SK" label="Slovakia">Slovakia</option>
            <option value="SI" label="Slovenia">Slovenia</option>
            <option value="ES" label="Spain">Spain</option>
            <option value="SJ" label="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
            <option value="SE" label="Sweden">Sweden</option>
            <option value="CH" label="Switzerland">Switzerland</option>
            <option value="UA" label="Ukraine">Ukraine</option>
            <option value="SU" label="Union of Soviet Socialist Republics">Union of Soviet Socialist Republics</option>
            <option value="GB" label="United Kingdom">United Kingdom</option>
            <option value="VA" label="Vatican City">Vatican City</option>
            <option value="AX" label="Åland Islands">Åland Islands</option>
        </optgroup>
        <optgroup id="country-optgroup-Oceania" label="Oceania">
            <option value="AS" label="American Samoa">American Samoa</option>
            <option value="AQ" label="Antarctica">Antarctica</option>
            <option value="AU" label="Australia">Australia</option>
            <option value="BV" label="Bouvet Island">Bouvet Island</option>
            <option value="IO" label="British Indian Ocean Territory">British Indian Ocean Territory</option>
            <option value="CX" label="Christmas Island">Christmas Island</option>
            <option value="CC" label="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option>
            <option value="CK" label="Cook Islands">Cook Islands</option>
            <option value="FJ" label="Fiji">Fiji</option>
            <option value="PF" label="French Polynesia">French Polynesia</option>
            <option value="TF" label="French Southern Territories">French Southern Territories</option>
            <option value="GU" label="Guam">Guam</option>
            <option value="HM" label="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
            <option value="KI" label="Kiribati">Kiribati</option>
            <option value="MH" label="Marshall Islands">Marshall Islands</option>
            <option value="FM" label="Micronesia">Micronesia</option>
            <option value="NR" label="Nauru">Nauru</option>
            <option value="NC" label="New Caledonia">New Caledonia</option>
            <option value="NZ" label="New Zealand">New Zealand</option>
            <option value="NU" label="Niue">Niue</option>
            <option value="NF" label="Norfolk Island">Norfolk Island</option>
            <option value="MP" label="Northern Mariana Islands">Northern Mariana Islands</option>
            <option value="PW" label="Palau">Palau</option>
            <option value="PG" label="Papua New Guinea">Papua New Guinea</option>
            <option value="PN" label="Pitcairn Islands">Pitcairn Islands</option>
            <option value="WS" label="Samoa">Samoa</option>
            <option value="SB" label="Solomon Islands">Solomon Islands</option>
            <option value="GS" label="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
            <option value="TK" label="Tokelau">Tokelau</option>
            <option value="TO" label="Tonga">Tonga</option>
            <option value="TV" label="Tuvalu">Tuvalu</option>
            <option value="UM" label="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
            <option value="VU" label="Vanuatu">Vanuatu</option>
            <option value="WF" label="Wallis and Futuna">Wallis and Futuna</option>
        </optgroup>
    </select>
				</div>
			</div>
			<div>
				<input type="submit" id="send" name="sendC" value="send" />
			</div>
		</form>
	</div>

<div id="payonline2539">
	
		<form class="contact-form" action="" id="contact-form" method="post"
			enctype="multipart/form-data">
			<div align="right">
					<a id="lpayonline25391" style="font-size:15px;" class="button">X</a>
			</div>
			<h1>Billing Address</h1>
			<div>
				<div>
					<label>Name: </label><span id="userName-info" class="info"></span>
				</div>
				<div>
					<input type="text" id="userName" name="userName" class="inputBox" />
				</div>
			</div>
			<div>
				<div>
					<label>Email: </label><span id="userEmail-info" class="info"></span>
				</div>
				<div>
					<input type="text" id="userEmail" name="userEmail" class="inputBox" />
				</div>
			</div>
			<div>
				<div>
					<label>Phone: </label><span id="phone-info" class="info"></span>
				</div>
				<div>
					<input type="text" id="userPhone" name="userPhone" class="inputBox" />
				</div>
			</div>
						<div>
				<div>
					<label>Country: </label><span id="country-info" class="info"></span>					
				</div>
				<div>
					 <select class="select" id="country_billing" name="country_billing">
        <option value="0" label="Select a country ... " selected="selected">Select a country ... </option>
        <optgroup id="country-optgroup-Africa" label="Africa">
            <option value="DZ" label="Algeria">Algeria</option>
            <option value="AO" label="Angola">Angola</option>
            <option value="BJ" label="Benin">Benin</option>
            <option value="BW" label="Botswana">Botswana</option>
            <option value="BF" label="Burkina Faso">Burkina Faso</option>
            <option value="BI" label="Burundi">Burundi</option>
            <option value="CM" label="Cameroon">Cameroon</option>
            <option value="CV" label="Cape Verde">Cape Verde</option>
            <option value="CF" label="Central African Republic">Central African Republic</option>
            <option value="TD" label="Chad">Chad</option>
            <option value="KM" label="Comoros">Comoros</option>
            <option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
            <option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
            <option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
            <option value="DJ" label="Djibouti">Djibouti</option>
            <option value="EG" label="Egypt">Egypt</option>
            <option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
            <option value="ER" label="Eritrea">Eritrea</option>
            <option value="ET" label="Ethiopia">Ethiopia</option>
            <option value="GA" label="Gabon">Gabon</option>
            <option value="GM" label="Gambia">Gambia</option>
            <option value="GH" label="Ghana">Ghana</option>
            <option value="GN" label="Guinea">Guinea</option>
            <option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
            <option value="KE" label="Kenya">Kenya</option>
            <option value="LS" label="Lesotho">Lesotho</option>
            <option value="LR" label="Liberia">Liberia</option>
            <option value="LY" label="Libya">Libya</option>
            <option value="MG" label="Madagascar">Madagascar</option>
            <option value="MW" label="Malawi">Malawi</option>
            <option value="ML" label="Mali">Mali</option>
            <option value="MR" label="Mauritania">Mauritania</option>
            <option value="MU" label="Mauritius">Mauritius</option>
            <option value="YT" label="Mayotte">Mayotte</option>
            <option value="MA" label="Morocco">Morocco</option>
            <option value="MZ" label="Mozambique">Mozambique</option>
            <option value="NA" label="Namibia">Namibia</option>
            <option value="NE" label="Niger">Niger</option>
            <option value="NG" label="Nigeria">Nigeria</option>
            <option value="RW" label="Rwanda">Rwanda</option>
            <option value="RE" label="Réunion">Réunion</option>
            <option value="SH" label="Saint Helena">Saint Helena</option>
            <option value="SN" label="Senegal">Senegal</option>
            <option value="SC" label="Seychelles">Seychelles</option>
            <option value="SL" label="Sierra Leone">Sierra Leone</option>
            <option value="SO" label="Somalia">Somalia</option>
            <option value="ZA" label="South Africa">South Africa</option>
            <option value="SD" label="Sudan">Sudan</option>
            <option value="SZ" label="Swaziland">Swaziland</option>
            <option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
            <option value="TZ" label="Tanzania">Tanzania</option>
            <option value="TG" label="Togo">Togo</option>
            <option value="TN" label="Tunisia">Tunisia</option>
            <option value="UG" label="Uganda">Uganda</option>
            <option value="EH" label="Western Sahara">Western Sahara</option>
            <option value="ZM" label="Zambia">Zambia</option>
            <option value="ZW" label="Zimbabwe">Zimbabwe</option>
        </optgroup>
        <optgroup id="country-optgroup-Americas" label="Americas">
            <option value="AI" label="Anguilla">Anguilla</option>
            <option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
            <option value="AR" label="Argentina">Argentina</option>
            <option value="AW" label="Aruba">Aruba</option>
            <option value="BS" label="Bahamas">Bahamas</option>
            <option value="BB" label="Barbados">Barbados</option>
            <option value="BZ" label="Belize">Belize</option>
            <option value="BM" label="Bermuda">Bermuda</option>
            <option value="BO" label="Bolivia">Bolivia</option>
            <option value="BR" label="Brazil">Brazil</option>
            <option value="VG" label="British Virgin Islands">British Virgin Islands</option>
            <option value="CA" label="Canada">Canada</option>
            <option value="KY" label="Cayman Islands">Cayman Islands</option>
            <option value="CL" label="Chile">Chile</option>
            <option value="CO" label="Colombia">Colombia</option>
            <option value="CR" label="Costa Rica">Costa Rica</option>
            <option value="CU" label="Cuba">Cuba</option>
            <option value="DM" label="Dominica">Dominica</option>
            <option value="DO" label="Dominican Republic">Dominican Republic</option>
            <option value="EC" label="Ecuador">Ecuador</option>
            <option value="SV" label="El Salvador">El Salvador</option>
            <option value="FK" label="Falkland Islands">Falkland Islands</option>
            <option value="GF" label="French Guiana">French Guiana</option>
            <option value="GL" label="Greenland">Greenland</option>
            <option value="GD" label="Grenada">Grenada</option>
            <option value="GP" label="Guadeloupe">Guadeloupe</option>
            <option value="GT" label="Guatemala">Guatemala</option>
            <option value="GY" label="Guyana">Guyana</option>
            <option value="HT" label="Haiti">Haiti</option>
            <option value="HN" label="Honduras">Honduras</option>
            <option value="JM" label="Jamaica">Jamaica</option>
            <option value="MQ" label="Martinique">Martinique</option>
            <option value="MX" label="Mexico">Mexico</option>
            <option value="MS" label="Montserrat">Montserrat</option>
            <option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
            <option value="NI" label="Nicaragua">Nicaragua</option>
            <option value="PA" label="Panama">Panama</option>
            <option value="PY" label="Paraguay">Paraguay</option>
            <option value="PE" label="Peru">Peru</option>
            <option value="PR" label="Puerto Rico">Puerto Rico</option>
            <option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
            <option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
            <option value="LC" label="Saint Lucia">Saint Lucia</option>
            <option value="MF" label="Saint Martin">Saint Martin</option>
            <option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
            <option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
            <option value="SR" label="Suriname">Suriname</option>
            <option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
            <option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
            <option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
            <option value="US" label="United States">United States</option>
            <option value="UY" label="Uruguay">Uruguay</option>
            <option value="VE" label="Venezuela">Venezuela</option>
        </optgroup>
        <optgroup id="country-optgroup-Asia" label="Asia">
            <option value="AF" label="Afghanistan">Afghanistan</option>
            <option value="AM" label="Armenia">Armenia</option>
            <option value="AZ" label="Azerbaijan">Azerbaijan</option>
            <option value="BH" label="Bahrain">Bahrain</option>
            <option value="BD" label="Bangladesh">Bangladesh</option>
            <option value="BT" label="Bhutan">Bhutan</option>
            <option value="BN" label="Brunei">Brunei</option>
            <option value="KH" label="Cambodia">Cambodia</option>
            <option value="CN" label="China">China</option>
            <option value="GE" label="Georgia">Georgia</option>
            <option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
            <option value="IN" label="India">India</option>
            <option value="ID" label="Indonesia">Indonesia</option>
            <option value="IR" label="Iran">Iran</option>
            <option value="IQ" label="Iraq">Iraq</option>
            <option value="IL" label="Israel">Israel</option>
            <option value="JP" label="Japan">Japan</option>
            <option value="JO" label="Jordan">Jordan</option>
            <option value="KZ" label="Kazakhstan">Kazakhstan</option>
            <option value="KW" label="Kuwait">Kuwait</option>
            <option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
            <option value="LA" label="Laos">Laos</option>
            <option value="LB" label="Lebanon">Lebanon</option>
            <option value="MO" label="Macau SAR China">Macau SAR China</option>
            <option value="MY" label="Malaysia">Malaysia</option>
            <option value="MV" label="Maldives">Maldives</option>
            <option value="MN" label="Mongolia">Mongolia</option>
            <option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
            <option value="NP" label="Nepal">Nepal</option>
            <option value="NT" label="Neutral Zone">Neutral Zone</option>
            <option value="KP" label="North Korea">North Korea</option>
            <option value="OM" label="Oman">Oman</option>
            <option value="PK" label="Pakistan">Pakistan</option>
            <option value="PS" label="Palestinian Territories">Palestinian Territories</option>
            <option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
            <option value="PH" label="Philippines">Philippines</option>
            <option value="QA" label="Qatar">Qatar</option>
            <option value="SA" label="Saudi Arabia">Saudi Arabia</option>
            <option value="SG" label="Singapore">Singapore</option>
            <option value="KR" label="South Korea">South Korea</option>
            <option value="LK" label="Sri Lanka">Sri Lanka</option>
            <option value="SY" label="Syria">Syria</option>
            <option value="TW" label="Taiwan">Taiwan</option>
            <option value="TJ" label="Tajikistan">Tajikistan</option>
            <option value="TH" label="Thailand">Thailand</option>
            <option value="TL" label="Timor-Leste">Timor-Leste</option>
            <option value="TR" label="Turkey">Turkey</option>
            <option value="TM" label="Turkmenistan">Turkmenistan</option>
            <option value="AE" label="United Arab Emirates">United Arab Emirates</option>
            <option value="UZ" label="Uzbekistan">Uzbekistan</option>
            <option value="VN" label="Vietnam">Vietnam</option>
            <option value="YE" label="Yemen">Yemen</option>
        </optgroup>
        <optgroup id="country-optgroup-Europe" label="Europe">
            <option value="AL" label="Albania">Albania</option>
            <option value="AD" label="Andorra">Andorra</option>
            <option value="AT" label="Austria">Austria</option>
            <option value="BY" label="Belarus">Belarus</option>
            <option value="BE" label="Belgium">Belgium</option>
            <option value="BA" label="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
            <option value="BG" label="Bulgaria">Bulgaria</option>
            <option value="HR" label="Croatia">Croatia</option>
            <option value="CY" label="Cyprus">Cyprus</option>
            <option value="CZ" label="Czech Republic">Czech Republic</option>
            <option value="DK" label="Denmark">Denmark</option>
            <option value="DD" label="East Germany">East Germany</option>
            <option value="EE" label="Estonia">Estonia</option>
            <option value="FO" label="Faroe Islands">Faroe Islands</option>
            <option value="FI" label="Finland">Finland</option>
            <option value="FR" label="France">France</option>
            <option value="DE" label="Germany">Germany</option>
            <option value="GI" label="Gibraltar">Gibraltar</option>
            <option value="GR" label="Greece">Greece</option>
            <option value="GG" label="Guernsey">Guernsey</option>
            <option value="HU" label="Hungary">Hungary</option>
            <option value="IS" label="Iceland">Iceland</option>
            <option value="IE" label="Ireland">Ireland</option>
            <option value="IM" label="Isle of Man">Isle of Man</option>
            <option value="IT" label="Italy">Italy</option>
            <option value="JE" label="Jersey">Jersey</option>
            <option value="LV" label="Latvia">Latvia</option>
            <option value="LI" label="Liechtenstein">Liechtenstein</option>
            <option value="LT" label="Lithuania">Lithuania</option>
            <option value="LU" label="Luxembourg">Luxembourg</option>
            <option value="MK" label="Macedonia">Macedonia</option>
            <option value="MT" label="Malta">Malta</option>
            <option value="FX" label="Metropolitan France">Metropolitan France</option>
            <option value="MD" label="Moldova">Moldova</option>
            <option value="MC" label="Monaco">Monaco</option>
            <option value="ME" label="Montenegro">Montenegro</option>
            <option value="NL" label="Netherlands">Netherlands</option>
            <option value="NO" label="Norway">Norway</option>
            <option value="PL" label="Poland">Poland</option>
            <option value="PT" label="Portugal">Portugal</option>
            <option value="RO" label="Romania">Romania</option>
            <option value="RU" label="Russia">Russia</option>
            <option value="SM" label="San Marino">San Marino</option>
            <option value="RS" label="Serbia">Serbia</option>
            <option value="CS" label="Serbia and Montenegro">Serbia and Montenegro</option>
            <option value="SK" label="Slovakia">Slovakia</option>
            <option value="SI" label="Slovenia">Slovenia</option>
            <option value="ES" label="Spain">Spain</option>
            <option value="SJ" label="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
            <option value="SE" label="Sweden">Sweden</option>
            <option value="CH" label="Switzerland">Switzerland</option>
            <option value="UA" label="Ukraine">Ukraine</option>
            <option value="SU" label="Union of Soviet Socialist Republics">Union of Soviet Socialist Republics</option>
            <option value="GB" label="United Kingdom">United Kingdom</option>
            <option value="VA" label="Vatican City">Vatican City</option>
            <option value="AX" label="Åland Islands">Åland Islands</option>
        </optgroup>
        <optgroup id="country-optgroup-Oceania" label="Oceania">
            <option value="AS" label="American Samoa">American Samoa</option>
            <option value="AQ" label="Antarctica">Antarctica</option>
            <option value="AU" label="Australia">Australia</option>
            <option value="BV" label="Bouvet Island">Bouvet Island</option>
            <option value="IO" label="British Indian Ocean Territory">British Indian Ocean Territory</option>
            <option value="CX" label="Christmas Island">Christmas Island</option>
            <option value="CC" label="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option>
            <option value="CK" label="Cook Islands">Cook Islands</option>
            <option value="FJ" label="Fiji">Fiji</option>
            <option value="PF" label="French Polynesia">French Polynesia</option>
            <option value="TF" label="French Southern Territories">French Southern Territories</option>
            <option value="GU" label="Guam">Guam</option>
            <option value="HM" label="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
            <option value="KI" label="Kiribati">Kiribati</option>
            <option value="MH" label="Marshall Islands">Marshall Islands</option>
            <option value="FM" label="Micronesia">Micronesia</option>
            <option value="NR" label="Nauru">Nauru</option>
            <option value="NC" label="New Caledonia">New Caledonia</option>
            <option value="NZ" label="New Zealand">New Zealand</option>
            <option value="NU" label="Niue">Niue</option>
            <option value="NF" label="Norfolk Island">Norfolk Island</option>
            <option value="MP" label="Northern Mariana Islands">Northern Mariana Islands</option>
            <option value="PW" label="Palau">Palau</option>
            <option value="PG" label="Papua New Guinea">Papua New Guinea</option>
            <option value="PN" label="Pitcairn Islands">Pitcairn Islands</option>
            <option value="WS" label="Samoa">Samoa</option>
            <option value="SB" label="Solomon Islands">Solomon Islands</option>
            <option value="GS" label="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
            <option value="TK" label="Tokelau">Tokelau</option>
            <option value="TO" label="Tonga">Tonga</option>
            <option value="TV" label="Tuvalu">Tuvalu</option>
            <option value="UM" label="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
            <option value="VU" label="Vanuatu">Vanuatu</option>
            <option value="WF" label="Wallis and Futuna">Wallis and Futuna</option>
        </optgroup>
    </select>		
				</div>
			</div>
			<div>
				<input type="submit" id="send" name="sendD" value="send" />
			</div>
		</form>
	</div>


<div class="faq text-center p-5 mx-5">
            <h5>Frequently Asked Questions</h5>

            <div class="accordion py-3" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        What Does Your Course Offer?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Our NCLEX-RN courses provide a complete learning experience. They include a vast question bank, including Next Generation NCLEX (NGN) questions, written by nurse educators and practicing nurses. Our courses also feature engaging videos, adaptive (CAT) tests, readiness exams, and detailed explanations for each question, helping you build clinical judgment skills.      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        How Often Should I Practice?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Consistent practice is crucial for success. Our courses encourage regular practice, with access to extensive question banks and adaptive tests. Set a study schedule that fits your pace and dedicate time each day to practice and review.      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        How Do I Access the Course Materials?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Upon enrolling, you'll receive login credentials to our user-friendly platform. This grants you access to all course materials, practice questions, videos, and simulations. You can study at your convenience, whether it's on your computer, tablet, or mobile device.      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        What Happens After I Pass the NCLEX-RN?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Congratulations on passing the NCLEX-RN! With your nursing license secured, you'll have a wide range of opportunities in the healthcare field. Our courses provide not only exam preparation but also guidance for your future career, including mentorship and resources for job placement.    </div>
  </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Can I Review Course Materials Later?
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Absolutely, your access to course materials doesn't expire immediately after the exam. You can revisit the content, practice questions, and resources to reinforce your nursing knowledge or refresh your skills as needed.    </div>
  </div>
  </div>
</div>

<button type="button" class="btn btn-outline-primary text-center" id="liveToastBtn">Remember</button>
</div>


<div class="toast-container position-fixed bottom-0 end-0 p-3 top-50 start-50 translate-middle">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <strong class="me-auto">NCLEX-RN</strong>
        <small>Just Now</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Remember, our goal is to provide comprehensive support to help you succeed in your NCLEX-RN journey and become a confident and capable registered nurse.
    </div>
</div>
</div>

<a href="https://wa.me/254769136787" target="_blank" class="whatsapp-icon">
    <img src="/images/whatsapp.png" alt="WhatsApp Chat">
    </a>

    		<?php
			include('../layout/footer.php')
			?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="../js/nclex.js"></script>
<script>
    window.addEventListener("load", function () {
        const loader = document.getElementById("loader");
        loader.style.display = "none";
    });
</script>
    </body>

    </html>