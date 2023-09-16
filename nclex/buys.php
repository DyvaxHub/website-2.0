<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<meta charset="UTF-8" />

	<link rel="icon" type="image/x-icon" href="../images/logo.png">

	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<meta property="og:title" content="Registered nurses" />
	<meta property="og:description" content="Find jobs in the USA UK and Canada for registered nurses." />
	<meta property="og:image" content="../images/students.jpg" />
	<meta charset="utf-8">
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

	<title>Dyvax Hub nurse training, recruitment and staffing for healthcare organizations in the USA, UK and Canada</title>
	<meta name="keywords" content="professionals,healthcare">
	<meta content="dyvaxhub" name="author">
	<meta name="description" content="Dyvax Hub is a well-established and credible nurse training, recruitment, and staffing company for healthcare organizations in the USA, UK, and Canada">
	<meta name="title" content="Jobs in the USA for Registered Nurses" />
	<meta name="https" content="1">
	<link rel="canonical" href="index.html" />
	<meta content="https://dyvaxhub.com/" property="og:url">
	<meta content="website" property="og:type">
	<meta content="Registered nurses, registered nurses training, registered nurses recruitment, nurse jobs in the US, healthcare professionals, healthcare professionals recruitment, trained nurses, NCLEX, NCLEX training, RN, RN jobs, RN jobs in USA" property="og:title">
	<meta content="Registered nurses, registered nurses training, registered nurses recruitment, nurse jobs in the US, healthcare professionals, healthcare professionals recruitment, trained nurses, NCLEX, NCLEX training, RN, RN jobs, RN jobs in USA" property="og:description">
	<meta property="og:site_name" content="" />
	<meta property="og:locale" content="en_US" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="" />
	<meta name="twitter:title" content="Jobs in the USA for Registered Nurses" />
	<meta name="twitter:description" content="We're hiring. Find jobs in the USA for registered nurses" />
	<meta name="twitter:image" content="" />
	<script>
		<!--
		function highlight(blank) {}
		var pageName = '';
		var pageId = '241';

		function updateContent() {}

		function setWait() {}
		//
		-->
	</script>

	<script>
		//payonline119,payonline149,payonline219,payonline2539
		$(document).ready(function() {
			$("#lpayonline119").click(function() {
				$("#payonline119").show();
			});
			$("#lpayonline149").click(function() {
				$("#payonline149").show();
			});
			$("#lpayonline219").click(function() {
				$("#payonline219").show();
			});
			$("#lpayonline2539").click(function() {
				$("#payonline2539").show();
			});
			//Contact Form validation on click event
			$("#contact-form").on("submit", function() {
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
				if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
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


	<link href="../css/pricing_table.css" rel="stylesheet">
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="../css/style.css" />
</head>

<body>

	<!-- Mobile Menu-->
	    	<?php
	include('../mobile_menu.php');
?>

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


	<div id="page">

	</div>


	<?php
	function function_alert($msg)
	{
		echo "<script type='text/javascript'>alert('$msg');</script>";
	}

	if (!empty($_POST["sendA"])) {

		if (!filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL)) {
			echo "The email address is invalid.";
		} else {
			$name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
			$email = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
			$phone = filter_var($_POST["userPhone"], FILTER_SANITIZE_STRING);
			$country = filter_var($_POST["country_billing"], FILTER_SANITIZE_STRING);
			$amount = '0.1';
			$url = "http://elearning.dyvaxhub.com/pesapal/initialize/";
			$resp = "";
			$data = array("Name" => $name, "email" => $email, "phone_number" => $phone, "amount" => $amount, "country" => $country);
			$jdata = json_encode($data);
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

			if ($deserializedInstance->status == '00') {
				echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ' . $deserializedInstance->redirect_url . '">';
			} else {
				function_alert($deserializedInstance->errorMessage);
			}
		}
	}

	if (!empty($_POST["sendB"])) {

		if (!filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL)) {
			echo "The email address is invalid.";
		} else {
			$name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
			$email = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
			$phone = filter_var($_POST["userPhone"], FILTER_SANITIZE_STRING);
			$country = filter_var($_POST["country_billing"], FILTER_SANITIZE_STRING);
			$amount = '149';
			$url = "http://elearning.dyvaxhub.com/pesapal/initialize/";
			$resp = "";
			$data = array("Name" => $name, "email" => $email, "phone_number" => $phone, "amount" => $amount, "country" => $country);
			$jdata = json_encode($data);
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

			if ($deserializedInstance->status == '00') {
				echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ' . $deserializedInstance->redirect_url . '">';
			} else {
				function_alert($deserializedInstance->errorMessage);
			}
		}
	}

	if (!empty($_POST["sendC"])) {

		if (!filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL)) {
			echo "The email address is invalid.";
		} else {
			$name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
			$email = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
			$phone = filter_var($_POST["userPhone"], FILTER_SANITIZE_STRING);
			$country = filter_var($_POST["country_billing"], FILTER_SANITIZE_STRING);
			$amount = '219';
			$url = "http://elearning.dyvaxhub.com/pesapal/initialize/";
			$resp = "";
			$data = array("Name" => $name, "email" => $email, "phone_number" => $phone, "amount" => $amount, "country" => $country);
			$jdata = json_encode($data);
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

			if ($deserializedInstance->status == '00') {
				echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ' . $deserializedInstance->redirect_url . '">';
			} else {
				function_alert($deserializedInstance->errorMessage);
			}
		}
	}
	if (!empty($_POST["sendD"])) {

		if (!filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL)) {
			echo "The email address is invalid.";
		} else {
			$name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
			$email = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
			$phone = filter_var($_POST["userPhone"], FILTER_SANITIZE_STRING);
			$country = filter_var($_POST["country_billing"], FILTER_SANITIZE_STRING);
			$amount = '2539';
			$url = "http://elearning.dyvaxhub.com/pesapal/initialize/";
			$resp = "";
			$data = array("Name" => $name, "email" => $email, "phone_number" => $phone, "amount" => $amount, "country" => $country);
			$jdata = json_encode($data);
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

			if ($deserializedInstance->status == '00') {
				echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ' . $deserializedInstance->redirect_url . '">';
			} else {
				function_alert($deserializedInstance->errorMessage);
			}
		}
	}
	?>



	<header class="top">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-xs-4 logo">
					<a href="../index.php"><img alt="DyvaxHub logo" class="hidden-sm hidden-xs img-responsive" src="../images/logo.png" /><img alt="DyvaxHub logo" class="hidden-lg hidden-md img-responsive" src="../images/logo.png" /></a>
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
								<a href="../nclex" class="dropdown-toggle disabled" data-toggle="dropdown">NCLEX</a>

							</li>


							<li class="menu-item-has-children dropdown">
								<a href="../contact/" class="dropdown-toggle disabled" data-toggle="dropdown">Contact Us</a>

							</li>

							<li class="btn-menu"><a href="../apply/" id="TopNavApplyNow">Apply Now</a></li>
						</ul>
					</nav>
						<button class="menu-hamburger"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
								</button>

				</div>
			</div>
		</div>
	</header>

	<!-- Hero-->
	<div class="dynamicDiv" id="dd.0.2">
		<!--
