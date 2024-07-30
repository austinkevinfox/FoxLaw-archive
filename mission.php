<?php
require_once($_SERVER["DOCUMENT_ROOT"] . '/foxlawtexas/includes/ini5.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mission | Fox Law</title>
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
  
  <div id="mainContent">
    <h2>Our Mission</h2>
    <p>Our mission is to provide our clients with education, resources, hope for healing in difficult times, and the strength to keep focused on their needs and goals. 
       We are committed to providing quality legal representation while acting with integrity, compassion, respect, and honesty and while considering fresh alternative resolutions to conflict. 
       We build strong relationships with our clients and the community to create a legacy of excellence.
    </p>
  
	<!-- end #mainContent --></div>
  
	<!-- end #container --></div>
	<?php include_once('includes/legend_link.php'); ?>
<!-- end #content_body --></div>
<?php include_once('includes/footer.php'); ?>
</body>
</html>
