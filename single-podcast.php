<?php get_header(); ?>
	<div class="container container-white">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 ">
					<div class="row text-center">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h1 class="text-uppercase"><strong><?php the_title(); ?></strong></h1>
						</div>
					</div>
					<hr/>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<p><?php the_content(__('(more...)')); ?></p>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; else: ?>

		<?php endif; ?>
	</div>
<?php get_footer(); ?>