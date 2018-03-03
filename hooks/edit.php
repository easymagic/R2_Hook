<form enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>actions/launch/user/update/<?php echo $data->id; ?>">
 <div class="col-xs-12">
	<?php 
      echo __filter('crowd_source_user_form',$data);
	?>
	<div class="col-xs-12" style="padding-top: 11px;" align="right">


        <a href="" class="btn btn-success">Manage Projects</a>
        
		<input type="submit" class="btn btn-primary" value="Update" />
	</div>
 </div>		
</form>