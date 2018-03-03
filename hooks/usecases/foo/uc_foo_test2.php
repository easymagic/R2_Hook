<?php 
 
 env('uc_entity','talent');
 env('uc_action','delete');

 function foo_test2($id){

     // request('email','easymagic203@gmail.com');	
     return __action('entity_do_smart',$id); 
   
 }
 
 add_listener('uc_foo_test2','foo_test2');

 // print_r(listeners('uc_foo_test2'));