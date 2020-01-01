<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- saved from url=(0039)http://www.epdlbd.com/mess/Homepage.jsp -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<link rel="stylesheet" href="./Mess Management Systems_files/font-awesome.min.css">
<script type="text/javascript">
	function ScrollTo(address) {
		$('html, body').animate({
			scrollTop : ($('#' + address).offset().top)
		}, 700);
	}
</script>
<script src="./Mess Management Systems_files/jquery.min.js.download"></script>


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
	height: 1.2rem;
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

</style>





</head>
<body>

	<br><br>Welcome to homepage<br><br><br>


	<div id="top"></div>
	<input type="checkbox" class="off-screen menu-overlay-trigger" id="menu-overlay-trigger">

	<label class="floating-btn" id="menu-overlay-btn" for="menu-overlay-trigger"> <span class="menu-icon"></span>
	</label>

	<div class="menu-overlay"></div>

	<nav class="navigation">
	<ul class="menu">
		<!--If we set # and then some id that doesn't exists on the page
          screen won't jump to the top when anchor is clicked
          -->
		<li class="menu__item"><a href="http://www.epdlbd.com/mess/Homepage.jsp">Homepage</a></li>
		<li class="menu__item"><a href="http://www.epdlbd.com/mess/BazarEntry.jsp">Bazar Entry</a></li>
		<li class="menu__item"><a href="http://www.epdlbd.com/mess/OtherExpensesEntry.jsp">Other
				Expenses Entry</a></li>
		<li class="menu__item"><a href="http://www.epdlbd.com/mess/BazarExchange.jsp">Bazar
				Exchange</a></li>
<!-- 		<li class="menu__item"><a href="BazarValidate.jsp">Bazar -->
<!-- 				Validate</a></li> -->
		<li class="menu__item"><a href="http://www.epdlbd.com/mess/SelectOptions.jsp">Transactions</a></li>
		<li class="menu__item"><a href="http://www.epdlbd.com/mess/Profile.jsp">Profile</a></li>
		<li class="menu__item"><a href="http://www.epdlbd.com/mess/AddNewOpinion.jsp">Add New
				Opinion</a></li>
		<li class="menu__item"><a href="http://www.epdlbd.com/mess/Opinion.jsp">Opinion</a></li>
		
		<li class="menu__item"><a href="http://www.epdlbd.com/mess/Logout.jsp">Logout</a></li>
	</ul>
	</nav>


	<a class="floating-btn-top" id="menu-overlay-btn" onclick="ScrollTo(&#39;top&#39;);"><i class="fa fa-arrow-up fa-2x"></i></a>
	<a class="floating-btn-middle" id="menu-overlay-btn" onclick="ScrollTo(&#39;today&#39;);"><i class="fa fa-arrows-h fa-2x"></i></a>
	<a class="floating-btn-bottom" id="menu-overlay-btn" onclick="ScrollTo(&#39;bottom&#39;);"><i class="fa fa-arrow-down fa-2x"></i></a>




	<a class="menuBtn" href="http://www.epdlbd.com/mess/Homepage.jsp">Homepage</a> |
	<a class="menuBtn" href="http://www.epdlbd.com/mess/BazarEntry.jsp">Bazar Entry</a> |
	<a class="menuBtn" href="http://www.epdlbd.com/mess/OtherExpensesEntry.jsp">Other Expenses Entry</a> |
	<a class="menuBtn" href="http://www.epdlbd.com/mess/BazarExchange.jsp">Bazar Exchange</a> |
<!-- 	<a class='menuBtn' href="BazarValidate.jsp">Bazar Validate</a> | -->
	<a class="menuBtn" href="http://www.epdlbd.com/mess/SelectOptions.jsp">Transactions</a> |
	<a class="menuBtn" href="http://www.epdlbd.com/mess/Profile.jsp">Profile</a> |
	<a class="menuBtn" href="http://www.epdlbd.com/mess/AddNewOpinion.jsp">Add New Opinion</a> |
	<a class="menuBtn" href="http://www.epdlbd.com/mess/Opinion.jsp">Opinion</a> |
	<a class="deleteBtn" href="http://www.epdlbd.com/mess/Logout.jsp">Logout</a>
























