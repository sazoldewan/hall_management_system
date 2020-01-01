
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Menmu bar taken from https://codepen.io/STeveT5/pen/sJnmF-->
<html>
<head>


<?php
session_start();
if(!isset($_SESSION['userAccessInfo']) || (trim($_SESSION['userAccessInfo']) == '')){
	header('location:./');
	exit();
}
else{
	echo "Hello ".$_SESSION['userAccessInfo'];
}

?>



<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
	function ScrollTo(address) {
		$('html, body').animate({
			scrollTop : ($('#' + address).offset().top)
		}, 700);
	}
</script>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<style type="text/css">
table {
	border-collapse: collapse;
	font-size: 115%;
	overflow: auto;
	width: auto;
	text-align: left;
}

th {
	background-color: #2DA0BF;
	color: white;
	font-weight: bold;
	padding: 5px 10px;
	text-align: center;
}

.showAll {
	width: auto;
}

.showAll tr:nth-child(odd) {
	background-color: #DAD7D7
}

.showAll tr:hover {
	background-color: #AAAAAA;
}

td {
	padding: 2px 2px;
}

input[type=password], [type=text], [type=date], [type=number], [type=url],
	[type=email], [type=file], select {
	width: 30rem;
	width: 100%;
	padding: 6px 10px;
	margin: 2px 0;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	font-size: 16px;
	background-color: white;
}

input[type=submit].invisible {
	width: 0rem;
	width: 0%;
	padding: 0px 0px;
	margin: 0px 0;
	display: inline-block;
	border: 0px solid #ccc;
	border-radius: 0px;
	box-sizing: border-box;
	font-size: 0px;
	background-color: white;
}

input[type=number] {
	background-color: green;
	color: white;
	font-weight: bold;
	width: 5rem;
}

input[type=number].Transaction {
	font-weight: normal;
	width: 100%;
	background-color: white;
	color: black;
}

input[type=submit] {
	border: none;
	display: inline-block;
	outline: 0;
	padding: 6px 16px;
	vertical-align: middle;
	overflow: hidden;
	text-decoration: none !important;
	color: #fff;
	background-color: blue;
	text-align: center;
	cursor: pointer;
	white-space: nowrap;
	height: 2.5rem;
	font-weight: bold;
}

.upVote, .downVote, .deleteBtn, .redBtn, .solveBtn, .menuBtn, input[type=button],
	button {
	border: none;
	display: inline-block;
	outline: 0;
	padding: 6px 16px;
	vertical-align: middle;
	overflow: hidden;
	text-decoration: none !important;
	color: #fff;
	background-color: #4CAF50;
	text-align: center;
	cursor: pointer;
	white-space: nowrap;
	font-weight: bold;
}

input[type=submit]:hover, input[type=button]:hover, .upVote:hover,
	.deleteBtn:hover, .downVote:hover, .solveBtn:hover, .menuBtn:hover,
	.redBtn:hover, button:hover {
	box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0
		rgba(0, 0, 0, 0.19);
	background-color: white;
	color: #4CAF50;
	-webkit-transition: background-color .3s, color .15s, box-shadow .3s,
		opacity 0.3s;
	transition: background-color .3s, color .15s, box-shadow .3s, opacity
		0.3s;
	font-weight: bold;
}

.deleteBtn:hover, .downVote:hover, .redBtn {
	box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0
		rgba(0, 0, 0, 0.19);
	background-color: red;
	color: white;
	-webkit-transition: background-color .3s, color .15s, box-shadow .3s,
		opacity 0.3s;
	transition: background-color .3s, color .15s, box-shadow .3s, opacity
		0.3s;
	font-weight: bold;
	font-style: italic;
}

textarea {
	width: 30rem;
	width: 100%;
	height: 100px;
	padding: 12px 20px;
	box-sizing: border-box;
	border: 2px solid #ccc;
	border-radius: 4px;
	background-color: #f8f8f8;
	font-size: 16px;
}

input[required], select[required], textarea[required] {
	background: url("img/star.png") center right no-repeat;
	background-size: 20px 10px;
	background-position: calc(101%) 2px;
	background-color: white;
}

input[readonly], select[readonly], textarea[readonly] {
	color: white;
	background-color: gray;
	cursor: not-allowed;
	font-weight: normal;
}

.Total {
	color: white;
	background-color: black;
	font-weight: bold;
	font-style: italic;
	font: 25px 'trebuchet MS', Arial, Helvetica;
}

.Total.Positive {
	background-color: green;
}

