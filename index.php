<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-xs-12">

				<article>
					<?php if ( have_posts() ) : ?>

						<?php while ( have_posts() ) : the_post() ?>

							<p>This site is being updated!</p>

							<?php the_content(); ?>

						<?php endwhile; ?>

					<?php endif; ?>

				</article>	
			</div>
		</div>
	</div>

<?php get_footer(); ?>