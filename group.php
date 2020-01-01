<?php
    /*$host = 'localhost:3306';  
    $user = 'root';  
    $pass = '';  
    $dbname = 'messmanagement';  
    $conn = mysqli_connect($host, $user, $pass,$dbname); */

    require_once 'config.php';


    
    $serial = $_POST["serial"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
   

    $sql = "INSERT INTO `group`(`Serial`, `Name`, `Email`, `Password`) VALUES ( '$serial','$name','$email','$password')";

    //mysql_select_db('messmanagement');
    $retval=mysqli_query($conn, $sql);
    if(! $retval ) {
    die('Could not enter data: ' . mysql_error());
    }
    echo "Entered data successfully\n";
    mysql_close($conn);

?>