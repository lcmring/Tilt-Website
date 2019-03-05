<?php
/**
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
		<?php

			query_posts('cat=-9&paged=' . $paged);
			if ( have_posts() ) : ?>

			<?php
			// Start the Loop.

			$numberOfPosts = $wp_query->post_count;
			$postsLeftOver = $numberOfPosts % 8;

			$i = 0;
			?>

			<div class="container container--no-padding">

			<?php
			if($paged === 0){
				$tweetCounter = 0;
			} else {
				$tweetCounter =  4 * ($paged - 1);
			}

			while ( have_posts() ) : the_post();

				$i++;
				if($i === 1){
					?>
						<div class="group-container">
							<div class="group group--left">
								<div class="module module--2-2  news--icon">
									<?php get_template_part( 'content', 'blog-post-large' ); ?>
								</div>
					<?php
				} else if($i === 2){
					$tweet = $tweetCounter + 1;
					?>
						<div id="twitter__module" class="module module--1-1 module--dark-mobile-news">
							<div class="module__text">
								<?php echo do_shortcode( "[rotatingtweets screen_name='wearetilt' include_rts='1' official_format='2'  offset='" . $tweet . "'  tweet_count='1' show_follow='0' timeout='3000' rotation_type='fade']" ) ?>

							</div> <!-- /end text-section -->
						</div>
						<div class="module module--1-1 news--icon">
							<?php get_template_part( 'content', 'blog-post' ); ?>
						</div>
					<?php
					$tweetCounter++;
				} else if($i === 3){
					$tweet = $tweetCounter - 1;
					?>
						</div>
						<div class="group group--right">
							<div  id="twitter__module_two" class="module module--1-1">
								<div class="module__text">
									<?php echo do_shortcode( "[rotatingtweets screen_name='wearetilt' include_rts='1' official_format='2' offset='" . $tweet . "'  tweet_count='1' show_follow='0' timeout='3000' rotation_type='fade']" ) ?>

								</div> <!-- /end text-section -->
							</div>
							<div class="module module--1-1  news--icon">
								<?php	get_template_part( 'content', 'blog-post' ); ?>
							</div>
					<?php
					$tweetCounter++;
				} else if($i === 4){
					?>
							<div class="module module--2-2  news--icon">
								<?php get_template_part( 'content', 'blog-post-large' ); ?>
							</div>
						</div>
					<?php
				}
				?>
				<?php
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */

			// End the loop.

			if($i === 4){
				$i = 0;
				?>
					</div>
				<?php
			}
			endwhile;

			if($postsLeftOver != 0){
				$amountOfBoxes =  8 - $postsLeftOver;

				switch ($amountOfBoxes) {
				    case 1:
				        ?>
								<div class="module module--2-2 module--dark">

								</div>
							</div>
						</div>

						<?php
				        break;
				    case 2:
						$tweet = $tweetCounter - 1;
					?>
						</div>
						<div class="group group--right">
							<div  id="twitter__module_three" class="module module--1-1">
								<div class="module__text">
									<?php echo do_shortcode( "[rotatingtweets screen_name='wearetilt' include_rts='1' official_format='2' offset='" . $tweet . "'  tweet_count='1' show_follow='0' timeout='3000' rotation_type='fade']" ) ?>
								</div> <!-- /end text-section -->
							</div>
							<div class="module module--1-1 module--dark">

							</div>
							<div class="module module--2-2 module--dark">

							</div>
						</div>
					</div>
				</div>

					<?php
				        break;
				    case 3:
						$tweet = $tweetCounter + 1;
					?>
					<div class="module module--1-1">
						<div class="module__text">
							<?php echo do_shortcode( "[rotatingtweets screen_name='wearetilt' include_rts='1' official_format='2'  offset='" . $tweet . "'  tweet_count='1' show_follow='0' timeout='3000' rotation_type='fade']" ) ?>
						</div> <!-- /end text-section -->
					</div>
					<div class="module module--1-1 module--dark">
					</div>
								</div>
								<div class="group group--right">
									<div class="module module--1-1">
										<div class="module__text">
											<?php echo do_shortcode( "[rotatingtweets screen_name='wearetilt' include_rts='1' official_format='2' offset='" . $tweet . "'  tweet_count='1' show_follow='0' timeout='3000' rotation_type='fade']" ) ?>
										</div> <!-- /end text-section -->
									</div>
									<div class="module module--1-1 module--dark">

									</div>
									<div class="module module--2-2 module--dark">

									</div>
								</div>
							</div>
						</div>

					<?php
				        break;
					case 4;
					?>
					<div class="group-container">
						<div class="group group--left">
							<div class="module module--2-2 module--dark">
							</div>
					<div class="module module--1-1">
						<div class="module__text">
							<?php echo do_shortcode( "[rotatingtweets screen_name='wearetilt' include_rts='1' official_format='2'  offset='" . $tweet . "'  tweet_count='1' show_follow='0' timeout='3000' rotation_type='fade']" ) ?>
						</div> <!-- /end text-section -->
					</div>
					<div class="module module--1-1 module--dark">
					</div>
								</div>
								<div class="group group--right">
									<div class="module module--1-1">
										<div class="module__text">
											<?php echo do_shortcode( "[rotatingtweets screen_name='wearetilt' include_rts='1' official_format='2' offset='" . $tweet . "'  tweet_count='1' show_follow='0' timeout='3000' rotation_type='fade']" ) ?>
										</div> <!-- /end text-section -->
									</div>
									<div class="module module--1-1 module--dark">

									</div>
									<div class="module module--2-2 module--dark">

									</div>
								</div>
							</div>
						</div>

					<?php
						break;
					case 5:
					?>
							<div class="module module--2-2 module--dark">

							</div>
						</div>
					</div>
					<div class="group-container">
						<div class="group group--left">
							<div class="module module--2-2 module--dark">
							</div>
					<div class="module module--1-1">
						<div class="module__text">
							<?php echo do_shortcode( "[rotatingtweets screen_name='wearetilt' include_rts='1' official_format='2'  offset='" . $tweet . "'  tweet_count='1' show_follow='0' timeout='3000' rotation_type='fade']" ) ?>
						</div> <!-- /end text-section -->
					</div>
					<div class="module module--1-1 module--dark">
					</div>
								</div>
								<div class="group group--right">
									<div class="module module--1-1">
										<div class="module__text">
											<?php echo do_shortcode( "[rotatingtweets screen_name='wearetilt' include_rts='1' official_format='2' offset='" . $tweet . "'  tweet_count='1' show_follow='0' timeout='3000' rotation_type='fade']" ) ?>
										</div> <!-- /end text-section -->
									</div>
									<div class="module module--1-1 module--dark">

									</div>
									<div class="module module--2-2 module--dark">

									</div>
								</div>
							</div>
						</div>

					<?php
						break;
					case 6:
					?>
				</div>
				<div class="group group--right">
					<div class="module module--1-1">
						<div class="module__text">
							<?php echo do_shortcode( "[rotatingtweets screen_name='wearetilt' include_rts='1' official_format='2' offset='" . $tweet . "'  tweet_count='1' show_follow='0' timeout='3000' rotation_type='fade']" ) ?>
						</div> <!-- /end text-section -->
					</div>
					<div class="module module--1-1 module--dark">

					</div>
					<div class="module module--2-2 module--dark">

					</div>
				</div>
			</div>
		</div>
			<div class="group-container">
				<div class="group group--left">
					<div class="module module--2-2 module--dark">
					</div>
			<div class="module module--1-1">
				<div class="module__text">
					<?php echo do_shortcode( "[rotatingtweets screen_name='wearetilt' include_rts='1' official_format='2'  offset='" . $tweet . "'  tweet_count='1' show_follow='0' timeout='3000' rotation_type='fade']" ) ?>
				</div> <!-- /end text-section -->
			</div>
			<div class="module module--1-1 module--dark">
			</div>
						</div>
						<div class="group group--right">
							<div class="module module--1-1">
								<div class="module__text">
									<?php echo do_shortcode( "[rotatingtweets screen_name='wearetilt' include_rts='1' official_format='2' offset='" . $tweet . "'  tweet_count='1' show_follow='0' timeout='3000' rotation_type='fade']" ) ?>
								</div> <!-- /end text-section -->
							</div>
							<div class="module module--1-1 module--dark">

							</div>
							<div class="module module--2-2 module--dark">

							</div>
						</div>
					</div>
				</div>

					<?php
						break;
					case 7:
					?>
					<div class="module module--1-1">
						<div class="module__text">
							<?php echo do_shortcode( "[rotatingtweets screen_name='wearetilt' include_rts='1' official_format='2'  offset='" . $tweet . "'  tweet_count='1' show_follow='0' timeout='3000' rotation_type='fade']" ) ?>
						</div> <!-- /end text-section -->
					</div>
					<div class="module module--1-1 module--dark">
					</div>
				</div>
				<div class="group group--right">
					<div class="module module--1-1">
						<div class="module__text">
							<?php echo do_shortcode( "[rotatingtweets screen_name='wearetilt' include_rts='1' official_format='2' offset='" . $tweet . "'  tweet_count='1' show_follow='0' timeout='3000' rotation_type='fade']" ) ?>
						</div> <!-- /end text-section -->
					</div>
					<div class="module module--1-1 module--dark">

					</div>
					<div class="module module--2-2 module--dark">

					</div>
				</div>
			</div>
		</div>
			<div class="group-container">
				<div class="group group--left">
					<div class="module module--2-2 module--dark">
					</div>
			<div class="module module--1-1">
				<div class="module__text">
					<?php echo do_shortcode( "[rotatingtweets screen_name='wearetilt' include_rts='1' official_format='2'  offset='" . $tweet . "'  tweet_count='1' show_follow='0' timeout='3000' rotation_type='fade']" ) ?>
				</div> <!-- /end text-section -->
			</div>
			<div class="module module--1-1 module--dark">
			</div>
						</div>
						<div class="group group--right">
							<div class="module module--1-1">
								<div class="module__text">
									<?php echo do_shortcode( "[rotatingtweets screen_name='wearetilt' include_rts='1' official_format='2' offset='" . $tweet . "'  tweet_count='1' show_follow='0' timeout='3000' rotation_type='fade']" ) ?>
								</div> <!-- /end text-section -->
							</div>
							<div class="module module--1-1 module--dark">

							</div>
							<div class="module module--2-2 module--dark">

							</div>
						</div>
					</div>
				</div>

				<?php the_posts_pagination( array(
					'prev_text'          => __( '&#8249; Prev', 'twentyfifteen' ),
					'next_text'          => __( 'Next &#8250;', 'twentyfifteen' ),
					'screen_reader_text' => __( '' )
				) );

				?>

					<?php
						break;
				    default:
				}
			}

			?>
			</div>
			<?php

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( '&#8249; Prev', 'twentyfifteen' ),
				'next_text'          => __( 'Next <span class="paginate_arrows">&#8250;</span>', 'twentyfifteen' ),
				'screen_reader_text' => __( '' )
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
</div>

<?php get_footer(); ?>
