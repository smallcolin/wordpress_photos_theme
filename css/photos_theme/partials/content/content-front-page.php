<section class="frontpage" style="background-image: url('<?php the_sub_field('image') ?>');">

	<?php if ( have_rows( 'hero' ) ) : ?>

		<div class="row aligncenter">
				
			<?php while ( have_rows( 'hero' ) ) : the_row(); ?>

				<div class="col-xs-4">
				
					<a class="btn btn-danger" href="<?php the_sub_field( 'button_link' ); ?>">
						<?php the_sub_field( 'button_text' ); ?>
					</a>

				</div>

			<?php endwhile; ?>

		</div>

	<?php endif; ?>

</section>