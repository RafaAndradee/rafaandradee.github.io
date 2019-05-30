<?php get_header() ?>

<div class="container">
	<?php while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<div class="conteudo-post">
		<div id="metapost">
			<h4><?php the_author() ?></h4>
			<span><?php the_category(', ') ?></span>
			<span><?php the_time('l, F jS, Y') ?> </span>
		</div>

		<?php the_content() ?>
	</div>
	<?php endwhile; ?>	
</div>

<?php get_footer(); ?>