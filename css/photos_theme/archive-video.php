<?php get_header(); ?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 ">
					<article class="title aligncenter">
						<h2>
							<?php post_type_archive_title(); ?>
							<i class="fa fa-video-camera" aria-hidden="true"></i>
						</h2>
					</article>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-9 aligncenter">

					<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'partials/content/content' , 'videos' ); ?>

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
		</div>
	</section>

<?php get_footer(); ?>
			