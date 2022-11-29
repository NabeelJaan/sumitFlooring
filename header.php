<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

$logo = get_field('logo', 12);

$size = '600';

$size2 = '330';

$phoneno = get_field('phone', 34);
$email = get_field('email', 34);
$toll_free = get_field('toll_free', 12);
$toll_free_title = get_field('toll_free_title', 12);
$twitter = get_field('twitter', 12);
$instagram = get_field('instagram', 12);
$facebook = get_field('facebook', 12);
$pinterest = get_field('pinterest', 12);
$linkedin = get_field('linkedin', 12);


?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="nitro-verify" content="nitro-619cd37903546e34f9d47292292a65044b933daede2be">
<link rel="profile" href="https://gmpg.org/xfn/11">
<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://web.archive.org/web/20210413141215js_/https://www.googletagmanager.com/gtag/js?id=UA-110434077-1"></script>
		<script>
         window.dataLayer = window.dataLayer || [];
         function gtag() {
            dataLayer.push(arguments);
         }
         gtag('js', new Date());

         gtag('config', 'UA-110434077-1');
         gtag('config', 'AW-582063973');
		</script>
<!-- Google Tag Manager -->
		<script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({'gtm.start':
                       new Date().getTime(), event: 'gtm.js'});
            var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                    'https://web.archive.org/web/20210413141215/https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
         })(window, document, 'script', 'dataLayer', 'GTM-WQJS935');</script>
		<!-- End Google Tag Manager -->	
	
<style type="text/css">
	.wp-die-message{ display: none !important; }
	.post-box .post-content::after{content:none!important;}
</style>
	

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    
    <header>
<div class="container">
	<div class="top-head">
		

		
	<div class="logo">
		<!-- <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="" class="img-fluid"> -->
		<?php if ( strstr( $_SERVER['REQUEST_URI'], '/c')) { ?>
		<a href="#">
		<?php }else{ ?>	
		<a href="<?php echo site_url();?>">
		<?php } ?>		
		<?php 
		if($logo){
		   	echo wp_get_attachment_image( $logo,'' );
		 }
		?>
		</a>
		<?php echo do_shortcode('[rmp_menu id="4514"]'); ?>
	</div>
		<div  class="toll-free" style="animation-duration: 2s;">

<span><?php echo $toll_free_title;?>: <a href="tel:<?php echo $toll_free;?>"><?php echo $toll_free;?></a></span>	
</div>
<div class="social-media-new">
<ul>
<li><a href="<?php echo $twitter;?>" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="<?php echo $instagram;?>" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
<li><a href="<?php echo $facebook;?>" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
<li><a href="<?php echo $pinterest;?>" target="_blank"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
<li><a href="<?php echo $linkedin;?>" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
</ul>
</div>
<span class="hr-line"></span>
</div>	
<hr>
<div class="headerContainerWrapper"><div class="container">
<div class="top-head">
		


	 <?php if ( has_nav_menu( 'top' ) ) : ?>

  	<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?> 

   <?php endif; ?>				
</div>	</div>	</div>	
</div>
</header>

	<!-- #masthead -->


	<div class="site-content-contain">
		<div id="content" class="site-content">