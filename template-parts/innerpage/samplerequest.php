<?php

/**

 * Displays 3rd BOx

 *

 * @package WordPress

 * @subpackage Global

 * @since Global 1.0

 * @version 1.2

 */



?>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<section class="color-swatch-section py-5">

    <div class="container" id="swatch-color">
      
       <?php //if( have_rows('inner_image') ):?>
        <hr>
      <div id="view-sample" class="row justify-content-center color-swatch-list">
        <div class="col-xl-10"><!-- select_a_color_name -->
						
          <h2><?php echo get_field('select_a_color_name')?></h2>
		 
		  <div class="row">
		  <div class="col-md-4 select-color" >
          <p>Please select a color:</p>
		  </div>
		  
		  <div class="col-md-8 swa-view" id="">
          
		  </div>
</div>
          <div class="row">
          <?php

          $getUrl= home_url( $wp->request );

          if($getUrl=='https://summit-flooring.com/product/detail/bentzon_carpets' ||
                $getUrl=='https://summit-flooring.com/product/detail/jabo' ||
                $getUrl=='https://summit-flooring.com/product/detail/jacaranda-carpets' ||
                $getUrl=='https://summit-flooring.com/product/detail/new-mark-carpet' ||
                $getUrl=='https://summit-flooring.com/product/detail/new-mark-carpet-tiles' ||
			    $getUrl=='https://summit-flooring.com/product/detail/dura-wood-dura-crete' ||
                $getUrl=='https://summit-flooring.com/product/detail/plankx-carpet-tiles' ||
                $getUrl=='https://summit-flooring.com/product/detail/van-besouw-carpet' ||
                $getUrl=='https://summit-flooring.com/quick-ship-rugs' ||
                $getUrl=='https://summit-flooring.com/product/detail/dura-wood' ||
                $getUrl=='https://summit-flooring.com/product/detail/fitnice-woven-vinyl_flooring' ||
                $getUrl=='https://summit-flooring.com/product/detail/earth' ||
                $getUrl=='https://summit-flooring.com/product/detail/kaleidoscope_series' ||
                $getUrl=='https://summit-flooring.com/product/detail/kidz-kollection' ||
                $getUrl=='https://summit-flooring.com/product/detail/marathon-series' ||
                $getUrl=='https://summit-flooring.com/product/detail/muscle' ||
                $getUrl=='https://summit-flooring.com/product/detail/olympic-series-vol-two' ||
                $getUrl=='https://summit-flooring.com/product/detail/opulence' ||
                $getUrl=='https://summit-flooring.com/product/detail/prism' ||
                $getUrl=='https://summit-flooring.com/product/detail/remp' ||
                $getUrl=='https://summit-flooring.com/product/detail/rubberazzo' ||
                $getUrl=='https://summit-flooring.com/product/detail/triathlon-800-series' ||
                $getUrl=='https://summit-flooring.com/product/detail/heavy-duty-mats' ||
                $getUrl=='https://summit-flooring.com/product/detail/edel-grass' ||
                $getUrl=='https://summit-flooring.com/product/detail/grass-partners' ||
                $getUrl=='https://summit-flooring.com/product/detail/elegance_recycled_leather_tiles' ||
                $getUrl=='https://summit-flooring.com/product/detail/ardesia'
            ){
           ?>
            <?php
            while( have_rows('inner_image') ): the_row(); 
                $image = get_sub_field('image');  
            ?>
               <div class="col-6 col-md-2 mb-3">

                <div class="color-swatch-content">

                  <img src="<?php echo wp_get_attachment_url( $image);?>" class="img-fluid color-swatch" title="<?php echo get_sub_field('image_name') ?>" alt="<?php echo get_sub_field('image_name'); ?>"  />

                  <a href="<?php echo wp_get_attachment_url( $image);?>" data-lightbox="photos" class="btn btn-yellow btn-view-color-swatch" data-lightbox="color-swatch" data-title="<?php echo get_sub_field('image_name') ?>" >View</a>

                  <a href="#sample-request" onclick="showImage('<?php echo wp_get_attachment_url( $image);?>');" class="btn btn-blue btn-color-swatch-sample-request showcolorname" data-title="<?php echo get_sub_field('image_name')?>" data-code="<?php echo get_sub_field('image_code')?>" data-src="<?php echo wp_get_attachment_url( $image);?>">Request</a>
                </div>

                <div class="text-center">
				
                  <span class="swatch-code"><?php echo get_sub_field('image_code')?></span>
                  <span class="swatch-title"><?php echo get_sub_field('image_name')?></span>
                </div>

              </div>
            <?php 
             endwhile;


           }else
         
             ?>    


             <?php
          global $wp;
          
            while( have_rows('color_category') ): the_row();
                $image = get_sub_field('image'); 
          ?>  
          
             <div class="col-md-12">
              <h3><?php echo get_sub_field('color_category_name'); ?></h3>
              </div>
             <?php 
             while( have_rows('color_swatches') ): the_row(); 
                $image = get_sub_field('color_image'); 
             ?>
          <div class="col-6 col-md-2 mb-3">

                <div class="color-swatch-content">

                  <img src="<?php echo wp_get_attachment_url( $image);?>" class="img-fluid color-swatch" title="<?php echo get_sub_field('swatch_title') ?>" alt="<?php echo get_sub_field('swatch_title'); ?>"  />

                  <a href="<?php echo wp_get_attachment_url( $image);?>" data-lightbox="photos" class="btn btn-yellow btn-view-color-swatch" data-lightbox="color-swatch" data-title="<?php echo get_sub_field('swatch_title') ?>" >View</a>

                  <a href="#sample-request" onclick="showImage('<?php echo wp_get_attachment_url( $image);?>');" class="btn btn-blue btn-color-swatch-sample-request showcolorname" data-title="<?php echo get_sub_field('swatch_title')?>" data-code="<?php echo get_sub_field('swatch_number')?>" data-src="<?php echo wp_get_attachment_url( $image);?>">Request</a>
                </div>

                <div class="text-center">
        
                  <span class="swatch-code"><?php echo get_sub_field('swatch_number')?></span>
                  <span class="swatch-title"><?php echo get_sub_field('swatch_title')?></span>
                </div>

              </div>
              <?php 
             endwhile;
              ?>
			  
			  <?php 
             endwhile;
              ?>      
			  
            </div>
        </div>
      </div>
    <?php //endif; ?>
