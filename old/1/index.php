<?php get_header(); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h1><?php the_title(); ?></h1>
				<div class="entry">
					<?php the_content(__('Read the rest of this entry &raquo;')); ?>
				</div>
			</div>
		<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>

<?php get_footer(); ?>
