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
  
  
   <link rel="stylesheet" type="text/css" href="delete.css">
   
   <font color="Indigo">
<center> <h3> <b> DELETE STUDENT RECORD <b> </h2> </center> </head>

	</font>
<body background = "a3.jpg">
		<form action = "delete.php"> 
		<center>
		<br>
		
		<div id="sam">
		
		<center>  <input type = "Number" name = "Uid" placeholder="Enter stuid to delete" required /> </center> <br>
			<center> <input type = "submit" class="btn btn-primary" value = "delete" /> </center>
			
			
			</br>
			</div>
		</br>
		</center>
		<button type="button" id="dbb" class="btn btn-success" onclick="window.location.href='home.html'">Click here to go Home</button>
		
		</form>
		
	</body>
</html>

<?php

$Uid = $_GET['Uid'];	

$con = mysql_connect("127.0.0.1","root","");
mysql_select_db("student",$con);

	
$res = mysql_query("select * from studetails");
mysql_query("Delete from studetails WHERE Uid = '$Uid'");

echo "<center> RECORD SUCCESSFULLY DELETED </center>" ;

$res = mysql_query("select * from studetails");

echo "<center> <table border='3'><tr><th>ID\t</th><th>NAME\t</th><th>age\t</th><th>EMAIL ID\t</th></tr> </center>";
while($row=mysql_fetch_row($res))
{
//	echo "<tr><td>".$row[0]."\t</td>".$row[1]."\t</td><td>".$row[2]."\t</td><td>".$row[3]."\t</td></tr></tr>";
	echo "<tr><td>".$row[0]."\t</td><td>".$row[1]."\t</td><td>".$row[2]."\t</td><td>".$row[3]."\t</td></tr></tr>";
}

echo "</table>"
	
?>
