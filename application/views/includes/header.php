<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kamal Tamang</title>
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">
<link href="assets/css/flexslider.css" rel="stylesheet">
<link href="assets/css/font-awesome.css" rel="stylesheet">

<!-- Slidebars CSS -->
<link href="assets/css/slidebars.css" rel="stylesheet">
<link href="assets/css/skillbar.css" rel="stylesheet">


<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic' rel='stylesheet' type='text/css'>
</head>

<body class="">

<div class="sb-slidebar sb-right sb-style-push">
	<div class="fly-menu">
		<ul>
			<li class="active"><a href="<?php echo base_url('Home');?>"><span class="fa fa-home fa-fw"></span> Home</a></li>
			<li><a href="<?php echo base_url('');?>About_me"><span class="fa fa-user fa-fw"></span> About Me</a></li>
			<li><a href="<?php echo base_url('');?>Portfolio"><span class="fa fa-suitcase fa-fw"></span> Portfolio</a></li>
			<li><a href="<?php echo base_url('');?>Blog"><span class="fa fa-suitcase fa-fw"></span> Blog</a></li>
			<li><a href="<?php echo base_url('');?>Contact"><span class="fa fa-envelope fa-fw"></span> Contact</a></li>
		</ul>
	</div>
</div>

<div id="sb-site">
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.php?action=home"><img src="assets/images/logo.jpg" alt="logo"></a>
			</div>
		</div>
		<div class="icon">
			<a href="#" class="fa fa-bars sb-toggle-right"></a>
		</div>
	</div>	<!-- /.header -->
<!-- header end -->
</body>
</html>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>


<!-- Slidebars -->
<script type="text/javascript" src="assets/js/slidebars.js"></script>
<script>
	(function($) {
		$(document).ready(function() {
			$.slidebars();
		});
	}) (jQuery);
</script>

<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('.skillbar').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent')
		},6000);
	});
});
</script>
