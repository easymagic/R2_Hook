<div class="col-xs-12">
	<div class="col-xs-12" style="
    text-align: right;
    font-size: 24px;
">
		<b>Add <?php echo $_SESSION['filters']['account_type_filter']; ?></b>
	</div>


	<div class="col-xs-12" align="right">
		<a href="?all" class="btn btn-default">Back</a>
	</div>

	<div class="col-xs-12">

		<label>
			Profile Pics
		</label>
		
	</div>

	<div class="col-xs-12" align="center">
<?php 
 
 echo call_hook_filter('cropit','profile_pics','Upload profile pics','120','120',$data->profile_pics);
?>
	</div>



	<div class="col-xs-12">

		<label>
			Profile Banner
		</label>
		
	</div>

	<div class="col-xs-12" align="center">
<?php 
 
 echo call_hook_filter('cropit','banner','Upload profile pics','800','190',$data->banner);
?>
	</div>


<input type="hidden" name="account_type" value="<?php echo $_SESSION['filters']['account_type_filter']; ?>" />

 <?php 
  if (!$hide_email){
 ?>

	<div class="col-xs-12">

		<label>
		  E-mail
		</label>
		
	</div>

	<div class="col-xs-12" align="center">
		 <input type="text" name="email" class="form-control" placeholder="E-mail"  value="<?php echo $data->email; ?>" />
	</div>


	<div class="col-xs-12">

		<label>
		  Phone
		</label>
		
	</div>

	<div class="col-xs-12" align="center">
		 <input type="text" name="phone_no" class="form-control" placeholder="Phone Number"  />
	</div>


	<div class="col-xs-12">

		<label>
			Password
		</label>
		
	</div>

	<div class="col-xs-12" align="center">
		 <input type="password" name="password" class="form-control" placeholder="Password"  />
	</div>

	<div class="col-xs-12">

		<label>
			Confirm Password
		</label>
		
	</div>

	<div class="col-xs-12" align="center">
		 <input type="password" name="c_password" class="form-control" placeholder="Confirm Password"  />
	</div>


<?php 
 }
?>

 <?php 
   
   if ($_SESSION['filters']['account_type_filter'] == 'entertainer'){
   	$born = 'Date Of Birth';
?>

	<div class="col-xs-12">

		<label>
			Stage Name (AKA)
		</label>
		
	</div>

	<div class="col-xs-12" align="center">
		 <input type="text" name="aka" class="form-control" placeholder="Stage Name"  value="<?php echo $data->aka; ?>" />
	</div>


	<div class="col-xs-12">

		<label>
		  First Name
		</label>
		
	</div>

	<div class="col-xs-12" align="center">
		 <input type="text" name="first_name" class="form-control" placeholder="First Name"  value="<?php echo $data->first_name; ?>" />
	</div>


	<div class="col-xs-12">

		<label>
			Middle Name
		</label>
		
	</div>

	<div class="col-xs-12" align="center">
		 <input type="text" name="middle_name" class="form-control" placeholder="Middle Name"  value="<?php echo $data->middle_name; ?>" />
	</div>



	<div class="col-xs-12">

		<label>
			Last Name
		</label>
		
	</div>

	<div class="col-xs-12" align="center">
		 <input type="text" name="last_name" class="form-control" placeholder="Last Name"  value="<?php echo $data->last_name; ?>" />
	</div>


<?php 
   }else if ($_SESSION['filters']['account_type_filter'] == 'company'){
   	$born = 'Date Established';
?>

	<div class="col-xs-12">

		<label>
			Company Name
		</label>
		
	</div>

	<div class="col-xs-12" align="center">
		 <input type="text" name="name" class="form-control" placeholder="Company Name" value="<?php echo $data->name; ?>" />
	</div>

  
<?php 
   }

 ?>



	<div class="col-xs-12">

		<label>
			Awards
		</label>
		
	</div>

	<div class="col-xs-12" align="center">
		 <textarea name="awards" class="form-control" placeholder="Awards"><?php echo $data->awards; ?></textarea>
	</div>



	<div class="col-xs-12">

		<label>
			Biography (BIO)
		</label>
		
	</div>

	<div class="col-xs-12" align="center">
		 <textarea name="bio" class="form-control" placeholder="Biography (BIO)"><?php echo $data->bio; ?></textarea>
	</div>



	<div class="col-xs-12">

		<label>
			<?php echo $born; ?>
		</label>
		
	</div>

	<div class="col-xs-12" align="center">
		 <input type="text" name="dob" class="form-control" placeholder="<?php echo $born; ?>" value="<?php echo $data->born; ?>" />
	</div>


	<div class="col-xs-12">

		<label>
			Profile Video (Youtube Link)
		</label>
		
	</div>

	<div class="col-xs-12" align="center">
		 <input type="text" name="profile_video" class="form-control" placeholder="Profile Video (Youtube Link)" value="<?php echo $data->profile_video; ?>" />
	</div>


	<div class="col-xs-12">

		<label>
			Facebook Handle
		</label>
		
	</div>

	<div class="col-xs-12" align="center">
		 <input type="text" name="facebook_handle" class="form-control" placeholder="Facebook Handle" value="<?php echo $data->facebook_handle; ?>" />
	</div>


	<div class="col-xs-12">

		<label>
			Twitter Handle
		</label>
		
	</div>

	<div class="col-xs-12" align="center">
		 <input type="text" name="twitter_handle" class="form-control" placeholder="Twitter Handle" value="<?php echo $data->twitter_handle; ?>" />
	</div>


	<div class="col-xs-12">

		<label>
			Instagram Handle
		</label>
		
	</div>

	<div class="col-xs-12" align="center">
		 <input type="text" name="instagram_handle" class="form-control" placeholder="Instagram Handle" value="<?php echo $data->instagram_handle; ?>" />
	</div>




</div>