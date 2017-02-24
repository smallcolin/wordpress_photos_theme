<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 aligncenter">
				<article>
					<h2>Search Results for: <?php the_search_query(); ?></h2>
				</article>
				
				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post() ?>

						<?php get_template_part( 'partials/content/content' , 'search' ); ?>

					<?php endwhile; ?>

						<div class="row">
							<div class="col-xs-12">
								<?php navigation(); ?>
							</div>
						</div>
							
				<?php else : ?>

					<?php get_template_part( 'partials/content/content' , 'none' ); ?>

				<?php endif; ?>
			</div>

			<div class="box2 aligncenter">
				<?php if (get_field( 'button_link_inner' , 'options' )){ ?>
					<a class="btn btn-danger" href="<?php the_field( 'button_link_inner' , 'options' ); ?>">
						<?php the_field( 'button_text' , 'options'); ?>
					</a>
				<?php } ?> 
			</div>
		</div>
	</div>

<?php get_footer(); ?>