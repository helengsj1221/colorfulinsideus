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
            $newssql = "SELECT * FROM `BOARD` WHERE `BOARD_DATES`<= ".$today." AND `BOARD_DATEE` >=".$today;
            mysqli_query($con, 'SET NAMES utf8');
            $result = mysqli_query($con, $newssql);
    ?>
<div id="wrapper">
	<head>
		<title>Colorful Entertainment Inc.</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="css/style.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		</head> 
	<body class="homepage">
		<div id="header-wrapper">
			<div class="container">
				<div id="header">
					<div id="logo">  <!-- 考慮放LOGO -->
						<h1><a href="index.php">Colorful Entertainment</a></h1>  
						<span>Inc.</span>
					</div>
					<nav id="nav">
						<ul class="drop-down-menu">
							<li><a class="link link--index" href="index.php"><span data-letters-l="首" data-letters-r="頁">首頁</span></a></li>
							<li><a class="link link--index" href="test.php"><span data-letters-l="公司" data-letters-r="簡介">公司簡介</span></a>
								<ul>
    								<li><a class="link link--secindex" href="test.php"><span data-letters="公司沿革">公司沿革</span></a></li><br>
    								<li><a class="link link--secindex" href="test.php"><span data-letters="聯絡我們">聯絡我們</span></a></li><br>
                            	</ul>
							</li>
							<li><a class="link link--index" href="test.php"><span data-letters-l="藝" data-letters-r="人">藝人</span></a></li>
							<li><a class="link link--index" href="test.php"><span data-letters-l="購物" data-letters-r="商城">購物商城</span></a></li>
							<li><a class="link link--index" href="test.php"><span data-letters-l="會員" data-letters-r="專區">會員專區</span></a>
								<ul>
									<li><a class="link link--secindex" href="test.php"><span data-letters="會員註冊">會員註冊</span></a></li><br>
    								<li><a class="link link--secindex" href="test.php"><span data-letters="會員登入">會員登入</span></a></li><br>
    								<li><a class="link link--secindex" href="test.php"><span data-letters="帳號資訊">帳號資訊</span></a></li><br>
                            	</ul>
                            </li>
							<li><a class="link link--index" href="test.php"><span data-letters-l="投" data-letters-r="票">投票</span></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="slide-container" id="slide_component">
		<ul class="slide-content">
			<li><img src="images/pics01.jpg" width="1280px" height="580px" /></li>
			<li><img src="images/pics05.jpg" width="1280px" height="580px" /></li>
			<li><img src="images/pics10.jpg" width="1280px" height="580px" /></li>
		</ul>
		<ul class="slide-items">
			<li class="current-slide-item"></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<div id="news">
 	<h2>最新消息  NEWS</h2>
    	<ul class="newstyle">
    	<?php 
    	if(mysqli_num_rows($result) > 0){   	
    	    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    	        echo "<li><a class='desc' href='test.php'>". $row['BOARD_DESC'] ."</a></li>";
    	    }
    	}
    	mysqli_close($con);
         ?>
        </ul>
	</div>
	</body>
</div>
</html>
<script type="text/javascript">
		$("#slide_component").jSlide();
</script>