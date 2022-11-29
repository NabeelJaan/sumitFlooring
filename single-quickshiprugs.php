<?php

/**

 * The template for displaying all pages

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site may use a

 * different template.

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package WordPress

 * @subpackage Global

 * @since Global 1.0

 * @version 1.0

 */



get_header();

if($_REQUEST['actions']=='submitRequest' && isset($_POST['g-recaptcha-response'])){

   $secret = "6LedcmAbAAAAALi4kMITxwF1TwAXKL4R5u2A-8bg";
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
     $responseData = json_decode($verifyResponse);
   global $wpdb; 
  if($responseData->success){
    $poductName=sanitize_text_field($_POST['poductName']);
    $request_name=sanitize_text_field($_POST['request_name']);
    $request_email=sanitize_text_field($_POST['request_email']);
    $company=sanitize_text_field($_POST['company']);
    $request_phone=sanitize_text_field($_POST['request_phone']);
    $rugs_dimensions=sanitize_text_field($_POST['rugs_dimensions']);
    $street=sanitize_text_field($_POST['street']);
    $city=sanitize_text_field($_POST['city']);
    $zip_code=sanitize_text_field($_POST['zip_code']);
    $color_swatch=sanitize_text_field($_POST['color_swatch']);
    $color_swatch_code=sanitize_text_field($_POST['color_swatch_code']);
    $hideCurrentImg=sanitize_text_field($_POST['hideCurrentImg']);

    $country=sanitize_text_field($_POST['country']);
    $state=sanitize_text_field($_POST['state']);
    $hearabout=sanitize_text_field($_POST['hearabout']);
    $referalName=sanitize_text_field($_POST['referalName']);
    $referalCompany=sanitize_text_field($_POST['referalCompany']);
    $explain=sanitize_text_field($_POST['explain']);

    $getImage = "<img src=".$hideCurrentImg." style=height:150px width:150px; >";

        $wpdb->insert( 
          'wp_sample_request', 
          array( 
              'poductName'     => $poductName,
              'name'     => $request_name,
              'email' => $request_email,
              'company' => $company,
              'phone'   => $request_phone,
              'project_name'   => $project_name,
              'street'   => $street,
              'city'   => $city,
              'zip_code'   => $zip_code,
              'color_swatch_code'   => $color_swatch_code,
              'color_swatch'   => $color_swatch
          )
        );
      $record_id = $wpdb->insert_id;
    
      if ($record_id != '') 
      {  

      $to = $request_email;
      $subject=sanitize_text_field('New Sample Request from Summit Flooring Website');
      $subjectUSer=sanitize_text_field('Thanks for your new sample request at Summit Flooring Website');

      $messageUser='<table width="800" border="0" align="left">
        <tr>
          <td scope="col" width="350"> HI, '.$request_name.'</td>
        
        </tr>

        <tr>          
        <td scope="col" width="350" Height="10">&nbsp;</td>
        </tr>

        <tr>          
        <td scope="col" width="350">Thank you for submitting your request. One of our representatives will contact you shortly.</td>
        </tr> 

        <tr>          
        <td scope="col" width="350" Height="30">&nbsp;</td>
        </tr> 

        <tr>        
          <td scope="col" width="350">Thanks,</td>
        </tr>
        <tr>
          <td scope="col" width="350">Summit International Flooring Team</td>
        </tr>

        

      </table>';
      
      $message ='<table width="500" border="0" >

        <tr>
          <th align="left" scope="col" colspan="2"><h3>New Sample Request from Summit Flooring Website </h3></th>
        </tr>
        
        <tr>
          <td scope="col" width="150"><a href='.$hideCurrentImg.'>'.$getImage.'</a></td>
          <td scope="col" width="350"></td>
        </tr>

      </table>';

      $message .='<table width="500" border="0" align="left">
        <tr>
          <td scope="col" width="150"><b>Product Name:</b>&nbsp;</td>
          <td scope="col" width="350">'.$poductName.'</td>
        </tr>

        <tr>
          <td scope="col" width="150"><b>Name:</b>&nbsp;</td>
          <td scope="col" width="350">'.$request_name.'</td>
        </tr>        

        <tr>
          <td scope="col" width="150"><b>Email:</b>&nbsp;</td>
          <td scope="col" width="350">'.$request_email.'</td>
        </tr>

        <tr>
          <td scope="col" width="150"><b>Company:</b>&nbsp;</td>
          <td scope="col" width="350">'.$company.'</td>
        </tr>
        
        <tr>
          <td scope="col" width="150"><b>Phone:</b>&nbsp;</td>
          <td scope="col" width="350">'.$request_phone.'</td>
        </tr>
        <tr>
          <td scope="col" width="150"><b>Rugs Dimensions:</b>&nbsp;</td>
          <td scope="col" width="350">'.$rugs_dimensions.'</td>
        </tr> 
        <tr>
          <td scope="col" width="150"><b>Street:</b>&nbsp;</td>
          <td scope="col" width="350">'.$street.'</td>
        </tr>
        <tr>
          <td scope="col" width="150"><b>City:</b>&nbsp;</td>
          <td scope="col" width="350">'.$city.'</td>
        </tr>
        <tr>
          <td scope="col" width="150"><b>Zip Code:</b>&nbsp;</td>
          <td scope="col" width="350">'.$zip_code.'</td>
        </tr>
        <tr>
          <td scope="col" width="150"><b>Color Swatch Name:</b>&nbsp;</td>
          <td scope="col" width="350">'.$color_swatch.'</td>
        </tr>

        <tr>
          <td scope="col" width="150"><b>Color Swatch Code:</b>&nbsp;</td>
          <td scope="col" width="350">'.$color_swatch_code.'</td>
        </tr>   

        <tr>
          <td scope="col" width="150"><b>Country:</b>&nbsp;</td>
          <td scope="col" width="350">'.$country.'</td>
        </tr>
        <tr>
          <td scope="col" width="150"><b>State:</b>&nbsp;</td>
          <td scope="col" width="350">'.$state.'</td>
        </tr>
        <tr>
          <td scope="col" width="150"><b>How did you hear about us?:</b>&nbsp;</td>
          <td scope="col" width="350">'.$hearabout.'</td>
        </tr>
        <tr>
          <td scope="col" width="150"><b>Referral Name:</b>&nbsp;</td>
          <td scope="col" width="350">'.$referalName.'</td>
        </tr>
        <tr>
          <td scope="col" width="150"><b>Referral Company:</b>&nbsp;</td>
          <td scope="col" width="350">'.$referalCompany.'</td>
        </tr>
        <tr>
          <td scope="col" width="150"><b>Explain:</b>&nbsp;</td>
          <td scope="col" width="350">'.$explain.'</td>
        </tr>

      </table>';
     // echo $message;die;
                 
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      // More headers
      $headers .= 'From: <info@summit-flooring.com>' . "\r\n";

      $sendmail=mail($to, $subjectUSer, $messageUser, $headers);
      if($sendmail!=''){

       // wp_mail('dnumark@summit-flooring.com,MHawk@summit-flooring.com,mbecker@summit-flooring.com,orders@summit-flooring.com', $subject, $message, $headers );
        
        //wp_mail('dnumark@summit-flooring.com,MHawk@summit-flooring.com,mbecker@summit-flooring.com,orders@summit-flooring.com', $subject, $message, $headers );




        //orders@summit-flooring.com
      //mail('dnumark@summit-flooring.com,MHawk@summit-flooring.com,mbecker@summit-flooring.com,devdevelopment6@gmail.com,orders@summit-flooring.com,caron@ciprcommunications.com', $subject, $message, $headers);
         // header('Location:/thankyou.html');
         
        echo '<meta http-equiv=Refresh content="0;url=https://summit-flooring.com/thankyou-for-quote-request/">';  
      }       
    }
  }else{
    $errormessage="captcha is required";
    //echo "Some error in vrifying g-recaptcha";die;
  }
  //echo '<script type="text/javascript">window.location.href = "thank-you?id='.base64_encode($record_id).'"</script>'; 

  
}


 ?>

