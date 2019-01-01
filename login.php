	
		
<?php

	$uname=$_POST['user'];
	$pass=$_POST['pass'];

	$uname = stripcslashes($uname);
	$pass = stripcslashes($pass);
	$uname = mysql_real_escape_string($uname);
	$pass = mysql_real_escape_string($pass);

	mysql_connect("localhost","root","");
	mysql_select_db("login");
	
	$result = mysql_query("select * from users where Username = '$uname' and Password = '$pass'") or die ("failed to execute query".mysql_error());
	
	$arr = mysql_fetch_array($result);
	if ($arr['Username'] == $uname && $arr['Password'] == $pass )
	{
			session_start();
			
			if(!isset($_SESSION['loggedin']))
			{
				header('location:home.html');
			}
	}
	else
	{
		echo "<b><h1> Failed to login ! Please enter valid credentials<h1></b>";
		
	}
?>

<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


 </head>
 
<form>
</form>
<body>
       <button type="button" class="btn btn-Danger" onclick="window.location.href='login.html'">Click here for login page</button>	
	
</body>
</html>

