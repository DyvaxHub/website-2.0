    <!DOCTYPE html>

    <html class="no-js" lang="en">

    <head>
    	<meta charset="UTF-8" />
    	<link rel="icon" type="image/x-icon" href="../images/logo.png">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="format-detection" content="telephone=no">
    	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    	<link href="../css/app.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">


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

    	<title>NCLEX</title>
    	<meta name="keywords" content="healthcare,recruitment,professionals,organizations,dyvaxhub">
    	<meta content="Richard" name="author">
    	<meta name="description" content="NCLEX. ">
    	<meta name="title" content="NCLEX" />
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
//payonline119,payonline149,payonline219,payonline299
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
	  $("#lpayonline299").click(function () {
        $("#payonline299").show();
    });
	 $("#lpayonline2991").click(function () {
        $("#payonline299").hide();
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
		$amount='0.1';
$url = "http://elearning.dyvaxhub.com/pesapal/initialize/";
$resp ="";
$data = array("Name" => $name, "email" => $email, "phone_number" => $phone, "amount" => $amount,"country" => $country);
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

if (! empty($_POST["sendB"])) {

    if (! filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL)) {
        echo "The email address is invalid.";
    } else {
        $name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
        $phone = filter_var($_POST["userPhone"], FILTER_SANITIZE_STRING);
        $country = filter_var($_POST["country_billing"], FILTER_SANITIZE_STRING);
		$amount='149';
$url = "http://elearning.dyvaxhub.com/pesapal/initialize/";
$resp ="";
$data = array("Name" => $name, "email" => $email, "phone_number" => $phone, "amount" => $amount,"country" => $country);
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
$url = "http://elearning.dyvaxhub.com/pesapal/initialize/";
$resp ="";
$data = array("Name" => $name, "email" => $email, "phone_number" => $phone, "amount" => $amount,"country" => $country);
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
$url = "http://elearning.dyvaxhub.com/pesapal/initialize/";
$resp ="";
$data = array("Name" => $name, "email" => $email, "phone_number" => $phone, "amount" => $amount,"country" => $country);
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
    	<div id="page">
    		<!-- Main Navigation-->
    		<div class="dynamicDiv" id="dd.0.1">


    			<header class="top">
    				<div class="container">
    					<div class="row">
    						<div class="col-md-2 col-xs-4 logo">
    							<a href="../index.php"><img alt="DyvaxHub logo" class="hidden-sm hidden-xs img-responsive" src="../images/logo.png" /><img alt="logo" class="hidden-lg hidden-md img-responsive" src="../images/logo.png" /></a>
    						</div>
    						<!-- .logo -->

    						<div class="col-md-10 col-xs-8 header-content text-right">

    							<nav class="visible-lg">
    								<ul class="topmenu nolist">
    									<li class="menu-item-has-children dropdown">
    										<a href="../hcp/" class="dropdown-toggle disabled" data-toggle="dropdown">Healthcare Professionals</a>

    									</li>


    									<li class="menu-item-has-children dropdown">
    										<a href="../aboutus/" class="dropdown-toggle disabled" data-toggle="dropdown">About Us</a>

    									</li>
    									<li class="menu-item-has-children dropdown">
    										<a href="../nclex/" class="dropdown-toggle disabled" data-toggle="dropdown">NCLEX</a>

    									</li>

    									<li><a href="../contact">Contact Us</a></li>

    									<li class="btn-menu"><a href="../apply/" id="TopNavApplyNow">Apply Now</a></li>
    								</ul>
    							</nav>

    							<a class="hidden-lg btn btn-primary" href="">Apply Now</a><button class="menu-hamburger"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>

    							<div class="search-bar">
    								<form action="https://dyvaxhub.com/search.stml">
    									<input class="search-input" name="q" placeholder="What are you searching for?" type="text" />
    									<button type="submit"><i class="fa fa-search"></i></button>
    								</form>
    							</div>
    						</div>
    					</div>
    				</div>
    			</header>
    		</div>

    		<div class="dynamicDiv" id="dd.0.2">


    			<section class="sectional-hero" style="background:url(../images/MOK_0961.jpg) no-repeat top center; background-size: cover;">
    				<div class="overlay-hero" style="text-align: center;">


    					
						<h1>We Make NCLEX Easy <br>
    						to Understand and Pass<br>
    					</h1>

    				</div>
					
    			</section>
    		</div>

    		

    		<div class="dynamicDiv" id="dd.0.4">
    			<div class="container">
    				<div class="row">



    					<div class="content col-lg-9 col-md-8 col-xs-12">
    						<div class="dynamicDiv" id="dd.0.4.1">

    							<div class="breadcrumb">

    							</div>

    						</div>
    						<article>
    							<div class="dynamicDiv" id="dd.0.4.2" >
    								<h2><a href="https://dyvaxhub.com/" target="_blank">

    									</a>NCLEX-RN</h2>



    								<p>You can join our in-house NCLEX-RN Training and increase your chances of landing a job in the USA, UK, or Canada.</p>


    								<hr />
    								<h2>We Can Help You Pass the Next Generation NCLEX-RN on Your First Attempt</h2>

    								<p>We are committed to providing you with only the best questions, explanations and observations. We have a stable and easy-to-manoeuvre E-learning platform that helps you access the revision materials from the comfort of your gadget. Our in-house training includes weekly reviews with trainers and tutors, that's why hundreds of nurses have trusted us with their nursing licensing exam practice. With Dyvax Hub, your NCLEX exam is only a click away.</p>

    								<!--p><a class="btn btn-primary" href="buys.php">Explore Our Packages</a> </p-->

    								<hr />



    							</div>
    						</article>
    						<div class="dynamicDiv" id="dd.0.4.3"></div>
    					</div>
    				</div>
    			</div>

    			<div class="dynamicDiv" id="dd.0.4.4">
				<div class="row">
					<div class="col-sm-12">
						<div class="text-center mb-5">


							<div class="columns">
								<ol class="price">
									<li class="header">Package 1<br> 30-day access</li>
									<li class="grey">$119</li>
									<li>2500+ Practice Questions</li>
									<li>500+ NGN Questions</li>
									<li>Digital Flashcards</li>
									<li>1 Self Assessment</li>
									<li class="grey"><a id="lpayonline119" class="button">Buy</a></li>
								</ol>
							</div>

							<div class="columns">
								<ol class="price">
									<li class="header" style="background-color:#CB4125">Package 2<br> 60-day access</li>
									<li class="grey">$149</li>
									<li>2500+ Practice Questions</li>
									<li>500+ NGN Questions</li>
									<li>Digital FlashCards</li>
									<li>2 Self Assessments</li>
									<!--<li class="grey"><a href="#" class="button">Buy</a></li>-->
									<li class="grey"><a id="lpayonline149" class="button">Buy</a></li>
								</ol>
							</div>

							<div class="columns">
								<ol class="price">
									<li class="header">Package 3<br>90-day access</li>
									<li class="grey">$219</li>
									<li>2500+ Practice Questions</li>
									<li>500+ NGN Questions</li>
									<li>Digital Flashcards</li>
									<li>3 Self Assessment</li>
									<li>1-time reset option</li>
									<!-- <li class="grey"><a href="#" class="button">Buy</a></li>-->
									<li class="grey"><a id="lpayonline219" class="button">Buy</a></li>
								</ol>
							</div>

							<div class="columns">
								<ol class="price">
									<li class="header">Package 4<br>180-day access</li>
									<li class="grey">$299</li>
									<li>2500+ Practice Questions</li>
									<li>500+ NGN Questions</li>
									<li>Digital Flashcards</li>
									<li>1 Self Assessment</li>
									<li>2 reset options</li>
									<li>Organized Weekly <br>meetings with a tutor</li>
									<li>Webinars</li>
									<li>Job Abroad when you <br>Pass the NCLEX test</li>
									<li>Immigration Process Help</li>
									<!-- <li class="grey"><a href="#" class="button">Buy</a></li>-->
									<li class="grey"><a id="lpayonline299" class="button">Buy</a></li>
								</ol>
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

<div id="payonline299">
	
		<form class="contact-form" action="" id="contact-form" method="post"
			enctype="multipart/form-data">
			<div align="right">
					<a id="lpayonline2991" style="font-size:15px;" class="button">X</a>
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

    		<?php
			include('../layout/footer.php')
			?>


    </body>

    </html>