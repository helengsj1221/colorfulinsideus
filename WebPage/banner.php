<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>jSelect</title>
	<link href="css/banner.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<div class="slide-container" id="slide_component">
		<ul class="slide-content">
			<li><img src="images/pics01.jpg" width="1280px" height="580px" /></li>
			<li><img src="images/pics01.jpg" width="1280px" height="580px" /></li>
			<li><img src="images/pics01.jpg" width="1280px" height="580px" /></li>
		</ul>
		<div class="slide-items-bg"></div>
		<ul class="slide-items">
			<li class="current-slide-item">1</li>
			<li>2</li>
			<li>3</li>
		</ul>
	</div>
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/banner.js"></script>
	<script type="text/javascript">
		$("#slide_component").jSlide();
	</script>
</body>
</html>