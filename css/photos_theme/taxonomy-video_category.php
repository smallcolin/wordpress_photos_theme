<?php get_header(); ?>

	<section class="archives">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<article class="aligncenter">
						<h2>Video Category: <?php single_term_title(); ?></h2>
					</article>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-9 aligncenter">

					<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'partials/content/content' , 'taxonomy' ); ?>

					<?php endwhile; ?>

							<?php navigation(); ?>

					<?php else : ?>

						<?php get_template_part( 'partials/content/content' , 'none' ); ?>

					<?php endif; ?>

				</div>
				<div class="col-xs-12 col-sm-3">
					<?php get_sidebar('video'); ?>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 aligncenter">

					<?php if (get_field( 'button_link_video' , 'options' )){ ?>
						<a class="btn btn-danger" href="<?php the_field( 'button_link_video' , 'options' ); ?>">
							<?php the_field( 'button_text_video' , 'options'); ?>
						</a>
					<?php } ?> 
					
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