<section class="sectional-hero" style="background: url(../images/usflag.gif) no-repeat top center; background-size: cover;">-->
		<!--
<section class="sectional-hero" style="background:url(../images/Destinations.jpg) no-repeat top center; background-size: cover;">
	<div class="overlay-hero text-center">
		<div class="container">
			<div class="row">
				<h1>We Can Help You Pass the Next Generation NCLEX-RN on Your First Attempt</h1>
			</div>
		</div>
	</div>
</section>-->
	</div>

	<div class="dynamicDiv" id="dd.0.3">
		<section class="section bg-grey text-center py-13">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
						<h2>We Can Help You Pass the Next Generation NCLEX-RN on Your First Attempt</h2>
						<p>Flexible Pricing Options to Meet Your Needs
							All Subscriptions Include Next Generation NCLEX Practice Questions</p>

					</div>
				</div>
				<!-- .row -->
			</div>
			<!-- .container -->
		</section>
	</div>

	<div class="dynamicDiv" id="dd.0.4">
		<section class="section py-13">
			<div class="container">
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
									<li class="grey">$2539</li>
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
									<li class="grey"><a id="lpayonline2539" class="button">Buy</a></li>
								</ol>
							</div>
						</div>
					</div>
				</div>


				<div id="payonline119">

					<form class="contact-form" action="" id="contact-form" method="post" enctype="multipart/form-data">
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
									<option value="">Country</option>
									<option value="DZ">Algeria</option>
									<option value="AO">Angola</option>
									<option value="BJ">Benin</option>
									<option value="BW">Botswana</option>
									<option value="BF">Burkina Faso</option>
									<option value="BI">Burundi</option>
									<option value="CM">Cameroon</option>
									<option value="CV">Cape Verde</option>
									<option value="CF">Central African Republic</option>
									<option value="TD">Chad</option>
									<option value="KM">Comoros</option>
									<option value="CG">Congo</option>
									<option value="CD">Congo, Democratic Republic of the Congo</option>
									<option value="CI">Cote D'Ivoire</option>
									<option value="DJ">Djibouti</option>
									<option value="EG">Egypt</option>
									<option value="GQ">Equatorial Guinea</option>
									<option value="ER">Eritrea</option>
									<option value="ET">Ethiopia</option>
									<option value="GA">Gabon</option>
									<option value="GM">Gambia</option>
									<option value="GH">Ghana</option>
									<option value="GN">Guinea</option>
									<option value="GW">Guinea-Bissau</option>
									<option value="KE">Kenya</option>
									<option value="LS">Lesotho</option>
									<option value="LR">Liberia</option>
									<option value="LY">Libyan Arab Jamahiriya</option>
									<option value="MG">Madagascar</option>
									<option value="MW">Malawi</option>
									<option value="ML">Mali</option>
									<option value="MR">Mauritania</option>
									<option value="MU">Mauritius</option>
									<option value="YT">Mayotte</option>
									<option value="MA">Morocco</option>
									<option value="MZ">Mozambique</option>
									<option value="NA">Namibia</option>
									<option value="NE">Niger</option>
									<option value="NG">Nigeria</option>
									<option value="RE">Reunion</option>
									<option value="RW">Rwanda</option>
									<option value="SH">Saint Helena</option>
									<option value="ST">Sao Tome and Principe</option>
									<option value="SN">Senegal</option>
									<option value="SC">Seychelles</option>
									<option value="SL">Sierra Leone</option>
									<option value="SO">Somalia</option>
									<option value="ZA">South Africa</option>
									<option value="SS">South Sudan</option>
									<option value="SD">Sudan</option>
									<option value="SZ">Swaziland</option>
									<option value="TZ">Tanzania, United Republic of</option>
									<option value="TG">Togo</option>
									<option value="TN">Tunisia</option>
									<option value="UG">Uganda</option>
									<option value="EH">Western Sahara</option>
									<option value="ZM">Zambia</option>
									<option value="ZW">Zimbabwe</option>
								</select>
							</div>
						</div>
						<div>
							<input type="submit" id="send" name="sendA" value="send" />
						</div>
					</form>
				</div>


				<div id="payonline149">

					<form class="contact-form" action="" id="contact-form" method="post" enctype="multipart/form-data">
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
								<label>Phone: </label><span id="phone-info class=" info"></span>
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
									<option value="">Country</option>
									<option value="DZ">Algeria</option>
									<option value="AO">Angola</option>
									<option value="BJ">Benin</option>
									<option value="BW">Botswana</option>
									<option value="BF">Burkina Faso</option>
									<option value="BI">Burundi</option>
									<option value="CM">Cameroon</option>
									<option value="CV">Cape Verde</option>
									<option value="CF">Central African Republic</option>
									<option value="TD">Chad</option>
									<option value="KM">Comoros</option>
									<option value="CG">Congo</option>
									<option value="CD">Congo, Democratic Republic of the Congo</option>
									<option value="CI">Cote D'Ivoire</option>
									<option value="DJ">Djibouti</option>
									<option value="EG">Egypt</option>
									<option value="GQ">Equatorial Guinea</option>
									<option value="ER">Eritrea</option>
									<option value="ET">Ethiopia</option>
									<option value="GA">Gabon</option>
									<option value="GM">Gambia</option>
									<option value="GH">Ghana</option>
									<option value="GN">Guinea</option>
									<option value="GW">Guinea-Bissau</option>
									<option value="KE">Kenya</option>
									<option value="LS">Lesotho</option>
									<option value="LR">Liberia</option>
									<option value="LY">Libyan Arab Jamahiriya</option>
									<option value="MG">Madagascar</option>
									<option value="MW">Malawi</option>
									<option value="ML">Mali</option>
									<option value="MR">Mauritania</option>
									<option value="MU">Mauritius</option>
									<option value="YT">Mayotte</option>
									<option value="MA">Morocco</option>
									<option value="MZ">Mozambique</option>
									<option value="NA">Namibia</option>
									<option value="NE">Niger</option>
									<option value="NG">Nigeria</option>
									<option value="RE">Reunion</option>
									<option value="RW">Rwanda</option>
									<option value="SH">Saint Helena</option>
									<option value="ST">Sao Tome and Principe</option>
									<option value="SN">Senegal</option>
									<option value="SC">Seychelles</option>
									<option value="SL">Sierra Leone</option>
									<option value="SO">Somalia</option>
									<option value="ZA">South Africa</option>
									<option value="SS">South Sudan</option>
									<option value="SD">Sudan</option>
									<option value="SZ">Swaziland</option>
									<option value="TZ">Tanzania, United Republic of</option>
									<option value="TG">Togo</option>
									<option value="TN">Tunisia</option>
									<option value="UG">Uganda</option>
									<option value="EH">Western Sahara</option>
									<option value="ZM">Zambia</option>
									<option value="ZW">Zimbabwe</option>
								</select>
							</div>
						</div>
						<div>
							<input type="submit" id="send" name="sendB" value="send" />
						</div>
					</form>
				</div>

				<div id="payonline219">

					<form class="contact-form" action="" id="contact-form" method="post" enctype="multipart/form-data">
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
									<option value="">Country</option>
									<option value="DZ">Algeria</option>
									<option value="AO">Angola</option>
									<option value="BJ">Benin</option>
									<option value="BW">Botswana</option>
									<option value="BF">Burkina Faso</option>
									<option value="BI">Burundi</option>
									<option value="CM">Cameroon</option>
									<option value="CV">Cape Verde</option>
									<option value="CF">Central African Republic</option>
									<option value="TD">Chad</option>
									<option value="KM">Comoros</option>
									<option value="CG">Congo</option>
									<option value="CD">Congo, Democratic Republic of the Congo</option>
									<option value="CI">Cote D'Ivoire</option>
									<option value="DJ">Djibouti</option>
									<option value="EG">Egypt</option>
									<option value="GQ">Equatorial Guinea</option>
									<option value="ER">Eritrea</option>
									<option value="ET">Ethiopia</option>
									<option value="GA">Gabon</option>
									<option value="GM">Gambia</option>
									<option value="GH">Ghana</option>
									<option value="GN">Guinea</option>
									<option value="GW">Guinea-Bissau</option>
									<option value="KE">Kenya</option>
									<option value="LS">Lesotho</option>
									<option value="LR">Liberia</option>
									<option value="LY">Libyan Arab Jamahiriya</option>
									<option value="MG">Madagascar</option>
									<option value="MW">Malawi</option>
									<option value="ML">Mali</option>
									<option value="MR">Mauritania</option>
									<option value="MU">Mauritius</option>
									<option value="YT">Mayotte</option>
									<option value="MA">Morocco</option>
									<option value="MZ">Mozambique</option>
									<option value="NA">Namibia</option>
									<option value="NE">Niger</option>
									<option value="NG">Nigeria</option>
									<option value="RE">Reunion</option>
									<option value="RW">Rwanda</option>
									<option value="SH">Saint Helena</option>
									<option value="ST">Sao Tome and Principe</option>
									<option value="SN">Senegal</option>
									<option value="SC">Seychelles</option>
									<option value="SL">Sierra Leone</option>
									<option value="SO">Somalia</option>
									<option value="ZA">South Africa</option>
									<option value="SS">South Sudan</option>
									<option value="SD">Sudan</option>
									<option value="SZ">Swaziland</option>
									<option value="TZ">Tanzania, United Republic of</option>
									<option value="TG">Togo</option>
									<option value="TN">Tunisia</option>
									<option value="UG">Uganda</option>
									<option value="EH">Western Sahara</option>
									<option value="ZM">Zambia</option>
									<option value="ZW">Zimbabwe</option>
								</select>
							</div>
						</div>
						<div>
							<input type="submit" id="send" name="sendC" value="send" />
						</div>
					</form>
				</div>

				<div id="payonline2539">

					<form class="contact-form" action="" id="contact-form" method="post" enctype="multipart/form-data">
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
									<option value="">Country</option>
									<option value="DZ">Algeria</option>
									<option value="AO">Angola</option>
									<option value="BJ">Benin</option>
									<option value="BW">Botswana</option>
									<option value="BF">Burkina Faso</option>
									<option value="BI">Burundi</option>
									<option value="CM">Cameroon</option>
									<option value="CV">Cape Verde</option>
									<option value="CF">Central African Republic</option>
									<option value="TD">Chad</option>
									<option value="KM">Comoros</option>
									<option value="CG">Congo</option>
									<option value="CD">Congo, Democratic Republic of the Congo</option>
									<option value="CI">Cote D'Ivoire</option>
									<option value="DJ">Djibouti</option>
									<option value="EG">Egypt</option>
									<option value="GQ">Equatorial Guinea</option>
									<option value="ER">Eritrea</option>
									<option value="ET">Ethiopia</option>
									<option value="GA">Gabon</option>
									<option value="GM">Gambia</option>
									<option value="GH">Ghana</option>
									<option value="GN">Guinea</option>
									<option value="GW">Guinea-Bissau</option>
									<option value="KE">Kenya</option>
									<option value="LS">Lesotho</option>
									<option value="LR">Liberia</option>
									<option value="LY">Libyan Arab Jamahiriya</option>
									<option value="MG">Madagascar</option>
									<option value="MW">Malawi</option>
									<option value="ML">Mali</option>
									<option value="MR">Mauritania</option>
									<option value="MU">Mauritius</option>
									<option value="YT">Mayotte</option>
									<option value="MA">Morocco</option>
									<option value="MZ">Mozambique</option>
									<option value="NA">Namibia</option>
									<option value="NE">Niger</option>
									<option value="NG">Nigeria</option>
									<option value="RE">Reunion</option>
									<option value="RW">Rwanda</option>
									<option value="SH">Saint Helena</option>
									<option value="ST">Sao Tome and Principe</option>
									<option value="SN">Senegal</option>
									<option value="SC">Seychelles</option>
									<option value="SL">Sierra Leone</option>
									<option value="SO">Somalia</option>
									<option value="ZA">South Africa</option>
									<option value="SS">South Sudan</option>
									<option value="SD">Sudan</option>
									<option value="SZ">Swaziland</option>
									<option value="TZ">Tanzania, United Republic of</option>
									<option value="TG">Togo</option>
									<option value="TN">Tunisia</option>
									<option value="UG">Uganda</option>
									<option value="EH">Western Sahara</option>
									<option value="ZM">Zambia</option>
									<option value="ZW">Zimbabwe</option>
								</select>
							</div>
						</div>
						<div>
							<input type="submit" id="send" name="sendD" value="send" />
						</div>
					</form>
				</div>

				<div class="row py-5"></div>


		</section>

		<?php
		include('../layout/footer.php')
		?>
</body>

</html>