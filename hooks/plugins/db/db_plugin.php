<?php 

 define('DB_SERVER', 'localhost:3306');
 define('DB_USER', 'ydetbkzc_easymagic');
 define('DB_NAME', 'ydetbkzc_vetdb');
 define('DB_PASSWORD', 'september92014');
 define('DB_DRIVER', 'mysql:');


 function db_connect(){
   
   static $con;

   if (!isset($con)){

	   try {
	  	  $con = new PDO(DB_DRIVER . "host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);	
	  	} catch (Exception $e) {
	  		die($e->getMessage());
	  	    // $connection = null;	
	  	}


   }


  	return $con;


 }
 add_listener('db_connect','db_connect');



function db_query($sql=''){
  static $result;
  if (!empty($sql)){
     $result = db_connect()->query($sql);
  }
  return $result;
}
add_listener('db_query','db_query');


function db_exec($sql=''){
  static $result;
  if (!empty($sql)){
     $result = db_connect()->exec($sql);
  }
  return $result;
}
add_listener('db_exec','db_exec');

function db_fetch_record(){ //support only PDO::FETCH_OBJ
 $r = array();
  while ($dt = db_query()->fetch(PDO::FETCH_OBJ)) {
    $r[] = $dt;
  }
 return $r;
}
add_listener('db_fetch_record','db_fetch_record');


function db_get_record($sql){
 __action('db_query',$sql);	
 return __action('db_fetch_record');
}
add_listener('db_get_record','db_get_record');

function db_insert_id($v){
	static $iid;
	if (!empty($v)){
     $iid = $v;
	}
	return $iid;
}
add_listener('db_insert_id','db_insert_id');

function db_filter_fields($table,$post_data){
	     $r = array();
	     $flds = db_get_fields($table);
	     foreach ($post_data as $k=>$v){
	        if (in_array($k, $flds)){
	          $r[$k] = $v;
	        }
	     }
	     return $r;
}
add_listener('db_filter_fields','db_filter_fields');

function db_insert($table,$post_data=array()){
   
     // __action('db_exec',$sql);
	 $data = db_filter_fields($table,$post_data);

	 $keys = array_keys($data);
	 $values = array_values($data);

     $prepared_values = array();
      	
      	foreach ($keys as $k=>$v){

      		 $prepared_values[] = ":$v";

      	}

      $sql = "insert into $table (" . implode(',', $keys) . ") values (" . implode(",", $prepared_values) . ")";



      $stmt = db_connect()->prepare($sql);
      $stmt->execute($data); 

      $insert_id = db_connect()->lastInsertId();

      db_insert_id($insert_id);

      return db_insert_id();
 
}
add_listener('db_insert','db_insert');


function db_where($crit=array(),$garbage=false){
 static $criteria;
 if (!empty($crit)){
   $criteria = $crit;
 }

 if ($garbage){
   $criteria = array();
 }

 $r = array();
 if (count($criteria) > 0){
   foreach ($criteria as $k=>$v){
      $r[] = " $k = '$v' ";
   }
   $r = ' where (' . implode(' and ', $r) . ')';
 }

 if (!empty($r)){
    return $r; 
 }else{
 	return '';
 }

}
add_listener('db_where','db_where');



function db_update_record($table,$post_data=array()){
   
     // __action('db_exec',$sql);

 	  $data = db_filter_fields($table,$post_data);


     $r = array();
     $rr = array();
     
     foreach ($data as $k=>$v){
       $r[] = "$k=?"; //'$v'
       $rr[] = $v;
     }

     $sql = "update $table set " . implode(' , ', $r) . db_where();


      $stmt = db_connect()->prepare($sql);
      $stmt->execute($rr); 

      return 1;
 
}
add_listener('db_update','db_update_record');


function db_delete($table){
 
 $sql = "delete from $table " . db_where();
 
 __action('db_exec',$sql);

 return 1;
 
}
add_listener('db_delete','db_delete');


function db_get_table($table){
  $resp = db_get_record("select * from $table " . db_where());
  return $resp;
}
add_listener('db_get','db_get_table');


function db_get_fields($table){
  static $fields;

  if (!empty($table)){
  
    $resp = db_get_record("show columns from $table");
    foreach ($resp as $k=>$v){

    	 $fields[] = $v->Field;

    }
    
  }	
  return $fields;
}
add_listener('db_get_fields','db_get_fields');






