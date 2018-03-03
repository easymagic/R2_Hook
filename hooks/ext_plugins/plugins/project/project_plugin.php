<?php 
 function project_capture_form($input_data,$data){
        
       if (!is_object($input_data)){
          $input_data = json_decode(json_encode($input_data));
       }

       $data['input_data'] = $input_data;


   return fetch_template('plugins/project/template/form',$data);

 }
 add_listener('project_capture_form','project_capture_form');

 
 function project_fmt_yop($text){
 	return '<strong>' . strtoupper($text) . '</strong>';
 }
 add_listener('format_year_of_production','project_fmt_yop');

 function project_list_js_init($arg){
  return fetch_template('plugins/project/template/list_js_init');
 }
 add_listener('project_list_js_init','project_list_js_init');


 function project_cast_title($text){
   return '<b><u>' . ucfirst($text) . '</u></b>';
 }
 add_listener('project_cast_title','project_cast_title');

 function project_list_header(){
  return fetch_template("plugins/project/template/list_header");
 }
 add_listener('project_list_header','project_list_header');



 function project_list_row($record,$data){
  $data['v'] = $record;	
  return fetch_template("plugins/project/template/list_row",$data);
 	// return '';
 }
 add_listener('project_list_row','project_list_row');
 
 
 function project_render_youtube($url){

        $EMBED_ID = 'embed/';
        $EMBED_SPLIT = 'watch?v=';


           $r = explode($EMBED_SPLIT, $url);
           $r = implode($EMBED_ID, $r);

           $rr = '<iframe style="width: 100%;position:relative;" width="640" height="360" src="' . $r . '" frameborder="0" allowfullscreen></iframe>';
            
             //echo $rr;   

             return $rr;

 }

 add_listener('project_render_youtube','project_render_youtube');
 


