<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Staff Registration</title>
<link rel="stylesheet" type="text/css" href="../STYLES/styleform.css">
<script type="text/javaScript">
	function validate(registration) {
		var digits="0123456789"
		var temp
		var email = document.registration.STAFF_EMAIL.value
		var password = document.registration.STAFF_PASSWORD.value
		var upper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"
		var lower = "abcdefghijklmnopqrstuvwxyz"

			if (document.registration.STAFF_PASSWORD.value.length < 8) {
				alert("Password is too short. It must be a minimum of eight characters long")
				return false
			}

			for (var i=0;i<document.registration.STAFF_ID.value.length;i++) {
			temp = document.registration.STAFF_ID.value.substring(i,i+1)
			if (digits.indexOf(temp)==-1) {
			alert("Invalid Studnet ID. Must only be numbers")
			return false
				}
			}

			if (document.registration.reemail.value != email) {
				alert("Emails don't match. Please make sure they are the same")
				return false
			}

			if (document.registration.cpassword.value != password) {
				alert("Passwords don't match. Please ensure that they are the same")
				return false
			}
		return true
	}
</script>
</head>

<body>
<div class="Header">
	<h1>Corral</h1>
</div>

<div class="navbar">
	<a href="../PAGES/HOME">Home</a>
	<a href="../ACCESS/REGISTER">Register</a>
	<a href="../PAGES/CONTACT">Contacts</a>
	<a href="../PAGES/ABOUTUS">About Us</a>
	<div class="dropdown">
		<button class="dropbtn">Login
			<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content">
			<a href="../Access/login">Students</a>
			<a href="../ACCESS/stafflogin">Staff</a>
		</div>
	</div>
</div>

<h2>Registration</h2>
<form name="registration" onSubmit="return validate(registration)" method="post" action="../PAGES/STAFFSUCCESSFULREG">
	Staff ID: <input type="text" name="STAFF_ID" maxlength="9" id="ip2" required><br><br>
	First Name: <input type="text" name="STAFF_FIRSTNAME" id="ip2" required><br><br>
	Last Name: <input type="text" name="STAFF_LASTNAME" id="ip2" required><br><br>
	Location: <select name="STAFF_LOCATION">
		<option value="--">-----</option>
		<option value="Burwood">Burwood</option>
		<option value="Geelong">Geelong</option>
		<option value="Cloud">Cloud</option>
		</select><br><br>
	Email Address: <input type="text" name="STAFF_EMAIL" size="40" id="ip2" required><br><br>
	Re-type Email Address: <input type="text" name="reemail" size="40" id="ip2" required><br><br>
	Password: <input type="password" name="STAFF_PASSWORD" id="ip2" required><br><br>
	Re-type Password: <input type="password" name="cpassword" id="ip2" required><br><br>

		<input type="submit" name="Submit" value="Submit">
		<input type="reset" value="Clear Form"><br><br>

</form>


<div class="Footer">
	<h4>This is copy righted by Deakin and the project group 29</h4>
</div>
</body>
