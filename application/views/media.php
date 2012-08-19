<style type="text/css">
	.lightbox {
		display: none;
	}
	.darfur_rising_lb {
		display: none;
	}
</style>
<div class='content row'>
	<div class='column grid_8'>
		<h3>Videos and Short Films</h3>
		<p>
			<ul>
				<li><a class='video' href="http://www.youtube.com/embed/CB9kCWbhwsk">Students Rebuild VC Highlights - Spring 2011</a></li>
				<li><a class='video' href="http://www.youtube.com/embed/02dD_dyGz7U">The ETN Youth Center - Goma, DRC</a></li>
				<li><a class='video' href="http://www.youtube.com/embed/iQZgPduPS0k">One Million Bones - Students Making Bones</a></li>
				<li><a class='video' href="http://www.youtube.com/embed/uGUlB81MKOI">One Million Bones - Albuquerque Event</a></li>
			</ul>
			<h3>This video is not reccomended for ages 14 and under</h3>
			<ul>
				<li><a class='darfur_rising' href="">Darfur Rising</a></li>
			</ul>

			<div class='lightbox'>
				<div class='darfur_rising_lb'>
					<object id="ce_76350542" width="640" height="480"><param name="movie" value="http://current.com/e/76350542/en_US"></param><param name="wmode" value="transparent"></param><param name="allowfullscreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed type="application/x-shockwave-flash" src="http://current.com/e/76350542/en_US" width="640" height="480" wmode="transparent" allowfullscreen="true" allowscriptaccess="always"></embed></object>
				</div>
			</div>
		</p>
	</div>
	<div class='content row'>
		<div class='column grid_2'>
			<img src="img/omb_no_5k.jpeg">
		</div>
		<div class='column grid_2'>
			<img src="img/omb_no_5k_01.png">
		</div>
	</div>
	<div class='content row'>
		<div class='column grid_2'>
			<img src="img/omb_no_5k_02.jpeg">
		</div>
		<div class='column grid_2'>
			<img src="img/omb_no_5k_03.jpeg">
		</div>
	</div>
</div>
<script type="text/javascript">
	//youtube video handler
	$('.video').click(function(e) {
		e.preventDefault();
		var $url = this;
		$('.lightbox').append('<iframe class="box" width="640" height="480" src="'+$url+'" frameborder="0" allowfullscreen></iframe>')
		$('.lightbox').lightbox_me({
			centered: true,
			onClose: function(){
				$('.box').remove();
			}
		});
	});

	//darfur rising handler
	$('.darfur_rising').click(function(e){
		e.preventDefault();
		$('.darfur_rising_lb').show();
		$('.lightbox').lightbox_me();
	});
</script>