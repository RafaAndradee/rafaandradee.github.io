<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>grid-blog</title>
</head>
<body>
		<ul class="bloggrid">
		<?php
			$new_query = new WP_Query( array(
		    'posts_per_page' => 6,
		    'post_type'      => 'post',
		    'category_name' => 'blog',
		  
			) );


		while ( $new_query->have_posts() ) : $new_query->the_post(); ?>

			<li class="boxBlog">
					
					<a href="<?php the_permalink(); ?>"><h3 class="titleJob"><?php the_title(); ?></h3>
					<?php the_post_thumbnail('gridhome'); ?>
					</a>
			</li>

		<?php endwhile; wp_reset_postdata(); ?>
	</ul>
</body>
</html>

