<?php 

/* Template Name: Two Columns page*/

get_header(); ?>

<section class="twocolumn">
	<div class="container">
		<div class="row">

			<div id="primary" class="col-xs-12 col-sm-8 col-md-6">
					
					<?php if (have_posts()) {
						
						while(have_posts()) {
							the_post();
					?>

						<article class="title">
							<h2 class="aligncenter"><?php the_title()?></h2>
						</article>

						<article>
							<?php the_content();?>
						</article>

					<?php } }
					
						else {
							get_template_part( 'partials/content/content' , 'none' );
						}
					?>

				</div>
				<div class="col-xs-12 col-sm-4 col-md-6">
					<article>
						<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('full');
						} ?>
					</article>
				</div>
			
		</div>
	</div>
</section>

<?php get_footer(); ?>