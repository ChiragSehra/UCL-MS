<?php 

include 'functions.php'; 

session_start(); 

if (isset($_SESSION['username'])) {
	$message = 'User is already logged in';
}
// $sql = "select * from users";
// $result = $conn->query($sql);

if( $_SERVER['REQUEST_METHOD'] == 'POST') {
	// get their values.
	$username = $_POST['username']; 
	$password = $_POST['password']; 

	
	if (validate_lecturer($username, $password)) {
		
	$_SESSION['username'] = $username; 
	$_SESSION['lecturerid'] = $lecturerID;
	header("Location: staff.php"); 

	} else {
	 	$status = "Incorrect login credentials."; 
	}

}

?>

<!DOCTYPE lang="en-us" html>
<html>
<head>
	<title>UCL-MS</title>
	<link rel="stylesheet" href="style/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   

</head>
<meta charset="UTF-8">
<body>
	
<header>

    <h1 style="font-family:courier"><img src="img/unam-logo.jpg" alt="Unam Logo" style="width: 175px; height: 80px; align="middle"; "><br>
       Unam Computer Literacy - Marking Scheme
    </h1>

</header>



<form action="admin.php" method="post">
	<fieldset>
	  <legend style="font-size: 20px;"><strong>Staff Login:</strong></legend>
	     <label>Staff Number:</label><br>
	    <input type="text" name="username">
	    <br>

	     <label>Password:</label><br>
        <input type="password" name="password">
		<br>

		<input type="submit" value="Submit" >
		<br>
		<br>
	
		<?php if ( isset($status) ) : ?>
	    <p><?php echo $status; ?></p>
        <?php endif; ?>
    </fieldset>
</form><br>

<?php include 'inc/footer.php'; ?> 