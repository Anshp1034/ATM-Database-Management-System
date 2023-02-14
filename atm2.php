<html>
<head>
	<title>Login</title>
	<script type='text/javascript' src='authenticate.js'></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="uitheme.css">
	<link rel="shortcut icon" href="icon.png" type="image/x-icon"/>
<style>
    input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
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
<img src="logo.png">
<br>
<br>
<h2>Please enter your Account Details below</h2>
<br>
<form action="authenticate.php" method="POST" class="box">
  <input name="username" type="text" placeholder="Enter Account number" >
  <br>
  <br>
 <input name="password" type="password" placeholder="Enter ATM Pin" >
  <br><br>
<button type="submit">Login</button>
<br>
<br>
</form>
<form action="index.php">
<button id= "abc" type="submit">Cancel</button>
</form>
</div>
</body>
 <footer class="white"> &copy 2023 Sky Bank Ltd. All rights reserved
    </footer>
</html> 