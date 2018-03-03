<?php 

 function uc_foo_test1($a,$b){
 	// echo 'Called' . $a . '-' . $b;
   // return array("sum"=>$a+$b);
 	// ;

   log_success("Sum is ....==> " . ($a+$b) );
    // print_r($_SESSION,true);
   response("sum",$a+$b);
   // return response();
 }
 add_listener('uc_foo_test1','uc_foo_test1');