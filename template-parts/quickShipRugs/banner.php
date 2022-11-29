<?php

/**

 * Banner

 *

 * @package WordPress

 * @subpackage Global

 * @since Global 1.0

 * @version 1.2

 */



//$image= wp_get_attachment_image_src( get_post_thumbnail_id( $post->id ));
 $thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, '', true);
 //$image = $thumb_url_array[0];

 $image=wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' );
?>
<!--<div class="content_primary">
<section class="page-banner" style="background-image: url(<?php echo $image;?>);">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<h1 class="page-title"><?php the_title(); ?> sdsds sd sds</h1>
			</div>
		</div>
	</div>
</section>
</div>-->


<section class="product-top">
  <div class="container-fluid">
    <div class="row">
        <div class="col-xl-5 product-banner">
          <div id="product-banner" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">

            <?php if( have_rows('slider') ):
              $i=1;
            while( have_rows('slider') ): the_row(); 
                $image = get_sub_field('pquick_slider_image'); 
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
            <div class="col-xl-6 product-banner-content">
        <h1 class="mb-5"><?php the_title(); ?> </h1>
        <p><p><?php echo the_content(); ?></p></p>
         <a href="#view-collections" class="btn btn-yellow btn-sample-request">
                 view-collections
                </a>
        
      </div>
    </div>
  </div>
</section>
