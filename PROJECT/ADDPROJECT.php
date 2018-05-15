<?php
session_start();

if ( $_SESSION['STAFF_ID'] != 1) {
	$_SESSION['message'] = "You mus log in before viewing this page";
	header("location: ../ACCESS/error.php");
	}
	else {
	$id = $_SESSION['STAFF_ID'];
	$staff_firstname = $_SESSION['STAFF_FIRSTNAME'];
	$staff_lastname = $_SESSION['STAFF_LASTNAME'];
	}
?>
<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>Add Project</title>
<link rel="stylesheet" type="text/css" href="../STYLES/stylesheet.css">
<style>
/*Picture wont float right?*/

#stockpic

{

    float:right;

}

</style>
</head>



<body>

<div class="Header">

	<h1>The Corral Project</h1>

</div>



<div class="navbar">
	<a href="../PAGES/STAFFHOME.php">Home</a>
	<div class="dropdown">
		<button class="dropbtn">Projects
			<i class="fa fa-caret-down"></i>
		</button>
        	<div class="dropdown-content">
            		<a href="../PROJECT/ADDPROJECT.php">Create Project</a>
								<a href="../PROJECT/PROJECTLIST.php">Project List</a>
								<a href="../PROJECT/PROJECTUPDATE.PHP">Update Project</a>
            		<a href="../PROJECT/ADDGROUP.php">Create Group</a>
            		<a href="../PROJECT/GROUPLIST.php">Group List</a>
								<a href="../PROJECT/GROUPUPDATE.PHP">Update Group</a>
                <a href="../PROJECT/STUDENTLIST.php">Student List</a>
                <a href="../PROJECT/STAFFLIST.php">Staff List</a>
							</div>
	</div>
	<a href="../PAGES/STAFFCONTACT.php">Contacts</a>
	<a href="../PAGES/STAFFABOUTUS.php">About Us</a>
	<a href="../ACCESS/stafflogout.php">Logout</a>
</div>


<div id="contents" >
<h2>Add New Project</h2>
<form action="PROJECTPROCESS.php" method="post">
<p>Project Title &nbsp<br><input type="text" name="PROJECT_TITLE"/></br></p>
<p>Project Leader &nbsp<br><input type="text" name="PROJECT_LEADER"/></br></p>
<p>Leader Email &nbsp<br><input type="email" name="PROJECT_EMAIL"/></br></p>
<p>Project Brief</br><textarea name="PROJECT_BRIEF" rows="5" cols="40"></textarea></br></p>
<p>Project Status &nbsp</br></br><input type="radio" name="PROJECT_STATUS" value="active"/>Active</br></br><input type="radio" name="PROJECT_STATUS" value="inactive"/>Inactive</br></br><input type="radio" name="PROJECT_STATUS" value="planning"/>Planning</br></br></p>

<p><input type="submit">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="reset" value="reset"></p>
</form>
</div>

<hr>
<div class="Footer">

	<h4>This is copyrighted by Deakin and the project group 29</h4>

</div>

</body>

</html>
