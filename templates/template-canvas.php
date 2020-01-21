<?php
/*
Template Name: Canvas Template
Template Post Type: post, page
*/

get_header();
?>

<main id="site-content" class="homepage" role="main">
	<section>
		<figure class="template-image">
			<div class="banner-image">
				<img src="<?php the_field('header_banner_image', 'option'); ?>" alt="" class="attachment-post-thumbnail size-post-thumbnail wp-post-image">
				<figcaption class="overlay has-larg-font-size has-text-align-center"><?php the_field('header_banner_figcaption', 'option'); ?></figcaption>
				
					<button class="banner-toggle">
						<a href="#">
						<span class="toggle-inner">
							<span class="button-text">
								<?php  the_field('header_banner_button_text', 'option') ?>
							</span>
							<span class="toggle-icon">
								<?php twentytwenty_the_theme_svg( 'arrow-right' ); ?>
							</span>
						</span>
						</a>
					</button>
				
			</div>
		</figure>

		<div class="container">
			<div class="row">
				<div class="col-sm-6 contact-admin">
					<span class="profile-avatar">
						<?php echo get_avatar( get_the_author_email(), '30' ); ?>
					</span>
					<span class="profile-text">
						Pour plus d’infos, contactez-moi
					</span>
				</div>
			</div>
		</div>
		<header class="entry-header has-text-align-center">
			<div class="entry-header-inner section-inner medium">
				<h1 class="entry-title heading-size-1"><?php the_field('home_page_header_title', 'option'); ?></h1>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<hr>
						<div class="entry-content ">
							<div class="list-content">
								<span class="list-icon">
									<?php twentytwenty_the_theme_svg( 'clipboard' ); ?>
								</span>
								<h4 class="heading-size-4"><?php the_field('home_page_header_sub_text', 'option'); ?></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
	</section>
	<section class="block-link">
		<?php  if(have_rows('home_page_repeater_block_link', 'option')) : ?>
		<?php while(have_rows('home_page_repeater_block_link', 'option')) : the_row() ?>
		<figure class="template-image">
			<?php $image = get_sub_field('banner_image', 'option'); ?>
			<div class="banner-image">
				<?php if($image): ?>
					<img src="<?php echo $image['url'];?>" alt="" class="attachment-post-thumbnail size-post-thumbnail wp-post-image">
					<figcaption class="overlay has-larg-font-size has-text-align-left"><?php the_sub_field('banner_figcaption', 'option'); ?></figcaption>
					<?php endif; ?>
				
					<button class="banner-toggle">
						<a href="#">
						<span class="toggle-inner">
							<span class="button-text">
								<?php the_sub_field('banner_button_text', 'option') ?>
							</span>
							<span class="toggle-icon">
								<?php twentytwenty_the_theme_svg( 'arrow-right' ); ?>
							</span>
						</span>
						</a>
					</button>
				
			</div>
		</figure>
		<div class="container card-pack">
			<h5><?php the_sub_field('card_pack_title', 'option', 'option'); ?></h5>
			<p><?php the_sub_field('card_pack_text', 'option'); ?></p>
			
				<button class="card-pack-toggle">
					<a href="#">
					<span class="toggle-inner">
						<span class="button-text">
							<?php  the_sub_field('card_button_text', 'option') ?>
						</span>
						<span class="toggle-icon">
							<?php twentytwenty_the_theme_svg( 'arrow-right' ); ?>
						</span>
					</span>
					</a>
				</button>
			
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
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
	<h4 class="inter-section"><?php the_field('home_page_body_intersection_title', 'option');  ?></h4>
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