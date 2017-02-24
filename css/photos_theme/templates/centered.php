<?php 

/* Template Name: Centered page*/

get_header(); ?>

	<div class="container aligncenter">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post() ?>

						<article class="title">
							<h2><?php the_title(); ?></h2>
						</article>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 aligncenter">
				
				<?php if ( get_field( 'sections' ) ) : ?>

					<?php get_template_part( 'partials/flexible' ); ?>

				<?php else : ?>

					<?php get_template_part( 'partials/content/content' , 'page' ); ?>
					
					<?php the_field('gallery_I'); ?>
	
				<?php endif; ?>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'partials/content/content' , 'none' ); ?>

			<?php endif; ?>

			</div>
		</div>
	</div>
	
<?php get_footer(); ?>