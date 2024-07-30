<?php
require_once($_SERVER["DOCUMENT_ROOT"] . '/foxlawtexas/includes/ini5.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Williamson County Divorce Lawyer | Map | Fox Law</title>
<link rel="stylesheet" type="text/css" href="<?=$root?>/css/superfish.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?=$root?>/css/superfish_small.css" media="screen">
<link href="<?=$root?>/css/foxlaw_style5.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?=$root?>/javascripts/hoverIntent.js"></script>
<script type="text/javascript" src="<?=$root?>/javascripts/superfish.js"></script>
<?php require_once('includes/slide_switcher.js.php'); ?>
<script>
jQuery(document).ready(function($) {
<?php require_once('includes/jquery_common.php'); ?>
	
});
</script>
</head>

<body>
<?php require_once('includes/header.php'); ?>
  
<div id="content_body"> 
<div id="container">
  
  <div id="mainContent" style="padding:10px 0;">
  
   <iframe width="800" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Fox+Law,+Round+Rock,+TX&amp;aq=&amp;sll=30.524191,-97.635155&amp;sspn=0.062993,0.132093&amp;ie=UTF8&amp;hq=Fox+Law,&amp;hnear=Round+Rock,+Williamson,+Texas&amp;t=m&amp;ll=30.574085,-97.628975&amp;spn=0.141884,0.219727&amp;z=12&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Fox+Law,+Round+Rock,+TX&amp;aq=&amp;sll=30.524191,-97.635155&amp;sspn=0.062993,0.132093&amp;ie=UTF8&amp;hq=Fox+Law,&amp;hnear=Round+Rock,+Williamson,+Texas&amp;t=m&amp;ll=30.574085,-97.628975&amp;spn=0.141884,0.219727&amp;z=12&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
  
	<!-- end #mainContent --></div>
  
	<!-- end #container --></div>
    <?php include_once('includes/legend_link.php'); ?>
<!-- end #content_body --></div>
<?php include_once('includes/footer.php'); ?>
</body>
</html>