.Total.Negative {
	background-color: red;
}

.profilePicture {
	border-radius: 50%;
	height: 200px;
	-webkit-box-shadow: 0px 0px 20px 8px rgba(0, 0, 0, 0.75);
}

.restrictedZone {
	color: red;
	font-style: italic;
	fontweight: bold;
}

.profilePicture:hover {
	border-radius: 50%;
	height: 200px;
	-webkit-box-shadow: 0px 0px 25px 10px rgba(0, 0, 0, 0.75);
	-webkit-transition: background-color .3s, color .15s, box-shadow .3s,
		opacity 0.3s;
	transition: background-color .3s, color .15s, box-shadow .3s, opacity
		0.3s;
}

body {
	background: #eee
		url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAMAAAC6sdbXAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAAZQTFRF3d3d////riJKgAAAAAJ0Uk5T/wDltzBKAAAAFUlEQVR42mJgBAEGGMmAxAYCgAADAAGGABmnk/7aAAAAAElFTkSuQmCC);
	font: 13px 'trebuchet MS', Arial, Helvetica;
}

h1 {
	font: 36px 'Lucida Calligraphy', Arial, Helvetica;
	font-weight: bold;
	text-align: center;
	text-shadow: 0 1px 0 #fff;
	color: #01CFC9;
}

h2, p {
	text-align: center;
	color: #444;
	text-shadow: 0 1px 0 #fff;
}

a {
	color: #2A679F;
}

/*Floating Button*/
.floating-btn {
	position: fixed;
	right: 1em;
	top: 1em;
	padding: 1em 1em;
	border: none;
	border-radius: 50%;
	background: rgb(78, 198, 170);
	box-shadow: 0 1px 2px rgba(0, 0, 0, .5);
	cursor: pointer;
	z-index: 60;
	outline: none;
}

.floating-btn-top {
	position: fixed;
	right: 1em;
	bottom: 11em;
	padding: 1em 1em;
	border: none;
	border-radius: 50%;
	color: #fff;
	background: #000;
	box-shadow: 0 1px 2px rgba(0, 0, 0, .5);
	cursor: pointer;
	z-index: 60;
	outline: none;
}

.floating-btn-middle {
	position: fixed;
	right: 1em;
	bottom: 6em;
	padding: 1em 1em;
	border: none;
	border-radius: 50%;
	color: #fff;
	background: #000;
	box-shadow: 0 1px 2px rgba(0, 0, 0, .5);
	cursor: pointer;
	z-index: 60;
	outline: none;
}

.floating-btn-bottom {
	position: fixed;
	right: 1em;
	bottom: 1em;
	padding: 1em 1em;
	border: none;
	border-radius: 50%;
	color: #fff;
	background: #000;
	box-shadow: 0 1px 2px rgba(0, 0, 0, .5);
	cursor: pointer;
	z-index: 60;
	outline: none;
}

.floating-btn-top:hover, .floating-btn-top:active, .floating-btn-middle:hover,
	.floating-btn-middle:active, .floating-btn-bottom:hover,
	.floating-btn-bottom:active {
	color: #68c3a3;
	background-color: #535353;
	-webkit-box-shadow: 0px 0px 25px 10px rgba(0, 0, 0, 0.75);
	-webkit-transition: background-color .3s, color .15s, box-shadow .3s,
		opacity 0.3s;
	transition: background-color .3s, color .15s, box-shadow .3s, opacity
		0.3s;
}

.menu-overlay-trigger:checked ~ .floating-btn {
	background: #181717;
}

