<?php get_header('alt'); ?>

		<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post() ?>

					<?php if ( get_field( 'sections' ) ) : ?>

						<?php get_template_part( 'partials/flexible' ); ?>

					<?php else : ?>

						<?php get_template_part( 'partials/content/content' , 'front-page' ); ?>

					<?php endif; ?>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'partials/content/content' , 'none' ); ?>

		<?php endif; ?>
		
<?php get_footer('alt'); ?>