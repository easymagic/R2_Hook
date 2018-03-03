<div class="col-xs-12" align="right">
	<a href="?create" class="btn btn-default">Add Entry</a>
</div>
<div class="col-xs-12" style="
    font-size: 20px;
">
	<b>Current Filter: </b>&nbsp;<?php echo $_SESSION['filters']['account_type_filter']; ?>

</div>

<div class="col-xs-12">
	<form method="post" action="?">
		<input type="text" name="email_filter_like" placeholder="Search By E-mail" />
		<input type="submit" value="Search" class="btn btn-success" style="padding: 2px;" />
		<?php 
          if (isset($_SESSION['filters']) && isset($_SESSION['filters']['email_filter_like'])){
?>
(<b><?php echo $_SESSION['filters']['email_filter_like']; ?></b>)<a href="?remove_search_filter=email_filter_like">Click to remove</a>
<?php 
          }
		?>
	</form>	
</div>

<div class="col-xs-12" align="right">
  Switch Current Filter To :
  <small>
  	
  	<b>
	 <a href="?account_type_filter=company">Company</a>&nbsp;or&nbsp;
	 <a href="?account_type_filter=entertainer">Entertainer</a>
	</b>

  </small>	
</div>

<div class="col-xs-12">
	<?php 
       // request('tst',array());

       // $vl = request('tst');

       // $vl['another_prop'] = 'another prop value.';

       // request('tst',$vl);



       // print_r($_REQUEST);
	?>
<table class="table">
	
	<tr>
		<th>
			Pic.
		</th>
		<th>
		 E-mail	
		</th>
		<th>
		 Phone	
		</th>
		<th>
			Approved
		</th>
		<th>
			Account Type
		</th>
		
	</tr>

	<?php 
      foreach ($table as $k=>$v){

      	?>

      	<tr>
      		<td style="width: 128px;">
      	<img style="max-width: 100%;" src="<?php echo base_url() . __filter('handle_path',$v->profile_pics); ?>" />
      		</td>
      		<td>
      			<?php echo $v->email; ?>
      		</td>
      		<td>
      			<?php echo $v->phone_no; ?>
      		</td>
      		<td>
      			<?php echo __filter('boolean',$v->approved); ?>
      		</td>
      		<td>
      			<?php echo $v->account_type; ?>
      		</td>
      		<td>
      			<a href="?edit=<?php echo $v->id; ?>" class="btn btn-primary">Edit</a>
      		</td>
      	</tr>

      	<?php 

      }
	?>

</table>	
</div>

<!-- <div class="col-xs-12">
<?php 
 //if ($page > 1){
?>
<a href="?page=<?php //echo ($page-1); ?>" class="btn btn-sm btn-primary">Prev</a>
<?php 
 //}

?>	
<a href="?page=<?php //echo ($page+1); ?>" class="btn btn-sm btn-primary">Next</a>
	
</div> -->