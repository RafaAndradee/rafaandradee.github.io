<?php get_header(); ?>


<div class="container">

	<div class="row">


		<div class="col-md-12">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

			<?php wp_custom_breadcrumbs(); ?>
			<div class="conteudo">
			<?php the_content(); ?>
			</div>
			

					

			<?php endwhile; endif; ?>
			</div>
		</div>

	</div>

</div>




<?php get_footer(); ?>