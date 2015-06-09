<?php
/**
 * List View Content Template
 * The content template for the list view. This template is also used for
 * the response that is returned on list view ajax requests.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/content.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<!-- List Title -->
<div class="row text-center">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h1 class="text-uppercase">
			<strong>Calendar</strong>
		</h1>
	</div>
</div>
<hr/>
<div class="row">
	<div class="col-lg-12">
		<?php if ( have_posts() ) : ?>
			<?php tribe_get_template_part( 'list/loop' ) ?>
		<?php endif; ?>

	</div>
</div>
