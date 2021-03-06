<?php
/**
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage club_privilege
 * @since 1.0.0
 */

get_header();
?>

<main id="site-content" role="main">
	<article>
		<!-- <header class="entry-header has-text-align-center">
			<div class="entry-header-inner section-inner medium">
				<h2 class="entry-title heading-size-1"><?php the_field('home_page_header_title', 'option'); ?></h2>
			</div>
		</header> -->
		<figure class="featured-media">
			<div class="featured-media-inner section-inner large">
				<img src="<?php the_field('home_page_header_image', 'option'); ?>" alt="" class="attachment-post-thumbnail size-post-thumbnail wp-post-image">
				<figcaption class="overlay has-larg-font-size"><?php the_field('home_page_header_text', 'option'); ?></figcaption>
			</div>
		</figure>

		<div class="entry-content">
			<div class="has-text-align-center">
				<h3 class="has-larger-font-size alignfull"><?php the_field('home_page_header_sub_title', 'option'); ?></h3>
				<p><?php the_field('home_page_header_sub_text', 'option'); ?></p>
			</div>
		</div>
		<h4 class="inter-section"><?php the_field('home_page_body_intersection_title', 'option');  ?></h4>
	</article>
	<section class="section-inner">
		<div class="row">
			
			<?php  if(have_rows('home_page_repeater_card_pack', 'option')) : ?>
			<?php while(have_rows('home_page_repeater_card_pack', 'option')) : the_row() ?>
			<div class="col-sm-4">
			<?php $image = get_sub_field('card_pack_image', 'option'); ?>
				<div class="card">
					<?php if($image): ?>
					<img src="<?php echo $image['url'];?>" alt="Avatar" style="width:100%">
					<?php endif; ?>
					<div class="container">
						<h4><b><?php the_sub_field('card_pack_title', 'option', 'option'); ?></b></h4>
						<p><?php the_sub_field('card_pack_text', 'option'); ?></p>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
			
		</div>
		<!-- Template pills button -->
		<!-- <div class="row">
			<article class="col-sm-4">
					<figure class="block-pills">
						<img src="" alt="">
						
						<figcaption>
							<h4>Packs amateurs</h4>
							<p>Créez vos food events</p>
						</figcaption>
					</figure>
			</article>
		</div> -->
	</section>
	<div class="section-wrapper">
		<section class="section-inner">
			<div class="container-fluid">
				<h3 class="has-text-align-center has-larger-font-size alignfull"><?php the_field('info_main_title','option') ?></h3>
				<div class="row">
					<?php  if(have_rows('home_page_footer_repeater_info', 'option')) : ?>
					<?php while(have_rows('home_page_footer_repeater_info', 'option')) : the_row() ?>
					<div class="col-sm-6">
					<article>
						<div>
							<h4><?php the_sub_field('info_small_title','option') ?></h4>
							<p><?php the_sub_field('info_text','option') ?></p>
						</div>
					</article>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</section></div>
</main><!-- #site-content -->
<?php
get_footer();
