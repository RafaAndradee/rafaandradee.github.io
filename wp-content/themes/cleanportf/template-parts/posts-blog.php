<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>posts-blog</title>
</head>
<body>
	<div class="container">
		<div class="blogWrap">
			<?php
			$new_query = new WP_Query( array(
		    'posts_per_page'=> 3,
		    'post_type'     => 'post',
		    'category_name' => 'blog',
		    //'order'			=> 'ASC',
		    //'orderby'       => 'post_date',
		    'paged'         => $paged
			) );

			$i = 1;

			while ( $new_query->have_posts() ) : $new_query->the_post(); ?>

			<div class="blogBox <?php if($i == 2) echo 'segundoPost animeLeft'?>">

						<div class="blogImg">
							
							<?php the_post_thumbnail('singleHome') ?>

			
						</div>
			

				<div class="blogTexto">
					
					<h1><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
					<p><?php the_excerpt() ?></p>
				</div>
					
			</div>
			<?php $i++; endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
</body>
</html>