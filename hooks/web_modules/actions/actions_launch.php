<?php 

function actions_launch(){
  
  
  $args = func_get_args();
  __action('launch_usecase',$args);
  
  header('location: ' . BASE_URL . history() );

}
add_listener('actions_launch','actions_launch');