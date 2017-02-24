<?php  
		$title = get_sub_field('title');
		$color = get_sub_field('title_color');
		$page_link = get_sub_field('page_link');
		$page_color = get_sub_field('page_link_color');
		$page_text = get_sub_field('page_link_text');

		if ( $title || $color ) {
			echo '<h2 style="color:';
			echo $color; 
			echo ';"><strong>';
			echo $title;
			echo '</strong></h2>';
		}
	?>

	<?php  
		if ( $page_color ) {
			echo '<h3>';
			echo '<a href="';
			echo $page_link;
			echo '" style="color: ';
			echo $page_color;
			echo ';">';
			echo $page_text;
			echo '</a>';
			echo '</h3>';
		}
		else { ?>
			<h3>
				<a href="<?php echo $page_link; ?>">
					<?php echo $page_text; ?>
				</a>
			</h3>
		<?php }
	?>
