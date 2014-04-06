<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Bigfoot</title>
	</head>
	<body <?php body_class();?>>
		<?php if (have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</body>
</html>