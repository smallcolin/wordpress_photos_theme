<?php 

	$colour = get_sub_field( 'colour' );
	$title = get_sub_field( 'title' );
	$gallery = get_sub_field( 'gallery' );

?>

<section class="gallery <?=$colour?>">

	<div class="container">
		<?php if ( $title ) : ?>

				<div class="row aligncenter">	
					<div class="col-xs-12 col-sm-6 col-sm-offset-3"><article><h3><?=$title?></h3></article>	
					</div>
				</div>
			
		<?php endif; ?>

		<div clas="row aligncenter">
			
			<?php foreach ( $gallery as $img ) : ?>

				<?php 
					$thumb = $img['sizes']['thumbnail']; 
					$full = $img['url'];
					echo "<div class='col-xs-12 col-sm-3 aligncenter'><img src='$thumb' class='photo' data-url='$full' /></div>";
				?>

			<?php endforeach; ?>

		</div>
	</div>
	
</section>