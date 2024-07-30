<?php
session_start();
if (isset($_POST['nextSlideId'])) {
		$_SESSION['active_slide_global_id'] = $_POST['nextSlideId'];
		echo json_encode(array('global_slide_id' => $_SESSION['active_slide_global_id']));
}
?>