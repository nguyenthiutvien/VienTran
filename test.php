<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .square1{
			width: 20px;
			height: 20px;
			background: red;
			float: left;
			margin-bottom: 5px;
			margin-left: 5px;
			border: 1px solid black;
		}
        .square2{
            width: 20px;
			height: 20px;
			background: grey;
			float: left;
			margin-bottom: 5px;
			margin-left: 5px;
			border: 1px solid black;
        }
</style>
<body>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <=  5; $j++) {
            if ($i %2 ==0) {
                echo "<div id='square1'>";
            } else {
                echo "<div id='square2'>";
            }
        }
        echo "<br>";
    }
    ?>
</body>
</html>