<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
     border-collapse: collapse;
}
</style>
</head>
<body>

<?php
 

 
 include("header.php");
 //require_once 'bazar.php';
 //include('bazar.php');
 require_once 'config.php';
 
//require_once('bazar.php');

/*spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});*/
class Bazar extends DbConfig{

    public function getData($query)
    {        
        $result = $this->conn->query($query);
        
        if ($result == false) {
            return false;
        } 
        
        $rows = array();
        
        while ($row = mysqli_fetch_array($result)) {
            $rows[] = $row;
        }
        
        return $rows;
    }
    
    public function execute($query) 
    {
        $result = $this->connection->query($query);
        
        if ($result == false) {
            echo 'Error: cannot execute the command';
            return false;
        } else {
            return true;
        }        
    }
    
    public function delete($id, $table) 
    { 
        $query = "DELETE FROM $table WHERE id = $id";
        
        $result = $this->connection->query($query);
    
        if ($result == false) {
            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }

    public function escape_string($value)
    {
        return $this->connection->real_escape_string($value);
    }
    

}


 $modifyBy = $_SESSION['userAccessInfo'];
 
 $bazar = new Bazar();
 
  
 $query = "SELECT * FROM `bazar_expenses` Where `Modified By`='$modifyBy'";
 $result = $bazar->getData($query);
 echo "<table>";
  echo"<tr>";
    
    echo "<th width = '60%'>Field</th>"; 
    echo "<th width = '10%'>Amount</th>";
    echo "<th width = '10%'>Price</th>";
	echo"<th width = '20%'>Date</th>";
  echo "</tr>";
  
 foreach ($result as $key => $res) {
    //while($res = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$res['Field']."</td>";
        echo "<td>".$res['Amount']."</td>";
        echo "<td>".$res['Price']."</td>";
		echo "<td>".$res['Modification Date']."</td>";
        echo "</tr>";
		
    }
echo "</table>";
 /*
 $retval=mysqli_query($conn, "SELECT * FROM `bazar_expenses` Where `Modified By`='$modifyBy'");
    if(mysqli_num_rows($retval) > 0){  
        while($row = mysqli_fetch_assoc($retval)){  
        echo "Serial :{$row['Serial']} <br> ".
        "Field : {$row['Field']} <br> ".
        "Price : {$row['Price']} <br> ".
        "--------------------------------<br>";
    }
    }else{
        echo "0 result";
    }
    mysqli_close($conn);*/

?>