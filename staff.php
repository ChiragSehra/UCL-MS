<?php
 session_start(); 
 include 'inc/header.php';?>

<fieldset>
  <legend style="font-size: 20px;"><strong>Options</strong></legend>
  	 <!-- Apply Security Later on -->
	<a href="insert.php">
		<input type="submit" value="Insert Questions">
	</a><br>
	<a href="results.php">
		 <input type="submit" value="View Results" >
	</a>
</fieldset>

<?php include 'inc/footer.php'; ?>