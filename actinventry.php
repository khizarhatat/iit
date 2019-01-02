<?php 
session_start();
$usercd = $_SESSION['userd'];
if($usercd == "" || $usercd == NULL)
{
	header("Location:index.php?error=First login here !!!!!");
} 
include "connect.php";


 $clientname = $_POST['clientname'];
 $qty = $_POST['qty'];
 $PARTICULAR = $_POST['PARTICULAR'];
 $EXPIRY = $_POST['EXPIRY'];
  $RATE = $_POST['RATE'];
   $date1=date("y-m-d");
   $invno = $_POST['invno'];
   
  $total=$qty*$RATE;
 
 $qury="insert into inventry(client_name,qty,particular,expiry_date,rate,total,ent_date,invno) values ('$clientname','$qty','$PARTICULAR','$EXPIRY','$RATE','$total','$date1',$invno)";
 $resqury = Run($qury);
 
 
	 if($qury)
	 {
		echo "<script>
alert('Data Inserted Successfully');
window.location.href='additem.php';
</script>";
	 }




?>