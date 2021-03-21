<html>
<?php include("public/config.php"); ?>
<?php
    //撈資料
    $today     = date("Ymd");
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
		<script src="js/jquery-1.7.2.min.js"></script>
    	<script src="js/banner.js"></script>
	</head> 
	
	<body>
	<div id="contact">
	<h2>聯絡我們</h2>
		<div class="box">
            <div id="detail">
             	<div id="image">
            		<a href="https://www.facebook.com/%E7%B9%BD%E7%B4%9B%E7%B4%9B-Colorful-Entertainment-104276154812414" target="_blank">
            			<img id="sns" src="images/icon/FB.png"/>
            			<div id="word">Facebook</div>
            		</a>
            		<img id="qr" src="images/QrCode/QRFB.png"/>
            	</div>
            </div> 
            <div id="detail">
            	<div id="image">
            		<a href="https://www.instagram.com/colorful.ent_official/" target="_blank">
            			<img id="sns" src="images/icon/IG.png"/>
            			<div id="word">Instagram</div>
            		</a>
            		<img id="qr" src="images/QrCode/QRIG.png"/>
            	</div>
            </div>
            <div id="detail">
            	<div id="image">
            		<a href="https://weibo.com/u/7563523995?is_all=1&topnav=1&topsug=1&wvr=6" target="_blank">
            			<img id="sns" src="images/icon/weibo.png"/>
            			<div id="word">Weibo</div>
            		</a>
            		<img id="qr" src="images/QrCode/QRWEIBO.png"/>
            	</div>
            </div>
            
            <div id="detail">
            	<div id="image">
            		<a href="https://space.bilibili.com/1016077618/" target="_blank">
            			<img id="sns" src="images/icon/bilibili.png"/>
            			<div id="word">Bilibili</div>
            		</a>
            		<img id="qr" src="images/QrCode/QRBILIBILI.png"/>
            	</div>
            </div> 
            <div id="detail">
            	<div id="image">
            		<a href="mailto:service@colorful-entertainment-official.com" target="_blank">
            			<img id="sns" src="images/icon/EMAIL.png"/>
            			<div id="word">Email</div>
            		</a>
            		<img id="qr" src="images/QrCode/QREMAIL.png"/>
            	</div>
            </div>
        </div>
	</div>
	</body>
</div>
<br><div id="foot">© Colorful Entertainment 2021</div>
</html>