<article>

	<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail("full"); 
		}
	?>

	<?php the_content(); ?>	

</article>