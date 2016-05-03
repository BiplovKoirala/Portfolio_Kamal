<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("kcc",$conn);
?>
<body>
<?php
if(isset($_POST['submit']))
	{
		$user=$_POST['user'];
		$password=$_POST['password'];
		$query="SELECT * FROM admin where user='".$user."' and password='".$password."'";
		$result=mysql_query($query);
		if($row=mysql_fetch_array($result))
		{
		$_SESSION['user'] = $row['user'];
		$_SESSION['password']=$row['password'];
?>
<script>alert('Welcome you are now logging in');</script>
<script>window.location='welcome.php';</script>
<?php
}
else

{ 
?>
<script>alert('Invalid Account');</script>
<?php 
include("wrong.php");
}

}

?>
</body>
</html>
