<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
$root = '';
require_once($_SERVER['DOCUMENT_ROOT'] . "/foxlawtexas$root/includes/classes/Image.php");
$i=0;

function getGlobalImageBySrc($filename) {
	 global $globalImages;
	 foreach ($globalImages as $image) {
	 	if (basename($image->getSrc()) == $filename)
			return $image;
	 }
}

function hasGlobalImage($borrowedSlide, $slideImages) {
	 foreach ($slideImages as $image) {
	 	if (basename($image->getId()) == $borrowedSlide->getId())
			return true;
	 }
	 return false;
}

$globalImages = array(
	new Image($i++, "$root/images/blue_mask_woman_on_beach.jpg", "Woman on Beach"),
	new Image($i++, "$root/images/blue_mask_girl_on_sunset_beach.jpg", "Girl on Beach at Sunset"),
	new Image($i++, "$root/images/blue_mask_man_on_sea_dock.jpg", "Man on Sea Dock"),
	new Image($i++, "$root/images/blue_mask_man_on_lake.jpg", "Man in Row Boat"),
	new Image($i++, "$root/images/blue_mask_man_mountain.jpg", "Man on Rocky Beach"),
	new Image($i++, "$root/images/blue_mask_despair.jpg", "Despair"),
	new Image($i++, "$root/images/blue_mask_evening_prayer.jpg", "Evening Prayer"),
	new Image($i++, "$root/images/blue_mask_rosary.jpg", "Rosary"),
	new Image($i++, "$root/images/blue_mask_child_prayer.jpg", "Child Prayer"),
	new Image($i++, "$root/images/blue_mask_i_am.jpg", "I Am"),
);

$page = isset($_POST['page'])? $_POST['page'] : $_SERVER['PHP_SELF'];
switch(basename($page)) {
	case 'for_christians.php':
		$slideImages = array(
				$globalImages[6],
				$globalImages[5],
				$globalImages[7],
				$globalImages[8],
				$globalImages[9],
				);
		break;
	case 'legend-of-the-sand-dollar.php':
		$slideImages = array(
				$globalImages[6],
				$globalImages[1],
				$globalImages[4],
				$globalImages[7],
				$globalImages[8],
				$globalImages[9],
				);
		break;
	default:
		$slideImages = array(
				$globalImages[0],
				$globalImages[2],
				$globalImages[1],
				$globalImages[3],
				$globalImages[4],
				);
}

if (!isset($_SESSION['active_slide_id']) || $_SESSION['active_slide_id']>=count($slideImages)) {
	$_SESSION['active_slide_id'] = rand(0 , count($slideImages)-1);
	$_SESSION['active_slide_global_id'] = $slideImages[$_SESSION['active_slide_id']]->getId();
}
if (!isset($_SESSION['active_slide_global_id'])) {
	$_SESSION['active_slide_global_id'] = $slideImages[$_SESSION['active_slide_id']]->getId();
}
$borrowedSlide = $globalImages[$_SESSION['active_slide_global_id']];
if (!hasGlobalImage($borrowedSlide, $slideImages)) {
	$borrowedSlide->addClass('borrowed');
	array_splice($slideImages, $_SESSION['active_slide_id']+1, 0, array(&$borrowedSlide));
	
}
	
foreach ($slideImages as $index=>$image) {
	if ($image->getId() == $_SESSION['active_slide_global_id']) {
		$image->addClass('active');
	}
}

/* Increment Active Slide Id via AJAX
if (isset($_POST['action']) && $_POST['action']=='increment_active_slide') {
	++$_SESSION['active_slide_id'];
	if ($_SESSION['active_slide_id']>=count($slideImages))
		$_SESSION['active_slide_id'] = 0;
	
	while ($slideImages[$_SESSION['active_slide_id']]->hasClass('borrowed')) {
		++$_SESSION['active_slide_id'];
		if ($_SESSION['active_slide_id']>=count($slideImages))
			$_SESSION['active_slide_id'] = 0; 
	}

	$_SESSION['active_slide_global_id'] = $slideImages[$_SESSION['active_slide_id']]->getId();
	$arr = array('local_slide_index' => $_SESSION['active_slide_id'], 'global_slide_id' => $_SESSION['active_slide_global_id']);
	echo json_encode($arr);
}
*/
?>