<?php get_header(); ?>

	<section class="single">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-9 aligncenter">

					<?php if ( have_posts() ) : ?>

						<?php while ( have_posts() ) : the_post() ?>

							<?php get_template_part( 'partials/content/content' , 'post' ); ?>

						<?php endwhile; ?>

					<?php else : ?>
						
							<p>No results found</p>

					<?php endif; ?>
					
					<div class="col-xs-12 aligncenter">
						<?php if (get_field( 'button_link_inner' , 'options' )){ ?>
							<a class="btn btn-danger" href="<?php the_field( 'button_link_inner' , 'options' ); ?>">
								<?php the_field( 'button_text' , 'options'); ?>
							</a>
						<?php } ?> 
					</div>
				</div>

				<div class="col-xs-12 col-sm-3">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>