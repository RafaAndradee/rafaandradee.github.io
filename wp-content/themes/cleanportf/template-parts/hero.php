<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
<div class="bgHome">
	<header id="hero">


			<nav class="navbar navbar-collapse-md navbar-light bg-faded">
			  <div class="container">
			    <a class="navbar-brand" href="#"></a>
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


	<div class="logowrap">
	<?php the_custom_logo() ?>
	</div>


	<div class="headlineHome container">
		<h3 class="">Arte, Design gráfico e visualidade.</h3>
		<a href="#grid" class="linkScroll"><img class="iconScroll" src="/wp-content/themes/cleanportf/assets/images/iconscroll.png" alt=""></a>
	</div>
 	</header>
</div>



</body>
</html>
