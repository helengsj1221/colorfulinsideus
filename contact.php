<html>
<?php include("public/config.php"); ?>
<?php
    //撈資料
    $today     = date("Ymd");
//     $newssql = "SELECT * FROM `BOARD` WHERE `BOARD_DATES`<= ".$today." AND `BOARD_DATEE` >=".$today." ORDER BY `BOARD_DATES` DESC";
    $newssql = "SELECT * FROM `COMPANY`";
    mysqli_query($con, 'SET NAMES utf8');
    $result = mysqli_query($con, $newssql);
?>
<?php include("public/topmenu.php"); ?>
<div id="wrapper">
	<head>
		<title>Colorful Entertainment Inc.</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-mobile.css" media="only screen and (min-width: 0px) and (max-width: 960px)" />
		<link rel="stylesheet" href="css/pc/contact.css" />
<!-- 		<link rel="stylesheet" href="css/mobile/contact-mobile.css" media="only screen and (min-width: 0px) and (max-width: 960px)" /> -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/jquery-1.7.2.min.js"></script>
    	<script src="js/banner.js"></script>
	</head> 
	
	<body>
	<div id="contact">
	<h2>聯絡我們</h2>
        
		<div id="content">
            <div id="detail">    
            </div>
            <div id="detail">    
            </div>
            <div id="detail">    
            </div>
        </div>
	</div>
	</body>
	<?php include("public/footer.php"); ?>	
</div>
</html>