<?php get_header(); ?>
<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <p class="navbar-text navbar-right">
      <a href="#" class="navbar-link"><i class="fa fa-youtube fa-2x"></i></a>
      <a href="#" class="navbar-link"><i class="fa fa-facebook fa-2x"></i></a>
      <a href="#" class="navbar-link"><i class="fa fa-soundcloud fa-2x"></i></a>
    </p>
  </div>
</nav>
<div id="home-slider" class="carousel slide" data-ride="carousel"> 
  <ol class="carousel-indicators">
    <li data-target="#home-slider" data-slide-to="0" class="active"></li>
    <li data-target="#home-slider" data-slide-to="1"></li>
    <li data-target="#home-slider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active"> <img src="http://lorempixel.com/1200/400/sports" style="width:100%" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Slide 1</h1>
          <p>Aenean a rutrum nulla. Vestibulum a arcu at nisi tristique pretium.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
        </div>
      </div>
    </div>
    <div class="item"> <img src="http://lorempixel.com/1200/400/people" style="width:100%" data-src="" alt="Second    slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Slide 2</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae egestas purus. </p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="item"> <img src="http://lorempixel.com/1200/400/abstract" style="width:100%" data-src="" alt="Third slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Slide 3</h1>
          <p>Donec sit amet mi imperdiet mauris viverra accumsan ut at libero.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#home-slider" data-slide="prev">
  	<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#home-slider" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a> 
</div>
<div class="container-fluid">
	<div class="row main-nav-container">
		<div class="col-lg-3">
      <div class="text-center">
        <span class="fa-stack fa-5x">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-child fa-stack-1x fa-inverse"></i>
        </span>
        <br/>
        <strong class="text-uppercase">i'm new</strong>
      </div>
		</div>
    <div class="col-lg-3"> 
      <div class="text-center">
        <span class="fa-stack fa-5x">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-home fa-stack-1x fa-inverse"></i>
        </span>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="text-center">
        <span class="fa-stack fa-5x">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-users fa-stack-1x fa-inverse"></i>
        </span>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="text-center">
        <span class="fa-stack fa-5x">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-cogs fa-stack-1x fa-inverse"></i>
        </span>
      </div>
    </div>
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
<?php get_footer(); ?>