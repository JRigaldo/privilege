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
		<header class="entry-header has-text-align-center">
			<div class="entry-header-inner section-inner medium">
				<h2 class="entry-title heading-size-1"><?php the_field('home_page_header_title', 'option'); ?></h2>
			</div>
		</header>
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
		<figure class="featured-media">
			<div class="featured-media-inner section-inner medium">
				<img src="<?php bloginfo('template_directory') ?>/assets/images/pack_amateur.jpg" alt="">
				<figcaption>
					<h4>Packs amateurs</h4>
					<p>Créez vos food events</p>
				</figcaption>
			</div>
		</figure>
	</article>
	<section>
		<h3>Fooding Event c’est quoi ?</h3>
		<article>
			<div>
				<h4>Expertise, expérience et plaisir !</h4>
				<p>Organiser un événement n’aura jamais été aussi facile : plus besoin de se creuser la tête pour un évènement réussi, de courir après un Dj ou une sono. Fooding Event vous facilite la vie avec des services clef en main uniques. Vous apprécierez autant que vos invités une journée ou une soirée culinaire</p>
			</div>
			<div>
				<h4>Pour les entreprises</h4>
				<p>Invitez vos collaborateurs vos clients à une soirée thématique pour l’ouverture d’une enseigne, le lancement d’une nouveauté, l’animation d’un showroom, les portes ouvertes de votre entreprise ou de votre groupement de commerçants ou d’une activité de levée de fonds.
				<br><br>Avec nos services de billetterie, de voting et notre club privilège, offrez-vous les services de professionnels pour alléger votre organisation et créer un event pro !</p>
			</div>
			<div>
				<h4>Pour particulier</h4>
				<p>Pour une fête de famille, un anniversaire, un enterrement de vie de jeune fille ou de garçon, recevez vos proches autour d’une fondue, offrez-leur la démonstration d’un chef à la maison ou un cours de cuisine. A plusieurs, c’est le succès assuré.</p>
			</div>
		</article>
	</section>

</main><!-- #site-content -->
<?php
get_footer();
