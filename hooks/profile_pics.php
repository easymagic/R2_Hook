   <?php 
  // print_r($data);
    // echo fp_view_load('themes/site2/components/user_pulse/user_pulse_count_adapter',array(
    //  "template"=>"themes/site2/components/user_pulse/pulse_count",
    //  "request"=>array(
    //    "user_id_filter"=>$data->pid
    //  )
    // )); 
  ?>  
                                        
<div class="entertainer-col-1 col-md-4 col-xs-6">
  <div class="video-item">
    <div class="thumb img-resize">
      <a title="id: <?php echo $item->id; ?>" href="<?php echo base_url(); ?>profile/<?php echo base64_encode($item->pid); ?>">
        <img style="width: 100%; border-radius: 50%;" src="<?php echo API_UPLOAD_URL . $handle_path($item->profile_pics); ?>" alt="">
      </a>
      <div class="entertainer-item-overlay">
        <div class="overlay-content">
          <i class="fa fa-play"></i>
          <br>
          <?php echo ucfirst($item->name); ?>
        </div>
      </div>
    </div>
  </div>
</div>