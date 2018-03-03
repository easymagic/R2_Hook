<?php 

 function foo_test1($a,$b){
 	// echo 'Called' . $a . '-' . $b;
   // return array("sum"=>$a+$b);
   log_success("Sum is ... " . ($a+$b)  );
   response("sum",$a+$b);
   return response();
 }
 add_listener('uc_foo_test1','foo_test1');