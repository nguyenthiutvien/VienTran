<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.hv1{
			width: 20px;
			height: 20px;
			background: blue;
			float: left;
			margin-bottom: 5px;
			margin-left: 5px;
			border: 1px solid black;
		}
		.hv2{
			width: 20px;
			height: 20px;
			background:red;
			float: left;
			margin-bottom: 5px;
			margin-left: 5px;
			border: 1px solid black;
		}
	</style>
</head>

<body>
	
	<?php
		for ($i = 0; $i <= 5; $i++) {
			for ($k = 0; $k < 10; $k++) {
				if ($i%2==0){
					echo "<div class='hv1'></div>";
				}
				else{
					echo "<div class='hv2'></div>";
				}
			}	
			echo "<div style ='clear:both'></div>";
		}

		
	?>
</body>
</html>