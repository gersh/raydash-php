<? 
	include("config.php");
	include("utils.php");
	$myToken=$_GET['myToken'];
	$otherToken=$_GET['otherToken'];

	print http_request('POST',"api.raydash.com",8080,"/api/2/$myToken",array(),array("streamName"=>$outputToken,"userid"=>$RAYDASH_USERID,"secret"=>$RAYDASH_SECRET));
	
