<style type="text/css">
	.lightbox {
		display: none;
	}
</style>
<div class='content row'>
	<div class='column grid_12'>
		<h3>Videos and Short Films</h3>
		<p>
			<a class='video' href="http://www.youtube.com/embed/CB9kCWbhwsk">Students Rebuild VC Highlights - Spring 2011</a>
			<a class='video' href="http://www.youtube.com/embed/02dD_dyGz7U">Students Rebuild VC Highlights - Spring 2011</a>
			

			<div class='lightbox'></div>
		</p>
	</div>
</div>
<script type="text/javascript">
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
</script>