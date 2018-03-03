<!-- 

$name,$caption='',$width='',$height='',$img='',$default_class='profileimage'     
-->

    <style>
      .cropit-preview {
        background-size: cover;
        background-image: url('<?php echo API_UPLOAD_URL . $img; ?>') !important;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: <?php echo $width; ?>px;
        height: <?php echo $height; ?>px;
        overflow: auto;

      }

/*        .cropit-preview.coverimage{
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: 460px;
      }
*/

      .cropit-preview.profileimage{
        
      }

        .cropit-preview.coverimage{
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: 460px;
      }

        .cropit-preview.musicart{
        background-size: cover;
         -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
        filter: grayscale(100%);
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
         width: 120px;
        height: 120px;
      }


      .cropit-preview-image-container {
        cursor: move;
      }

      .image-size-label {
        margin-top: 10px;
      }

      input {
        display: block;
      }

      button[type="submit"] {
        margin-top: 10px;
      }

      #result {
        margin-top: 10px;
        width: 900px;
      }

      #result-data {
        display: block;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        word-wrap: break-word;
      }
      img.cropit-preview-image{
    transition: all .3s ease;
    max-width: none;
}




.slider {
    -webkit-appearance: none;
    width: 100%;
    height: 2px;
    background: #d3d3d3;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
}

.slider:hover {
    opacity: 1;
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 25px;
    height: 25px;
    background: #08d7bb;
    cursor: pointer;
    border-radius: 50%;
}

.slider::-moz-range-thumb {
    width: 25px;
    height: 25px;
    background: #08d7bb;
    cursor: pointer;
    border-radius: 50%;
}

.image-editor .btn-file {
    position: relative;
    overflow: hidden;
    border-radius: 0px;

}
.image-editor .btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
    </style>
   
                             <div>
                              
      <div class="image-editor" id="<?php echo $name; ?>">
        
 
        <div class="cropit-preview <?php echo $default_class; ?>" style="width: <?php echo $width; ?>px !important;height: <?php echo $height; ?>px !important;">
          
        </div>
        <div class="image-size-label">
          <?php echo call_hook_filter('cropit_label','Resize image'); ?>
        </div>

        <input type="range" class="cropit-image-zoom-input slider">
        <!-- <input type="file" class="cropit-image-input"> -->
  <span class="btn btn-info btn-file select-image-btn form-control" >
    <div style="float: left;">Step 1:</div>
    Browse File<?php //echo $caption; ?><input id="<?php echo time() . $name; ?>file" type="file" class="cropit-image-input "></span>
      <button class="form-control btn btn-success" style="margin-top: 3px;" type="button" id="apply-crop<?php echo $name; ?>">

<div style="float: left;">Step 2:</div>

      Apply Crop</button>
         <input type="hidden" value="" name="<?php echo $name; ?>" id="<?php echo $name; ?>_store" class="hidden-image-data" />
      </div>
   

    <div id="result">
<!--       <code>$form.serialize() =</code>
      <code id="result-data"></code>
 -->    </div>

    <script>
      $(function() {


          var _URL = window.URL || window.webkitURL;
          $("#<?php echo time() . $name; ?>file").on('change',function (e) {
              var file, img;
              
              var check_width = <?php echo $width; ?>;
              var check_height = <?php echo $height; ?>;

              if ((file = this.files[0])) {
                  img = new Image();
                  img.onload = function () {
                     var msg = [];

                      if (this.width < check_width){
                        msg.push('minimum width of ' + check_width + 'px');
                      }

                      if (this.height < check_height){
                        msg.push('minimum height of ' + check_height + 'px');
                      }

                      if (msg.length > 0){
                        alert('Below ' + msg.join(' and ') + '.');                        
                      }

                      
                  };
                  img.src = _URL.createObjectURL(file);
              }
          });



        $('#<?php echo $name; ?>').cropit();

        //smallImage:'allow'

        $('#apply-crop<?php echo $name; ?>').on('click',function(){
           var imageData = $('#<?php echo $name; ?>').cropit('export');
           imageData = imageData.split('data:image/png;base64,').join('');
           $('#<?php echo $name; ?>_store').val(imageData);
           $(this).html('Crop Applied.');
        	return false;
        });

//         $('form').submit(function() {
//           // Move cropped image data to hidden input

//           // Print HTTP request params
//           // var formValue = $(this).serialize();
//           // $('#result-data').text(formValue);

//           // $('.select-image-btn').click(function() {
//           // $('.cropit-image-input').click();
//           // });

// // Handle rotation
// // $('.rotate-cw-btn').click(function() {
// //   $('#image-cropper').cropit('rotateCW');
// // });
// // $('.rotate-ccw-btn').click(function() {
// //   $('#image-cropper').cropit('rotateCCW');
// // });



// /*
//  * See http://www.htmllion.com/html5-range-input-with-css.html
//  * for styling range input
//  */
//           /* Hide file input */

// // input.cropit-image-input {
// //   visibility: hidden;
// // }

//           // Prevent the form from actually submitting
//           return false;
//         });

      });
    </script>
  </div>