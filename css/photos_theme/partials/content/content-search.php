<article class="box">
	<div class="inner">
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
</article>

