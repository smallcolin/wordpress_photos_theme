<section class="columns">
	<div class="container aligncenter">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-sm-offset-3">

				<?php 
					$title = get_sub_field( 'title' );
					$text = get_sub_field( 'text' ); 
				
				if( $title || $text ) { ?>
					<article>
						<h2><?php echo $title; ?></h2>
						<p><?php echo $text; ?></p>
					</article>
				<?php } ?>

			</div>
		</div>

		<div class="row">

			<?php 
				$width = get_sub_field( 'format' ); 

				if ( have_rows( 'columns' ) ) : 

					while ( have_rows( 'columns' ) ) : 

						the_row(); ?>

						<div class="col-sm-<?php echo $width; ?>">

							<h3><?php the_sub_field( 'title' ); ?></h3>

							<?php  
								$image = get_sub_field( 'image' );
								$thumb = $image['sizes']['medium'];
							?>

							<img class="img-zoom" src="<?php echo $thumb; ?>" />

							<p><?php the_sub_field( 'text' ); ?></p>

							<a class="btn btn-danger" href="<?php the_sub_field( 'button_link' ); ?>">
								<?php the_sub_field( 'button_text' ); ?>
							</a>

						</div>

					<?php endwhile; 

				endif; ?>	
		</div>
	</div>
</section>