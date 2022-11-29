<?php

/**

 * Template Name: Product Category

 *

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query.

 * E.g., it puts together the home page when no home.php file exists.

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package WordPress

 * @subpackage Global

 * @since Global 1.0

 * @version 1.0

 */



get_header(); 

 $image=wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' );

  $thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, '', true);
$image = $thumb_url_array[0];

 $words = explode(' ', $_SERVER['REQUEST_URI']);
$showword = trim($words[count($words) - 1], '/');


?>



<div class="js-offcanvas" id="mobile-nav"></div>
    </div>

<div class="content_primary">

  <section class="page-banner" style="background-image: url(<?php echo $image;?>);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h1 class="page-title"><?php echo the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>



<section class="page-content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="page-title"><?php echo the_title(); ?></h2>
        <p><?php echo the_content(); ?></p>
        <hr>
      </div>
   
      <?php 
     $args = array(  
        'post_type' => 'products',
        'post_status' => 'publish',
        'posts_per_page' => 50, 
        'orderby' => 'modified', 
        'order' => 'ASC',
        'tax_query' => array(
        array(
            'taxonomy' => 'category', //double check your taxonomy name in you dd 
            'field'    => 'slug',
            'terms'    => $showword,
        ),
       ), 
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); 
      ?>
        <div class="col-lg-4 col-md-6">

          <div class="post-box">

            <a class="post-content" href="<?php the_permalink(); ?>">
              <span class="link-icon"></span>
              <?php //$image=wp_get_attachment_url( get_post_thumbnail_id(), 'full' );
              the_post_thumbnail();
              ?>
              <div class="post-content-detail">
                <!-- <div class="post-date"><?php //echo get_the_date( 'd M, Y' );?></div> -->
                <div class="post-title"><?php echo the_title();  ?></div>
                <div class="post-text">
                  <?php echo the_excerpt();?>       
                  <?php //echo get_field('home_blog_content');?>        
                </div>
                <div class="post-readmore">read more</div>

              </div>
            </a>
          </div>

        </div>

      <?php //get_template_part( 'template-parts/pagination' ); ?>
      <?php  endwhile;

    wp_reset_postdata();  ?>
      <nav class="pagination">
        <?php //pagination_bar(); ?>
      </nav>
        
      
    </div>

    
  </div>
</section>
</div>



<?php

get_footer();