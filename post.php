<?php 
require('lib/Pusher.php');
	$app_id = '122693';
	$app_key = '0b1d4bb7107452a41b59';
	$app_secret = 'b76367efa58ebbda33f3';

	$pusher = new Pusher($app_key, $app_secret, $app_id);
	$data = $_POST;
	$data = array('name' => $_POST['name'], 'comment' => $_POST['comment']);

	$pusher->trigger('comments', 'comment', $data);
?>