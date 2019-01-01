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

  
  <link rel="stylesheet" type="text/css" href="insert.css">
  
  <font color="Indigo">
<center> <h2> <b> ENTER STUDENT INFORMATION <b> </h2> </center> </head>
	</font>
	
	<body background = "a2.jpg">
	
		<form align="center" action = "insert.php">
		<center>
		<div  id="sol">
		<br>
		
		
				<center> <input type = "text" 	name="name" size="20" placeholder="Enter Name" required > </center> <br>
				<center> <input type = "number" name="age" size="20" placeholder="Enter Age" required >  </center> <br>
			<center> <input type = "email" 	name="EmailId" size="20" placeholder="Enter Email Id" required >  </center>  <br>  
		
			
		<br>  <center> <input type="submit" class="btn btn-primary" value="submit"/>  </center>
		
		</br>
		</br>
		</form>
		</center>
		<button type="button" id="abc" class="btn btn-success" onclick="window.location.href='home.html'">Click here to go Home</button>		
		
		</div>
		
	</body>
</html>		


<?php
$name = $_GET['name'];
$age = $_GET['age']; 
$eid = $_GET['EmailId'];

$con = mysql_connect("127.0.0.1","root","");
mysql_select_db("student",$con);
mysql_query("insert into studetails values('','$name','$age','$eid')");

echo "<center> RECORD SUCCESSFULLY ADDED </center>" ;

$res = mysql_query("select * from studetails");

echo "<center> <table border='3'><tr><th>NAME\t</th></tr> </center>  ";
while($row=mysql_fetch_row($res))
{
//	echo "<tr><td>".$row[0]."\t</td>".$row[1]."\t</td><td>".$row[2]."\t</td><td>".$row[3]."\t</td></tr></tr>";
	echo "<tr><td>".$row[1]."\t</td></tr>";
}
echo "</table>"
?>