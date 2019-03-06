<?php
session_start();

require_once './Facebook/autoload.php';

define('FACEBOOK_APP_ID', '427418671077846');
define('FACEBOOK_SECRET_KEY', 'ffcd4eee24b6e0db4052884ee0622e91');
define('FACEBOOK_ACCESS_TOKEN', 'e242f5749c8d530db2005bd5d2ca0343');

$fb = new \Facebook\Facebook([
	'app_id' => FACEBOOK_APP_ID,
	'app_secret' => FACEBOOK_SECRET_KEY,
	'default_graph_version' => 'v2.10',
	'persistent_data_handler'=> 'session'
]);

$helper = $fb->getRedirectLoginHelper();
$state = isset($_GET['state']) ? $_GET['state'] : null;
$_SESSION['FBRLH_state'] = $state;