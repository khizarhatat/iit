<?php session_start();
include "connect.php";

$patientname = $_POST['patientname'];
 $gender = $_POST['gender'];
 $age = $_POST['age'];
 $refer = $_POST['refer'];
 $Speciman = $_POST['Speciman'];
 $testid = $_POST['testid'];
$labno = $_POST['labno'];
  $check = $_POST['check'];

 $count=1;
 while($count <= $check)
		{
			
// $testid = $_POST['testid'.$count];
	if (isset($_POST['subtest'.$count])) {
		$id = $_POST['patientID'.$count];
 $subtest = $_POST['subtestid'.$count];
 $testval = $_POST['testval'.$count];
 $Normalval = $_POST['Normalval'.$count];
 $price = $_POST['price'.$count];
 $date=date("Y-m-d");
$time=date("h:i:A");

  $qury="update patient_table set patient_name='$patientname',gender='$gender',age='$age',referred='$refer',test_type='$testid',date='$date',time='$time',specimen='$Speciman',sub_test_id='$subtest',result='$testval',normal_value='$Normalval',total_Price='$price',labno='$labno' where labno='$labno' and sub_test_id='$subtest' ";
 $resqury = Run($qury);

		}
		 $count++;	
 } 
 
	 if($resqury)
	 {
		 
		 echo "<script>
alert('Record Updated Successfully');
window.location.href='patientresult.php?id=$labno';

</script>";
		 
		 
	 }




?>