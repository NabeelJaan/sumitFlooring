<?php

/**

 * Category

 *

 * @package WordPress

 * @subpackage Global

 * @since Global 1.0

 * @version 1.2

 */



?>
<!--- Related Product------------------------------------------------->
<section class="color-swatch-section py-5" id="view-collections">

    <div class="container">
      
       
        <hr>
      <div id="view-sample" class="row justify-content-center color-swatch-list">
        <div class="col-xl-10"><!-- select_a_color_name -->
          <h2><?php echo get_field('rugs_select_a_color_name')?></h2>
         <!--  <p>Please select a Quick Ship Rugs:</p> -->
          <div class="row" >
          <?php
          $custom_terms = get_terms('quickship_rugs');

				//foreach($custom_terms as $custom_term) {
				  //  wp_reset_query();
				    $args = array('post_type' => 'quickshiprugs',
				    					 'post_status' => 'publish',
        									'posts_per_page' => -1, 
				    					 'orderby' => 'title',
       								 'order' => 'ASC',
				        /*'tax_query' => array(
				            array(
				                'taxonomy' => 'quickship_rugs',
				                'field' => 'slug',
				                'terms' => $custom_term->slug,
				            ),
				        ),*/
				     );

				     $loop = new WP_Query($args);
				     if($loop->have_posts()) {
				     	?>
				     	<div class="rugs">
				     	<h2><?php //echo $custom_term->name ; ?></h2>
				     </div>
				     	<?php  
				        while($loop->have_posts()) : $loop->the_post();
				      ?>
				      <div class="rugs" style="padding: 20px;" >
				      	<?php echo get_the_title(); ?>
				      </div>
				       <?php 
				            while( have_rows('choose_rugs_image') ): the_row(); 
                			$image = get_sub_field('rugs_image');
                			?>
               <div class="col-6 col-md-4 mb-4">
                
                <div class="color-swatch-content">
                	 <img src="<?php echo wp_get_attachment_url( $image);?>" class="img-fluid color-swatch" title="<?php echo get_sub_field('rugs_image_name') ?>" alt="<?php echo get_sub_field('rugs_image_name'); ?>"  />
                  
                  <a href="#sample-request" data-toggle="modal" data-target="#myModal"  class="btn btn-blue btn-color-swatch-sample-request showcolorname addAttr" data-title="<?php echo get_sub_field('rugs_image_name')?>"  data-size="<?php echo get_sub_field('rugs_size')?>"  data-src="<?php echo wp_get_attachment_url( $image);?>">Get in Touch</a>

                </div>
              
                <div class="text-center">
                 <!--  <span class="swatch-code"><?php echo get_sub_field('rugs_image_code')?></span><br/> -->
                  <span class="swatch-title"><?php echo get_sub_field('rugs_image_name')?></span>
                </div>

              </div>
            <?php 
             endwhile;
             ?>     
             <?php       
				        endwhile;
				     }	
					//}
	             ?>            
            </div>
        </div>
      </div>
    
 
  
