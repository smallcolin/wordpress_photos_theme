<?php 

/* Template Name: Contact page */

get_header(); ?>

	<div class="container-fluid no-padding">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2 aligncenter">

				<?php if ( have_posts() ) : ?>
					
					<?php while ( have_posts() ) : the_post() ?>

						<?php get_template_part( 'partials/content/content' , 'contact' ); ?>

					<?php endwhile; ?>

				
					<?php else : ?>

						<?php get_template_part( 'partials/content/content' , 'none' ); ?>

				<?php endif; ?>
			</div>	
		</div>
	</div>

<?php get_footer(); ?>