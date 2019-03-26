<?php get_header(); ?>


	<div id="grid">

		<div id="lineFooter">
			<div class="container">
				<p>Designer pela UEPA com trajetória multidisciplinar intercalando de artes visuais a webdesign. Aqui você encontrará alguns de meus trabalhos, bem como meu <a href="http://rafandrade.com.br/contato/">contato</a> e <a href="http://rafandrade.com.br/wp-content/uploads/2017/05/Curriculo_Rafael_Andrade.pdf">currículo</a>.</p>
			</div>
		</div>
		<div class="anime">
			<?php get_template_part( 'template-parts/grid' ); ?>
		</div>	
	</div>

	<div id="blog">
		<?php get_template_part( 'template-parts/grid-blog' ); ?>
	</div>

	<div id="posts-blog">		
		<?php get_template_part( 'template-parts/posts-blog' ); ?>
	</div>


<?php get_footer(); ?>


