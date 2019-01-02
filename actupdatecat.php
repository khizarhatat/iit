<?php
include"connect.php";

$id=$_POST['id'];
$Category=$_POST['Category'];
$qry="update test_cat set test_cat_type='$Category' where id='$id'";
$res=run($qry);
if($res)
{
	echo "<script>
alert('Record Updated Successfully');
window.location.href='admin.php';
</script>";
}