<?php 

/* Template Name: Response page */

get_header(); ?>

<?php 

	$db = array(
		'response' => array(
			'title' => 'Thanks!',
			'content' => '<p>Your message has been sent.</p>'
		)
	);

?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2 aligncenter">

			<article>
				<h2><?php echo $db['response']['title']; ?></h2>

				<p><?php echo $db['response']['content']; ?></p>
			</article>

				<?php if (get_field( 'button_link_inner' , 'options' )){ ?>
					<a class="btn btn-danger" href="<?php the_field( 'button_link_inner' , 'options' ); ?>">
						<?php the_field( 'button_text' , 'options'); ?>
					</a>
				<?php } ?>

			</div>
		</div>
	</div>	

<?php get_footer(); ?>