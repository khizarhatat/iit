<?php
include('connect.php');
$acd=$_GET['id'];

		
	$inqry = "delete from test_type where id='$acd'";
	$resin = Run($inqry);
	if($resin)
	{
		echo "<script>
alert('Record Deleted Successfully');
window.location.href='admin.php';
</script>";
		
	}
	
?>