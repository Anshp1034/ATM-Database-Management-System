<!--authentication successful-->
<?php
	session_start();
?>
<html>
<head>
	<title>Welcome to Sky Bank ATM</title>
	<link rel="stylesheet" type="text/css" href="uitheme.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
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
    opacity: 0.8;}
#abc
{
	 width: 50%;
    padding: 10px 18px;
    background-color: #f44336;
}
#abc:hover
{
	opacity: 0.8;
}
</style>
</head>
<body>
<div align="center">
    <div align="left" class="logo">
<img src="logo.png" alt="Sky Bank" height="100px" width="200px">
        </div>
        <?php
$conn=mysqli_connect('localhost','root','','atm');
$sql="select * from customer where c_id=(select c_id from account_details where acc_no='$_SESSION[db_usr]');";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) 
	{
		 while($row=mysqli_fetch_assoc($result)) 
		 {

        	echo "<div align='center' style='margin-top:20px'> <h2> Welcome to Sky Bank ATM " . $row["c_fname"] ." ".$row["c_lname"]. "<br>"."</h2></div>" ."<br>";
    	}
	} 		
?>
<h2>Select any one from the options below</h2>
<form action="atmactw.php">
<button type="submit" name="Withdraw">Withdraw Cash</button>
<br>
</form>
<form action="atmactd.php">
<button type="submit" name="Deposit">Deposit Cash</button>
<br>
</form>
<form action="atmacbs.php">
<button type="submit" name="Balance">Enquire Balance</button>
<br>
</form>
<form action="transaction.php">
<button type="submit" name="Mini Statement">Mini Statement</button>
<br>
</form>
<form action="atm4e.php">
<button type="submit" name="Change Pin">Change PIN</button>
<br>
</form>
<form action="atm2.php">
<button id="abc" type="submit">Exit</button>
</form>
</div>
</body>
 <footer class="white"> &copy 2023 Sky Bank Ltd. All rights reserved
    </footer>
</html>