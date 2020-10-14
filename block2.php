<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>jSelect</title>
	<link href="css/block2.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<div class="slide-container" id="slide_component">
		<ul class="slide-content">
			<li><img src="images/A1.jpg" width="200px" height="200px" /></li>
			<li><img src="images/A2.jpg" width="200px" height="200px" /></li>
			<li><img src="images/A3.jpg" width="200px" height="200px" /></li>
		</ul>
	</div>
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/banner.js"></script>
	<script type="text/javascript">
		$("#slide_component").jSlide();
	</script>
</body>
</html>