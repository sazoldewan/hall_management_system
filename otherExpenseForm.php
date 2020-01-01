<?php
 include("header.php");
?>

<h2>Other Expense Entry</h2>
<section class="main">	
	<form action="otherExpenseEntry.php" method="post" class="form-1">
			<input type="text" required name="field" placeholder="Field" autofocus="" style="width:200px;">
			<input type="text" required name="price" placeholder="Price" style="width:200px;">
			<input class="menuBtn" type="submit" value="Add Item"></input>
	</form>

</section>
