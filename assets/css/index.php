
<?php
session_start();
ob_start();   
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("config/config.php");
include("autoload.php");

$db = new Db();
//var_dump($db->connect());die;
?>


<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="assets/js/jquery-1.2.6.min.js"></script>

	<link rel="stylesheet" type="text/css" href="assets/css/styles.css" />

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" data-name="skins">
	<link rel="stylesheet" href="assets/css/layout/wide.css" data-name="layout">

	<link rel="stylesheet" href="assets/css/fractionslider.css"/>
	<link rel="stylesheet" href="assets/css/style-fraction.css"/>
	<link rel="stylesheet" href="assets/css/animate.css"/>

	<link rel="stylesheet" type="text/css" href="assets/css/switcher.css" media="screen" />  

	<script type="text/javascript"src="assets/js/cufon-yui.js">
		<script type="text/javascript" src="assets/js/cufon-times.js"></script>
		<script type="text/javascript" src="assets/js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="assets/js/script.js"></script>
		<script type="text/javascript" src="assets/js/coin-slider.min.js"></script>
		<SCRIPT type="text/javascript">
			<!--
/*
 
*/

pic1 = new Image(16, 16); 
pic1.src = "assets/images/loader.gif";

$(document).ready(function(){

	$("#username").change(function() { 

		var usr = $("#username").val();

		if(usr.length >= 4)
		{
			$("#status").html('<img src="assets/images/loader.gif" align="absmiddle">&nbsp;Checking availability...');

			$.ajax({  
				type: "POST",  
				url: "files/check.php",  
				data: "username="+ usr,  
				success: function(msg){  

					$("#status").ajaxComplete(function(event, request, settings){ 

						if(msg == 'OK')
						{ 
        $("#username").removeClass('object_error'); // if necessary
        $("#username").addClass("object_ok");
        $(this).html('&nbsp;<img src="assets/images/tick.gif" align="absmiddle">');
    }  
    else  
    {  
		$("#username").removeClass('object_ok'); // if necessary
		$("#username").addClass("object_error");
		$(this).html(msg);
	}  

});

				} 

			}); 

		}
		else
		{
			$("#status").html('<font color="red">The username should have at least <strong>4</strong> characters.</font>');
	$("#username").removeClass('object_ok'); // if necessary
	$("#username").addClass("object_error");
}

});

});

//-->
</SCRIPT>








</head>
<body>
	<div class = "">
		<header>
			<?php include("includes/header.php");
			?>
		</header>


		<div class = "container">

			<section>

				<div class = "container col-md-12">
					<?php
					if (isset($_GET['action']) && !empty($_GET['action'])) {

						$file = "files/" . $_GET['action'] . ".php";

						if (file_exists($file)) {

							include($file);
						} else {

							include("files/home.php");
						}
					} else {

						include("files/home.php");
					}
					?>

				</div>


			</section>
		</div>

		<div class = "col-md-12">
			<?php include("includes/footer.php");?>	
		</div>


	</div>

	

</body>
</html>



