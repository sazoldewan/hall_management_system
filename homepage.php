<?php
 include("header.php");
?>

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




<h1>Welcome to homepage</h1>
<h2>Meal Details</h2>


<?php



 require_once 'config.php';


$lengthOfCurrentMonth=date('t');
$currentDayOfMonth=date('j');

$modifyBy = $_SESSION['userAccessInfo'];

/*if($lengthOfCurrentMonth == $currentDayOfMonth){
  //Last day of month
}else{
  //Not last day of the month
} */ 


   $y=date('Y');
   $m=intval(date('m'));



   //echo "<section class='main'>"; 
   echo "<form action='mealUpdate.php' method='post' class='form-1'>";
   //SELECT sum(Lunch+Breakfast+Dinner) from `meal` WHERE `Date`='2017-08-02'

   echo "<table><tr><th>Date</th><th>Bela</th>";
   
  ///Get Username from Database///

   $allMembersUsername = array();
   $allMembersUsernameDatabase = mysqli_query($conn,"Select  `Username` FROM `members` ORDER BY `Username` ASC");
   while ($record = mysqli_fetch_array($allMembersUsernameDatabase)) {
         $allMembersUsername[] = $record;
    }
	
    for ($x = 0; $x < count($allMembersUsername); $x++) {
       echo "<th>" . $allMembersUsername[$x]['Username'] . "</th>";
	   if($modifyBy==$allMembersUsername[$x]['Username'] ){
	   $userIndex=$x;
	
	   }
    }
	
	/// Username is taken
	
	
	
    //echo "<th>Daily Mealrate</th>";
	
	
	
    

   ///Daily meal of members///
   
    echo "<th>Day Meal</th>";
	
    $mealOfOneDay = array();


    for ($i = 1; $i <= $lengthOfCurrentMonth; $i++)
    {
	   
      $mealOfOneDayDatabase = mysqli_query($conn,"SELECT * FROM `meal` where Date='".$y."-".$m."-".$i."' ORDER BY `Member Username` ASC");
      while ($record = mysqli_fetch_array($mealOfOneDayDatabase))
      {
         $mealOfOneDay[] = $record;
      }
      echo "<tr><td>".$y."-".$m."-".$i."</td>";
      echo "<strong><td>Breakfast<br><br>Lunch<br><br>Dinner</td></strong>";
      $s = 0;
      for ($x = 0; $x < count($mealOfOneDay); $x++)
      {
		  
		if($i<$currentDayOfMonth){
			echo "<td align='center'><abbr title='" .strtoupper( $allMembersUsername[$x]['Username']) . " Breakfast ".$y."-".$m."-".$i." $currentDayOfMonth'><input  type = 'number' name = '".$allMembersUsername[$x]['Username'].$i."B' min='0' max='10' step='1' value='" . $mealOfOneDay[$x]['Breakfast'] . "' readonly ></input></abbr><abbr title='" .strtoupper( $allMembersUsername[$x]['Username']) . " Lunch ".$y."-".$m."-".$i." $currentDayOfMonth'><br> <input  type = 'number' name = '".$allMembersUsername[$x]['Username'].$i."L' min='0' max='10' step='1' value='" . $mealOfOneDay[$x]['Lunch'] . "' readonly></input><br></abbr> <abbr title='" .strtoupper( $allMembersUsername[$x]['Username']) . " Dinner ".$y."-".$m."-".$i." $currentDayOfMonth'> <input readonly type='number' name = '".$allMembersUsername[$x]['Username'].$i."D' min='0' max='10' step='1' min='0' max='10' step='1' value='" . $mealOfOneDay[$x]['Dinner'] . "' readonly></input></abbr></td>";
		}else if($userIndex!=$x){
			echo "<td align='center'><abbr title='" .strtoupper( $allMembersUsername[$x]['Username']) . " Breakfast ".$y."-".$m."-".$i." $currentDayOfMonth'><input  type = 'number' name = '".$allMembersUsername[$x]['Username'].$i."B' min='0' max='10' step='1' value='" . $mealOfOneDay[$x]['Breakfast'] . "' readonly ></input></abbr><abbr title='" .strtoupper( $allMembersUsername[$x]['Username']) . " Lunch ".$y."-".$m."-".$i." $currentDayOfMonth'><br> <input  type = 'number' name = '".$allMembersUsername[$x]['Username'].$i."L' min='0' max='10' step='1' value='" . $mealOfOneDay[$x]['Lunch'] . "' readonly></input><br></abbr> <abbr title='" .strtoupper( $allMembersUsername[$x]['Username']) . " Dinner ".$y."-".$m."-".$i." $currentDayOfMonth'> <input readonly type='number' name = '".$allMembersUsername[$x]['Username'].$i."D' min='0' max='10' step='1' min='0' max='10' step='1' value='" . $mealOfOneDay[$x]['Dinner'] . "' readonly></input></abbr></td>";
        }else{
		    echo "<td align='center'><abbr title='" .strtoupper( $allMembersUsername[$x]['Username']) . " Breakfast ".$y."-".$m."-".$i." $currentDayOfMonth'><input type = 'number' name = '".$allMembersUsername[$x]['Username'].$i."B' min='0' max='10' step='1' value='" . $mealOfOneDay[$x]['Breakfast'] . "' ></input></abbr><abbr title='" .strtoupper( $allMembersUsername[$x]['Username']) . " Lunch ".$y."-".$m."-".$i." $currentDayOfMonth'><br> <input type = 'number' name = '".$allMembersUsername[$x]['Username'].$i."L' min='0' max='10' step='1' value='" . $mealOfOneDay[$x]['Lunch'] . "'></input><br></abbr> <abbr title='" .strtoupper( $allMembersUsername[$x]['Username']) . " Dinner ".$y."-".$m."-".$i." $currentDayOfMonth'> <input type='number' name = '".$allMembersUsername[$x]['Username'].$i."D' min='0' max='10' step='1' min='0' max='10' step='1' value='" . $mealOfOneDay[$x]['Dinner'] . "' ></input></abbr></td>";
		}
		          
		$s += $mealOfOneDay[$x]['Breakfast']+$mealOfOneDay[$x]['Lunch']+$mealOfOneDay[$x]['Dinner'];

		
		
      }
	  
	  echo "<td align='center'>".$s."</td>"; ///Print Total meal of a day///
	  
	 
	  
	  $totalMealOfMonth = 0;
	  
      //echo "</tr>";
      unset($mealOfOneDay);

   }
   echo "</tr>";
    ///Day meal is showed///
	
	
   
   ///Total meal of members end of the month///
   
   echo "<tr><td>Total Meal</td>";

   $mealOfMonthDatabase = mysqli_query($conn,"SELECT sum(Lunch+Breakfast+Dinner)as total FROM `meal` group by `Member Username`");
      while ($rec = mysqli_fetch_array($mealOfMonthDatabase))
      {
         $mealOfMonth[] = $rec;
      }

     echo "<td></td>";
     for ($x = 0; $x < count($mealOfMonth); $x++)
      {
		   	echo "<td class='Total' align='center'>" . $mealOfMonth[$x]['total'] . "</td>";

			//echo "<td ><input  type = 'number' name = '".$allMembersUsername[$x]['Username'].$i."B' value='" . $mealOfMonth[$x]['total'] . "'  ></input>";
			 $totalMealOfMonth+=$mealOfMonth[$x]['total'];
	  }
    echo "<td class='Total' align='center'>".$totalMealOfMonth."</td>";
    echo "</tr>";
	
	///Total Meal Of Month is showed///
	
	
	
	///Total price of members end of the month///
	
   echo "<tr><td>Total Price Of Bazar</td>";

   $totalPriceDatabase = mysqli_query($conn,"SELECT `Modified By`, sum(Price)as totalPrice FROM `bazar_expenses` group by `Modified By`");
      while ($reco = mysqli_fetch_array($totalPriceDatabase))
      {
         $price[] = $reco;
      }

     echo "<td></td>";
	 $totalPriceOfAll=0;
     for ($x = 0; $x < count($price); $x++)
      {
		  
		   	echo "<td class='Total' align='center'>" . round($price[$x]['totalPrice'],1) . "</td>";
			$totalPriceOfAll+=$price[$x]['totalPrice'];
       }
    echo "<td class='Total' align='center'>".round($totalPriceOfAll,1)."</td>";
    echo "</tr>";
	
	///Bazar Cost end of the month ///
	
	
	
	//Meal Cost every members///
	
	echo "<tr><td>Meal Cost</td>";
	echo "<td></td>";
	
    $mealRate = $totalPriceOfAll / $totalMealOfMonth; // Meal rate found//
	
	$mealCost = array();
    for($x=0; $x<count($allMembersUsername); $x++){
   
	$mealCost[$x]=$mealRate*$mealOfMonth[$x]['total'];
    echo "<td class='Total' align='center'>" . round($mealCost[$x],2) . "</td>";
    
	}
	echo "<td class='Total' align='center'>".round($mealRate,2)."</td>";
	echo "</tr>";
	
	/// End Of the meal cost
	
	
	
	///Final Count Of Every Member///
	
	echo "<tr><td>Final Cost</td>";
	echo "<td></td>";
	for($x=0; $x<count($allMembersUsername); $x++){
	$finalTotal=$price[$x]['totalPrice']-$mealCost[$x];
	
	echo "<td class='Total' align='center'>" . round($finalTotal,2) . "</td>";

	}
	echo "</tr>";
	///Final Count is Showed///
	
	echo "<td colspan='10' align='center'><input value='Submit' type='submit'></td>";
	
	
	echo "</table>";
    echo "</form>";
    //echo"</section>";













    mysqli_close($conn);

?>
</body>
</html>

