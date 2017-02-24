<?php get_header(); ?>

<section class="author">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<article class="aligncenter">
					<h2>Author: <?php echo get_the_author("display_name"); ?>

						<?php  

							$author_id = get_the_author_meta( 'ID' );
							$author_slug = 'user_' . $author_id;
							// the_field( 'facebook' , $author_slug );
							// the_field( 'twitter' , $author_slug );
							// the_field( 'instagram' , $author_slug );
						?>
						
						<ul class="author-details">
							<li>
								<a href="<?php the_field( 'facebook' , $author_slug ); ?>" target="_blank">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="<?php the_field( 'twitter' , $author_slug ); ?>" target="_blank">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="<?php the_field( 'instagram' , $author_slug ); ?>" target="_blank">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
						
					</h2>
				</article>


				<div class="row">
					<div class="col-xs-12 col-sm-9">

						<?php if ( have_posts() ) : ?>

						<?php $i = 0; while ( have_posts() ) : the_post(); $i++; ?>

								<?php get_template_part( 'partials/content/content' ); ?>

							<?php endwhile; ?>

								<?php navigation(); ?>

						<?php else : ?>

							<?php get_template_part( 'partials/content/content' , 'none' ); ?>

						<?php endif; ?>

					</div>

					<div class="col-xs-12 col-sm-3">
						<?php get_sidebar(); ?>
					</div>
				</div>
							
				<div class="row">
					<div class="col-xs-12 aligncenter">
						<?php if (get_field( 'button_link_inner' , 'options' )){ ?>
							<a class="btn btn-danger" href="<?php the_field( 'button_link_inner' , 'options' ); ?>">
								<?php the_field( 'button_text' , 'options'); ?>
							</a>
						<?php } ?> 
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>