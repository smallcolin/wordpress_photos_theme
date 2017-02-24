<?php 

if ( have_rows( 'sections' ) ) :

	while ( have_rows( 'sections' ) ) :

		the_row();

		if ( get_row_layout() == 'hero' ) :

			get_template_part( 'partials/section/section' , 'hero' );

		elseif ( get_row_layout() == 'splash' ) :

			get_template_part( 'partials/section/section' , 'splash' );

		elseif ( get_row_layout() == 'testimonial' ) :

			get_template_part( 'partials/section/section' , 'testimonial' );

		elseif ( get_row_layout() == 'columns' ) :

			get_template_part( 'partials/section/section' , 'columns' );

		elseif ( get_row_layout() == 'slideshow' ) :

			get_template_part( 'partials/section/section' , 'slideshow' );

		elseif ( get_row_layout() == 'break' ) :

			get_template_part( 'partials/section/section' , 'break' );

		elseif ( get_row_layout() == 'gallery' ) :

			get_template_part( 'partials/section/section' , 'gallery' );

		endif;

	endwhile;

endif;