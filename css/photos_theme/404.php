<?php get_header(alt); ?>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 aligncenter">
				<article style="margin-top:30px;">
					<h2>Stop!!!</h2>
					<p>This page does not exist!</p>
				</article>
				<article>

					<?php  
						$image = get_field( '404_image' , 'options' );

						if ( $image ) {
							echo '<img class="img-zoom" src="';
							echo $image;
							echo '" style="width:250px;height:320px;" alt="" />';
							echo '<img class="img-zoom" src="';
							echo $image;
							echo '" style="width:250px;height:320px;" alt="" />';
							echo '<img class="img-zoom" src="';
							echo $image;
							echo '" style="width:250px;height:320px;" alt="" />';
							echo '<img class="img-zoom" src="';
							echo $image;
							echo '" style="width:250px;height:320px;" alt="" />';
						}
						else {
							echo '<img class="img-zoom" src="';
							echo get_theme_file_uri( 'img/drunk.jpg' );
							echo '" style="width:250px;height:320px;" alt="drunk" />';
							echo '<img class="img-zoom" src="';
							echo get_theme_file_uri( 'img/drunk.jpg' );
							echo '" style="width:250px;height:320px;" alt="drunk" />';
							echo '<img class="img-zoom" src="';
							echo get_theme_file_uri( 'img/drunk.jpg' );
							echo '" style="width:250px;height:320px;" alt="drunk" />';
							echo '<img class="img-zoom" src="';
							echo get_theme_file_uri( 'img/drunk.jpg' );
							echo '" style="width:250px;height:320px;" alt="drunk" />';
						}

					?>

					<!-- <img class="img-zoom" src="<?php// echo get_theme_file_uri( 'img/drunk.jpg' ); ?>" style="width:250px;height:320px;" alt="drunk" />
					<img class="img-zoom" src="<?php // echo get_theme_file_uri( 'img/drunk.jpg' ); ?>" style="width:250px;height:320px;" alt="drunk" />
					<img class="img-zoom" src="<?php//  echo get_theme_file_uri( 'img/drunk.jpg' ); ?>" style="width:250px;height:320px;" alt="drunk" />
					<img class="img-zoom" src="<?php // echo get_theme_file_uri( 'img/drunk.jpg' ); ?>" style="width:250px;height:320px;" alt="drunk" /> -->
				</article>
				
				<?php if (get_field( 'button_link_inner' , 'options' )){ ?>
					<a class="btn btn-danger" href="<?php the_field( 'button_link_inner' , 'options' ); ?>">
						<?php the_field( 'button_text' , 'options'); ?>
					</a>
				<?php } ?> 

			</div>
		</div>
	</div>

<?php get_footer(alt); ?>