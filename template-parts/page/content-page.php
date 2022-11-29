<?php

/**

 * Template part for displaying page content in page.php

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package WordPress

 * @subpackage Global

 * @since Global 1.0

 * @version 1.0

 */



?>
<?php //get_template_part( 'template-parts/banner/banner');

 $image=wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' );
?>

<section class="page-banner" style="background-image: url(<?php echo $image;?>);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h1 class="page-title"><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>


<section class="bg-light-grey">
<div class="container py-5">
<div class="row">
<div class="col-md-12 text-center">
<h4 class="mb-5 titlenew"><?php the_title(); ?></h4>
</div>

		<?php

			the_content();



			wp_link_pages(

				array(

					'before' => '<div class="page-links">' . __( 'Pages:', 'global' ),

					'after'  => '</div>',

				)

			);

			?>

	</div>
</div>
</section><!-- #post-<?php the_ID(); ?> -->

