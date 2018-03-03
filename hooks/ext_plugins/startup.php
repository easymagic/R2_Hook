<?php 
 // $ext_plugin_path = 'ext_plugins/';
 // echo 'SU.';

class Vars{
	public static $listeners = array();
	public static $ext_plugin_path = 'ext_plugins/';
}

 // $_listeners_ = array();



 function scan_plugins(){
 	
 	// global $ext_plugin_path;
    $path = Vars::$ext_plugin_path . 'plugins';
    // echo $path . '<br />';
    // echo 'scnplg.';
 	$dir = scandir($path);
 	$dir = array_diff($dir, array('.','..'));
 	
 	// print_r(array(2,3,4,3900));

 	foreach ($dir as $k=>$v){

      $file = Vars::$ext_plugin_path . 'plugins/' . $v . '/' . $v . '_plugin.php';
      
      if (file_exists($file)){
        include($file);
      }

 	}
 	// print_r($dir);
 }
 
 function call_hook_filter(){
   $args = func_get_args();
   // global $_listeners_;

   $listeners_ = array_reverse(Vars::$listeners);


   if (count($args) > 1){

   	 $hook = array_shift($args);

   	 if (isset($listeners_[$hook])){
        
	   foreach ($listeners_[$hook] as $k=>$fn){
	   	 if (function_exists($fn)){

	   	 	$args = call_user_func_array($fn, $args);
	   	 	if (!is_array($args)){
             $args = array($args);
	   	 	}

	   	 	// echo $args;
	   	 }
	   }        

   	 }

   }

  // print_r($args);



   return implode('', $args);

 }


 function call_hook_action(){
   $args = func_get_args();
   // global $_listeners_;

   // $listeners_ = array_reverse(Vars::$listeners);
   $listeners_ = Vars::$listeners;


   if (count($args) > 1){

   	 $hook = array_shift($args);

   	 if (isset($listeners_[$hook])){
        
	   foreach ($listeners_[$hook] as $k=>$fn){
	   	 if (function_exists($fn)){

	   	 	$args = call_user_func_array($fn, $args);
	   	 	if (!is_array($args)){
             $args = array($args);
	   	 	}

	   	 	// echo $args;
	   	 }
	   }        

   	 }

   }

  // print_r($args);

   return $args;

 }


 function add_listener($tag,$cb){
   // global $_listeners_;
   if (!isset(Vars::$listeners[$tag])){
     Vars::$listeners[$tag] = array();
   }
   Vars::$listeners[$tag][] = $cb;

   //print_r(Vars::$listeners);

 }

 function fetch_template($__template__='',$__data__=array()){
 	extract($__data__);
 	ob_start();
 	include($__template__ . ".php");
 	$r = ob_get_contents();
 	ob_end_clean();
    return $r; 	
 }



 
 scan_plugins();