<link href="<?php echo get_template_directory_uri();?>/assets/css/innerStyle.css" rel="stylesheet" type="text/css" />
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<div class="content_primary">
<?php 
  //$image= wp_get_attachment_image_src( get_post_thumbnail_id(  $post->ID ));
  // $image=wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' );

?>
  <!-- SLider or Contetn------------------------>   

  <section class="product-top">
  <div class="container-fluid">
    <div class="row">
        <div class="col-xl-5 product-banner">
          <div id="product-banner" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <?php if( have_rows('rugs_slider_imagees') ):
              $i=1;              
            while( have_rows('rugs_slider_imagees') ): the_row(); 
                $image = get_sub_field('rugs_sliderimage');                
                if($i==1){
                  $active='active';
                }else{
                  $active=''; 
                } 
            ?>
                <div class="carousel-item <?php echo $active;?>" style="background-image: url('<?php echo wp_get_attachment_url( $image);?>')">
                </div>
            <?php 
            $i++;
             endwhile;
             
            endif; ?>      
            </div>
            <a class="carousel-control-prev" href="#product-banner" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#product-banner" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

<!--- Description ------------------------------------------------->
        <div class="col-xl-6 product-banner-content">
        <h1 class="mb-5"><?php echo the_title(); ?></h1>
        <p><?php echo the_content(); ?></p>
        
      </div>
