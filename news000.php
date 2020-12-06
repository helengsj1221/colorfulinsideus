<html>
<?php include("public/config.php"); ?>
<?php
    //撈資料
    $today     = date("Ymd");
    $newssql = "SELECT * FROM `BOARD` WHERE `BOARD_DATES`<= ".$today." AND `BOARD_DATEE` >=".$today." ORDER BY `BOARD_DATES` DESC";
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
		<link rel="stylesheet" href="css/pc/news.css" />
		<link rel="stylesheet" href="css/mobile/news-mobile.css" media="only screen and (min-width: 0px) and (max-width: 960px)" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/jquery-1.7.2.min.js"></script>
    	<script src="js/banner.js"></script>
	</head> 
	<body>
	<div id="news">
 	<h2>最新消息  NEWS</h2>
    	<ul class="newstyle">
    	<?php 
    	if(mysqli_num_rows($result) > 0){   	
    	    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    	        echo "<li><a class='desc' href='test.php'>". $row['BOARD_DESC'] ."<span class='date'>Date:".$row['BOARD_DATES']."</span></a></li>";
    	    }
    	}
    	mysqli_close($con);
         ?>
        </ul>
	</div>
	</body>
	<?php include("public/footer.php"); ?>	
</div>
</html>