<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Random position images</title>
	<link rel="stylesheet" type="text/css" href="../reset.css" />
	<link rel="stylesheet" type="text/css" href="rimage.css" />
	<script type="text/javascript" src="../zepto.js"></script>
	<script type="text/javascript" src="rimage.js"></script>
</head>
<body>
	<div class="container">
		<div class="images">
			<?php
				$imgpath= '../images';
				$files= scandir($imgpath);
				foreach ($files as $file) {
					$exp= explode('.', $file);
					$type= end($exp);
					if ($type == 'jpg') {
						echo "<div><img src=\"$imgpath/$file\" /></div>";
					}
				}
			?>
		</div>
	</div>
</body>
</html>