/*Menu overlay*/
.menu-overlay {
	position: fixed;
	right: 2.5em;
	top: 2.5em;
	padding: 1em;
	background-color: rgba(78, 198, 170, .9); //
	background-image: url(http://imgh.us/chihuahua-1920.jpg);
	background-size: cover;
	border-radius: 50%;
	z-index: -1;
	opacity: 0;
	text-align: center;
	transform: scale(1); //
	transform-origin: 25% 75%;
	transition: transform .4s, opacity .01s .2s;
}

.menu-overlay-trigger:checked ~ .menu-overlay {
	transform: scale(200);
	z-index: 50;
	opacity: 1;
	transition: transform .9s, opacity .05s;
}

/*Navigation*/
.navigation {
	visibility: hidden;
	position: fixed;
	z-index: -1;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	opacity: 0; //
	background: rgba(67, 163, 141, .1);
	transition: visibility .5s .3s, opacity .1s .2s;
}

.menu-overlay-trigger:checked ~ .navigation {
	visibility: visible;
	opacity: 1;
	z-index: 50;
}

/*Menu*/
.menu {
	padding: 0;
	max-height: 90vh;
	overflow-x: auto;
	text-align: center;
}

.menu__item {
	color: #fff;
	font-size: 3.5em;
}

.menu__item A {
	display: block;
	color: inherit;
}

.menu__item:hover {
	box-shadow: 0 2px 3px rgba(37, 144, 119, .8) inset, 0 -2px 3px
		rgba(37, 144, 119, .8) inset;
}

.menu__item:hover A {
	text-shadow: 0 2px 4px rgba(0, 0, 0, .4);
}

.menu-overlay-trigger:checked ~ .floating-btn .menu-icon {
	background: transparent;
}

.menu-icon {
	display: block;
	width: 2em;
	height: .3em;
	background: #000;
}

.menu-icon:before, .menu-icon:after {
	content: "";
	position: absolute;
	left: 1em;
	display: block;
	width: 2em;
	height: .3em;
	transform: rotate(0);
	background: inherit;
	transition: transform .2s;
}

.menu-overlay-trigger:checked ~ .floating-btn .menu-icon:before,
	.menu-overlay-trigger:checked ~ .floating-btn .menu-icon:after {
	background: #fff;
}

.menu-icon:before {
	top: 2.3em;
}

.menu-icon:after {
	bottom: 2.3em;
}

.menu-overlay-trigger:checked ~ .floating-btn .menu-icon:before {
	top: 1.7em;
	transform: rotate(45deg);
}

.menu-overlay-trigger:checked ~ .floating-btn .menu-icon:after {
	bottom: 1.7em;
	transform: rotate(-45deg);
}

@media only screen and (min-width: 700px) {
	.menu-overlay-trigger:checked ~ .floating-btn .menu-icon:before {
		top: 2.2em;
	}
	.menu-overlay-trigger:checked ~ .floating-btn .menu-icon:after {
		bottom: 2.2em;
	}
	.menu-icon {
		width: 3em;
	}
	.menu-icon:before, .menu-icon:after {
		left: 1em;
		width: 3em;
	}
	.menu-icon:before {
		top: 2.8em;
	}
	.menu-icon:after {
		bottom: 2.8em;
	}
	.floating-btn {
		padding: 2.2em 1em;
	}
}

/*helper class for visually hidden element*/
.off-screen {
	position: fixed;
	/*in order to prevent jumping when it's clicked/targeted*/
	width: 1px;
	height: 1px;
	margin: -1px;
	padding: 0;
	border: none;
	overflow: hidden;
	clip-path: inset(100%);
	clip: rect(0, 0, 0, 0); /*depreceted, only for IE9-11*/
	white-space: nowrap;
	/*For long content, line feeds are not interpreted as spaces and small width causes content to wrap 1 word per line: https://medium.com/@jessebeach/beware-smushed-off-screen-accessible-text-5952a4c2cbfe*/
}


.alert-message
{
    margin: 20px 0;
    padding: 20px;
    border-left: 3px solid #eee;
}
.alert-message h4
{
    margin-top: 0;
    margin-bottom: 5px;
}
.alert-message p:last-child
{
    margin-bottom: 0;
    float:left;
}
.alert-message-danger
{
    background-color: #fdf7f7;
    border-color: #d9534f;
}












.menubar1 {
	width:100%;
	padding-top:.4em;
	padding-bottom:.4em;
	background-color: #FFF;
	border-bottom:2px solid #BBB;
	box-shadow: 3px 3px 5px 3px #CCC;
	z-index:100;
	position:fixed;
	top:0;
	left:0;
}
ul .nav{
	white-space:nowrap;
}
.nav{
    list-style:none;
	font-size:1.1em;
    font-weight:lighter;
	letter-spacing:0.1em;
    margin:0;
    /* Clear floats */
    float:both;
    width:66.66%;
	/*Bring the nav above everything else--uncomment if needed.
    position:relative;
    z-index:5;*/
	
	 display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  
  -webkit-flex-flow: row wrap;
  justify-content: flex-end;
}

@media all and (max-width: 800px) {
  .nav {
    justify-content: space-around;
    width: 75%;
    font-size: .9em;
  }
}

@media all and (max-width: 600px) {
  .nav {
    -webkit-flex-flow: column wrap;
    padding: 0;
    font-size: .8em;
  }
  
  .nav a { 
    text-align: center; 
    padding: 10px;
    /*Fallback border-top (hex or RGB) should precede RGBA border-top. (Google it)*/
    border-top: 1px solid rgb(255,255,255);
    /*Now you can proceed with rbga values*/
    border-top: 1px solid rgba(255,255,255,0.3); 
    /*Fallback border-bottom (hex or RGB) should precede RGBA border-bottom. (Google it)*/
    border-bottom: 1px solid rgb(0,0,0);
    /*Now you can proceed with rbga values*/
    border-bottom: 1px solid rgba(0,0,0,0.1); 
  }

  
  .nav li:last-of-type a {
    border-bottom: none;
  }
} 
.nav li{
    float:left;
    margin-right:10px;
    position:relative;
}
.nav a{
    display:block;
    padding:10px;
    color:#003060;
    background-color:#FFF;
    text-decoration:none;
	border-radius:3px;
	transition: background .5s;
}
.nav a:hover{
    color:#FFF;
    background-color:#003060;
    text-decoration:none;
}
/*--- DROPDOWN ---*/
.nav ul{
    background-color:#FFF; /* Adding a background makes the dropdown work properly in IE7+. Make this as close to your page's background as possible (i.e. white page == white background). */
    background:rgb(255,255,255); /*Again, just in case browser can't handle alpha values*/
    background:rgba(255,255,255,0); /* But! Let's make the background fully transparent where we can, we don't actually want to see it if we can help it... */
    list-style:none;
	position:absolute;
    left:-2999px; /* Hide off-screen when not needed (this is more accessible than display:none;) */
	opacity: 0.0;
	transition: opacity .5s ease-in-out; /* Dropdowns transition from transparent to opaque SWT-022414 */ 
	}
.nav ul li{
	border-bottom:1px solid #FFF;
    padding-top:0; /* Introducing a padding between the li and the a give the illusion spaced items */
    float:none;
}
.nav ul a{
    white-space:nowrap; /* Stop text wrapping and creating multi-line dropdown items */
	border:1px solid #CCC;
}
.nav li:hover ul{ /* Display the dropdown on hover */
    left:0; /* Bring back on-screen when needed */
	opacity:1.0;
}
.nav li:hover a{ /* These create persistent hover states, meaning the top-most link stays 'hovered' even when your cursor has moved down the list. */
    text-decoration:none;
}
.nav li:hover ul a{ /* The persistent hover state does however create a global style for links even before they're hovered. Here we undo these effects. */
    text-decoration:none;
}
.nav li:hover ul li a:hover{ /* Here we define the most explicit hover states--what happens when you hover each individual link. */
    background-color:#003060;
	color:#FFF;
}

/*--'Select' default view is hidden--*/
/*.menubar1 ul select {
  display: none;
} 
@media (max-width: 468px) {
  .menubar1 ul li{ display: none; }
  .menubar1 ul select { display: inline-block; }
}*/

</style>

</head>
<body>


<br><br>


<br><br><br>


<div class="menubar1">
		<ul class="nav">
      <!--'icon-home" is an icon-font item that is not loaded in this example, alhough -->
			<li><a href="#"><span class="icon-home" aria-hidden="true"></span></a></li>
			<li>
				<a href = 'homepage.php'>Home</a>
			</li>
			<li>
				<a href = 'registrationForm.php'>Registration</a>
			</li>
			<li>
				<a href = 'passwordChangeForm.php'>Change Password</a>
			</li>
			<li>
				<a href="#">Expenses</a>
				<ul>
					<li><a href = 'bazarEntryForm.php'>Bazar Entry</a></li>
					<li><a href = 'otherExpenseForm.php'>Other Expenses Entry</a></li>
					<li><a href = 'showBazarExpenses.php'>Show Bazar Expense</a></li>
					<li><a href = 'showOtherExpenses.php'>Show Other Expense</a></li>
					
				</ul>
			</li>
			<li>
				<a href='contact.php'>Contact Us</a>
			</li>
			<li>
				<a href='logout.php'>Log Out</a>
			</li>
			
      <!--For now, doing away eith the select menu because of difficulty in getting links to work. The code does work to replace the menubar li with a select menu
			<select> 
			  <option value="" selected="selected">Select</option> 
			  <option value="/index.html">Home</option>
			  <option value="#">Capabilities</option> 
			  <option value="#">Performance</option> 
			  <option value="#">Contact Us</option> 
			  <option value="#">About</option> 
			</select>-->
		</ul>
	</div>

</body>
</html>