<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 aligncenter">
			<article class="title">
				<h1>
					<?php single_post_title(); ?>
				</h1>
			</article>
		</div>
	</div>
</div>

<section class="blog">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-9">
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
	</div>
</section>

<?php get_footer(); ?>