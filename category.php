<?php get_header(); ?>

	<section class="archives">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<article class="aligncenter">
						<h2>Category: <?php single_cat_title(); ?></h2>
					</article>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-9 aligncenter">

					<?php if ( have_posts() ) : ?>

					<?php $i = 0; while ( have_posts() ) : the_post(); $i++; ?>

							<?php get_template_part( 'partials/content/content' ); ?>

						<?php endwhile; ?>

							<?php navigation(); ?>

					<?php else : ?>

						<?php get_template_part( 'partials/content/content' , 'none' ); ?>

					<?php endif; ?>

				</div>
				<div class="col-xs-12 col-sm-3">
					<?php get_sidebar(); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 aligncenter">

					<?php if (get_field( 'button_link_inner' , 'options' )){ ?>
						<a class="btn btn-danger" href="<?php the_field( 'button_link_inner' , 'options' ); ?>">
							<?php the_field( 'button_text' , 'options'); ?>
						</a>
					<?php } ?> 
					
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
