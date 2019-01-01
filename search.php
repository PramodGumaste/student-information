<html>
<head>
<script language="javascript" type="text/javascript">
    window.history.forward();
</script>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
   <link rel="stylesheet" type="text/css" href="search.css">
   
   <font color="Indigo">
<center> <h3> <b> SEARCH STUDENT INFORMATION <b> </h2> </center> </head>
	</font>

<body background = "a3.jpg">
		<form action ="search.php"> 
		
		<center>
		<br>
		<br>
		<div id="mod">
		
		<center>  <input type = "text" name = "name" required placeholder="Enter Name" required/> </center> <br>
			<center> <input type = "submit" class="btn btn-primary" value = "Search" /> </center>
		
		</br>
		</br>
		</div>
		</center>
		
		</form>
		<button type="button"  id="def" class="btn btn-success" onclick="window.location.href='home.html'">Click here to go Home</button>
		
		
		
	</body>
</html>



<?php
$name = $_GET['name'];

$con = mysql_connect("127.0.0.1","root","");
mysql_select_db("student",$con);

$res = mysql_query("select * from studetails where Name = '$name'");

if(!mysql_num_rows($res))
{
	echo "<center> No Records Found </center>";
}
else
{
	echo "<center> <table border='3'><tr><th>ID\t</th><th>NAME\t</th><th>age\t</th><th>EMAIL ID\t</th></tr> </center>";
	while($row=mysql_fetch_row($res))
	{
	
		echo "<tr><td>".$row[0]."\t</td><td>".$row[1]."\t</td><td>".$row[2]."\t</td><td>".$row[3]."\t</td></tr></tr>";
	}
}
echo "</table>"
?>