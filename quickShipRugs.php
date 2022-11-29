<?php
/* Template Name: Quick Ship Rugs


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


if($_REQUEST['actions']=='submitRequest'){

   $secret = "6LedcmAbAAAAALi4kMITxwF1TwAXKL4R5u2A-8bg";
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
     $responseData = json_decode($verifyResponse);
   global $wpdb; 
  //if($responseData->success){ 
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
      $subject=sanitize_text_field('New get in touch request from Summit Flooring Website');
      $subjectUSer=sanitize_text_field('Thanks for your new get in touch at Summit Flooring Website');

      $messageUser='<table width="800" border="0" align="left">
        <tr>
          <td scope="col" width="350"> HI, '.$request_name.'</td>
        
        </tr>

        <tr>          
        <td scope="col" width="350" Height="10">&nbsp;</td>
        </tr>

        <tr>          
        <td scope="col" width="350">Thank you for submitting your get in touch request. One of our representatives will contact you shortly.</td>
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
          <th align="left" scope="col" colspan="2"><h3>New get in touch request from Summit Flooring Website </h3></th>
        </tr>
        
        <tr>
          <td scope="col" width="150"><a href='.$hideCurrentImg.'>'.$getImage.'</a></td>
          <td scope="col" width="350"></td>
        </tr>

      </table>';

      $message .='<table width="500" border="0" align="left">
        <tr>
          <td scope="col" width="150"><b>Product Name:</b>&nbsp;</td>
          <td scope="col" width="350">'.$color_swatch.'</td>
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
          <td scope="col" width="150"><b>Country:</b>&nbsp;</td>
          <td scope="col" width="350">'.$country.'</td>
        </tr>
        <tr>
          <td scope="col" width="150"><b>State:</b>&nbsp;</td>
          <td scope="col" width="350">'.$state.'</td>
        </tr>
        <tr>
          <td scope="col" width="150"><b>Rugs Dimensions:</b>&nbsp;</td>
          <td scope="col" width="350">'.$rugs_dimensions.'</td>
        </tr> 
       
        

      </table>';
     // echo $message;die;
                 
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      // More headers
      $headers .= 'From: <info@summit-flooring.com>' . "\r\n";

      $sendmail=mail($to, $subjectUSer, $messageUser, $headers);
      if($sendmail!=''){
         wp_mail('dnumark@summit-flooring.com,MHawk@summit-flooring.com,mbecker@summit-flooring.com,orders@summit-flooring.com', $subject, $message, $headers );
        //wp_mail('devdevelopment6@gmail.com', $subject, $message, $headers );
       // wp_mail('dnumark@summit-flooring.com,MHawk@summit-flooring.com,mbecker@summit-flooring.com,orders@summit-flooring.com', $subject, $message, $headers );
        
        //wp_mail('dnumark@summit-flooring.com,MHawk@summit-flooring.com,mbecker@summit-flooring.com,orders@summit-flooring.com', $subject, $message, $headers );




        //orders@summit-flooring.com
      //mail('dnumark@summit-flooring.com,MHawk@summit-flooring.com,mbecker@summit-flooring.com,devdevelopment6@gmail.com,orders@summit-flooring.com,caron@ciprcommunications.com', $subject, $message, $headers);
         // header('Location:/thankyou.html');
         
        echo '<meta http-equiv=Refresh content="0;url=https://summit-flooring.com/thankyou-for-quote-request/">';  
      }       
    //}
  }else{
    $errormessage="captcha is required";
    //echo "Some error in vrifying g-recaptcha";die;
  }
  //echo '<script type="text/javascript">window.location.href = "thank-you?id='.base64_encode($record_id).'"</script>'; 

  
}


?>
<link href="<?php echo get_template_directory_uri();?>/assets/css/innerStyle.css" rel="stylesheet" type="text/css" />
<!-- <div class="js-offcanvas" id="mobile-nav"></div>
</div> -->

<!-- <div class="content_primary"> -->

     <style type="text/css">
     a.outerRugs {
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    left: 0;
    z-index: 2;
}
   </style> 

<?php

    // Show the selected front page content.

    if ( have_posts() ) :

      while ( have_posts() ) :

        the_post();

        get_template_part( 'template-parts/quickShipRugs/rugs', 'page' );
        

      endwhile;

    else :

      get_template_part( 'template-parts/post/content', 'none' );

    endif;

    ?>

    
<!-- </div> -->

<?php

get_footer();

?>
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery-1.12.4.min.js"></script>


    
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets//js/isotope.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/isotope.pkgd.js"></script>


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