               <td>
                  <?php echo $v->name; ?>
               </td>
               <td style="width: 128px;">
                 <?php
                  
                   if (!empty($v->project_art)){
                   ?>

                   <img title="<?php echo $v->name; ?>" src="<?php echo API_UPLOAD_URL; ?><?php echo $v->project_art; ?>" style="max-width: 100%;" />
                   <?php   
                   }else{
                    echo '(No-Art-Uploaded)';
                   }
                  
                 ?>
               </td>

               <td>
                 <?php 

                   echo $v->type;

                 ?>
               </td>
               <td>
                 <?php 

                  if ($v->parent_category_id*1 == 31){
                    echo '<b>Music</b>';
                  }else{
                    echo '<b>Video</b>';
                  }
         
                 ?>
               </td>

               <td>
                 <?php echo $v->date_created; ?>
               </td>

               <td>
                 <?php echo $v->last_updated; ?>
               </td>

               <td class="operations" style="position: relative;">
                 <?php 
                   
                   $actions = array();
                   $actions[] = array('Edit',base_url() . 'project/edit/' . base64_encode($v->id));

                   $actions[] = array('Add Director',base_url() . 'project_cast/select_type/director/' . $v->id);
                   $actions[] = array('Add Producer',base_url() . 'project_cast/select_type/producer/' . $v->id);

                   $actions[] = array('Add Co-Producer',base_url() . 'project_cast/select_type/co_producer/' . $v->id);        

                if ($v->parent_category_id == 32){

                
                   $actions[] = array('Add Cast',base_url() . 'project_cast/select_type/cast/' . $v->id);
                   $actions[] = array('Add Crew',base_url() . 'project_cast/select_type/crew/' . $v->id);

                   $actions[] = array('Add Story-Line',base_url() . 'project_cast/select_type/story_line/' . $v->id);

                   $actions[] = array('Add Music-By',base_url() . 'project_cast/select_type/music_by/' . $v->id);

                   $actions[] = array('Add Cinematographer',base_url() . 'project_cast/select_type/cinematographer/' . $v->id);


                   $actions[] = array('Add Production Design By',base_url() . 'project_cast/select_type/production_design/' . $v->id);

                   $actions[] = array('Add Set-Design By',base_url() . 'project_cast/select_type/set_design/' . $v->id);

                   $actions[] = array('Add Custume-Design By',base_url() . 'project_cast/select_type/custume_design/' . $v->id);


                   $actions[] = array('Add Makeup-Department By',base_url() . 'project_cast/select_type/makeup_department/' . $v->id);


                   $actions[] = array('Add Sound-Department',base_url() . 'project_cast/select_type/sound_department/' . $v->id);


                   $actions[] = array('Add Special-Effect By',base_url() . 'project_cast/select_type/special_fx/' . $v->id);

                   $actions[] = array('Add Editorial-Department By',base_url() . 'project_cast/select_type/editorial_department/' . $v->id);


                   $actions[] = array('Add Location-Management',base_url() . 'project_cast/select_type/location_management/' . $v->id);


                   $actions[] = array('Add Other-Crew',base_url() . 'project_cast/select_type/other_crew/' . $v->id);

                   $actions[] = array('Add Transportation By',base_url() . 'project_cast/select_type/transportation_by/' . $v->id);




                   $actions[] = array('Add Script-writer',base_url() . 'project_cast/select_type/script_writer/' . $v->id);
                   
                   }

                   // $actions[] = array('Preview',base_url() . 'view/' . base64_encode($v->id));

                 ?>
                 <div class="col-xs-12">
                   <select class="hook-action">
                     <option value="">--Actions--</option>
                     <?php 
                       foreach ($actions as $k=>$v){

                        ?>
                         <option value="<?php echo $v[1]; ?>"><?php echo $v[0]; ?></option>
                        <?php 


                       }
                     ?>
                   </select>
                 </div>   
                

               </td>
