<?php
include('connect.php');
	
	$emailadress = $_POST['emailadress'];
	$course = $_POST['course'];
	
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    
}

		 $inqry1 = "insert into assignmt(assignmet,email,course) values('$target_file','$emailadress','$course')";
	$resin1 = Run($inqry1);
		
	
	if($resin1)
	{
		header("Location:admin.php?assignment=success");
		
	}
	
?>user_login