<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../reset.css" />
	<link rel="stylesheet" type="text/css" href="slideshow.css" />
	<script type="text/javascript" src="slideshow1.js"></script>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="frame">
			<div class="prev"></div>
			<div class="next"></div>
			<div class="new"></div>
			<div class="bgloader"></div>
			<div class="slideshow">
				<div class="train">
					<?php
						$files= scandir('./images/');	
						$counter=0;
							foreach ($files as $file){
								$exe = pathinfo($file);
								if ($exe['extension'] == "jpg"){
								echo "<div style=\"background-image:url(./images/$file);\"></div>";
								$counter++;
								}
							}					
					?>
				</div>
				<ul class="btn">
					<?php
						for ($i=0; $i < $counter; $i++) { 
							echo "<li></li>";
						}
					?>					
				</ul>
			</div>
		</div>
	</div>
</body>
</html>