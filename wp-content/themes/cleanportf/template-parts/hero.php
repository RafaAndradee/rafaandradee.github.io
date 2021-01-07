<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>

<style>

</style>
<div class="bgHome">
	<header id="hero">

			<nav class="navbar navbar-expand-lg navbar-light container bg-faded py-3">
				<a class="navbar-b	rand" href="#"><?php the_custom_logo() ?></a>
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
<div class="wrapPresentationBox container">	
		<div class="presentationBox pb1">
				<p class="realize mt-5">Designer pela UEPA com trajetória multidisciplinar intercalando de artes visuais a desenvolvimento para web. Aqui você encontrará alguns de meus trabalhos, bem como meu contato e currículo. Veja também meu perfil no GitHub.</p>

				<a href="https://api.whatsapp.com/send?phone=5591984133729" class="phoneButton"  type="submit" target="_blank">Fale comigo <i class="fab fa-whatsapp" aria-hidden="true" style="
    color: #fff;
    font-size: 1em;
"></i></a>
				<div class="WrapIconPress">
					<a class="iconPres" target="_blank" href="https://www.behance.net/rafand"><i class="fab fa-behance-square"></i></a>
					<a class="iconPres text-center" target="_blank" href="https://www.linkedin.com/in/rafael-andrade-design/"><i class="fab fa-linkedin"></i></i></a>
					<a class="iconPres text-right" target="_blank" href="https://web.facebook.com/rafandradesign"><i class="fab fa-facebook-square"></i></a>
					<a href="#grid" class="linkScroll"><img class="iconScroll" src="/wp-content/themes/cleanportf/assets/images/iconscroll.png" alt=""></a>
				</div>
		</div>
		<div class="presentationBox pb2" style="z-index: 999;">
			<h1>Arte,<span> Design </span>& Código</h1>
		</div>
		<div class="presentationBox pb3">
			<div class="mySelfie">

				<img class="" src="wp-content\themes\cleanportf\assets\images\me.png" alt="">
				
			</div>


			<div class="presentationBoxBottom">
				<a href="https://api.whatsapp.com/send?phone=5591984133729" class="phoneButton"  type="submit" target="_blank">Fale comigo</a>
				<div class="WrapIconPress">
					<a class="iconPres" target="_blank" href="https://www.behance.net/rafand"><i class="fab fa-behance-square"></i></a>
					<a class="iconPres text-center" target="_blank" href="https://www.linkedin.com/in/rafael-andrade-design/"><i class="fab fa-linkedin"></i></i></a>
					<a class="iconPres text-right" target="_blank" href="https://web.facebook.com/rafandradesign"><i class="fab fa-facebook-square"></i></a>
					<!-- <a href="#grid" class="linkScroll"><img class="iconScroll" src="/wp-content/themes/cleanportf/assets/images/iconscroll.png" alt=""></a> -->
				</div>
			</div>
			
		</div>

			
</div>


 	</header>
</div>



</body>
</html>
