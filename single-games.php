<?php get_header() ?>
<?php get_template_part('templates/top-navigation'); ?>
<?php if (have_posts()): ?>
	<?php while (have_posts()): the_post(); ?>
		<div class="post-preview">
				<h2 class="post-title">
					<?php the_title(); ?>
				</h2>
				<p><?php the_content(); ?></p>
		</div>
		<hr>
	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>