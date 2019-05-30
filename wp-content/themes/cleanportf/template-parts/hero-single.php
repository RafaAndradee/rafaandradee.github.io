<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<header id="heroSingle">
					<nav class="navbar navbar-expand-md navbar-light bg-faded">
			  <div class="container">
			    <a class="navbar-brand" href="#"><?php the_custom_logo() ?></a>
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>

			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			                        <?php
			                        wp_nav_menu(array(
			                            'theme_location' => 'header-menu', //primary menu
			                            'menu_class' => 'navbar-nav mr-auto',  //The class name which contain the menu
			                        ));
			                    ?>
			      
			    </div>

			</nav>
		
		<div class="thumbSimgleWrap">
			<div class="thumbSingle">
			<?php         if( class_exists( 'kdMultipleFeaturedImages' ) ) {
	            kd_mfi_the_featured_image( 'featured-image-2', 'post' );
	        } ?>
			</div>
		</div>
  	</header>
</body>
</html>
