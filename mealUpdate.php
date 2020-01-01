<?php
session_start();
if(!isset($_SESSION['userAccessInfo']) || (trim($_SESSION['userAccessInfo']) == '')){
	header('location:./');
	exit();
}
else{
	//echo "Hello ".$_SESSION['userAccessInfo'];
}

?>


<?php
    

    require_once 'config.php';
   
    $lengthOfCurrentMonth=date('t');
	
	$y=date('Y');
    $m=intval(date('m'));
    $currentDayOfMonth=date('j');
	
	for($x=0;$x<=$lengthOfCurrentMonth;$x++){
	
    $breakfast = $_POST[$_SESSION['userAccessInfo'].$x.'B'];
    $lunch = $_POST[$_SESSION['userAccessInfo'].$x.'L'];
    $dinner = $_POST[$_SESSION['userAccessInfo'].$x.'D'];
    $modifyBy = $_SESSION['userAccessInfo'];
   

    $sql = "UPDATE `meal` set `Breakfast` = '$breakfast',`Lunch` = '$lunch',`Dinner` = '$dinner ' WHERE `meal`.`Member Username` = '$modifyBy' AND `meal`.`Date` = '".$y."-".$m."-".$x."'";
   
    $retval=mysqli_query($conn, $sql);
    if(! $retval ) {
    die('<br>Could not enter data: ' . mysql_error());
    }
	}
    echo "<br>Entered data successfully\n";
    mysqli_close($conn);
	header('location: homepage.php');
    exit();


?>