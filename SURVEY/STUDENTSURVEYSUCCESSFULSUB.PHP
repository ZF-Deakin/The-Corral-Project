<?php
session_start();
require ('file:///G|/Deakin/SIT374 - Project Design/Assignment/The-Corral-Project-master4/The-Corral-Project-master/DATABASE/CONNECTDB.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Sucessful</title>
<link rel="stylesheet" type="text/css" href="file:///G|/Deakin/SIT374 - Project Design/Assignment/The-Corral-Project-master4/The-Corral-Project-master/STYLES/stylesheet.css">
</head>
<body>
<?php

$sid = mysqli_real_escape_string($CON, $_POST['sid']);
$location = mysqli_real_escape_string($CON, $_POST['location']);
$employ = mysqli_real_escape_string($CON, $_POST['employ']);
$capstone = mysqli_real_escape_string($CON, $_POST['capstone']);
$course = mysqli_real_escape_string($CON, $_POST['course']);
//$salt = 'juhladhfl465adfgadf564a3d5f4g6664645dfgvadf';
//$md5 = md5($salt . $password . $salt);
$skill1 = mysqli_real_escape_string($CON, $_POST['skill1']);
$skill2 = mysqli_real_escape_string($CON, $_POST['skill2']);
$skill3 = mysqli_real_escape_string($CON, $_POST['skill3']);
$skill4 = mysqli_real_escape_string($CON, $_POST['skill4']);
$skill5 = mysqli_real_escape_string($CON, $_POST['skill5']);
$skill6 = mysqli_real_escape_string($CON, $_POST['skill6']);
$skill7 = mysqli_real_escape_string($CON, $_POST['skill7']);
$skill8 = mysqli_real_escape_string($CON, $_POST['skill8']);
$skill9 = mysqli_real_escape_string($CON, $_POST['skill9']);
$skill10 = mysqli_real_escape_string($CON, $_POST['skill10']);
$skill11 = mysqli_real_escape_string($CON, $_POST['skill11']);
$skill12 = mysqli_real_escape_string($CON, $_POST['skill12']);
$skill13 = mysqli_real_escape_string($CON, $_POST['skill13']);
$skill14 = mysqli_real_escape_string($CON, $_POST['skill14']);
$techsk1 = mysqli_real_escape_string($CON, $_POST['techsk1']);
$techsk2 = mysqli_real_escape_string($CON, $_POST['techsk2']);
$techsk3 = mysqli_real_escape_string($CON, $_POST['techsk3']);
$techskpro1 = mysqli_real_escape_string($CON, $_POST['techskpro1']);
$techskpro2 = mysqli_real_escape_string($CON, $_POST['techskpro2']);
$techskpro3 = mysqli_real_escape_string($CON, $_POST['techskpro3']);
$softsk1 = mysqli_real_escape_string($CON, $_POST['softsk1']);
$softsk2 = mysqli_real_escape_string($CON, $_POST['softsk2']);
$softsk3 = mysqli_real_escape_string($CON, $_POST['softsk3']);
$softskpro1 = mysqli_real_escape_string($CON, $_POST['techskpro1']);
$softskpro2 = mysqli_real_escape_string($CON, $_POST['techskpro2']);
$softskpro3 = mysqli_real_escape_string($CON, $_POST['techskpro3']);
$projti1 = mysqli_real_escape_string($CON, $_POST['projti1']);
$projti2 = mysqli_real_escape_string($CON, $_POST['projti2']);
$projti3 = mysqli_real_escape_string($CON, $_POST['projti3']);
$aspira = mysqli_real_escape_string($CON, $_POST['aspira']);
$profile = mysqli_real_escape_string($CON, $_POST['profile']);
$Entrepre = mysqli_real_escape_string($CON, $_POST['Entrepre']);
$permis = mysqli_real_escape_string($CON, $_POST['permis']);
$additi = mysqli_real_escape_string($CON, $_POST['additi']);

?>
<div class="Header">

	<h1>Corral</h1>

</div>



<div class="navbar">
	<a href="../PAGES/STUDENTHOME">Home</a>
	<a href="../SURVEY/STUDENTSURVEY">Survey</a>
	<a href="../PAGES/STUDENTCONTACT">Contacts</a>
	<a href="../PAGES/STUDENTABOUTUS">About Us</a>
	<a href="../Access/LOGOUT">Logout</a>
</div>
<?php

$query = "INSERT INTO SURVEY ('', sid, location, employ, capstone, course, skill1, skill2, skill3, skill4, skill5, skill6, skill7, skill8, skill9, skill10, skill11, skill12, skill13, skill14, techsk1, techsk2, techsk3, techskpro1, techskpro2, techskpro3, softsk1, softsk2, softsk3, softskpro1, softskpro2, softskpro3, projti1, projti2, projti3, aspira, profile, Entrepre, permis, additi) VALUES ('', '$sid', '$location', '$employ', '$capstone', '$course', '$skill1', '$skill2', '$skill3', '$skill4', '$skill5', '$skill6', '$skill7', '$skill8', '$skill9', '$skill10', '$skill11', '$skill12', '$skill13', '$skill14', '$techsk1', '$techsk2', '$techsk3', '$techskpro1', '$techskpro2', '$techskpro3', '$softsk1', '$softsk2', '$softsk3', '$softskpro1', '$softskpro2', '$softskpro3', '$projti1', '$projti2', '$projti3', '$aspira', '$profile', '$Entrepre', '$permis', '$additi')";

$result = mysqli_query($CON, $query);

if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
?>
<h2 align="center">Your Survey is successfully submitted.</h2>

<a href="file:///G|/Deakin/SIT374 - Project Design/Assignment/The-Corral-Project-master4/The-Corral-Project-master/Access/LOGIN">
<h2 align="center">&nbsp;</h2></a>


<div class="Footer">

	<h4>This is copy righted by Deakin and the project group 29</h4>

</div>

</body>
