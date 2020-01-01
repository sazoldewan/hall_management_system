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
    

    require_once 'config.php';
   

    $cuurentPassword = $_POST["currentPassword"];
    $newPassword = $_POST["newPassword"];
    $cnfrmPassword = $_POST["cnfrmPassword"];
    $modifyBy = $_SESSION['userAccessInfo'];
   


    $sql = "UPDATE `messmanagement`.`members` SET `Password` = '$newPassword' WHERE `members`.`Password` = '$cuurentPassword'";

    //mysql_select_db('messmanagement');
    $retval=mysqli_query($conn, $sql);
    if(! $retval ) {
    die('Could not enter data: ' . mysql_error());
    }
    echo "Entered data successfully\n";
    mysqli_close($conn);
	header('location: homepage.php');
    exit();


?>