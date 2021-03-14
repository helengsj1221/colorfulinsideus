<html>
<?php include("public/config.php"); ?>
<?php
    //撈資料
    $newssql = "SELECT * FROM `BOARD`ORDER BY `BOARD_DATES` DESC";
    mysqli_query($con, 'SET NAMES utf8');
    $result = mysqli_query($con, $newssql);
    $allnums = mysqli_num_rows($result); //統計總比數
    $nums = 8; //每頁顯示項目數量
    $pages = ceil($allnums/$nums); //取得不小於值的下一個整數
    if (!isset($_GET["page"])) //假如$_GET["page"]未設置
        $page=1; //則在此設定起始頁數
    else 
        $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
    $start = ($page-1)*$nums; //每一頁開始的資料序號
    $result = mysqli_query($con,$newssql.' LIMIT '.$start.', '.$nums)
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
    	    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) 
    	        echo "<li><a class='desc' href='test.php'>". $row['BOARD_ITEM'] ."<span class='date'>Date:".$row['BOARD_DATES']."</span></a></li>";
    	}
    	mysqli_close($con);
         ?>
        </ul>
        <div id="tabpage">
	<?php
    //分頁頁碼
	echo "<a href=?page=1>首頁</a> ";
	echo "第 ";
	for( $i=1 ; $i<=$pages ; $i++ ) {
	    if ( $page-3 < $i && $i < $page+3 )
	        echo "<a href=?page=".$i.">".$i."</a> ";
	}
	echo " 頁 <a href=?page=".$pages.">末頁       </a>";
	echo '共 '.$allnums.' 筆-在 '.$page.' 頁-共 '.$pages.' 頁';
    ?>
    </div>
	</div>
	
	</body>
	<?php include("public/footer.php"); ?>	
</div>
</html>