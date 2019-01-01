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
  
  
    <link rel="stylesheet" type="text/css" href="update.css">
	
	<font color="Indigo" size="10">
<center> <h2> <b> UPDATE STUDENT INFORMATION <b> </h2> </center> </head>
	</font>

	<body background = "a2.jpg">
	
		<form action = "update.php">
		<center>
		
		<div id="den">
		<center><input type = "number" name="Uid" placeholder="Enter Id to Update Record" required > </center> <br>
			<center>	 <input type = "text" name="name" placeholder="Enter Name" required > </center> <br>
			<center>	<input type = "number" name="age" placeholder="Enter Age" required > </center> <br>
		<center>	 <input type = "email" name="EmailId" placeholder="Enter Email Id" required > </center> <br>   
		
			
			
			<br> <center> <input type="submit" class="btn btn-primary" value="update" />  </center>
				
		</div>
		</br>
		</center>
		</br>
		
		</form>
		
		<button type="button"  class="btn btn-success" onclick="window.location.href='home.html'">Click here to go Home</button>
		
			
		
	</body>
</html>		



<?php


$Uid = $_GET['Uid'];
$name = $_GET['name'];
$age = $_GET['age']; 
$eid = $_GET['EmailId'];

$con = mysql_connect("127.0.0.1","root","");
mysql_select_db("student",$con);

$res=mysql_query("update studetails SET Name='$name',Age='$age',EmailId='$eid' Where Uid='$Uid'");

echo " <center> RECORD SUCCESSFULLY UPDATED </center>" ;
$res = mysql_query("select * from studetails");

echo "<center> <table border='3'><tr><th>ID\t</th><th>NAME\t</th><th>age\t</th><th>EMAIL ID\t</th></tr> </center>";
while($row=mysql_fetch_row($res))
{
		
		echo "<tr><td>".$row[0]."\t</td><td>".$row[1]."\t</td><td>".$row[2]."\t</td><td>".$row[3]."\t</td></tr></tr>";		
}

echo "</table>"

?>