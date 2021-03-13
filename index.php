<html>
<?php include("public/config.php"); ?>
<?php
    //撈資料
    $today   = date("Ymd");
    $newssql = "SELECT * FROM `BOARD` WHERE `BOARD_DATES`<= ".$today." AND `BOARD_DATEE` >=".$today." ORDER BY `BOARD_DATES` DESC LIMIT 7";
    mysqli_query($con, 'SET NAMES utf8');
    $result  = mysqli_query($con, $newssql);
    $picssql = "SELECT * FROM `PICTURE` WHERE `PIC_DATES`<= ".$today." AND `PIC_DATEE` >=".$today." ORDER BY `PIC_DATES` DESC LIMIT 3";
    $banner  = mysqli_query($con, $picssql);
?>
<?php include("public/topmenu.php"); ?>
<div id="wrapper">
	<head>
		<title>Colorful Entertainment Inc.</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-mobile.css" media="only screen and (min-width: 0px) and (max-width: 960px)" />
		<link rel="stylesheet" href="css/pc/banner.css" />
		<link rel="stylesheet" href="css/mobile/banner-mobile.css" media="only screen and (min-width: 0px) and (max-width: 960px)" />
		<link rel="stylesheet" href="css/pc/news.css" />
		<link rel="stylesheet" href="css/mobile/news-mobile.css" media="only screen and (min-width: 0px) and (max-width: 960px)" />
		<link rel="stylesheet" href="css/pc/block.css" />
		<link rel="stylesheet" href="css/mobile/block-mobile.css" media="only screen and (min-width: 0px) and (max-width: 960px)" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/jquery-1.7.2.min.js"></script>
    	<script src="js/banner.js"></script>
	</head> 
		<body>
    	<div class="slide-container" id="slide_component">
    		<ul class="slide-content">
    		<?php 
    		if(mysqli_num_rows($banner) > 0){   	
    		    while ($row = mysqli_fetch_array($banner, MYSQLI_BOTH)) {
    		        echo "<li><img src=". $row['PIC_LOCAL']." /></li>";
        	    }
        	}
             ?>
    		</ul>
    		<ul class="slide-items">
    			<li class="current-slide-item"></li>
    			<li></li>
    			<li></li>
    		</ul>
    	</div>
		</body>
	<!-- 最新消息 -->
	<body>
	<div id="news">
 	<h2>最新消息  NEWS</h2>
    	<ul class="newstyle">
    	<?php 
    	if(mysqli_num_rows($result) > 0){   	
    	    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    	        echo "<li><a class='desc' href='test.php'>". $row['BOARD_ITEM'] ."<span class='date'>Date:".$row['BOARD_DATES']."</span></a></li>";
    	    }
    	}
    	mysqli_close($con);
         ?>
         <li><a class='more' href='news000.php' style='color: #796400;'>more</a></li>
        </ul>
	</div>
	</body>
	<!-- 區塊 -->
	<body>
	<div id="block">
	<h2>分類專區  AREA</h2>
	<div class="scene">
  <div class="card">
    <div class="card__face card__face--front">
      <img src="images/artist.jpg" />
    </div>
    <div class="card__face card__face--back">
      <a href='test.php'><img src="images/block.jpg" />
    </div>
  </div>
  <div class="card">
    <div class="card__face card__face--front">
      <img src="images/video.jpg" />
    </div>
    <div class="card__face card__face--back">
      <a href='test.php'><img src="images/block.jpg" />
    </div>
  </div>
  <div class="card">
    <div class="card__face card__face--front">
      <img src="images/shop.jpg" />
    </div>
    <div class="card__face card__face--back">
      <a href='shop.php'><img src="images/block.jpg" />
    </div>
  </div>
</div>
</div>
	</body>
<?php include("public/footer.php"); ?>	
</div>

<script type="text/javascript">$("#slide_component").jSlide();</script>
</html>