<div class="nxtbntsrow">
		
<?php if( get_field('previous_swatches_link') ){ ?>
		<div id="view-sample" class="row justify-content-center color-swatch-list preload"> 
        <div class="col-xl-10 text-center" >

         
                <p ><a href="<?php echo get_field('previous_swatches_link')?>#swatch-color"><strong>Load Previous Swatches</strong></a></p>  
            
        </div>
      </div>
<?php } ?> 		
  <?php if( get_field('next_previous_title') ){ ?>
  <hr>
    <div id="view-sample" class="row justify-content-center color-swatch-list moreload"> 
        <div class="col-xl-10 text-center" >

         
                <p ><a href="<?php echo get_field('next_previous_link')?>#swatch-color"><strong>Load More Swatches</strong></a></p>   
            
        </div>
      </div>
  <?php } ?> 
</div>	
      <hr>
      <div id="sample-request" class="row justify-content-center">
        <div class="col-xl-10 mt-5 mb-3 text-center">
          <h2>Sample Request</h2>
        </div>
        <div class="col-md-10 mb-5">
          <div class="contact-form">
            <form action="<?php the_permalink();?>" method="post" id="simpleRequest">                 

            <div class="form-row">
              <div class="col-12 col-sm-6">
                <input type="text" name="request_name" placeholder="Name" required="" >
                              </div>
              <div class="col-12 col-sm-6">
                <input type="text"  id="text-box" name="request_email" placeholder="E-Mail"  required="" >
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
                <input type="text" id="project_name" name="project_name" placeholder="Project Name"  required="" >
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
              

             <div class="col-12 col-sm-6" id=""><!-- stateList -->
               <input type="text" id="state" name="state" placeholder="State/Regions"  >
            </div>                 
                             
            </div>
            <!--- Country / About us------------------------->


            <div class="form-row" >
            <div class="col-12 col-sm-6">
                <input type="text" id="zip_code" name="zip_code" maxlength="6"   placeholder="ZIP"  required="" > <!-- onkeypress='return event.charCode >= 48 && event.charCode <= 57' -->
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

            
                             
            </div>

          <div class="form-row">
            <div class="col-md-12">
              <select name="hearabout" id="hearAboutUs"  class="wpcf7-form-control wpcf7-select required" aria-invalid="false" required>
                <option value="">How did you hear about us?</option>
                <option value="Google Search">Google Search</option>
                <option value="Pinterest">Pinterest</option>
                <option value="Instagram">Instagram</option>
                <option value="Twitter">Twitter</option>
                <option value="LinkedIn">LinkedIn</option>
                <option value="Facebook">Facebook</option>
                <option value="YouTube">YouTube</option>
                <option value="Referral">Referral</option>
                <option value="Other">Other</option>
              </select>
            </div>
          </div>

          <div class="form-row" id="referralbox" style="display:none">
            <div class="col-md-6">
              <input type="text" name="referalName" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name">
            </div>
            <div class="col-md-6">
              <input type="text" name="referalCompany" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Company">
            </div>
          </div>
          <div class="form-row" id="otherBox" style="display:none">
            <div class="col-md-12">
              <span class="wpcf7-form-control-wrap explain">
                <textarea name="explain" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Explain"></textarea>
              </span>
            </div>

          </div> 
            <!--- Country / About us------------------------->

