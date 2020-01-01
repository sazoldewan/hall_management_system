<?php
 include("header.php");


   require_once 'config.php';
    
    


    $sql = "SELECT * FROM `other_expenses`" ;

    $retval=mysqli_query($conn, $sql);

    
    if(mysqli_num_rows($retval) > 0){  
        while($row = mysqli_fetch_assoc($retval)){  
        echo "Serial :{$row['Serial']} <br> ".
        "Field : {$row['Field']} <br> ".
        "Amount : {$row['Price']} <br> ".
        "--------------------------------<br>";
    }
    }else{
        echo "0 result";
    }
     
    mysqli_close($conn);

    

?>