<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thank You!</title>
<link rel="stylesheet" type="text/css" href="STYLES/stylesheet.css">
</head>
<body>
<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$id = $_POST['id'];
$email = $_POST['email'];
$question = $_POST['question'];

if(empty($firstname)||empty($lastmame)||empty($email))
{
    echo "Your Name and Email Address are Mandatory"
    exit;
}

$email_from = 'thecorralproject@gmail.com'; //our group email Address//
$email_subject = "New Question Form";
$email_body = "You have received a new question from the user $firstname $lastname. \n".
    "email address: $email\n".
    "The Message is:\n $question".

$to = "thecorralproject@gmail.com";
$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);
 ?>
 <div class="Header">

 	<h1>Corral Project</h1>

 </div>



 <div class="navbar">

 	<a href="#Home">Home</a>

 	<a href="#Projects">Projects</a>

 	<a href="#Conatacts">Contacts</a>

 	<a href="#About Us">About Us</a>

 	<div class="dropdown">

 		<button class="dropbtn">Login

 			<i class="fa fa-caret-down"></i>

 		</button>

 		<div class="dropdown-content">

 			<a href="#Students">Students</a>

 			<a href="#Teachers">Teachers</a>

 		</div>

 	</div>

 </div>

<div id="contents">
<h2>Question Succesfully Submitted!</h2>
<p>Thank you for your feedback! We at the Corral Project love to hear from those who use and value our website. We will reply to your comments as swiftly as possible.
<a href="home.html"><h2 align="center">Back to Home Page</h2></a>
<div class="Footer">
	<h4>This is copy righted by Deakin and the project group 29</h4>
</div>
</body>