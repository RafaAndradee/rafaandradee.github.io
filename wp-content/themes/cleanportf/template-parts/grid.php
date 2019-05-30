<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>

	<ul class="jobsgrid">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<li class="jobSquare">
			<a href="<?php the_permalink() ?>">
				<h3 class="titleJob"><?php the_title(); ?></h3>
				<?php the_post_thumbnail('gridhome'); ?>
			</a>
			</li>
			
			<?php endwhile ?>

		<?php endif; ?>
	</ul>

</body>
</html>

