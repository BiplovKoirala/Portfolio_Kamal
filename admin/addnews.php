<title>Add News Portal</title>
<form class="span4" action="" method="post">  
  <fieldset class="span3">
    <legend>Add News</legend>
     <label>News Title</label>
    <input type="text" name="newstitle" class="input-xlarge" placeholder="News Title" required="required">
     <label>Description</label>
    <textarea rows="3" class="des" name="body" required="required"></textarea><br/><br/>
     
     <br/>
     <?php

	if(isset($_POST['add'])){
			$conn=mysql_connect('localhost','root','');
mysql_select_db("kcc",$conn);

	$title=$_POST['newstitle'];
	$body=$_POST['body'];
	$query="Insert into newsportal(title,body) values('".$title."','".$body."')";
$rs=mysql_query($query) or die (mysql_error());
	if($rs){ ?>
		<label>Successfully added!!</label>
<?php	}
	
}?>
     <button type="submit" name="add" class="btn btn-success">Submit</button>
 

  </fieldset>
</form>
