<?php
/*
 Template Name: Custom Page Example
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>


								</header>

<!-- gallery not using wordpress media gallery 
								<div class="container">
									<div class="grid">

										<div class="cell">
											<img src="http://placehold.it/800x800" class="responsive-image">
										</div>

										<div class="cell">
											<img src="http://placehold.it/800x800" class="responsive-image">
										</div>

										<div class="cell">
											<img src="http://placehold.it/800x800" class="responsive-image">
										</div>

										<div class="cell">
											<img src="http://placehold.it/800x800" class="responsive-image">
										</div>

									</div>
								</div>
End gallery -->

								<div class="grid-container"><!-- Gallery pulling from Wordpress Media Gallery.  IMPORTANT!!! Without the 'Gallery' category chosen, the images will not load. -->
									<div class="grid">
										<?php 
											$args = array(
												'post_type' => 'attachment',
												'post_mime_type' => 'image',
												'orderby' => 'post_date',
												'order' => 'asc',
												'posts_per_page' => '30',
												'post_status'    => 'inherit',
												'category_name' => 'Gallery' //Wordpress media library catergory
											);
											$loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); //queries for data and then runs it
											$image = wp_get_attachment_image_src( get_the_ID(), 'full' ); // Full sized image & id formatted as url.
											$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); // Thumbnail size 
										?>

												<div class="cell" id="myGallery">
													<a href="<?php echo $image[0]; ?>" rel="lightbox"><img src="<?php echo $thumb[0]; ?>" class="responsive-image"></a>
												</div><!-- fetches thumbnail array, and loads within link to full size libary image. -->


											<?php endwhile; ?>
									</div>
								</div><!-- End Media Library Gallery -->


								<footer class="article-footer">

                  				<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

				</div>

			</div>

<!-- Lightbox js library Fluidbox -->
<script type="text/javascript">
jQuery.noConflict();
	(function ( $ ) {
		$(function () {
			$('#myGallery a[rel="lightbox"]').fluidbox();
		});
	})(jQuery);
</script>
<?php get_footer(); ?>
