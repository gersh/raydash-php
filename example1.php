<?php
include("config.php");
include("utils.php");
// Do GET http://api.raydash.com:8080/api/2/authtoken?userid=USERID&secret=SECRET for the token
$token=http_request('POST',"api.raydash.com",8080,"/api/2/authtoken",array(),array("userid"=>$RAYDASH_USERID,"secret"=>$RAYDASH_SECRET));
?><html>
<head><title>Raydash PHP example 1</title>
<?php // Include a Javascript file for embedding flash files 
?>
<script type="text/javascript" src="http://api.raydash.com:8080/api/2/swfobject/1"></script>
<?php // Include jquery to make things easier 
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
<script type="text/javascript">
//AJAX callback for changing what stream clientbox is pointing at
$(document).load(function() {
	$("tokenBtn").click(function() {
		$.ajax({url:"connect.php",data:{myToken:"<?php echo $token ?>",otherToken:$("#tokenTxt").val()}});
	});
});
// Emebed the flash file in the streambox div for playing video
swfobject.embedSWF("http://api.raydash.com:8080/api/2/clientbox/1","streambox",640,480,"9.0.0","http://www.adobe.com/products/flashplayer/download",{autostart:1,token:"<?php echo $token; ?>"},{allowscriptaccess:'always'},{});
// Emebed the flash file for recording from our webcam
swfobject.embedSWF("http://api.raydash.com:8080/api/2/recordbox/2","recordbox",640,480,"10.3.0","http://www.adobe.com/products/flashplayer/download",{autostart:1,token:"<?php print $token; ?>",hideControls:1},{allowscriptaccess:'always'},{});
</script>
</head>
<body>
<p>Your token is: <?php echo $token; ?></p>
<label>Enter someone's token to see them</label><input type="text" id="tokenTxt"/><input type="button" id="tokenBtn"/><br/>
<div id="streambox"></div>
<div id="recordbox"></div>
</body>
</html>
