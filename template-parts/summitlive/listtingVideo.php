<?php

/**

 * our Clients

 *

 * @package WordPress

 * @subpackage Global

 * @since Global 1.0

 * @version 1.2

 */



?>



<div class="js-offcanvas" id="mobile-nav"></div>
		</div>

<div class="content_primary">

	<section class="product-top">
		<div class="container-fluid">
			<div class="row">
				
				<div class="col-xl-6 product-banner">
					<iframe width="951" height="100%" src="<?php echo get_field('summit_live_youtube_video','2244'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
					
				
				<div class="col-xl-6 product-banner-content">
					<h1 class="mb-5"><?php echo get_field('summit_live_title','2244'); ?></h1>
					<p><strong><?php echo get_field('content','2244'); ?></strong></p>			</div>
			</div>
		</div>
	</section>
<?php if( have_rows('previous_episodes','2244') ): ?>
<section class="page-content bg-light-grey">
	<div class="container">

		
			<div class="row my-5">
				<div class="col-md-12">
					<div class="watch-more">
						<h2>Previous Episodes</h2>
						<span class="title-highlight"></span>
					</div>
				</div>
			</div>

			
				<div class="row">

				<?php 
				  $i=1;

				  while( have_rows('previous_episodes','2244') ): the_row(); 
				    $youtube_thumb = get_sub_field('previous_episodes_image');
					 
				?>
						<div class="col-md-3 d-block">

							<a href="#" class="video-btn" data-toggle="modal" data-target="#modal_youtube" data-src="<?php echo get_sub_field('previous_episodes_youtube');  ?>">

								<div class="youtube-thumb" style="background:url(<?php echo wp_get_attachment_url( $youtube_thumb);?>);">
									<div class="youtube-space-box"></div>


								</div>
								<span class="watch-more-play-button">
									<img class="watch-more-img" src="/wp-content/uploads/2021/07/play-btns.png" alt="" />								</span>
							</a>
							<div class="youtube-detail mb-4">
								<div class="youtube-date"><?php echo get_sub_field('previous_episodes_date');  ?></div>
								<div class="youtube-title"><p><?php echo get_sub_field('previous_episodes_title');  ?></p></div>
							</div>
						</div>
					<?php 
			           endwhile;
			            
			        ?>
						
					
				</div>
			
		
	</div>

	<!-- Modal -->
	<div class="modal fade" id="modal_youtube" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>
		</div>