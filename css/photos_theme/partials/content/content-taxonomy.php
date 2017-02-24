<?php global $i; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-feed'); ?>>
	<div>
		<h2 class="aligncenter">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); //echo $i ?>
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
			<li class="cpt-taxonomy aligncenter">
				<i class="fa fa-tag" aria-hidden="true"></i>
				<?php 
					$taxonomy = 'video_category';
					$videos = get_the_terms( get_the_ID() , $taxonomy);
					$count = count($videos);
					$i = 1;

					if ( $videos ) { 
					    
					foreach ( $videos as $video ) { 
					 	echo '<a href="';
					 	echo get_term_link($video->slug, $taxonomy);
					 	echo '">';
					 	echo $video->name;
					 	if ($i < $count) {
					 		echo ', ';
					 	}
					 	$i++;
					 	echo '</a>';
						}  
					}	
				?>
			</li>			
		</ul>
	</div>
</article>

