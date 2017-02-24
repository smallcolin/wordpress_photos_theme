</main>

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<h4><?php the_field( 'about_title' , 'options' ); ?></h4>
				<p><?php the_field( 'about' , 'options' ); ?></p>
			</div>

			<div class="col-xs-12 col-sm-4">
				<h4><?php the_field( 'contact_title' , 'options' ); ?></h4>
				<p><?php the_field( 'contact' , 'options' ); ?></p>
				<a href="mailto:<?php the_field( 'contact_email' , 'options' ); ?>" class="email">
					<?php the_field( 'contact_email' , 'options' ); ?>
				</a>
			</div>
			
			<div class="col-xs-12 col-sm-4">
				<h4><?php the_field( 'social_media_title' , 'options' ); ?></h4>
				<?php 
					$social = get_field( 'social_media' , 'options' );
					if ( $social ) :
				?>
					<ul class="social-media aligncenter">
						<?php foreach ( $social as $item ) : ?>
							<li>
								<a href="<?php echo $item['link'] ?>">
									<i class="fa fa-<?php echo $item['service'] ?>">
									</i>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 copyright">
				<p>&copy <?php year(); ?></p>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>