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
			  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php
				// TO SHOW THE PAGE CONTENTS
				while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
				<?php the_content(); ?> <!-- Page Content -->
				<?php
				endwhile; //resetting the page loop
				wp_reset_query(); //resetting the page query
				?>
				<?php
				$my_query = new WP_Query( 'cat=1' ); // I used a category id 1 as an example
				?>
				<?php if ( $my_query->have_posts() ) : ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

					<h1 class="entry-title"><?php the_title(); ?></h1> <!-- Queried Post Title -->
					<div class="entry-content">
						<?php the_excerpt(); ?> <!-- Queried Post Excerpts -->
					</div><!-- .entry-content -->

				<?php endwhile; //resetting the post loop ?>

				</div><!-- #post-<?php the_ID(); ?> -->

				<?php
				wp_reset_postdata(); //resetting the post query
				endif;
				?>
			</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
