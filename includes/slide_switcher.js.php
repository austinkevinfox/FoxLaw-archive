<script type="text/javascript">
function slideSwitch() {
	var $active = $('#slideshow IMG.active');
	if ( $active.length == 0 ) $active = $('#slideshow IMG:last');
	var $next =  $active.next().length ? $active.next()	: $('#slideshow IMG:first');
	if ($next.hasClass('borrowed'))
		$next =  $next.next().length ? $next.next()	: $('#slideshow IMG:first');
	var nextId = $next.attr('id');
	$active.addClass('last-active');
	$.ajax({
	  type: 	'POST',
	  url: 		'http://foxlawtexas.com<?=$root?>/includes/active_slide_controller.php',
	  data: 	{nextSlideId: $next.attr('id')},
	  dataType: "json"
	  //,
	  //success: 	function(data, textStatus, jqXHR) { alert(data.global_slide_id); },
	  //error:	function() { alert('Error'); }
	});
	$next.css({opacity: 0.0})
		.addClass('active')
		.animate({opacity: 1.0}, 1000, function() {
			$active.removeClass('active last-active');
		});
	
}
setInterval( slideSwitch, 10000 );
</script>