
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


