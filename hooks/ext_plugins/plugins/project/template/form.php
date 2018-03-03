      <ul class="f1-steps breadcrumb " >
        <li class="f1-step active">
          <a href="javascript:void(0);">PROJECT INFO</a>
        </li>
        <li class="f1-step">
          <a href="javascript:void(0);">PROJECT DETAILS</a>
        </li>
      </ul>
      <fieldset id="fs1">
        <div class="row">
          <div class="heading-title heading-dotted" id="step1-content"><span>Upload a project</span></div>
          <div class="form-group col-md-6 " >
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label " id="ttstagename" style="width :100%;" >
              <div class="mdl-tooltip mdl-tooltip--top" data-mdl-for="ttprojectname">
                <strong>What is the name of your project?</strong>
              </div>
              <input name="name" class="mdl-textfield__input pull-right" type="text" id="sample3" value="<?php echo @$input_data->name; ?>" />
              <label class="mdl-textfield__label" for="sample3"><i class="fa fa-user "></i><span class="padding-left-40">Project Title...</span></label>
            </div>
          </div>
          
          <div class="form-group col-md-6 " >
            
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label " id="ttstagename" style="width :100%;" >
              <div class="mdl-tooltip mdl-tooltip--top" data-mdl-for="ttprojectname">
                <strong>When was the project released?</strong>
              </div>
              <input name="year" class="mdl-textfield__input pull-right" type="text" id="sample3" value="<?php echo @$input_data->year; ?>" />
              <label class="mdl-textfield__label" name="year" for="sample3"><i class="fa fa-calendar "></i><span class="padding-left-40"><?php echo call_hook_filter('format_year_of_production','Year of Production'); ?></span></label>
            </div>

          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select textfield-nomargin">
              <select name="parent_category_id" for=""  class="mdl-textfield__input select1 "  value="" type="text" id="category_id" data-value="<?php echo @$input_data->parent_category_id; ?>" >
                <option value=""></option>
                 <?php 
                   $load_categories();
                 ?>
                 <!-- test... -->
              </select>
              <label for="sample4" class="mdl-textfield__label">Project category</label>
            </div>
          </div>
          <div class="col-xs-12" style="display: none;z-index: 40000;" id="album-section">
            <?php 
             $load_albums($_SESSION['user_account']->id,$input_data->album_id);
            ?>

          </div>
          <div class="form-group col-md-6" id="category_id_outlet" >
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select textfield-nomargin">
              <select data-value="<?php echo @$input_data->category_id; ?>" name="category_id" for=""  class="mdl-textfield__input select1 "  value="" type="text" id="category_id2" >
                
                 
              </select>
              <label for="sample4" class="mdl-textfield__label">Sub-Project category</label>
            </div>

          </div>
        </div>
        <!-- dummy check -->
        <div class="form-group">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-nomargin" style="width :100%;"  >
            <div class="mdl-tooltip mdl-tooltip--top" data-mdl-for="ttkeyword">
              <strong>What is your project about?</strong>
            </div>
            <textarea name="description" onkeyup="new do_resize(this);" class="mdl-textfield__input"  type="text" rows= "5" ><?php echo @$input_data->description; ?></textarea>
            <label id="description" class="mdl-textfield__label" for="sample5">Project Description</label>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6 " >
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label " id="ttkeyword" style="width :100%;" >
              <div class="mdl-tooltip mdl-tooltip--top" data-mdl-for="ttkeyword">
                <strong>sperate eah key word with a , e.g music for all, best rap song</strong>
              </div>
              <input name="project_keywords" class="mdl-textfield__input pull-right" type="text" id="sample3" value="<?php echo @$input_data->project_keywords; ?>" />
              <label class="mdl-textfield__label" for="sample3"><i class="fa fa-key"></i><span class="padding-left-40">Project keywords</span></label>
            </div>
          </div>
          <div class="form-group col-md-6 " >
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label " id="tttagname" style="width :100%;" >
              <div class="mdl-tooltip mdl-tooltip--top" data-mdl-for="tttagname">
                <strong>seperate each tag with # e.g #rap#hitsong  </strong>
              </div>
              <input name="project_tags" class="mdl-textfield__input pull-right" type="text" id="sample3" value="<?php echo @$input_data->project_tags; ?>" />
              <label class="mdl-textfield__label" for="sample3"><i class="fa fa-tags "></i><span class="padding-left-40">Project hash tags</span></label>
            </div>
          </div>
        </div>
        <div class="f1-buttons">
          <button id="next" type="button" class="btn btn-next" style="border-radius: 0px, 20px">Next <i class="fa fa fa-angle-double-right" ></i>
        </button>
        </div>
      </fieldset>
     

  
  <!-- step2 start -->

     <fieldset id="fs2">
       <div>
         
         <div id="step2-content" class="col-xs-12 col-md-6">
         </div>

         <div class="col-xs-12 col-md-6">
          
           <div class="col-xs-12" style="margin-top: 116px;">

                                <!-- <label>Post Tags</label> -->

                                        <select data-value="<?php echo $input_data->type ?>" name="type" id="project_type" class="form-control" >
                                                 <option value="">Select Project Type</option>
                                                 <option value="file">File Upload</option>
                                                 <option value="embed_youtube">Embed - Youtube Code</option>
                                        </select>            
            </div>

            <div class="col-xs-12" id="dynamic_content"></div>
            <div class="col-xs-12">
              <?php $content_preview($input_data); ?>
            </div>

 
         </div>
 
         <div style="clear: both;">&nbsp;</div>
         
         <div class="row">
          <div class="col-sm-6 f1-buttons">
            <button type="button" class="btn btn-previous pull-left"> <i class="fa fa fa-angle-double-left" ></i> Back</button>
          </div>
          <div class="col-sm-6">
              <input type="submit" name="" value="Submit" class="btn btn-next pull-right" />
          </div>
         </div>
         
       </div>
     </fieldset>
  
  <!-- step 2 stop -->


