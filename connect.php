<? 
	include("config.php");
	$myToken=$_GET['myToken'];
	$otherToken=$_GET['otherToken'];

	php_post_data("http://api.raydash.com/2/$myToken","streamName=$outputToken&userid=$RAYDASH_USERID&secret=$RAYDASH_SECRET");
