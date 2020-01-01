<?php
 include("header.php");
?>


<?php
    /*$host = 'localhost:3306';  
    $user = 'root';  
    $pass = '';  
    $dbname = 'messmanagement';  
    $conn = mysqli_connect($host, $user, $pass,$dbname); 

    //include("hompage.php");*/

    require_once 'config.php';

    $field = $_POST["field"];
    $price = $_POST["price"];
    $modifyBy = $_SESSION['userAccessInfo'];
   


    $sql = "INSERT INTO `other_expenses`( `Field`,`Price`,`Modified By`) VALUES ('$field','$price','$modifyBy' )";

    //mysql_select_db('messmanagement');
    $retval=mysqli_query($conn, $sql);
    if(! $retval ) {
    die('Could not enter data: ' . mysql_error());
    }
    echo "Entered data successfully\n";
    mysqli_close($conn);

?>