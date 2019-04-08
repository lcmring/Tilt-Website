<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="container container--double-side-pad area-dark container--mobile-header-spacing">
	<div class="text-container">
		<p class="first-para sans-serif"><strong class="highlight">GREAT IDEAS</strong> COME FROM COLLECTIONS OF CURIOUS UNINHIBITED MINDS. MEET THE TILT TEAM:</p>
	</div>
</div> <!-- /end container -->

<?php

$args = array(
  'numberposts' => 999,
  'post_type'   => 'team_item'
);

$team_items = get_posts( $args );

?>

	<div class="container container--no-padding area-dark">
		<div class="group-container">

			<?php if($team_items) : ?>
			<?php $i=1;foreach($team_items as $team) : ?>

			<?php
			$name = $team->post_title;
			$position = get_field('position', $team);
			$isLinks = get_field('show_links', $team);
			$teamImage = get_the_post_thumbnail_url($team, 'team');
			$email = get_field('emaill_add', $team);
			$linkedin = get_field('linkedin_add', $team);

			$cssClass = "module module--staff module--video";


			?>

			<div id="staff-<?= $i;?>" class="<?= $cssClass; ?>" style="background-image: url('<?= $teamImage;?>'); background-size: cover; background-position: 50% 50%;">
				<div class="overlay overlay--staff area-dark">
					<div class="overlay-text">
						<h2 class="underlined"><?= $name;?></h2>
						<p class="sans-serif">
							<?= $position;?>
						</p>
							<ul>
								<li class="email"><a href="mailto:<?php echo $email; ?>">Email</a></li>
								<?php if($isLinks) { ?>
								<li class="linkedin"><a href="<?php echo $linkedin; ?>" target="_blank">Linkedin</a></li>
							<?php } ?>

							</ul>
					</div>
				</div>
				<div class="bottom-border" aria-hidden="true"></div>
			</div>


			<?php $i++;endforeach;?>
			<?php endif;?>

		</div>
	</div>




<?php /*
	<?php $staffData = file_get_contents(get_template_directory_uri().'/data/staff.json');?>
	<script>
		var staffData = <?= $staffData;?>;
	</script>
	*/?>

	<script type="text/javascript">

	</script>

</div>

<div id="staff-member">
	<div id="staff-member__wrapper">
		<div id="blahblahblah"></div>
		<div id="staff-member__info" class="area-dark no-background" style="position: relative; z-index: 7;">
			<div id="staff-member__close"></div>
			<h1 id="staff-member__name"></h1>
			<h2 id="staff-member__position"></h2>
			<h2 id="staff-member__department" class="underlined"></h2>
			<div id="staff-member__about"></div>
			<p id="staff-member__did-you-know" class="sans-serif"></p>
		</div>
	</div>
</div>

<?php get_footer(); ?>
