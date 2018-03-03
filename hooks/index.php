<?php 
 require_once('config.php');
 require_once('startup.php');


  // echo request('__q__');
 $route = DEFAULT_ROUTE;
 if (!empty(request('__q__'))){
   $route = request('__q__');
 }
 
 env('__history__',$route);

 $output = __action('route',$route);
 
 

 // echo env('__history__');

 if (is_array($output)){
  // print_r($output);
 	echo 'Page not found , 404';
 }else{
  echo $output;	
 }