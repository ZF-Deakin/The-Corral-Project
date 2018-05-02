<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #4E5869;
	margin: 0;
	padding: 0;
	color: #000;
}
#form1 #stat {
	color: #F00;
}
/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 15px;
	padding-left: 15px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}

/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color:#414958;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #4E5869;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}

/* ~~ this container surrounds all other divs giving them their percentage-based width ~~ */
.container {
	width: 80%;
	max-width: 1260px;/* a max-width may be desirable to keep this layout from getting too wide on a large monitor. This keeps line length more readable. IE6 does not respect this declaration. */
	min-width: 780px;/* a min-width may be desirable to keep this layout from getting too narrow. This keeps line length more readable in the side columns. IE6 does not respect this declaration. */
	background-color: #FFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout. It is not needed if you set the .container's width to 100%. */
}

/* ~~ the header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo ~~ */
.header {
	background-color: #6F7D94;
}

/* ~~ These are the columns for the layout. ~~ 

1) Padding is only placed on the top and/or bottom of the divs. The elements within these divs have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

2) No margin has been given to the columns since they are all floated. If you must add margin, avoid placing it on the side you're floating toward (for example: a right margin on a div set to float right). Many times, padding can be used instead. For divs where this rule must be broken, you should add a "display:inline" declaration to the div's rule to tame a bug where some versions of Internet Explorer double the margin.

3) Since classes can be used multiple times in a document (and an element can also have multiple classes applied), the columns have been assigned class names instead of IDs. For example, two sidebar divs could be stacked if necessary. These can very easily be changed to IDs if that's your preference, as long as you'll only be using them once per document.

4) If you prefer your nav on the right instead of the left, simply float these columns the opposite direction (all right instead of all left) and they'll render in reverse order. There's no need to move the divs around in the HTML source.

*/
.sidebar1 {
	float: left;
	width: 20%;
	background-color: #93A5C4;
	padding-bottom: 10px;
}
.content {
	padding: 10px 0;
	width: 80%;
	float: left;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
}

/* ~~ The navigation list styles (can be removed if you choose to use a premade flyout menu like Spry) ~~ */
ul.nav {
	list-style: none; /* this removes the list marker */
	border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
	margin-bottom: 15px; /* this creates the space between the navigation on the content below */
}
ul.nav li {
	border-bottom: 1px solid #666; /* this creates the button separation */
}
ul.nav a, ul.nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
	padding: 5px 5px 5px 15px;
	display: block; /* this gives the link block properties causing it to fill the whole LI containing it. This causes the entire area to react to a mouse click. */
	text-decoration: none;
	background-color: #8090AB;
	color: #000;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	background-color: #6F7D94;
	color: #FFF;
}

/* ~~ The footer ~~ */
.footer {
	padding: 10px 0;
	background-color: #6F7D94;
	position: relative;/* this gives IE6 hasLayout to properly clear */
	clear: both; /* this clear property forces the .container to understand where the columns end and contain them */
}

/* ~~ miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the #footer is removed or taken out of the #container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style><!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* this 1px negative margin can be placed on any of the columns in this layout with the same corrective effect. */
ul.nav a { zoom: 1; }  /* the zoom property gives IE the hasLayout trigger it needs to correct extra whiltespace between the links */
</style>
<![endif]--></head>

<body>

