<?php
require_once($_SERVER["DOCUMENT_ROOT"] . '/foxlawtexas/includes/ini5.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Williamson County Divorce Lawyer | Media | Fox Law</title>
<link rel="stylesheet" type="text/css" href="<?=$root?>/css/superfish.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?=$root?>/css/superfish_small.css" media="screen">
<link href="<?=$root?>/css/foxlaw_style5.css" rel="stylesheet" type="text/css" />
<style>
dl {
	overflow:auto;
}
dt {
	clear:left;
	float:left;
	width:150px;
	font-weight:bold;
}
dd {
	float:left;
	width:auto;
}
</style>
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
  	<h2>Media</h2>
    
  	<p>Read about our accomplishments mentioned in the media.
  	</p>
  
    <ul>
    	<li><a href="http://www.rrleader.com/main.asp?Search=1&ArticleID=26620&SectionID=3&SubSectionID=3&S=1" target="_blank">Round Rock Leader: Local Lawyer Earns Board Certification</a></li>
    </ul>
    
    <p><a class="icon double-arrow iso_link" href="./testimonials.php">Read what some of our clients have said.</a><br />
    </p>
   
  
	<!-- end #mainContent --></div>
  
	<!-- end #container --></div>
    <?php include_once('includes/legend_link.php'); ?>
<!-- end #content_body --></div>
<?php include_once('includes/footer.php'); ?>
</body>
</html>
