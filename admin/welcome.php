
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome</title>
<link href="bootstrap.css" rel="stylesheet">
        <script src="bootstrap.min.js"></script>
</head>
<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("kcc",$conn);
?>
<body>
<div class="wel">
Welcome&nbsp;&nbsp;
 <a href="http://localhost/web/index.php" class="btn btn-small"> Logout </a>
 
 
 <form class="span5" action="" method="post">
     
  <fieldset>
    <legend>Welcome to News Portal</legend>
 				<a href="?addnews" class="btn btn-large btn-success"> <i class="icon-plus"></i>Add News </a>
  </fieldset>
</form>
<?php 
if(isset($_GET['addnews'])){ 
include('addnews.php'); }
?>
</div>
</body></html>