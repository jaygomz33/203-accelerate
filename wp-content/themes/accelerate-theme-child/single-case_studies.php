<?php
/**
 * The Template for displaying all case studies
 *
 * @package WordPress
 * @subpackage Accelerate Theme
 * @since Accelerate Marketing 2.0
 */
get_header(); ?>
<section>
	<div id="primary" class="site-content">
			<div id="content" role="main">
					<?php get_field('custom_field_name');
						$custom_filed = get_field('custom_field_name');
					?>
					<?php while ( have_posts() ) : the_post();
						$services = get_field('services');
						$client = get_field('client');
						$link = get_field('site_link');
						$image_1 = get_field("image_1");
						$image_2 = get_field('image_2');
						$image_3 = get_field('image_3');
					?>
					<article class="case-study">
							<aside class="case-study-sidebar">
									<h2><?php the_title(); ?></h2>
									<h5><?php echo $services ?></h5>
									<h6>Client: <?php echo $client; ?></h6>

									<?php the_content(); ?>
									<p><strong><a href="<?php echo $link; ?>">Site Link</a></strong></p>
							</aside>
					<div class="case-study-images">
							<?php if($image_1) {
								echo wp_get_attachment_image($image_1, $size);
							 } ?>
					</div>
					</article>
				<?php endwhile; //end of the loop ?>
			</div>
		</div>
</section>

<?php get_footer(); ?>
