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
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/jquery-1.7.2.min.js"></script>
    	<script src="js/banner.js"></script>
	</head> 
	
	<body>
	<div id="video">
    	<div id="menu">
        <?php include("public/leftvmenu.php"); ?>
        </div>
        <div id="videolist">
        	<iframe width="1120" height="630" src="https://www.youtube.com/embed/videoseries?list=PLV4bvH64LzMoK_kFP2eEQOH0ukAMVpyuX&loop=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
	</div>
	</body>
	<?php include("public/footer.php"); ?>	
</div>
</html>