<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$country_birth = $_POST['country_birth'];
$dob = $_POST['dob'];


$education = $_POST['education'];
$country_edu = $_POST['country_edu'];
$college = $_POST['college'];
$grad_date = $_POST['grad_date'];


$employed = $_POST['employed'];
$profession = $_POST['profession'];
$applied_g_card = $_POST['applied_g_card'];
$country_residence = $_POST['country_residence'];
//$resume = $_POST['resume'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["resume"]["name"]);


$referal = $_POST['referal'];


/* $servername = "localhost";
$username = "root";
$password = "";
$dbname = "dyvax_elearning"; */

$servername = "mysql5030.site4now.net";
$username = "a90b35_dyvaxhu";
$password = "Dyvaxhub@2022";
$dbname = "db_a90b35_dyvaxhu"; 

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

/*$sql = "INSERT INTO applicants (firstname, lastname, email, phone, country_birth, dob, education, country_edu, college, grad_date, employed, profession, applied_g_card, country_residence,referal)
VALUES ($firstname,$lastname,$email,$phone,$country_birth,$dob,$education,$country_edu,$college,$grad_date,$employed,$profession,$applied_g_card,$country_residence,$referal)";*/

$stmt = $conn->prepare("INSERT INTO applicants (firstname, lastname, email, phone, country_birth, dob, education, country_edu, college, grad_date, employed, profession, applied_g_card, country_residence,referal,resume) VALUES (?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?,?)");
$stmt->bind_param('ssssssssssssssss',$firstname,$lastname,$email,$phone,$country_birth,$dob,$education,$country_edu,$college,$grad_date,$employed,$profession,$applied_g_card,$country_residence,$referal,$target_file);

$stmt->execute();

$stmt->close();
$conn->close();


move_uploaded_file($_FILES["resume"]["tmp_name"],$target_file);

header("location:index.php?s='1'");
?>