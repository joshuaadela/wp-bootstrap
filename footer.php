	<script>
		CountDownTimer('09/13/2015 1:0 PM', 'anniversary');

		function CountDownTimer(dt, id)
		{
			var end = new Date(dt);

			var _second = 1000;
			var _minute = _second * 60;
			var _hour = _minute * 60;
			var _day = _hour * 24;
			var timer;

			function showRemaining() {
				var now = new Date();
				var distance = end - now;
				if (distance < 0) {

 					clearInterval(timer);
					document.getElementById("anniversary-div").style.display = "none";

					return;
				}
				var days = Math.floor(distance / _day);
				var hours = Math.floor((distance % _day) / _hour);
				var minutes = Math.floor((distance % _hour) / _minute);
				var seconds = Math.floor((distance % _minute) / _second);

				document.getElementById(id).innerHTML = days + ':' + hours + ':' + minutes + ':' + seconds;
				document.getElementById("days").innerHTML = days;
				document.getElementById("hours").innerHTML = hours;
				document.getElementById("minutes").innerHTML = minutes;
				document.getElementById("seconds").innerHTML = seconds;
			}

			timer = setInterval(showRemaining, 1000);
		}

	</script>
	<div class="container-fluid">
		<div id= "anniversary-div" class="row container-dark text-center">
			<div class="col-lg-12 text-center">
				<h1 class="text-uppercase" ><strong><span style="letter-spacing: 12px" id="anniversary"></span></strong></h1>
				<p>
					<span id="days">0</span> days, <span id="hours">0</span> hours, <span id="minutes">0</span> minutes, and <span id="seconds">0</span> seconds<br/>
					left until the Anniversary.
				</p>
			</div>
		</div>
		<div class="row container-mid">
			<div class="col-lg-12 text-center">
				<h1 class="text-uppercase"><strong>SERVICE SCHEDULES</strong></h1>
			</div>
		</div>
		<div class="row container-light">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
				<h2 class="text-uppercase"><strong>WEST</strong></h2>
				<p>
					50 Bukit Batok St 23, 659578<br/>
					Midview Building<br/>
					Sundays 9:30 AM, #03-14
				</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
				<h2 class="text-uppercase"><strong>MAIN</strong></h2>
				<p>
					30 Orange Grove Road, 258352<br/>
					RELC International Hotel <br/>
					Sandays 9:30 AM, Room 502 <br/>
					Sundays 2:30 PM, Auditorium Level 1<br/>
					Wednesdays 8:00 PM, Room 502
				</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
				<h2 class="text-uppercase"><strong>EAST</strong></h2>
				<p>
					18 Jalan Masjid, 418944<br/>
					Kembangan Plaza<br/>
					Saturdays 7:00 PM, Basement 1<br/>
					Sundays 10:00 AM, Basement 1<br/>
				</p>
			</div>
		</div>
	</div>
	<div class="hidden-xs" id="map-canvas"></div>
	<div class="container-fluid">
		<div class="row container-dark text-center text-dark">
			<span>All rights reserved to Jesus Is Lord Church Singapore</span>
		</div>
	</div>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/fontawesome-markers.min.js"></script>
	
	</body>
	<?php wp_footer(); ?>
</html>