<div class="container">
  <div class="header">
    <p style="font-size:72px" ><strong>Corral</strong></p>
    <p style="font-size:36px">SIT 374 - Capstone Project</p>
    <!-- end .header --></div>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="index.htm">Home</a></li>
      <li><a href="About.htm">About Us</a></li>
      <li><a href="Project.php">Projects</a></li>
      <li><a href="Students.php">Students</a></li>
      <li><a href="Signin.php">Sign-in</a></li>
      <li><a href="Register.php">Register</a></li>
      <li><a href="FAQ.htm">FAQ</a></li>
      <li><a href="Contact.htm">Contact Us</a></li>
    </ul>
    <p>&nbsp;</p>
  <!-- end .sidebar1 --></div>
  <div class="content">
    <h1 style="font-size:48px">Student Information</h1>
    <p>&nbsp;</p>
    <form id="form1" name="form1" method="post" action="ConnectStudent.php">
  <p style="font-size:32px" align="left"><strong>Student Details</strong></p>
  <p><strong>Student First Name:	
    <input type="text" name="fname" id="fname" />
  </strong></p>
  <p><strong>Student Last Name:
    <input type="text" name="lname" id="lname" />
  </strong></p>
  <p><strong>Student ID Number: 
    <input type="text" name="sid" id="sid" />
  </strong></p>
  <p><strong>Student Email Address: 
    <input name="email" type="text" id="email" size="40" />
  </strong></p>
  <p><strong>Student Password:	
    <input type="password" name="pass" id="pass" />
  </strong></p>
  <p style="font-size:32px" align="left"><strong>Student Survey</strong></p>
  <p>
    <label for="location">1) Student Location:</label>
  </p>
  <p>
    <select name="location" id="location">
      <option selected="true" value="">Choose one of the list Below</option>
      <option value="Burwood">Burwood</option>
      <option value="Geelong">Geelong</option>
      <option value="Cloud, but can travel in Deakin Campus">Cloud, but can travel in Deakin Campus</option>
      <option value="Cloud, located in Australia but can't easily travel to Deakin campus ">Cloud, located in Australia but can't easily travel to Deakin campus </option>
      <option value="Cloud, located outside Australia">Cloud, located outside Australia</option>
    </select>
  </p>
    <p>
      <label for="employ">2) Are you working full-time, part-time or unemployed:</label>
    </p>
    <p>
      <select name="employ" id="employ">
        <option selected="true"  value="">Choose one of the list Below</option>
        <option value="Full-time">Full-time</option>
        <option value="Part-time">Part-time</option>
        <option value="Unemployed">Unemployed</option>
      </select>
    </p>
    <p>
      <label for="capstone">3) Capstone Enrolment: Are you enrolled or definitely enrolling in SIT302: Project Delivery for the immediately following trimester (Trimester 2 ) in 2018?</label>
    </p>
    <p>
      <select name="capstone" id="capstone">
        <option selected="true"  value="">Choose one of the list Below</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      </select>
    </p>
    <p>
      <label for="course">4) Current Course: please choose the course/major you are enrolled in:</label>
    </p>
    <p>
      <select name="course" id="course">
        <option selected="true"  value="">Choose one of the list Below</option>
        <option value="Bachelor of Computer Science (Cloud Computing)">Bachelor of Computer Science (Cloud Computing)</option>
        <option value="Bachelor of Computer Science (Cognitive Science)">Bachelor of Computer Science (Cognitive Science)</option>
        <option value="Bachelor of Computer Science (Data Science)">Bachelor of Computer Science (Data Science)</option>
        <option value="Bachelor of Cyber Security">Bachelor of Cyber Security</option>
        <option value="Bachelor of Game Design and Development">Bachelor of Game Design and Development</option>
        <option value="Bachelor of IT (Cloud Commuting)">Bachelor of IT (Cloud Commuting)</option>
        <option value="Bachelor of IT (Game Development)">Bachelor of IT (Game Development)</option>
        <option value="Bachelor of IT (Interactive Media Design)">Bachelor of IT (Interactive Media Design)</option>
        <option value="Bachelor of IT (Mobile &amp; Apps Design)">Bachelor of IT (Mobile &amp; Apps Design)</option>
        <option value="Bachelor of IT (Programming)">Bachelor of IT (Programming)</option>
        <option value="Bachelor of IT (Security)">Bachelor of IT (Security)</option>
        <option value="Bachelor of IT (Virtual and Argument Reality)">Bachelor of IT (Virtual and Argument Reality)</option>
      </select>
    </p>
    <p>5) Project role, choose roles you think best align with your skills:</p>
    <blockquote>
      <p>---------------------------------------------------------------------------</p>
      <p>Programmer (General):</p>
      <p>
        <label for="skill1"></label>
        <select name="skill1" id="skill1">
          <option selected="true"  value="">Choose one of the list Below</option>
          <option value="Expert skill">Expert skill</option>
          <option value="High skill">High skill</option>
          <option value="Intermediate skill">Intermediate skill</option>
          <option value="Novice skill">Novice skill</option>
        </select>
      </p>
      <p>&nbsp;</p>
      <p>UX/UI Designer:</p>
      <p>
        <select name="skill2" id="skill2">
          <option selected="true"  value="">Choose one of the list Below</option>
          <option value="Expert skill">Expert skill</option>
          <option value="High skill">High skill</option>
          <option value="Intermediate skill">Intermediate skill</option>
          <option value="Novice skill">Novice skill</option>
        </select>
      </p>
      <p>&nbsp;</p>
      <p>Security Specialist:</p>
      <p>
        <select name="skill3" id="skill3">
          <option selected="true"  value=''>Choose one of the list Below</option>
          <option value="Expert skill">Expert skill</option>
          <option value="High skill">High skill</option>
          <option value="Intermediate skill">Intermediate skill</option>
          <option value="Novice skill">Novice skill</option>
        </select>
      </p>
      <p>&nbsp;</p>
      <p>Database Developer:</p>
      <p>
        <select name="skill4" id="skill4">
          <option selected="true"  value="">Choose one of the list Below</option>
          <option value="Expert skill">Expert skill</option>
          <option value="High skill">High skill</option>
          <option value="Intermediate skill">Intermediate skill</option>
          <option value="Novice skill">Novice skill</option>
        </select>
      </p>
      <p>&nbsp;</p>
      <p>Web Developer:        </p>
      <p>
        <select name="skill5" id="skill5">
          <option selected="true"  value="">Choose one of the list Below</option>
          <option value="Expert skill">Expert skill</option>
          <option value="High skill">High skill</option>
          <option value="Intermediate skill">Intermediate skill</option>
          <option value="Novice skill">Novice skill</option>
        </select>
      </p>
      <p>&nbsp;</p>
      <p>Cloud Service Developer:</p>
      <p>
        <select name="skill6" id="skill6">
          <option selected="true"  value="">Choose one of the list Below</option>
          <option value="Expert skill">Expert skill</option>
          <option value="High skill">High skill</option>
          <option value="Intermediate skill">Intermediate skill</option>
          <option value="Novice skill">Novice skill</option>
        </select>
      </p>
      <p>&nbsp;</p>
      <p>App Developer (Mobile):</p>
      <p>
        <select name="skill7" id="skill7">
          <option selected="true"  value="">Choose one of the list Below</option>
          <option value="Expert skill">Expert skill</option>
          <option value="High skill">High skill</option>
          <option value="Intermediate skill">Intermediate skill</option>
          <option value="Novice skill">Novice skill</option>
        </select>
      </p>
      <p>&nbsp;</p>
      <p>Network Engineer:</p>
      <p>
        <select name="skill8" id="skill8">
          <option selected="true"  value="">Choose one of the list Below</option>
          <option value="Expert skill">Expert skill</option>
          <option value="High skill">High skill</option>
          <option value="Intermediate skill">Intermediate skill</option>
          <option value="Novice skill">Novice skill</option>
        </select>
      </p>
      <p>&nbsp;</p>
      <p>VR/Game Developer (Programming):</p>
      <p>
        <select name="skill9" id="skill9">
          <option selected="true"  value="">Choose one of the list Below</option>
          <option value="Expert skill">Expert skill</option>
          <option value="High skill">High skill</option>
          <option value="Intermediate skill">Intermediate skill</option>
          <option value="Novice skill">Novice skill</option>
        </select>
      </p>
      <p>&nbsp;</p>
      <p>3D Artist/Animator:</p>
      <p>
        <select name="skill10" id="skill10">
          <option selected="true"  value="">Choose one of the list Below</option>
          <option value="Expert skill">Expert skill</option>
          <option value="High skill">High skill</option>
          <option value="Intermediate skill">Intermediate skill</option>
          <option value="Novice skill">Novice skill</option>
        </select>
      </p>
      <p>&nbsp;</p>
      <p>Technical Artist:</p>
      <p>
        <select name="skill11" id="skill11">
          <option selected="true"  value="">Choose one of the list Below</option>
          <option value="Expert skill">Expert skill</option>
          <option value="High skill">High skill</option>
          <option value="Intermediate skill">Intermediate skill</option>
          <option value="Novice skill">Novice skill</option>
        </select>
      </p>
      <p>&nbsp;</p>
      <p>Project Manager (Require technical skill):</p>
      <p>
        <select name="skill12" id="skill12">
          <option selected="true"  value="">Choose one of the list Below</option>
          <option value="Expert skill">Expert skill</option>
          <option value="High skill">High skill</option>
          <option value="Intermediate skill">Intermediate skill</option>
          <option value="Novice skill">Novice skill</option>
        </select>
      </p>
      <p>&nbsp;</p>
      <p>Interactive Media Developer:</p>
      <p>
        <select name="skill13" id="skill13">
          <option selected="true"  value="">Choose one of the list Below</option
        >
          <option value="Expert skill">Expert skill</option>
          <option value="High skill">High skill</option>
          <option value="Intermediate skill">Intermediate skill</option>
          <option value="Novice skill">Novice skill</option>
        </select>
      </p>
      <p>&nbsp;</p>
      <p>Business Analyst:</p>
      <p>
        <select name="skill14" id="skill14">
          <option selected="true"  value="">Choose one of the list Below</option
        >
          <option value="Expert skill">Expert skill</option>
          <option value="High skill">High skill</option>
          <option value="Intermediate skill">Intermediate skill</option>
          <option value="Novice skill">Novice skill</option>
        </select>
      </p>
      <p>---------------------------------------------------------------------------</p>
    </blockquote>
    <p>6) Technical Skill: list at least three technical skills that you posses.</p>
    <blockquote>
      <p>
        <label for="techsk1">Tech Skill 1: </label>
        <input type="text" name="techsk1" id="techsk1" />
      </p>
      <p>
        <label for="techsk1">Tech Skill 2: </label>
        <input type="text" name="techsk2" id="techsk1" />
      </p>
      <p>
        <label for="techsk1">Tech Skill 3: </label>
        <input type="text" name="techsk3" id="techsk1" />
      </p>
    </blockquote>
    <p>7) Technical Skill Proficiency: rate the proficiency of each technical skills in the previous question.</p>
    <blockquote>
      <p>
        <label for="techskpro1">Tech Skill 1:</label>
        <select name="techskpro1" id="techskpro1" >
          <option selected="true"  value="">Choose one of the list Below</option>
          <option value="Expert skill">Expert skill</option>
          <option value="High skill">High skill</option>
          <option value="Intermediate skill">Intermediate skill</option>
          <option value="Novice skill">Novice skill</option>
        </select>
      </p>
      <p>Tech Skill 2:
        <select name="techskpro2" id="techskpro2" >
          <option selected="true"  value="">Choose one of the list Below</option>
          <option value="Expert skill">Expert skill</option>
          <option value="High skill">High skill</option>
          <option value="Intermediate skill">Intermediate skill</option>
          <option value="Novice skill">Novice skill</option>
        </select>
      </p>
      <p>Tech Skill 3:
        <select name="techskpro3" id="techskpro3" >
          <option selected="true"  value="">Choose one of the list Below</option>
          <option value="Expert skill">Expert skill</option>
          <option value="High skill">High skill</option>
          <option value="Intermediate skill">Intermediate skill</option>
          <option value="Novice skill">Novice skill</option>
        </select>
      </p>
    </blockquote>
    <p>8) Soft Skills: list at least three soft skills.</p>
    <blockquote>
      <p>Soft Skill 1:
        <label for="softsk1"></label>
        <label for="softsk1"></label>
        <input type="text" name="softsk1" id="softsk1" />
      </p>
      <p>Soft Skill 2:
        <input type="text" name="softsk2" id="softsk2" />
      </p>
      <p>Soft Skill 3:
        <input type="text" name="softsk3" id="softsk3" />
      </p>
    </blockquote>
    <p>9) Soft Skill Proficiency: rate the proficiency of each soft skills in the previous question.</p>
    <blockquote>
      <p>
        <label for="techskpro1">Soft Skill 1:</label>
        <label for="softskpro1"></label>
        <label for="softskpro1"></label>
        <select name="softskpro1" id="softskpro1" >
          <option selected="true"  value="">Choose one of the list Below</option>
          <option value="Expert skill">Expert skill</option>
          <option value="High skill">High skill</option>
          <option value="Intermediate skill">Intermediate skill</option>
          <option value="Novice skill">Novice skill</option>
        </select>
      </p>
      <p>Soft Skill 2:
        <select name="softskpro2" id="softskpro2" >
          <option selected="true"  value="">Choose one of the list Below</option>
          <option value="Expert skill">Expert skill</option>
          <option value="High skill">High skill</option>
          <option value="Intermediate skill">Intermediate skill</option>
          <option value="Novice skill">Novice skill</option>
        </select>
      </p>
      <p>Soft Skill 3:
        <select name="softskpro3" id="softskpro3" >
          <option selected="true"  value="">Choose one of the list Below</option>
          <option value="Expert skill">Expert skill</option>
          <option value="High skill">High skill</option>
          <option value="Intermediate skill">Intermediate skill</option>
          <option value="Novice skill">Novice skill</option>
        </select>
      </p>
    </blockquote>
    <p>10) Project Preferences: list the projects you would prefer to work in order of preference (three projects maximum). Choose the project base on your skills and knowledge.</p>
    <blockquote>
      <p>Project Title 1:
        <label for="projti1"></label>
        <input type="text" name="projti1" id="projti1" />
      </p>
      <p>Project Title 2:
        <input type="text" name="projti2" id="projti2" />
      </p>
      <p>Project Title 3:
        <input type="text" name="projti3" id="projti3" />
      </p>
    </blockquote>
    <p>11) Aspiration: tell us a few words what do you want to achieve in this unit and how you aim to contribute.
      <label for="aspira"></label>
    </p>
    <blockquote>
      <label for="aspira"></label>
        <input name="aspira" type="text" id="aspira" value="" size="60" />
      </p>
    </blockquote>
    <p>12) Profile: provide a link to your professional profile (i.e. Linkedin profile or online portfolio). </p>
    <blockquote>
      <label for="profile"></label>
      <input name="profile" type="text" id="profile" value="" size="60" />
    </blockquote>
    </p>
    <p>13) Entrepreneurship: do you want to create your own start-up company or work for a new start-up? </p>
    <blockquote>
      <label for="Entrepre"></label>
      <select name="Entrepre" id="Entrepre">
        <option selected="true"  value="">Choose one of the list Below</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      </select>
    </blockquote>
    </p>
    <p>14) Permission to use Survey Data internally: for work and research development purpose.</p>
    <blockquote>
      <label for="permis"></label>
      <select name="permis" id="permis">
        <option selected="true"  value="">Choose one of the list Below</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      </select>
    </blockquote>
    <p>15) Thanks and Additional Comments.</p>
    <p><em>Many Thanks for completing this survey, we really appreciate it. If you have anything else to add that we might find usful or think we should know about, please add it here:</em></p>
    <blockquote>
      <p>
        <label for="additi"></label>
        <textarea name="additi" cols="60" rows="6" id="additi"></textarea>
      </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <div id="stat"></div>
      <p>&nbsp;</p>
    </blockquote>
    <input type="submit" name="submit" id="submit" value="Register" />
    <input type="reset" name="button2" id="button2" value="Reset" />
    </form>
<h2>&nbsp;</h2>
    <p>&nbsp;</p>
    <!-- end .content --></div>
  <div class="footer">
    <p>Deakin University, School of Information Technology. This web page has been developed as a student assignment for the unit SIT374: Project Design.</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="register.js"></script>
</body>
</html>
