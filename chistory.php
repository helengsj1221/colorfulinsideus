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
		<link rel="stylesheet" href="css/pc/company.css" />
<!-- 		<link rel="stylesheet" href="css/mobile/company-mobile.css" media="only screen and (min-width: 0px) and (max-width: 960px)" /> -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/jquery-1.7.2.min.js"></script>
    	<script src="js/banner.js"></script>
	</head> 
	
	<body>
	<div id="company">
	
    	<div id="menu">
        <?php include("public/leftcmenu.php"); ?>
        </div>
        
        <div id="content">
        <h2>歷史</h2>
        
            <div id="detail">
        	<?php 
            	if(mysqli_num_rows($result) > 0){   	
            	    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
            	        echo "<li><span>". $row['COMPANY_HISTORY'] ."</span></li>";
            	    }
            	}
            	mysqli_close($con);
            ?>
            </div>
        </div>        
	</div>
	</body>
	<?php include("public/footer.php"); ?>	
</div>
</html>