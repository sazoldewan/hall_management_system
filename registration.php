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

<?php
  
    require_once 'config.php';// Connection of server

    //Collect Members info
    
    $grpname = $_POST["grpname"];
    $membername = $_POST["membername"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $modifyBY = $_SESSION['userAccessInfo'];

    //Query for Members information
    
    $retval = $conn->query( "INSERT INTO `members`(`Group Name`, `Member Name`, `Username`, `Password`,`Email`,`phone`,`Modified BY`) VALUES ( '$grpname','$membername','$username','$password','$email','$phone','$modifyBY')");

    if(! $retval ) {
    die('<br>Could not enter data: '.mysql_error());
    }
    echo "Entered data successfully\n";
    mysqli_close($conn);
	header('location: homepage.php');
    exit();


?>