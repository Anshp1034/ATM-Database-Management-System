<?php
	session_start();
	$loginpin=$_SESSION['db_pass'];
	$oldpin=$_POST['oldpin'];
	$pin=$_POST['pin'];
	$repin=$_POST['pin1'];
	$conn=mysqli_connect('localhost','root','','atm');
	if($pin==$repin&&$loginpin==$oldpin)
	{	
		$sql="update account_details set atm_pin =$repin WHERE acc_no = '$_SESSION[db_usr]'";
		mysqli_query($conn, $sql);
		echo '<script language="javascript">';
		echo 'alert("Pin Successfully Changed !!");window.location="atm3a.php"';
		echo '</script>';
	}
	else
	{
		echo '<script language="javascript">';
		echo 'alert("PIN incorrect or mismatched.");window.location="atm4e.php"';
		echo '</script>';
	}
?>