<?php 

 function media_cropit($name,$caption='',$width='',$height='',$img='',$default_class='profileimage'){

 	$data = array();

 	$data['name'] = $name;
 	$data['caption'] = $caption;
 	$data['width'] = $width;
 	$data['height'] = $height;
 	$data['img'] = $img;
 	$data['default_class'] = $default_class;
 	

   return fetch_template('plugins/media/template/cropit',$data);

 }
 add_listener('cropit','media_cropit');

 function media_cropit_apply_class($text){
   
   return '<style type="text/css">

      .cls1{
         
         color:green;

      }
          
   </style>' . $text;

 }
 add_listener('cropit','media_cropit_apply_class');


 function media_cropit_theme1($text){
   return '<div class="cls1" style="border-top:2px solid #555;padding:4px;width:100%;">' . $text . '</div>';
 }
 add_listener('cropit','media_cropit_theme1');

 function media_title_cropit($text){
   
    return '<b><u>' . $text . '</u></b>';
 
 }
 add_listener('cropit_label','media_title_cropit');

 
 function media_increase_size($text){
    return '<span style="font-size:20px;">' . $text . '</span>';
 }
 add_listener('cropit_label','media_increase_size');
      
 

 
 

