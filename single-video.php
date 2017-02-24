<?php get_header(); ?>

	<section class="video">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2 aligncenter">

					<?php if ( have_posts() ) : ?>

						<?php while ( have_posts() ) : the_post() ?>

							<article class="video">
								
							<h2><?php the_title(); ?></h2>

								<?php video_service(); ?>
							
							</article>

						<?php endwhile; ?>

					<?php else : ?>

						<p>No results found!</p>

					<?php endif; ?>
					
					<div class="col-xs-12 aligncenter">
						<?php if (get_field( 'button_link_video' , 'options' )){ ?>
							<a class="btn btn-success" href="<?php the_field( 'button_link_video' , 'options' ); ?>">
								<?php the_field( 'button_text_video' , 'options'); ?>
							</a>
						<?php } ?> 
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>