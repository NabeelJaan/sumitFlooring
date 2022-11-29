<?php

/**

 * Displays footer widgets if assigned

 *

 * @package WordPress

 * @subpackage Global

 * @since Global 1.0

 * @version 1.0

 */

$footer_logo = get_field('footer_logo', 12);
$footer_internationl = get_field('footer_internationl', 12);
$footer_bb_ratting = get_field('footer_bb_ratting', 12);

$all_rights_reserved = get_field('all_rights_reserved', 12);
$twitter = get_field('twitter', 12);
$instagram = get_field('instagram', 12);
$facebook = get_field('facebook', 12);
$pinterest = get_field('pinterest', 12);
$linkedin = get_field('linkedin', 12);

?>



<div class="col-md-3 mb-5 text-center">
				<div class="footer-image">
				<a href="<?php echo site_url();?>">	
				<?php 
					if($footer_logo){
					   	echo wp_get_attachment_image( $footer_logo,'' );
					 }
					?>
				</a>	
				</div>
				
				<div class="social-media-footer">
<ul>
<li><a href="<?php echo $twitter;?>" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></li></a>
<li><a href="<?php echo $instagram;?>" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></li></a>
<li><a href="<?php echo $facebook;?>" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i>
</li></a>
<li><a href="<?php echo $pinterest;?>" target="_blank"><i class="fab fa-pinterest-p" aria-hidden="true"></i>
</li></a>
<li><a href="<?php echo $linkedin;?>" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i>
</li></a>
</ul>
</div>
			</div>
			<div class="col-md-3 mb-5 text-center">
				<div class="footer-image">
				<?php 
					if($footer_internationl){
					   	echo wp_get_attachment_image( $footer_internationl,'' );
					 }
					?>
				</div>			
			</div>
			<div class="col-md-3 mb-5 text-center">
				<div class="footer-image">
				<?php 
					if($footer_bb_ratting){
					   	echo wp_get_attachment_image( $footer_bb_ratting,'' );
					 }
					?>
				</div>			
			</div>