<script type="text/javascript">
	var request;
	function seen(id) {
		var url = "NotificationController.jsp?ID="+id;

		if (window.XMLHttpRequest) {
			request = new XMLHttpRequest();
		} else if (window.ActiveXObject) {
			request = new ActiveXObject("Microsoft.XMLHTTP");
		}

		try {
			request.onreadystatechange = seenResult;
			request.open("GET", url, true);
			request.send();
		} catch (e) {
			alert("Unable to connect to server");
		}
		
		function seenResult() {
			if (request.readyState == 4) {
				var val = request.responseText;
// 				document.getElementById('mealDiv').innerHTML = val;
			}
		}

	}

</script>

  <script src="./Mess Management Systems_files/bootstrap.min.js.download"></script>




	<h2>Meal Details</h2>
	
	<form action="http://www.epdlbd.com/mess/UpdateMealByGroup.jsp" method="post"><table class="showAll" border="1" <="" th=""><tbody><tr><th width="80px">Date</th><th width="80px">fahim</th><th width="80px">hasib</th><th width="80px">ranadepto</th><th width="80px">sajol</th><th width="80px">shakhaeat</th><th width="80px">shuvro</th><th>Daily Mealrate</th><th>Day Total</th><th></th></tr><tr><td align="center">2017-08-01<br>TUESDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=shuvro&amp;startDate=2017-08-01&amp;endDate=2017-08-01&amp;database=Expenses">shuvro</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-01 TUESDAY"><input name="shakhaeat1D" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Breakfast 2017-08-02 WEDNESDAY"><input name="shakhaeat1B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-02 WEDNESDAY"><input name="shakhaeat1L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td id="today" class="Total" width="90px" align="center">11.0</td></tr><tr><td align="center">2017-08-02<br>WEDNESDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=hasib&amp;startDate=2017-08-02&amp;endDate=2017-08-02&amp;database=Expenses">hasib</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-02 WEDNESDAY"><input name="shakhaeat2D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-03 THURSDAY"><input name="shakhaeat2B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-03 THURSDAY"><input name="shakhaeat2L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-03<br>THURSDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=ranadepto&amp;startDate=2017-08-03&amp;endDate=2017-08-03&amp;database=Expenses">ranadepto</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-03 THURSDAY"><input name="shakhaeat3D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-04 FRIDAY"><input name="shakhaeat3B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-04 FRIDAY"><input name="shakhaeat3L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-04<br>FRIDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=sajol&amp;startDate=2017-08-04&amp;endDate=2017-08-04&amp;database=Expenses">sajol</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-04 FRIDAY"><input name="shakhaeat4D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-05 SATURDAY"><input name="shakhaeat4B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-05 SATURDAY"><input name="shakhaeat4L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-05<br>SATURDAY<br><a class="redBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=shakhaeat&amp;startDate=2017-08-05&amp;endDate=2017-08-05&amp;database=Expenses">shakhaeat</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-05 SATURDAY"><input name="shakhaeat5D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-06 SUNDAY"><input name="shakhaeat5B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-06 SUNDAY"><input name="shakhaeat5L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-06<br>SUNDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=fahim&amp;startDate=2017-08-06&amp;endDate=2017-08-06&amp;database=Expenses">fahim</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-06 SUNDAY"><input name="shakhaeat6D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-07 MONDAY"><input name="shakhaeat6B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-07 MONDAY"><input name="shakhaeat6L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-07<br>MONDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=shuvro&amp;startDate=2017-08-07&amp;endDate=2017-08-07&amp;database=Expenses">shuvro</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-07 MONDAY"><input name="shakhaeat7D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-08 TUESDAY"><input name="shakhaeat7B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-08 TUESDAY"><input name="shakhaeat7L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-08<br>TUESDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=hasib&amp;startDate=2017-08-08&amp;endDate=2017-08-08&amp;database=Expenses">hasib</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-08 TUESDAY"><input name="shakhaeat8D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-09 WEDNESDAY"><input name="shakhaeat8B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-09 WEDNESDAY"><input name="shakhaeat8L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-09<br>WEDNESDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=ranadepto&amp;startDate=2017-08-09&amp;endDate=2017-08-09&amp;database=Expenses">ranadepto</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-09 WEDNESDAY"><input name="shakhaeat9D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-10 THURSDAY"><input name="shakhaeat9B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-10 THURSDAY"><input name="shakhaeat9L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-10<br>THURSDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=sajol&amp;startDate=2017-08-10&amp;endDate=2017-08-10&amp;database=Expenses">sajol</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-10 THURSDAY"><input name="shakhaeat10D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-11 FRIDAY"><input name="shakhaeat10B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-11 FRIDAY"><input name="shakhaeat10L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-11<br>FRIDAY<br><a class="redBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=shakhaeat&amp;startDate=2017-08-11&amp;endDate=2017-08-11&amp;database=Expenses">shakhaeat</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-11 FRIDAY"><input name="shakhaeat11D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-12 SATURDAY"><input name="shakhaeat11B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-12 SATURDAY"><input name="shakhaeat11L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-12<br>SATURDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=fahim&amp;startDate=2017-08-12&amp;endDate=2017-08-12&amp;database=Expenses">fahim</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-12 SATURDAY"><input name="shakhaeat12D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-13 SUNDAY"><input name="shakhaeat12B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-13 SUNDAY"><input name="shakhaeat12L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-13<br>SUNDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=shuvro&amp;startDate=2017-08-13&amp;endDate=2017-08-13&amp;database=Expenses">shuvro</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-13 SUNDAY"><input name="shakhaeat13D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-14 MONDAY"><input name="shakhaeat13B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-14 MONDAY"><input name="shakhaeat13L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-14<br>MONDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=hasib&amp;startDate=2017-08-14&amp;endDate=2017-08-14&amp;database=Expenses">hasib</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-14 MONDAY"><input name="shakhaeat14D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-15 TUESDAY"><input name="shakhaeat14B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-15 TUESDAY"><input name="shakhaeat14L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-15<br>TUESDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=ranadepto&amp;startDate=2017-08-15&amp;endDate=2017-08-15&amp;database=Expenses">ranadepto</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-15 TUESDAY"><input name="shakhaeat15D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-16 WEDNESDAY"><input name="shakhaeat15B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-16 WEDNESDAY"><input name="shakhaeat15L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-16<br>WEDNESDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=sajol&amp;startDate=2017-08-16&amp;endDate=2017-08-16&amp;database=Expenses">sajol</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-16 WEDNESDAY"><input name="shakhaeat16D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-17 THURSDAY"><input name="shakhaeat16B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-17 THURSDAY"><input name="shakhaeat16L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-17<br>THURSDAY<br><a class="redBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=shakhaeat&amp;startDate=2017-08-17&amp;endDate=2017-08-17&amp;database=Expenses">shakhaeat</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-17 THURSDAY"><input name="shakhaeat17D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-18 FRIDAY"><input name="shakhaeat17B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-18 FRIDAY"><input name="shakhaeat17L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-18<br>FRIDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=fahim&amp;startDate=2017-08-18&amp;endDate=2017-08-18&amp;database=Expenses">fahim</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-18 FRIDAY"><input name="shakhaeat18D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-19 SATURDAY"><input name="shakhaeat18B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-19 SATURDAY"><input name="shakhaeat18L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-19<br>SATURDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=shuvro&amp;startDate=2017-08-19&amp;endDate=2017-08-19&amp;database=Expenses">shuvro</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-19 SATURDAY"><input name="shakhaeat19D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-20 SUNDAY"><input name="shakhaeat19B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-20 SUNDAY"><input name="shakhaeat19L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-20<br>SUNDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=hasib&amp;startDate=2017-08-20&amp;endDate=2017-08-20&amp;database=Expenses">hasib</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-20 SUNDAY"><input name="shakhaeat20D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-21 MONDAY"><input name="shakhaeat20B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-21 MONDAY"><input name="shakhaeat20L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-21<br>MONDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=ranadepto&amp;startDate=2017-08-21&amp;endDate=2017-08-21&amp;database=Expenses">ranadepto</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-21 MONDAY"><input name="shakhaeat21D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-22 TUESDAY"><input name="shakhaeat21B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-22 TUESDAY"><input name="shakhaeat21L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-22<br>TUESDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=sajol&amp;startDate=2017-08-22&amp;endDate=2017-08-22&amp;database=Expenses">sajol</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-22 TUESDAY"><input name="shakhaeat22D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-23 WEDNESDAY"><input name="shakhaeat22B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-23 WEDNESDAY"><input name="shakhaeat22L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-23<br>WEDNESDAY<br><a class="redBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=shakhaeat&amp;startDate=2017-08-23&amp;endDate=2017-08-23&amp;database=Expenses">shakhaeat</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-23 WEDNESDAY"><input name="shakhaeat23D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-24 THURSDAY"><input name="shakhaeat23B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-24 THURSDAY"><input name="shakhaeat23L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-24<br>THURSDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=fahim&amp;startDate=2017-08-24&amp;endDate=2017-08-24&amp;database=Expenses">fahim</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-24 THURSDAY"><input name="shakhaeat24D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-25 FRIDAY"><input name="shakhaeat24B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-25 FRIDAY"><input name="shakhaeat24L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-25<br>FRIDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=shuvro&amp;startDate=2017-08-25&amp;endDate=2017-08-25&amp;database=Expenses">shuvro</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-25 FRIDAY"><input name="shakhaeat25D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-26 SATURDAY"><input name="shakhaeat25B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-26 SATURDAY"><input name="shakhaeat25L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-26<br>SATURDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=hasib&amp;startDate=2017-08-26&amp;endDate=2017-08-26&amp;database=Expenses">hasib</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-26 SATURDAY"><input name="shakhaeat26D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-27 SUNDAY"><input name="shakhaeat26B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-27 SUNDAY"><input name="shakhaeat26L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-27<br>SUNDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=ranadepto&amp;startDate=2017-08-27&amp;endDate=2017-08-27&amp;database=Expenses">ranadepto</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-27 SUNDAY"><input name="shakhaeat27D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-28 MONDAY"><input name="shakhaeat27B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-28 MONDAY"><input name="shakhaeat27L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-28<br>MONDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=sajol&amp;startDate=2017-08-28&amp;endDate=2017-08-28&amp;database=Expenses">sajol</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-28 MONDAY"><input name="shakhaeat28D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-29 TUESDAY"><input name="shakhaeat28B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-29 TUESDAY"><input name="shakhaeat28L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-29<br>TUESDAY<br><a class="redBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=shakhaeat&amp;startDate=2017-08-29&amp;endDate=2017-08-29&amp;database=Expenses">shakhaeat</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-29 TUESDAY"><input name="shakhaeat29D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-30 WEDNESDAY"><input name="shakhaeat29B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-30 WEDNESDAY"><input name="shakhaeat29L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-30<br>WEDNESDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=fahim&amp;startDate=2017-08-30&amp;endDate=2017-08-30&amp;database=Expenses">fahim</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-30 WEDNESDAY"><input name="shakhaeat30D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-08-31 THURSDAY"><input name="shakhaeat30B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-08-31 THURSDAY"><input name="shakhaeat30L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td align="center">2017-08-31<br>THURSDAY<br><a class="menuBtn" href="http://www.epdlbd.com/mess/ShowTransactions.jsp?user=shuvro&amp;startDate=2017-08-31&amp;endDate=2017-08-31&amp;database=Expenses">shuvro</a></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td align="center"><abbr title="Dinner 2017-08-31 THURSDAY"><input name="shakhaeat31D" type="number" step=".5" min="0" value="1.0"></abbr><abbr title="Breakfast 2017-09-01 FRIDAY"><input name="shakhaeat31B" type="number" step=".5" min="0" value="0.0"></abbr><abbr title="Lunch 2017-09-01 FRIDAY"><input name="shakhaeat31L" type="number" step=".5" min="0" value="1.0"></abbr></td><td align="center"><input readonly="" type="number" step=".5" min="0" value="1.0"><input readonly="" type="number" step=".5" min="0" value="0.0"><input readonly="" type="number" step=".5" min="0" value="1.0"></td><td width="90px" align="center">0.00</td><td width="90px" align="center">12.0</td></tr><tr><td class="Total" align="center">Total Meal</td><td class="Total" align="center">62.0</td><td class="Total" align="center">62.0</td><td class="Total" align="center">62.0</td><td class="Total" align="center">62.0</td><td class="Total" align="center">61.0</td><td class="Total" align="center">62.0</td><td class="Total" align="center"></td><td class="Total" align="center">371.0</td></tr><tr><td class="Total" align="center">Total Bazar</td><td class="Total" align="center">0.0</td><td class="Total" align="center">0.0</td><td class="Total" align="center">0.0</td><td class="Total" align="center">0.0</td><td class="Total" align="center">0.0</td><td class="Total" align="center">0.0</td><td class="Total" align="center"></td><td class="Total" align="center">0.0</td></tr><tr><td class="Total" align="center">Meal Cost</td><td class="Total" align="center">0.00</td><td class="Total" align="center">0.00</td><td class="Total" align="center">0.00</td><td class="Total" align="center">0.00</td><td class="Total" align="center">0.00</td><td class="Total" align="center">0.00</td><td class="Total" align="center"></td><td class="Total" align="center">0.00</td></tr><tr><td class="Total" align="center">Other Expenses</td><td class="Total" align="center">0.0</td><td class="Total" align="center">0.0</td><td class="Total" align="center">0.0</td><td class="Total" align="center">0.0</td><td class="Total" align="center">0.0</td><td class="Total" align="center">0.0</td><td class="Total" align="center"></td><td class="Total" align="center">0.00</td></tr><tr><td class="Total" align="center">Total Fine</td><td class="Total" align="center">0.0</td><td class="Total" align="center">0.0</td><td class="Total" align="center">0.0</td><td class="Total" align="center">0.0</td><td class="Total" align="center">0.0</td><td class="Total" align="center">0.0</td><td class="Total" align="center"></td><td class="Total" align="center">0.00</td></tr><tr><td class="Total" align="center">Final Total</td><td class="Total Positive" align="center">fahim<br>0.00</td><td class="Total Positive" align="center">hasib<br>0.00</td><td class="Total Positive" align="center">ranadepto<br>0.00</td><td class="Total Positive" align="center">sajol<br>0.00</td><td class="Total Positive" align="center">shakhaeat<br>0.00</td><td class="Total Positive" align="center">shuvro<br>0.00</td><td class="Total" align="center"></td><td class="Total" align="center"></td></tr><tr><td colspan="9" align="center"><input type="submit" value="Submit"></td></tr></tbody></table></form>
	
	<div id="bottom"></div>











<title>Mess Management Systems</title>

<link rel="shortcut icon" href="https://3.imimg.com/data3/SW/XD/MY-9763253/mess-management-system-500x500.png"> 


	

</body></html>