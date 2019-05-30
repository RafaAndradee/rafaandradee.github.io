<?php get_header(); ?>



				
<div class="container">
				<div class="posts">

				<?php $cont = 1; if(have_posts()) : while(have_posts()) : the_post(); ?>

				<?php if(( $cont % 2 ) == 0 ) echo ""; ?>

							<div class="col-md-3">
							<div class="thumb">
							<a href="<?php the_permalink(); ?>" class="thumbpost"><?php the_post_thumbnail(); ?></a>


							<a href="<?php the_permalink(); ?>" class="permalinkpost"><h2><?php the_title(); ?></h2></a>
							</div>
							</div>
								

								

				<?php $cont ++ ; endwhile; endif; ?>
				</div>

</div>


<?php get_footer(); ?>
