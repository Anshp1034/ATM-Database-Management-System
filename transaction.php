<?php session_start()?>
<html>
<head>
	<title>Mini-Statement</title>
	<link rel="stylesheet" type="text/css" href="uitheme.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    button 
{
  background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 25%;
    position: absolute;
    left: 59%;
    top: 70%;
}

 button:hover 
{
    opacity: 0.8;
}

#tab {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 70%;
    text-align: center;
    margin:auto;
    margin-top:20px;
}

#tab td, #tab th {
    border: 1px solid #ddd;
    padding: 6px;
    text-align: center;
}

#tab tr:nth-child(even){background-color: #f2f2f2;}
#tab tr:nth-child(odd){background-color: #ddd }

/*#tab tr:hover {background-color: #ddd;}*/

#tab th {
    padding-top: 12px;
    padding-bottom: 12px;
    background-color: #26c6da;
    color: white;
}
#abc
{
	color: white;
	background-color: #26c6da;
	cursor: pointer;   
    padding: 9px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;

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
        </div></div>
<?php
$conn=mysqli_connect('localhost','root','','atm');
$sql="select * from transaction where acc_no='$_SESSION[db_usr]' order by t_id DESC";
$result=mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) 
		{
			$i=0;
			echo "<div align='center'><h3>Your Last 8 Transactions </h3></div>";
			echo "<table id=tab>
			<tr>
				<th>Date</th>
				<th>Time</th>
				<th>Transaction Number</th>
				<th>Account Number</th>
				<th>Account Type</th>
				<th>Amount</th>
				<th>Balance</th>
				<th>Transaction Type</th>
			</tr>";
			while($row=mysqli_fetch_assoc($result)) 
			{
				if($i<8)
				{	
				echo "<tr>
						<td>".$row["date"]."</td>
						<td>".$row["time"]."</td>
						<td>".$row["t_id"]."</td>
						<td>".$row["acc_no"]."</td>
						<td>".$row["account_type"]."</td>
						<td>".$row["t_amount"]."</td>
						<td>".$row["t_balance"]."</td>
						<td>".$row["t_type"]."</td>
					</tr>";
					$i++;
				}
			}
			echo "</table>"."<br>";
			echo "<form action='atm3a.php'>
				<button id= 'abc' type='submit' style='margin-left:-620px;width: 25em; height: 3.3em;'>Click here to go back</button>
				</form>";
		}
		else
		{
			echo "<div align='center' style='margin-top:110px;'><h2><i>There are No Recent Transactions </i></h2></div>";
			echo "<form action='atm3a.php'>
				<button id= 'abc' type='submit' style='margin-left:-620px;width: 25em; height: 3.3em;'>Click here to go back</button>
				</form>";
		}
?>
    <button id="printbutton" onclick="window.print();">Print this page</button> 
</body>
 <footer class="white"> &copy 2023 Sky Bank Ltd. All rights reserved
    </footer>
</html>