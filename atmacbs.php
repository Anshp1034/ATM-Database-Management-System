<html>
<head>
	<title>ACCOUNT TYPE</title>
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
<h1 align="center">Select Account Type </h1>
<form action="atm4cs.php">
<button type="submit" name="Savings">Savings Account</button>
<br>
<br>
</form>
<form action="atm4cc.php">
<button type="submit" name="Current">Current Account</button>
<br>
<br>
</form>
<form action="atm3a.php">
<button id="abc" type="submit">Cancel</button>
</form>
</div>
</body>
 <footer class="white"> &copy 2023 Sky Bank Ltd. All rights reserved
    </footer>
</html>