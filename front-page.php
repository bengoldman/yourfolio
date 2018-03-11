
<!-- THE HOME PAGE -->
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="intro-copy cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<div class="skillz-wrapper">
							<ul class="skillz">
								<li>Actress</li>
								<li>Singer</li>
								<li>Magician</li>
							</ul>
						</div>
						<div class="separator"></div>

							<!-- CONTROLS -->

								<input type="radio" checked id="radio-front" name="select-face"/>
								<input type="radio" id="radio-top" name="select-face"/>
								<input type="radio" id="radio-bottom" name="select-face"/>
								<input type="radio" id="radio-left" name="select-face"/>
								<input type="radio" id="radio-right" name="select-face"/>
								<input type="radio" id="radio-back" name="select-face"/>

							<div class="separator"></div>
							<br></br>


							<div class="space3d">
								<div class="_3dbox">
									<div class="_3dface _3dface--front">
										<a href="http://localhost:8888/yourfolio/">
											<span>HOME</span>
										</a>
									</div>

									<div class="_3dface _3dface--top">
										<a href="http://localhost:8888/yourfolio/resume/">
											<span>RESUME</span>
										</a>
									</div>

									<div class="_3dface _3dface--bottom">
										<a href="http://localhost:8888/yourfolio/testimonials/">
											<span>MY FANS</span>
										</a>
									</div>

									<div class="_3dface _3dface--left">
										<a href="http://localhost:8888/yourfolio/media">
											<span>MEDIA</span>
										</a>
									</div>

									<div class="_3dface _3dface--right">
										<a href="http://localhost:8888/yourfolio/about/">
											<span>ABOUT ME</span>
										</a>
									</div>

									<div class="_3dface _3dface--back">
										<a href="http://localhost:8888/yourfolio/contact/">
											<span>CONTACT Me</span>
										</a>
									</div>

								</div>
							</div>

							<div class="separator"></div>
							<br><br>


                                  <!--  <div class="front-intro" itemprop="articleBody">

										<h1>/h1>

										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Odio aenean sed adipiscing diam donec. Mi proin sed libero enim. Molestie at elementum eu facilisis sed odio morbi. Quisque egestas diam in arcu cursus euismod quis viverra. Duis at consectetur lorem donec massa. Ultrices neque ornare aenean euismod elementum nisi. Dolor sit amet consectetur adipiscing elit pellentesque. Habitant morbi tristique senectus et netus et malesuada. Sit amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus. Enim sed faucibus turpis in eu. Sed euismod nisi porta lorem mollis aliquam. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor. Odio eu feugiat pretium nibh ipsum consequat nisl. Enim blandit volutpat maecenas volutpat blandit aliquam. In hac habitasse platea dictumst. Imperdiet dui accumsan sit amet nulla facilisi morbi.
	</p>
	<p>Fermentum et sollicitudin ac orci phasellus egestas tellus rutrum. Nunc mattis enim ut tellus elementum sagittis vitae. Turpis nunc eget lorem dolor sed viverra. Elementum curabitur vitae nunc sed velit dignissim sodales ut. Tempus imperdiet nulla malesuada pellentesque elit eget gravida cum. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus. Eleifend mi in nulla posuere sollicitudin aliquam ultrices. Porta nibh venenatis cras sed felis eget velit aliquet sagittis. Sed libero enim sed faucibus turpis in eu mi bibendum. Gravida arcu ac tortor dignissim convallis aenean et. Tempor commodo ullamcorper a lacus vestibulum. At lectus urna duis convallis convallis tellus. Enim facilisis gravida neque convallis a cras. Iaculis urna id volutpat lacus laoreet non. Cursus sit amet dictum sit. Id aliquet risus feugiat in. Egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate. Sed id semper risus in hendrerit gravida rutrum quisque non. Gravida quis blandit turpis cursus in hac habitasse platea dictumst.</p>
										<!-- loads featured image 
									</div>
									<div class="featured-image-home"> <?php the_post_thumbnail( 'bones-thumb-600' ); ?> </div> -->

								<footer class="article-footer">

                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer>

								<?php comments_template(); ?>

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


<?php get_footer(); ?>