<?php echo $_POST['color_swatch_code'];?>
<?php echo $_POST['hideCurrentImg'];?>
            <!-- feature_image -->
             <?php if( have_rows('inner_image') ):?>
            <?php $feature_image = get_field('feature_image');?>

            <div class="form-row align-items-center">
              <div class="col-2 col-sm-1">
                <img   id="currentImg"  class="img-fluid selected-color-swatch mb-2" src="<?php echo wp_get_attachment_url( $feature_image);?>" />

                <input type="hidden" name="hideCurrentImg" id="hideCurrentImg" value="<?php echo wp_get_attachment_url( $feature_image);?>">

                <input type="hidden" name="poductName"  value="<?php echo the_title();?>">
                <input type="hidden" id="color_swatch_code" name="color_swatch_code"  value="<?php echo get_field('swatch_code')?>">

              </div>
            <div class="col-10 col-sm-11">
                <div class="form-group">
                	<?php /* ?><select name="color_swatch" class="form-control">
                    <?php if( have_rows('inner_image') ):
                      while( have_rows('inner_image') ): the_row(); 
                          $image = get_sub_field('image');  
                      ?>
          					<option value="<?php echo get_sub_field('image_name'); ?>"><?php echo get_sub_field('image_name'); ?></option>
                    <?php 
                     endwhile;
                      endif; 
                    ?> 
        					</select><?php */ ?>
                  <?php /*if( have_rows('inner_image') ):
                    $i=1;
                      while( have_rows('inner_image') ): the_row(); 
                          $image = get_sub_field('image');  
                         if($i==1){ */
                      ?>
                  <input type="text" class="form-control" name="color_swatch" id="color_swatch" value="<?php echo get_field('feature_title');?>">
                   <?php 
                   /*}
                   $i++;
                     endwhile;
                      endif; */
                    ?> 
        				</div>              
        			</div>
            </div>
            <?php endif; ?>
             
            <div class="form-row py-3">
              <div class="col-12">
                <div class="g-recaptcha" data-sitekey="6LedcmAbAAAAAPqT1Z6mqzg5kLgnds3oQcepnQEd"></div>
                <?php //if($errormessage){ ?>
                  <p style="color: red;"><?php echo $errormessage;?></p>
               <?php //} ?>
                <!-- 6LedcmAbAAAAAPqT1Z6mqzg5kLgnds3oQcepnQEd -->
                <!-- <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render("recaptcha_challenge_field", {
          "sitekey" : "6LcawZcUAAAAAAV1SXjq-T06BZAYc5YrmocAcbz5","theme":"dark", "lang":"en",       
        });
      };
    </script>
   <div id="recaptcha_challenge_field"></div>
   <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
     
  <script>  
  $(document).ready(function(){
    $("#recaptcha_challenge_field").hide(0).delay(500).show(0);
  });
  </script> -->
  <div  id="download-document"></div>
  </div>
  </div>

            
<input type="hidden" name="actions" value="submitRequest">
<input type="submit" value="REQUEST"  class="btn btn-yellow btn-lg"  />

            </form>
          </div>
        </div>
      </div>
    </div>

  </section>