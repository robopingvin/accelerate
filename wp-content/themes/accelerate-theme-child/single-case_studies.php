<?php
/**
 * The template for displaying case studies

 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
				$client=get_field('client');
				$services=get_field('services');
				$link=get_field('site_link');
				$image_1=get_field('image_1');
				$image_2=get_field('image_2');
				$image_3=get_field('image_3');
				$size="full";
			?>
				<article class="case_study">
					<aside class="case-study-sidebar">
					<h2><?php the_title();?></h2>
					<h5><?php echo $services;?></h5>
					<h6>Client: <?php echo $client;?></h6>
					 <p>Some text here just for test purposes. Some text here just for test purposes. Some text here just for test purposes. Some text here just for test purposes. Some text here just for test purposesSome text here just for test purposesSome text here just for test purposesSome text here just for test purposesSome text here just for test purposesSome text here just for test purposesSome text here just for test purposesSome text here just for test purposesSome text here just for test purposes</p>



				  <?php the_content(); ?>
					<p><a href="<?php echo $link;?>">This way to the site</a></p>
					</aside>
					<div class="case-study-images">
					   <img src="<?php echo wp_get_attachment_image($image_1,$size);?>"></img>
					   <img src="<?php echo wp_get_attachment_image($image_2,$size);?>"></img>
					   <img src="<?php echo wp_get_attachment_image($image_3,$size);?>"></img>
				   </div>
			  </article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
