<section class="testimonial">
	<div class="container">		
		<div class="row">			
			<div class="col-xs-12 col-sm-6 col-sm-offset-2">

				<h3><?php the_sub_field( 'text' ); ?></h3>

			</div>

			<div class="col-xs-12 col-sm-2">
			
				<?php $icon = get_sub_field( 'button_icon' ); ?>

				<a href="<?php the_sub_field( 'button_link' ); ?>" class="btn btn-success" target="_blank">

					<?php the_sub_field( 'button_text' ) ?>
					<i class="fa fa-<?php echo $icon ?> fa-2x"></i>

					
				</a>
			</div>
		</div>
	</div>
	
</section>


