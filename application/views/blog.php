
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kamal Tamang</title>
    <div class="content">
		<div class="container">
			<div class="page-title">
				<h1 class="title-default">
					<span>Blog</span>
				</h1>
			</div>
			<div class="col-md-12 col-sm-7 intro-text">
			<?php foreach($posts as $post){?>
   
         
      <h3> <?php echo $post->title;?></h3>
      <?php echo $post->image;?>
         <p><?php echo $post->description;?></p>
         <div class="form-group">
         <p><input type="text" class="form-control" placeholder="Email"></p>
         <p><input type="text" class="form-control" placeholder="Comment"></p>
        </div>
        <div class="form-group">
		            	<section id="subber">
							<input type="submit" name="submitlink" id="submitlink" class="btn btn-warning btn-lg" value="Comment">
						</section>
		             </div>
     <?php }?> 
   
			</div>		
		</div>
	</div>
</body>
</html>
