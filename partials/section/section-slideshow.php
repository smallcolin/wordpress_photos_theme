<section class="slideshow"
	data-autoplay="<?php the_sub_field( 'autoplay' ); ?>" 
	data-interval="<?php the_sub_field( 'interval' ); ?>"
>

	<?php if ( have_rows( 'slides' ) ) : ?>

		<?php while ( have_rows( 'slides' ) ) : ?>

			<?php the_row(); ?>

				<?php  $image = get_sub_field("image");
				$image = $image['sizes']['large'];?>

				<!-- <div class="slide" style="background-image: url('<?php //the_sub_field('image'); ?>')"> -->
				<div class="slide">

					<img src="<?=$image?>" />

					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h4><?php the_sub_field( 'title' ); ?></h4>
							</div>
						</div>
					</div>
				</div>

		<?php endwhile; ?>

	<?php endif; ?>
	
</section>