<script type="text/javascript">
  
  function do_resize(textbox) {

 var maxrows=5; 
  var txt=textbox.value;
  var cols=textbox.cols;

 var arraytxt=txt.split('\n');
  var rows=arraytxt.length; 

 for (i=0;i<arraytxt.length;i++) 
  rows+=parseInt(arraytxt[i].length/cols);

 if (rows>maxrows) textbox.rows=maxrows;
  else textbox.rows=rows;
 }

</script>

<script type="text/javascript">
           (function($){

             
             function load_project_arts(id){

               var r = '<?php echo base_url(); ?>project/';
               if (id == 31){ //music
                 r+='get_square';
                 $('#description').html('Project Description');
               }else if (id == 32){ //movie
                 r+='get_portrait';
                 $('#description').html('Story Line');
               }else{ //skits
                 r+='get_square';
               }

               <?php 
                 if (!isset($input_data->project_art)){
                   $input_data->project_art = "";
                 } 
               ?>

               $.ajax({
                 url:r,
                 type:'get',
                 data:{
                  project_art:'<?php echo $input_data->project_art; ?>'
                 },
                 success:function(response){
                  $('#step2-content').html(response);
                 }
               });

             }


            $(function(){

              function load_albums(vl){

                 if (vl*1 == 31){

                    $('#album-section').show();

                 }else{

                    $('#album-section').hide();

                 }

              }


              $('#category_id').on('change',function(){

                // $('#step2-content').html($(this).val());

                load_project_arts($(this).val() * 1);
                load_albums($(this).val() * 1);


                var vl = $(this).val();

                $(this).data('value',$(this).val());

                var $el = $('#category_id2');

                $el.html('Loading sub-categories ... ');

                $.ajax({
                  url:'<?php echo base_url(); ?>project/get_sub_category/' + vl,
                  type:'get',
                  success:function(dt){
                    $el.html(dt);
                    hook_data_value();
                  }
                });

              });

              add_hook_data_value_listener(function(){
               
                if ($('#category_id').val()){
                  $('#category_id').trigger('change');  
                }
               
              });

              


            });
           })(jQuery);
         </script>


          <script type="text/javascript">
  (function($){
    $(function(){

       var $obj = $('#dynamic_content');
       var $album = $('#album_id');

        function insert_file(name){

           var $el = $('<label style="color: #000;">' + name + '<input type="file" name="content" class="form-control" /></label>');
   
           $obj.html($el); 

        }

        function insert_embed(){
          
           var $el = $('<textarea name="content" class="form-control" placeholder="Embed Code"><?php echo @$input_data->content; ?></textarea>');

           $obj.html($el);

        }


        function show_album(){
           $album.show(); 
        }

        function hide_album(){
          $album.hide();
        }

  
        $('#project_type').on('change',function(){
             
             var vl = $(this).val();

             if (vl == 'file'){
                 insert_file('Choose File');
                 // show_album();     
             }

             // if (vl == 'movie'){
             //     insert_file('Movie Trailer');
             //     hide_album();
             // }

             // if (vl == 'television'){
             //    insert_file('Television Short Podcast');
             //    hide_album();
             // }

             // if (vl == 'photo'){
             //   insert_file('Main Photo');
             //   hide_album();
             // }

             if (vl == 'embed_youtube'){
               insert_embed();
               // hide_album();
             }


        });

        add_hook_data_value_listener(function(){
          $('#project_type').trigger('change');  
        });

    });
  })(jQuery);

  
  var event_interface = {

       
       "#next":{
        event_type:"click",
        action:function(e,$el){

           console.log($el, "Clicked");

        },
        node:function($el){
           $el.html('Next.');
           console.log("node loaded...");
        }
       }
  };


</script>
<?php 
  
  $ctrl->load->view('js_snippets/events_js');

?>