<html lang="en">
<head>
<meta charset="utf-8">
<title>SQL Injection form error example</title>
 <meta name="description" content="Twitter Bootstrap Version2.0 form error example from w3resource.com."> <link href="http://localhost/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet">
 </head>
 <body style="margin-top: 50px">
 <div class="container">
 <div class="row">
 <div class="span6">
 <?php
 $host="localhost:3306";
 $username="root";$password="";$db_name="hotel";
 $con=mySQLi_connect("$host","$username","$password")or 
 die("cannot connect"); 
mySQLi_select_db($con,"$db_name")or
 die("cannot select DB");
$uid = $_POST['uid'];
$pid = $_POST['passid'];
$SQL = "select * from customer where customer = +'$uid'";
$result = mySQLi_query($con,$SQL);
if(mySQLi_num_rows($result)>0)
{
	
	while ($row=mySQLi_fetch_row($result)){echo "
	<p>".
	"User ID : ".$row[0]."
	</p>";
	echo "<p>".
	"Password : ".
	$row[1]."</p>";
	echo "<p>".
	"First Name : ".
	$row[2]." Last Name : ".
	$row[3]."</p>";
	echo "<p>";
}}
else 
	echo "Invalid user id or password";
?>
</div>
</div>
</div>
</body>
</html>