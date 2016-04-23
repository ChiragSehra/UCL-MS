<?php
session_start();
//error_reporting(0);
include 'inc/header.php'; 
include 'functions.php';  
$form = $_POST['form'];
if ($form=="filled") {
	$lquestion = $_POST['lquestion'];
	$optA = $_POST['optA'];
	$optB = $_POST['optB'];
	$optC = $_POST['optC'];
	$optD = $_POST['optD'];
	$answer = $_POST['answer'];
	$marks = $_POST['marks'];
	$lecturerid = $_SESSION['lecturerid'];
	
	$insert_question=insert_question($lecturerid,$lecturerid,$lquestion,$optA,$optB,$optC,$optD,$answer,$marks);
	
	// var_dump($lecturerid);
	// var_dump($_SESSION['username']);
}
?>


<form action="insert.php" method="post">
	<fieldset>
		 <legend style="font-size: 20px;"><strong>Insert Questions</strong></legend>

		 <textarea name="lquestion" id="" cols="30" rows="10">Insert Questions Here...</textarea>
		 <br><br>
		 Option A:
		 <input type="text" name="optA">
		 <br><br>

		 Option B:
		 <input type="text" name="optB">
		 <br><br>

		 Option C:
		 <input type="text" name="optC">
		 <br><br>

		 Option D:
		 <input type="text" name="optD">
		 <br><br>

		 Correct Answer:
		 <input type="text" name="answer" >
		 <br><br>
		 Marks
		 <input type="text" name="marks">
		 <br> 
		 <input hidden type="text" name="form" value="filled">
		 <input type="submit" value="Save" >

	</fieldset>
	
</form>

<?php include 'inc/footer.php' ?>