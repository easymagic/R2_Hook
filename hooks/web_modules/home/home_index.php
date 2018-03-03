<?php 

 function home_index($a='',$b='',$c=''){
  // print_r($args);
 	// print_r(func_get_args());
  // return "....loading .....$a,$b,$c......";
  history(env('__history__'));
 	
    
    __action('db_where',array("id"=>"34"));

 	// __action('db_update','talent_ai',array("tkey"=>"New BVN"));
 	// $new_id = __action('db_insert','talent_ai',array("tkey"=>"New BVN......"));

 	// $new_id = __action('db_delete','talent_ai');


 	// echo count($rec);

 	start_buffer();
	//include('template/home_template.php');
   
    // print_r($rec);	
    // echo $new_id . '<br />';
  echo 'index...';


    // $resp = __action('launch_usecase',array('foo','test1',11,23) );

     print_r(session());
     // print_r($_SESSION);

     echo history();


    // echo $resp . '<br />';

    // $resp = __action('launch_usecase',array('foo','test2',2));

    // echo $resp; 

    

 	return get_buffer();
 }
 add_listener('home_index','home_index');

