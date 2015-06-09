<script>
$(document).ready(function() {
   $("#home-slider").swiperight(function() {
      $(this).carousel('prev');
    });
   $("#home-slider").swipeleft(function() {
      $(this).carousel('next');
   });
});
</script>
<div id="home-slider" class="carousel slide" data-ride="carousel" > 
  <!-- 
  <ol class="carousel-indicators">
    <li data-target="#home-slider" data-slide-to="0" class="active"></li>
    <li data-target="#home-slider" data-slide-to="1"></li>
    <li data-target="#home-slider" data-slide-to="2"></li>
  </ol> 
  -->
  <div class="carousel-inner">
    <div class="item active"> 
      <a href="/the-lord-our-banner"><img class="hidden-xs" src="<?php bloginfo('template_url'); ?>/img/slides/desk/the-lord-our-banner.jpg" style="width:100%;" alt="Nissi: The Lord Our Banner"></a>
      <a href="/the-lord-our-banner"><img class="hidden-lg hidden-md hidden-sm" src="<?php bloginfo('template_url'); ?>/img/slides/mob/the-lord-our-banner.jpg" style="width:100%;" alt="Nissi: The Lord Our Banner"></a>
      <!--
      <div class="container">
        <div class="carousel-caption">
          <h1>Slide 1</h1>
          <p>Aenean a rutrum nulla. Vestibulum a arcu at nisi tristique pretium.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
        </div>
      </div>
      -->
    </div>
  </div>

  <a class="left carousel-control hidden-xs hidden-md hidden-sm" href="#home-slider" data-slide="prev">
  	<i class="fa fa-chevron-circle-left fa-5x"></i>
	</a>
	<a class="right carousel-control hidden-xs hidden-md hidden-sm" href="#home-slider" data-slide="next">
		<i class="fa fa-chevron-circle-right fa-5x"></i>
	</a> 
  <a class="left carousel-control hidden-xs hidden-lg hidden-sm" href="#home-slider" data-slide="prev">
    <i class="fa fa-chevron-circle-left fa-4x"></i>
  </a>
  <a class="right carousel-control hidden-xs hidden-lg hidden-sm" href="#home-slider" data-slide="next">
    <i class="fa fa-chevron-circle-right fa-4x"></i>
  </a> 
  <a class="left carousel-control hidden-xs hidden-md hidden-lg" href="#home-slider" data-slide="prev">
    <i class="fa fa-chevron-circle-left fa-3x"></i>
  </a>
  <a class="right carousel-control hidden-xs hidden-md hidden-lg" href="#home-slider" data-slide="next">
    <i class="fa fa-chevron-circle-right fa-3x"></i>
  </a> 
</div>