<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<h1 class="page-title"><?php printf( __( 'Résultats de la recherche pour: %s', 'rapid' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			
		<?php endwhile; ?>
	<?php else : ?>
		<p><?php _e( 'Désolé, rien ne correspond à vos critères de recherche. Essayez de nouveau avec des mots clés différents.', 'rapid' ); ?></p>
	<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>