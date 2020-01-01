<?php
 include("header.php");
?>

<h2>Bazar Entry</h2>
<section class="main">	
	<form action="bazarEntry.php" method="post" class="form-1">
  <input type="text" required list="field" name="field" placeholder="Field" autofocus="" style="width:200px;">
  <datalist id = "field">
    <option value="[Beef]"></option>
	<option value="[Broiler]"></option>
	<option value="[Egg]"></option>
	<option value="[Fish]"></option>
	<option value="[Meat]"></option>
	<option value="[Vegetable]"></option>
	</datalist>
  </input>

			<input type="text" required name="amount" placeholder="Amount" style="width:200px;">
			<input type="text" required name="price" placeholder="Price" style="width:200px;">
			<input class="menuBtn" type="submit" value="Add Item"></input>
	</form>

</section>
