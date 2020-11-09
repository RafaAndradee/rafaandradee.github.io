<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
<div class="bgHome">
	<header id="hero">

			<nav class="navbar navbar-expand-lg navbar-light container bg-faded">
				<a class="navbar-brand" href="#"><?php the_custom_logo() ?></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
				<?php
					wp_nav_menu(array(
						'theme_location' => 'header-menu', //primary menu
						'menu_class' => 'navbar-nav',  //The class name which contain the menu
					));
				?>

				</div>
			</nav>

			<div class="headlineHome container">
				<h3 class="">Designer pela UEPA com trajetória multidisciplinar intercalando de artes visuais a desenvolvimento para web. Aqui você encontrará alguns de meus trabalhos, bem como meu contato e currículo. Veja também meu perfil no GitHub.</h3>
				<a href="#grid" class="linkScroll"><img class="iconScroll" src="/wp-content/themes/cleanportf/assets/images/iconscroll.png" alt=""></a>
			</div>

 	</header>
</div>



</body>
</html>
