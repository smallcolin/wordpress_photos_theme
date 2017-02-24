<article>

	<a href="<?php the_permalink(); ?>">
		<h3><?php the_title(); ?></h3>
	</a>

	<?php if ( get_field('excerpt') )  { ?>
		<p><?php the_field('excerpt') ?></p>
	<?php } ?>

	<a href="<?php the_permalink(); ?>">
		<p>Watch 
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>
		</p>
	</a>

</article>