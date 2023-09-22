<?php
$height = 172.5; //身長
$weight = 68.5; //体重
$BMI = $weight / ($height / 100 )  ** 2; //BMI

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<?php echo $height; ?>センチ、<?php echo $weight ?>キログラムのあなたのBMIは<?php echo round($BMI, 2)?> です。
	</body>
</html>			