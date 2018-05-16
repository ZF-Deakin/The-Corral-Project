<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
<link rel="stylesheet" type="text/css" href="../STYLES/stylesheet.css">
</head>

<body>
<div class="Header">

</div>

<div class="navbar">
	<a href="../PAGES/HOME.html">Home</a>
	<a href="../ACCESS/REGISTER.html">Projects</a>
	<a href="../PAGES/CONTACT.html">Contacts</a>
	<a href="../PAGES/ABOUTUS.html">About Us</a>
	<div class="dropdown">
		<button class="dropbtn">Login
			<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content">
			<a href="../Access/login.php">Students</a>
			<a href="../ACCESS/STAFFLOGIN.PHP">Staff</a>
		</div>
	</div>
</div>

<div id="contents">
<h2>Contact Us</h2>
<p>Although the Corral is designed to make communcation between team members and employers/teachers more efficient when dealing with group projects, we understand that some individuals might still want some questions answered. If you do have any questions, please first check out our 'About Us' page as we do have a frequently asked questions section.</p>

<hr>
<h2>Tell Us What You Think!</h2>
<p>Do you have a question that we didn't talk about in our FAQ section or would you like to give us some feedback? Insert your details below and we will get back to you as soon as possible!</p>
<form style="margin-left: 40px" name="emailcontact" onSubmit="return validate(emailcontact)" method="post" action="SUCCESSFULCONTACT.PHP">
	First Name: <input type="text" name="firstname" id="ip2" required><br><br>
	Last Name: <input type="text" name="lastname" id="ip2" required><br><br>
	Student ID: <input type="text" name="id" maxlength="9" ip="ip2" required><br><br>
	Email Address: <input type="text" name="email" size="40" id="ip2" required><br><br>
  Question: <input type="text" name="question" size="40" id="ip2" required><br><br>

		<input type="submit" name="Submit" value="Submit">
		<input type="reset" value="Clear Form"><br><br>
</form>

<div class="Footer">
	<h4>This is copy righted by Deakin and the project group 29</h4>
</div>
</body>
</html>