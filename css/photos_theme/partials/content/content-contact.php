<article class="title">
	<h2><?php the_title(); ?></h2>
</article>
	
	<?php 
		$db = array(
			'contact' => array(
				'title' => 'Contact',
				'content' => '',
				'show_form' => true
			)
		);

	?>

<article>

	<!-- <h4>Any Questions?</h4> -->

	<?php  
		if ( $db['contact']['show_form'] ) {
			//contact_form();
		}
	?>

	<?php echo the_content(); ?>

	<!-- <p class="required">* required</p> -->

</article>