<?php
include("config.php");
include("utils.php");
$token=http_request('POST',"api.raydash.com",8080,"/api/2/authtoken",array(),array("userid"=>$RAYDASH_USERID,"secret"=>$RAYDASH_SECRET));
?><html>
<head><title>Raydash PHP example 1</title>
<script type="text/javascript" src="http://api.raydash.com:8080/api/2/swfobject"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js">/script>
<script type="text/javascript">
$(document).load(function() {
	$("tokenBtn").click(function() {
		$.ajax({url:"connect.php",data:{myToken:"<?php print $token ?>",otherToken:$("#tokenTxt").val()}});
	});
});
swfobject.embedSWF("http://api.raydash.com:8080/api/2/clientbox/1","streambox",640,480,"9.0.0","http://www.adobe.com/products/flashplayer/download",{autostart:1,token:"<?php print $token; ?>"},{allowscriptaccess:'always'},{});
swfobject.embedSWF("http://api.raydash.com:8080/api/2/recordbox/2","recordbox",640,480,"10.3.0","http://www.adobe.com/products/flashplayer/download",{autostart:1,token:"<?php print $token; ?>"},{allowscriptaccess:'always'},{});
</script>
</head>
<body>
<p>Your token is: <?php print $token; ?></p>
<label>Enter someone's token to see them</label><input type="text" id="tokenTxt"/><input type="button" id="tokenBtn"/><br/>
<div id="streambox"></div>
<div id="recordbox"></div>
</body>
</html>
