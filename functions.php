<?php
// session_start(); 
// include 'config.php';
$servername = "localhost";
$username = "root";
$password = "";
$db = "ucl_db";

// Create connection
$conn ="";
$conn = mysqli_connect($servername, $username, $password,$db);

function is_logged_in() {
	return isset($_SESSION['username']);
}

function validate_user_creds($username, $password) {
	global $conn;
	$sql = "select * from student where s_number='".$username."' and password='".$password."'";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result) > 0){
		$flag = 1;
	}else{
		$flag = 0;
	}

	return $flag;
}

function validate_lecturer($username, $password) {
	global $conn;
	$sql = "select * from lecturer where name='".$username."' and password='".$password."'";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result) > 0){
		$flag = 1;
	$row = mysqli_fetch_row($result); 	
	$lecturerID=$row[lecturer_id];
	}else{
		$flag = 0;
	}

	return $flag;
	return $lecturerID;
}

function insert_question($lecturerid,$lecturerid,$lquestion,$optA,$optB,$optC,$optD,$answer,$marks) {
	global $conn;
	$sql = "insert into lquestion (question_type, lecturer_id, question,opt1,opt2,opt3,opt4,correct_opt,grade) values ('1','$lecturerid','$lquestion','$optA','$optB','$optC','$optD','$answer','$marks')";
	$result = mysqli_query($conn,$sql);
}

