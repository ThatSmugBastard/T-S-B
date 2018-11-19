<?php get_header(); ?>

<main role="main" aria-label="Content">
	<section>
		<h1><?php the_title(); ?></h1>
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_content(); ?>
					<?php edit_post_link(); ?>
				</article>
			<?php endwhile; ?>

		<?php else : ?>

			<article>
				<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			</article>

		<?php endif; ?>
	</section>
</main>

<?php get_footer(); ?>
