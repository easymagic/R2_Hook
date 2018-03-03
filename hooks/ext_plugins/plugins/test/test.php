<?php 

 function test_format($arg){
  return fetch_template('plugins/test/temp2',array("name"=>$arg));
 }


 add_listener('boldb','test_format');