<!--- End Description ------------------------------------------------->
    </div>
  </div>
</section> 

</div>





<!--- Related Product------------------------------------------------->
<section class="color-swatch-section py-5">

    <div class="container">
      
       <?php if( have_rows('choose_rugs_image') ):?>
        <hr>
      <div id="view-sample" class="row justify-content-center color-swatch-list">
        <div class="col-xl-10"><!-- select_a_color_name -->
          <h2><?php echo get_field('rugs_select_a_color_name')?></h2>
          <p>Please select a Quick Ship Rugs:</p>
          <div class="row">
          <?php
            while( have_rows('choose_rugs_image') ): the_row(); 
                $image = get_sub_field('rugs_image');  
            ?>
               <div class="col-6 col-md-4 mb-4">

                <div class="color-swatch-content">

                  <img src="<?php echo wp_get_attachment_url( $image);?>" class="img-fluid color-swatch" title="<?php echo get_sub_field('rugs_image_name') ?>" alt="<?php echo get_sub_field('rugs_image_name'); ?>"  />

                  <!-- <a href="<?php echo wp_get_attachment_url( $image);?>" data-lightbox="photos" class="btn btn-yellow btn-view-color-swatch" data-lightbox="color-swatch" data-title="4 - Greystone" >View</a> -->

                  <a href="#sample-request" data-toggle="modal" data-target="#myModal"  class="btn btn-blue btn-color-swatch-sample-request showcolorname addAttr" data-title="<?php echo get_sub_field('rugs_image_name')?>"  data-src="<?php echo wp_get_attachment_url( $image);?>">Get in Touch</a>

                  


                </div>

                <div class="text-center">
                 <!--  <span class="swatch-code"><?php echo get_sub_field('rugs_image_code')?></span><br/> -->
                  <span class="swatch-title"><?php echo get_sub_field('rugs_image_name')?></span>
                </div>

              </div>
            <?php 
             endwhile;
             ?>                
            </div>
        </div>
      </div>
    <?php endif; ?>
      <hr>
  <!-- Request Form------------------------->  
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="margin: 0px;">&times;</button>
          <h4 class="modal-title">Get in Touch</h4>
        </div>
        <div class="modal-body">

      <div id="sample-request" class="row justify-content-center">
        <div class="col-xl-10 mt-5 mb-3 text-center">
          <h2>Get in Touch</h2>
        </div>
        <div class="col-md-10 mb-5">
          <div class="contact-form">
            <form action="<?php the_permalink();?>" method="post" id="simpleRequest">                 

            <div class="form-row">
              <div class="col-12 col-sm-6">
                <input type="text" name="request_name" placeholder="Name" required="" >
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

            <div class="col-12 col-sm-6" id="stateList">
              
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
                  
                  <input type="text" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" name="color_swatch" id="color_swatch" value="<?php //echo get_field('rugs_feature_title');?>">
                  
                </div>              
              </div>
            </div>
            <?php //endif; ?>
             <div class="form-row">
              <div class="col-12">
                <input type="text" id="rugs_dimensions" name="rugs_dimensions" placeholder="Rugs dimensions"  required="" >
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

  

<?php

get_footer();

?>
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


    $(document).ready(function () {
      $('.showcolorname').click(function() {
           
      var title = $(this).data('title');     
      var code = $(this).data('code');   

      //alert(code);  

     // $('#id').val(id);  
      $('#color_swatch').val(title);  
      $('#color_swatch_code').val(code);  
     
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
    $('.addAttr').click(function() {
     // alert('test');        
    var src = $(this).data('src');  
    var title = $(this).data('title');     
    var code = $(this).data('code');     
    
    $('#color_swatch').val(title);  
    $('#currentImg').attr("src", src);  
    $('#color_swatch_code').val(code);  
   
    } );
 </script>
