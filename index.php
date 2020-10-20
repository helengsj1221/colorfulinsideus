<html>
<?php
    // 連線至資料庫
    $hostname  = "148.66.136.151:3306";
    $username  = "Vicky";
    $password  = "vicky@851221";
    $dbname    = "ColorfulENTInc";
    $today     = date("Ymd");
    $con = mysqli_connect($hostname,$username, $password,$dbname);
    //撈資料
    $newssql = "SELECT * FROM `BOARD` WHERE `BOARD_DATES`<= ".$today." AND `BOARD_DATEE` >=".$today." ORDER BY `BOARD_DATES` DESC LIMIT 7";
    mysqli_query($con, 'SET NAMES utf8');
    $result = mysqli_query($con, $newssql);
?>
<div id="wrapper">
	<head>
		<title>Colorful Entertainment Inc.</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    	<script type="text/javascript" src="js/banner.js"></script>
    	<script type="text/javascript" src="js/block.js"></script>
	</head> 
	<!-- 主要頁面 -->
	<body class="homepage">
		<div id="header-wrapper">
			<div class="container">
				<div id="header">
   					<!-- 左上公司名 -->
					<div id="logo">  <!-- 考慮放LOGO -->
						<h1><a href="index.php">Colorful Entertainment</a></h1><span>Inc.</span>
					</div>
					<!-- 目錄 -->
					<nav id="nav">
						<ul class="drop-down-menu">
							<li><a class="link link-index" href="index.php"><span data-letters-l="首" data-letters-r="頁">首頁</span></a></li>
							<li><a class="link link-index" href="test.php"><span data-letters-l="公司" data-letters-r="簡介">公司簡介</span></a>
								<ul>
    								<li><a class="link link-secindex" href="test.php"><span data-letters="公司沿革">公司沿革</span></a></li><br>
    								<li><a class="link link-secindex" href="test.php"><span data-letters="聯絡我們">聯絡我們</span></a></li><br>
                            	</ul>
							</li>
							<li><a class="link link-index" href="test.php"><span data-letters-l="藝" data-letters-r="人">藝人</span></a></li>
							<li><a class="link link-index" href="test.php"><span data-letters-l="購物" data-letters-r="商城">購物商城</span></a></li>
							<li><a class="link link-index" href="test.php"><span data-letters-l="會員" data-letters-r="專區">會員專區</span></a>
								<ul>
									<li><a class="link link-secindex" href="test.php"><span data-letters="會員註冊">會員註冊</span></a></li><br>
    								<li><a class="link link-secindex" href="test.php"><span data-letters="會員登入">會員登入</span></a></li><br>
    								<li><a class="link link-secindex" href="test.php"><span data-letters="帳號資訊">帳號資訊</span></a></li><br>
                            	</ul>
                            </li>
							<li><a class="link link-index" href="test.php"><span data-letters-l="投" data-letters-r="票">投票</span></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		</body>
		<!-- banner -->
		<body>
    	<div class="slide-container" id="slide_component">
    		<ul class="slide-content">
    			<li><img src="images/banner01.jpg" width="1280px" height="580px" /></li>
    			<li><img src="images/banner02.jpg" width="1280px" height="580px" /></li>
    			<li><img src="images/banner03.jpg" width="1280px" height="580px" /></li>
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
    	        echo "<li><a class='desc' href='test.php'>". $row['BOARD_DESC'] ."<span  style='float:right;font-size:16px;'>Date:".$row['BOARD_DATES']."</span></a></li>";
    	    }
    	}
    	mysqli_close($con);
         ?>
        </ul>
	</div>
	</body>
<!-- 頁尾 -->
<body>
<footer id="footer">
	<div class="container">
	<h2>聯絡我們</h2><br>
		<ul class="icons">
<!-- 			<li><a href="#"><img src="images/FB.png" width="70px" height="70px"/></a></li> -->
			<li><a href="https://www.instagram.com/colorful.ent_official/"><img src="images/IG.png" width="70px" height="70px"/></a></li>
			<li><a href="mailto:service@colorful-entertainment-official.com"><img src="images/EMAIL.png" width="70px" height="70px"/></a></li>
		</ul>
	</div>
</footer>
</body>
</div>

<script type="text/javascript">$("#slide_component").jSlide();</script>
<script type="text/javascript">$("#block_slide_component").jbSlide();</script>
</html>
