<?php

/**

 * The template for displaying the footer

 *

 * Contains the closing of the #content div and all content after.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package WordPress

 * @subpackage Global

 * @since Global 1.0

 * @version 1.2

 */

?>



	</div>



	


<footer>
	<div class="footer-content">
	<div class="container">
		<div class="row">
			<?php  get_template_part( 'template-parts/footer/footer', 'widgets') ?>
			<div class="col-md-3">
				<?php get_template_part( 'template-parts/footer/contact', 'info'); ?>
			</div>
		</div>
	</div>
</div>

<div class="copyright">
	<div class="container">
		<div class="row">
			<?php get_template_part( 'template-parts/footer/site', 'info');?>
		</div>
	</div>
</div>
</footer>

<script>	
	/*jQuery(window).scroll(function() {    
    var scroll = jQuery(window).scrollTop();

    if (scroll >= 500) {
        jQuery("header").addClass("darkHeader");
    } else {
        jQuery("header").removeClass("darkHeader");
    }
});
*/

	 jQuery(document).ready(function () { 
            jQuery('input[name="your-phone"]').keypress(function (e) {  
                var charCode = (e.which) ? e.which : event.keyCode
                if (String.fromCharCode(charCode).match(/[^0-9]/g))
                    return false;    
            }); 
    
        });

	 /*jQuery(document).ready(function () { 
            jQuery('input[name="zip"]').keypress(function (e) {  
                var charCode = (e.which) ? e.which : event.keyCode
                if (String.fromCharCode(charCode).match(/[^0-9]/g))
                    return false;    
            }); 
    
        }); */
</script>

<script>
	jQuery(document).ready(function(){
		jQuery('img:not([alt])').attr('alt', 'Sumit Flooring');
	});
</script>


<?php wp_footer(); ?>


<script>
	$(document).ready(function() {
     
    $('.menu-item-has-children').click(function(obj){
       // $('.rmp-submenu').next().toggle(400);
        //$('.rmp-submenu').show();
        $(this).find("ul").toggle(400);
    })
});
	

	


</script>
</body>

</html>

