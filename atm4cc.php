<?php
	session_start();
?>
<html>
<head>
	<title>BALANCE ENQUIRY</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="uitheme.css">
<style>
button 
{
  background-color: #26c6da;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}

 button:hover 
{
    opacity: 0.8;
}
#abc
{
	 width: 50%;
    padding: 10px 18px;
    background-color: #f44336;
}
#abc:hover
{
	
</style>
</head>
<body>
	<div align="center">	
<div align="left" class="logo">
<img src="logo.png" alt="Sky Bank" height="100px" width="200px">
        </div>
<br>
<br>
</div>
<?php
	$conn=mysqli_connect('localhost','root','','atm');
	$sql="select current_balance from current_account where c_id=(select c_id from account_details where acc_no='$_SESSION[db_usr]')";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0) 
	{
		 while($row=mysqli_fetch_assoc($result)) 
		 {

        	echo "<div align='center' style='margin-top:150px'> <h2> The Available Current Account Balance is " . $row["current_balance"] . "<br>"."Thank you for Banking with us!"."</h2></div>" ."<br>";
    	}
	} 
?>
<form action="atm3a.php">
	<div align="center">
		<button type="submit" value="Submit">Click here to go Back</button>
	</div>
</form>
</body>
 <footer class="white"> &copy 2023 Sky Bank Ltd. All rights reserved
    </footer>
</html>