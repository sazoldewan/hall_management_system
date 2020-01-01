<!DOCTYPE html>
<!-- saved from url=(0101)file:///C:/Users/Shakhayet/Desktop/multi-step-form-with-progress-bar-using-jquery-and-css3/index.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <title>Registration</title>
  
  <link rel="stylesheet" href="./RegistrationForm_files/reset.min.css">

  
      <link rel="stylesheet" href="./RegistrationForm_files/style.css">

  
</head>

<body>
  <?php
 include("header.php");
?>

  <!-- multistep form -->
<form id="msform" action="registration.php" method="post">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    
    <li>Personal Details</li>
    <li class="active">Social info</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="confirmedpass" placeholder="Confirm Password" required>
    <input type="button" name="next" class="next action-button" value="Next" >
  </fieldset>
  
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" required name="grpname" placeholder="Group Name">
    <input type="text" required name="username" placeholder="Username">
    <input type="text" required name="membername" placeholder="Member Name">
    <input type="text" name="phone" placeholder="Phone">
    <input type="button" name="previous" class="previous action-button" value="Previous">
    <input type="button" name="next" class="next action-button" value="Next" />
   

  </fieldset>
  <fieldset>
    <h2 class="fs-title">Social Profiles</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="twitter" placeholder="Twitter" />
    <input type="text" name="facebook" placeholder="Facebook" />
    <input type="text" name="gplus" placeholder="Google Plus" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit">
  </fieldset>
</form>
  <script src="./RegistrationForm_files/jquery.min.js.download"></script>
<script src="./RegistrationForm_files/jquery.easing.min.js.download"></script>

    <script src="./RegistrationForm_files/index.js.download"></script>



</body></html>