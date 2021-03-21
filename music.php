<html>
<?php include("public/topmenu.php"); ?>
<div id="wrapper">
	<head>
		<title>Colorful Entertainment Inc.</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-mobile.css" media="only screen and (min-width: 0px) and (max-width: 960px)" />
		<link rel="stylesheet" href="css/pc/video.css" />
<!-- 		<link rel="stylesheet" href="css/mobile/video-mobile.css" media="only screen and (min-width: 0px) and (max-width: 960px)" /> -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/jquery-1.7.2.min.js"></script>
    	<script src="js/banner.js"></script>
	</head> 
	
	<body>
	<div id="video">
    	<div id="menu">
        <?php include("public/leftvmenu.php"); ?>
        </div>
        <div id="videolist">
        	<iframe width="350" height="600" src="https://widget.kkbox.com/v1/?id=Os0BNlBYqcVQY2Z-gi&amp;type=album&amp;terr=tw&amp;lang=tc" frameborder="0" scrolling="no"></iframe>
        	<iframe src="https://open.spotify.com/embed/album/1au9geZRhkPwzuQMgzLmYH" width="350" height="600" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        	<iframe id='AmazonMusicEmbedB08XDL7S78' src='https://music.amazon.ca/embed/B08XDL7S78/?id=j8zikDhHor&marketplaceId=ART4WZ8MWBX2Y&musicTerritory=CA' width='350' height='600' style='border:1px solid rgba(0, 0, 0, 0.12);max-width:'></iframe>
        </div>
	</div>
	</body>
	<?php include("public/footer.php"); ?>	
</div>
</html>