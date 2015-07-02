<?php
/*
Template Name: Podcast Page
*/
?>
<?php get_header(); ?>
	<div class="container container-white">
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
						<?php
						$temp = $wp_query;
						$wp_query = NULL;
						$wp_query = new WP_Query();
						$wp_query->query('cat=9&paged='.$paged);
						$tb_counter = 1;
						?>
						<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
							<div class="row">
								<a href="<?php the_permalink(); ?>">
									<?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail('full', array( 'class' => 'img-responsive col-xs-12 col-sm-12 col-md-12 col-lg-12' ));
									}
									?>
								</a>
							</div>
							<br/>
						<?php $tb_counter++; endwhile; ?>
						<?php $wp_query = NULL; $wp_query = $temp;?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>