<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php wp_title(''); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class();?>>
		<?php if (have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_footer(); ?>
	</body>
</html>