<section class="hero" style="background-image: url('<?php the_sub_field('image') ?>');
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
	height: 800px;">

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">			
				<h2 style="color:<?php the_sub_field('title_color');  ?>;"><?php the_sub_field( 'title' ); ?></h2>

				<h3>
					<a href="<?php the_sub_field( 'page_link' ); ?>">
						<p style="color:<?php the_sub_field('page_link_color') ?>;"><?php the_sub_field( 'page_link_text' ); ?></p>
					</a>
				</h3>
			</div>

			<div class="hero-text" style="color:<?php the_sub_field('text_color') ?>;">
				<p><?php the_sub_field('text'); ?></p>
			</div>
		</div>
	</div>
</section>