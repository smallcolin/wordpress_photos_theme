<?php global $i; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-feed'); ?>>
	
	<?php
		if ( $i == 1 ) {

			$image = get_field('image');

			if ( $image ) {
				echo '<img src="';
				echo $image;
				echo '" />';
			}
		}
	?>

	<div class="inner <?php echo ( $i == 1 ? "first" : "last" ); ?> aligncenter">
		<h2 class="aligncenter">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>

		<?php the_excerpt(); ?>

		<ul class="post-details">
			<li>
				<i class="fa fa-pencil" aria-hidden="true"></i>Written by: 
				<?php the_author_posts_link(); ?>
			</li>
			<li>
				<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
				<?php the_time(get_option("date_format") ); ?>
			</li>
			<li>
				<i class="fa fa-tag" aria-hidden="true"></i>
				<?php the_category(", "); ?>
			</li>
		</ul>
	</div>

	<?php
		if ( $i == 2 ) {

			$image = get_field('image');

			if ( $image ) {
				echo '<img src="';
				echo $image;
				echo '" />';
			}
			$i = 0;
		}
	?>

</article>

