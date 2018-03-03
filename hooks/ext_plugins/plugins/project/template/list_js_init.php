<script type="text/javascript">
  (function($){

     $(function(){
       
       //$('.operations').gear_option();
        
        $('.hook-action').each(function(){
          $(this).on('change',function(){

            if ($(this).val() == '<?php echo base_url() . 'view/' . base64_encode($v->id); ?>'){
var win = window.open($(this).val(), '_blank');
  win.focus();
            }else{
              location.href = $(this).val();
            }
            
          });
        });

     });



  })(jQuery);
</script>