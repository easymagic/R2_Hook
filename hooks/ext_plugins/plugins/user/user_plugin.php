<?php 

function user_name_format($name1,$name2,$admin=true,$user_id=''){

  $r = '';	
  $href = '#';
  if (!empty($name1)){
    $r = $name1;
    $href = base_url() . 'view/' . base64_encode($user_id);
  }else{
  	if ($admin){
     $r = $name2 . ' (Manually Captured)';
  	}else{
  	 $r = $name2;	
  	}
  	
  }

  return '<a target="_blank" href="' . $href . '">' . ucfirst($r) . '</a>';

}

add_listener('name_format','user_name_format');