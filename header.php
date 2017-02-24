<!DOCTYPE html>
<html>
<head><meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>
		<?php wp_title(); ?>
	</title>
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<div id="gallery-fade"></div>
	<div id="gallery-modal"><img /></div>

	<header id="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 col-sm-4 col-md-4">
					<div class="logo">

						<?php  
							$logo = get_field( 'logo' , 'options' );

							if ( $logo ) { ?>
								<a href="<?php bloginfo("url"); ?>" class="logo logo-img" id="scroll-logo">
									<img class="site-logo" src="<?php echo $logo ?>" alt="logo" />
								</a>
							<?php }
							else { ?>
								<a href="<?php bloginfo("url"); ?>" class="logo" id="scroll-logo">
									<?php bloginfo("site_name"); ?>
								</a>
							<?php }
						?>

					</div>
				</div>
				
				<div class="hidden-xs col-sm-6 col-md-6">
					<?php wp_nav_menu(); ?>
				</div>
				<div class="col-xs-2 col-sm-2 search-modal">
					<i class="fa fa-search" aria-hidden="true"></i>
				</div>
				
				<nav>
					<div class="col-xs-2 hidden-sm hidden-md hidden-lg menu-icon">
						<i class="fa fa-bars"></i>
					</div>
					<div class="responsive-menu">
						<?php wp_nav_menu(); ?>
					</div>
				</nav>
			</div>
		</div>
	</header>

	<main id="main">

		<div class="space"></div>

	<section class="bread">
		<div class="container-fluid">
			<div class="row">    <!-- Breadcrumbs -->
				<div class="col-xs-12">
					
					<?php breadcrumbs(); ?>
					
				</div>
			</div>
		</div>
	</section>

		<div >
			<button class="top-button">
				<a href="#scroll-logo"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
			</button>
		</div>



	<div id="fade"></div>

	<div id="search-fade"></div>

	<div id="modal">
		<?php get_search_form(); ?>
		<button>&nbsp;X&nbsp;</button>
	</div>
