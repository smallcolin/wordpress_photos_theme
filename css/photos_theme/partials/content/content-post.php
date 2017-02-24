<article id="post-<?php the_ID(); ?>" 
	<?php post_class(); ?>>

	<div class="single-post-img">
		<?php
			$image = get_field('image');

			if ( $image ) { ?>
				<img src="<?php echo $image ?>" />
			<?php }
		?>
	</div>

	<h1><?php the_title(); ?></h1>

	<ul class="post-details">
		<li>
			<i class="fa fa-pencil" aria-hidden="true"></i>
			Written by: <?php the_author_posts_link(); ?>
		</li>
		<li>
			<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
			<?php the_time(get_option("date_format") ); ?>
		</li>
	</ul>
	
	<?php the_content(); ?>	
		
	<ul class="single-post-details">
		<li>
			<i class="fa fa-tag" aria-hidden="true"></i><?php the_category(", "); ?>
		</li>
		<li>
			<?php if ( get_field('link') ) { ?>
				<i class="fa fa-book" aria-hidden="true"><a href="<?php the_field('link'); ?>" target="_blank"></i>Review</a>
			<?php }
			else {
				echo '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>' , 'No review found for this item!';
			} ?>
		</li>
	</ul>
</article>