<!-- Request Form------------------------->  
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="margin: 0px;">&times;</button>
          <!-- <h4 class="modal-title">Get in Touch</h4> -->
        </div>
        <div class="modal-body">

      <div id="sample-request" class="row justify-content-center">
        <div class="col-xl-10 mt-5 mb-3 text-center">
          <h2>Get in Touch</h2>
        </div>
        <div class="col-md-10 mb-5">
          <div class="contact-form">
            <form action="<?php //the_permalink();?>" method="post" id="simpleRequest">                 

            <div class="form-row">

              <div class="col-12 col-sm-6">
                <input type="text" name="request_name" placeholder="First Name" required="" >
              </div>

              <div class="col-12 col-sm-6">
                <input type="text"  name="request_email" placeholder="E-Mail"  required="" >
              </div>

            </div>


            <div class="form-row">
              <div class="col-12 col-sm-6">
                <input type="text" id="company" name="company" placeholder="Company"  required="" >
                              </div>
              <div class="col-12 col-sm-6">
                <input type="text" id="phone" name="request_phone" placeholder="Phone"  required="" maxlength="10" class="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                              </div>
            </div>
           
            <div class="form-row">
              <div class="col-12">
                <input type="text" id="street" name="street" placeholder="Street"  required="" >
                              </div>
            </div>
            <div class="form-row">
              <div class="col-12 col-sm-6">
                <input type="text" id="city" name="city" placeholder="City"  required="" >
                              </div>
              <div class="col-12 col-sm-6">
                <input type="text" id="zip_code" name="zip_code" maxlength="6"   placeholder="ZIP"  required="" > <!-- onkeypress='return event.charCode >= 48 && event.charCode <= 57' -->
                              </div>
                             
            </div>
            <!--- Country / About us------------------------->


            <div class="form-row" >
               <div class="col-12 col-sm-6" id=""><!-- stateList -->
               <input type="text" id="state" name="state" placeholder="State/Regions"  >
            </div>
            
              <div class="col-12 col-sm-6">
                <select name="country" id="country" class="form-control" onchange="ajaxState(this.value);">
                  <option>--select Country--</option>
                <?php 
                global $wpdb; 
                  $country = $wpdb->get_results("select * from country");                 
                  foreach ($country as $key => $getVal) { 
                  ?>
              <option value="<?php echo $getVal->countrycode; ?>"><?php echo $getVal->countryname; ?></option>
               <?php } ?>
               </select>
            </div>

           <!--  <div class="col-12 col-sm-6" id="stateList">
              
            </div> -->
                             
            </div>

          <div class="form-row" id="referralbox" style="display:none">
            <div class="col-md-6">
              <input type="text" name="referalName" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name">
            </div>
            <div class="col-md-6">
              <input type="text" name="referalCompany" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Company">
            </div>
          </div>
          
            <!--- Country / About us------------------------->


            <!-- feature_image -->
             <?php //if( have_rows('choose_rugs_image') ):?>
            <?php //$feature_image = get_field('rugs_feature_image');?>

            <div class="form-row align-items-center">
              <div class="col-2 col-sm-2">
                <img   id="currentImg"  class="img-fluid selected-color-swatch mb-2" src="<?php //echo wp_get_attachment_url( $feature_image);?>" />

                <input type="hidden" name="hideCurrentImg" id="hideCurrentImg" value="<?php //echo wp_get_attachment_url( $feature_image);?>">

                <input type="hidden" name="poductName"  value="<?php echo the_title();?>">
                <input type="hidden" id="color_swatch_code" name="color_swatch_code"  value="<?php //echo get_field('rugs_swatch_code')?>">

              </div>
            <div class="col-10 col-sm-10">
                <div class="form-group">
                  
                  <input type="text" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" name="color_swatch" id="color_swatch" value="" >
                  
                </div>              
              </div>
            </div>
            <?php //endif; ?>
             <div class="form-row">
              <div class="col-12">
                <!--  <input type="text" id="rugs_dimensions" name="rugs_dimensions" placeholder="Rugs dimensions" value=""  readonly="">  -->
             <!-- <textarea name="rugs_size" id="rugs_size"></textarea>-->
             <div >
              <p>Dimensions</p>
             <select id="multiSize"  name="rugs_dimensions"></select>
           </div>
            <!--  https://www.geeksforgeeks.org/how-to-add-options-to-a-select-element-using-jquery/ -->
                              </div>
            </div>
            <div class="form-row py-3">
              <div class="col-12">
                <div class="g-recaptcha" data-sitekey="6LedcmAbAAAAAPqT1Z6mqzg5kLgnds3oQcepnQEd"></div>
                <?php //if($errormessage){ ?>
                  <p style="color: red;"><?php echo $errormessage;?></p>
              </div>
            </div>

            
<input type="hidden" name="actions" value="submitRequest">
<input type="submit" value="REQUEST"  class="btn btn-yellow btn-lg"  />

            </form>
          </div>
        </div>
      </div>

    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>  
<!-- End Request Form------------------------->    


    </div>

  </section>
<!--- End Related Product------------------------------------------------->

  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

<script type="text/javascript">

      function showImage(imgName) {
       var curImage = document.getElementById('currentImg');
       var hidecurImage = document.getElementById('hideCurrentImg');

       var thePath = '';
       var theSource = thePath + imgName;
       curImage.src = theSource;
       curImage.alt = imgName;
       curImage.title = imgName;

       hidecurImage.value = theSource;
       
    }


    jQuery(document).ready(function () {
      jQuery('.showcolorname').click(function() {
      var title = $(this).data('title');     
      var code = $(this).data('code');   
      var size = $(this).data('size'); 
      //5.7 inch x 7.10 inch,  6.7 inch x 9.10 inch 
      var match = size.split(',  ');
      $('#multiSize').empty();
    for (var a in match)
    {
        var variable = match[a];
        cache: false;
        $('#multiSize').append(`<option value="${variable}">
                                       ${variable}
                                  </option>`);
    }

     // $('#id').val(id);  
      jQuery('#color_swatch').val(title);  
      jQuery('#color_swatch_code').val(code);  
      jQuery('#rugs_size').val(size);  
     
      } );
    })

$("#simpleRequest").submit(function(event) {

   var recaptcha = $("#g-recaptcha-response").val();
   if (recaptcha === "") {
      event.preventDefault();
      alert("Please check the recaptcha");
   }
});

 /*$('#zip_code').keypress(function(e){ 
   if (this.value.length == 0 && e.which == 48 ){
      return false;
   }
});*/



function ajaxState(val){
    $("#stateList").html('');
    $.ajax({
      url:"https://summit-flooring.com/getState.php?s_id="+val,
      success:function(result){
        $("#stateList").html(result);
      }
      });
  }

  $("#hearAboutUs").click(function(){
    var hearAboutUs= $('#hearAboutUs').val();
    if(hearAboutUs=="Referral"){
      $('#referralbox').toggle();
    }

    if(hearAboutUs=="Other"){
      $('#otherBox').toggle();
    }
  })


</script>

<script>
   jQuery('.addAttr').click(function() {
    var src = jQuery(this).data('src');  
    var title = jQuery(this).data('title');     
    var code = jQuery(this).data('code');     
    var size = jQuery(this).data('size');     
    
    jQuery('#color_swatch').val(title);  
    jQuery('#currentImg').attr("src", src);  
    jQuery('#color_swatch_code').val(code);  
    jQuery('#rugs_dimensions').val(size);  
   
    } );
 </script>