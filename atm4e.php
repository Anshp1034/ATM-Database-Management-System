<!--change pin code-->
<!DOCTYPE html>
<html>
<head>
	<title>CHANGE PIN</title>
	<link rel="stylesheet" type="text/css" href="uitheme.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button 
{
  background-color: #4CAF50;
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
	opacity: 0.8;
}

</style>
</head>
<body>
<div align="center">
<div align="left" class="logo">
<img src="logo.png" alt="Sky Bank" height="100px" width="200px">
        </div>
<br>
<br>
<form method="POST" action="change_pin_check.php">
	Enter Current PIN: 
	<br>
	<input  type="password" name="oldpin" placeholder="Old PIN"><br><br>
	Enter New PIN : 
	<br>
	<input type="password" name="pin" placeholder="New PIN"><br><br>
	Re-Enter New PIN : 
	<br>
	<input type="password" name="pin1" placeholder="Re-Enter PIN"><br><br><br>
	<button type="submit">Confirm PIN change</button>
	<br>
	<br>
</form>
</div>
<div align="center">
	<form action="atm2.php">
		<button id="abc" type="submit">Cancel</button>
	</form>
</div>
</body>
 <footer class="white">&copy 2023 Sky Bank Ltd. All rights reserved
    </footer>
</html>