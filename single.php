<div class="container-fluid">
  <div class="row">
  </div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="row">
			<div class="col-lg-8">
				<h1><?php the_title(); ?></h1>
				<h4>Posted on <?php the_time('F jS, Y') ?></h4>
				<p><?php the_content(__('(more...)')); ?></p>
			</div>
			<div class="col-lg-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	<?php endwhile; else: ?>
		<div class="row">
			<div class="col-lg-8">
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			</div>
			<div class="col-lg-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	<?php endif; ?>
</div>