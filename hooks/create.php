<form enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>actions/launch/user/create">
 <div class="col-xs-12">
	<?php 
      echo __filter('crowd_source_user_form',array(),false);
	?>
	<div class="col-xs-12" align="right" style="padding-top: 11px;">
		<input type="submit" class="btn btn-primary" value="Create" />
	</div>
 </div>		
</form>