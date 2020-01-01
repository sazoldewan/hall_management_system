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
   

    $field = $_POST["field"];
    $amount = $_POST["amount"];
    $price = $_POST["price"];
    $modifyBy = $_SESSION['userAccessInfo'];
   


    $sql = "INSERT INTO `bazar_expenses`( `Field`,`Price`,`Amount`,`Modified By`) VALUES ('$field','$price','$amount','$modifyBy' )";

    //mysql_select_db('messmanagement');
    $retval=mysqli_query($conn, $sql);
    if(! $retval ) {
    die('Could not enter data: ' . mysql_error());
    }
    echo "Entered data successfully\n";
    mysqli_close($conn);
	header('location: bazarEntryForm.php');
    exit();


?>