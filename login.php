<?php
require_once 'config.php';


$name=$_POST["name"];//receiving name field value in $name variable  
$password=$_POST["password"];//receiving password field value in $password variable  

$sql = "SELECT * FROM members where  Username='$name' and Password='$password'";
$result = $conn->query($sql);


$ret=$result->num_rows;

$conn->close();
if ($ret > 0) {
    session_start();
        $_SESSION['userAccessInfo'] = $name;
        header('Location: homepage.php') ;
        exit();
    }else{  
        header('Location:./') ;
        exit();
    }  




?> 