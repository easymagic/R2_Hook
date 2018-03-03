<?php 

function actions_api(){
  
  
  $args = func_get_args();
  __action('launch_usecase',$args);

  echo json_encode(response());
  
  // header('location: ' . BASE_URL . history() );

}
add_listener('actions_api','actions_api');