	function preload(arrayOfImages) {
		$(arrayOfImages).each(function(){
			$('<img/>')[0].src = this;
		});
	}

	var slideImages = new Array();
	<?php foreach ($slideImages as $index=>$image) { ?>
		slideImages[<?=$index?>] = "<?=$image->getSrc()?>";
	<?php } ?>
	
	preload(slideImages);
	
	$('ul.sf-menu, ul.sf-menu-small').superfish({
  		animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation 
        speed:       'normal'
    });
	
	$('ul.sf-menu > li > ul > li').hover(
		function() {
			$(this).parent().prev().addClass('activeHorizontalNav');
		},
		function() {
			$(this).parent().prev().removeClass('activeHorizontalNav');
		}
	);
    
    $('.horizontalNav').click(function() {
    	var id = $(this).attr('id');
        if (id == 'testimonials')
        	window.location = '<?=$root?>/testimonials.php';
        else if (id == 'resources')
        	window.location = '<?=$root?>/resources.php';
        else if (id == 'mediation')
        	window.location = '<?=$root?>/mediation.php';
        else if (id == 'collaborative_law')
        	window.location = '<?=$root?>/collaborative_law.php';
    });