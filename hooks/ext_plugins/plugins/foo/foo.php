<?php 

 function foo_mtd($args){
   return '<b>' . $args .'</b>';
 }


 function foo_mtd2($args){
   return '<i>' . $args .'</i>';
 }



 function foo_mtd3($args){

   return fetch_template('plugins/foo/temp',array("name"=>$args));

 }

 function check_value($vl,$error){
 	return array($vl . 'confirmed',0);
 }


 function check_value2($vl,$error){
 	if ($error){
      return array($vl . '_confirmed',0);  
 	}else{
      return array($vl . '_not_confirmed',1);
 	}
 	
 }



 // add_listener('bold','foo_mtd');
 // add_listener('bold','foo_mtd2');
 add_listener('boldb','foo_mtd3');

 add_listener('valb','check_value2');
 add_listener('valb','check_value2');
