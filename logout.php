<?php
	require 'php-sdk/facebook.php';
    require 'connectvars.inc.php';
    
	$facebook = new Facebook(array(
        'appId'  => APP_ID,
        'secret' => APP_SECRET
	));

	setcookie('fbs_'.$facebook->getAppId(),'', time()-100, '/', 'iviewsource.com');
	$facebook->destroySession();
	header('Location: index.php');
?>
