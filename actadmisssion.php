<?php
include('connect.php');
	
	$studentname = $_POST['studentname'];
	$Fathername = $_POST['Fathername'];
	$CNIC = $_POST['CNIC'];
	$Gender = $_POST['Gender'];
	$Marital = $_POST['Marital'];
	$dob = $_POST['dob'];
	$Religion = $_POST['Religion'];
	$Occupation = $_POST['Occupation'];
	$postaladress = $_POST['postaladress'];
	$permanentadress = $_POST['permanentadress'];
	$Mobileno = $_POST['Mobileno'];
	$emailadress = $_POST['emailadress'];
	$password = $_POST['password'];
	$reg_no = $_POST['registration'];
	$program = $_POST['program'];
	$usercode = $_POST['usercode'];
		
	$inqry = "insert into std_reg (std_name,father_name,gender,date_month_year,religion,CNIC,E_mail,reg_no,program,password,user_code) values('$studentname','$Fathername','$Gender','$dob','$Religion','$CNIC','$emailadress','$reg_no','$program','$password','$usercode')";
	$resin = Run($inqry);
	if($resin)
	{
		$inqry1 = "insert into user_login (f_name,l_name,email,paswd,user_code,type) values('$studentname','$Fathername','$emailadress','$password','$usercode',1)";
	$resin1 = Run($inqry1);
		
	}
	
	if($resin1)
	{
		header("Location:index.php?rep=success");
		
	}
	
?>