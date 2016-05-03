<h2><span>Post Blog</span></h2>
</div>
<form id="add" action="<?php echo base_url('Blog_post/blog');?>" method="post">
<table width="30%" >
<tr>
    <td>title:&nbsp;
        <td><input type="text" id="title" class="form-control" name="title" /></td>
    </td>
</tr>
<tr>
            <td><input type="file" name="image" /></td>
        </tr>
<tr>
    <td>Description:
        <td><input type="text" class="form-control" name="description" /></td>
    </td>
</tr>
<tr>
   <td><input type="submit" class="btn btn-default btn-lg" name="post" value="post" /></td>

</tr>