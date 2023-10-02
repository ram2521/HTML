<?php
	$total = 0;
	for ($i=0;$total < 1000; $i++) {
		$total += $i ;
	}
	echo $total;
?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<title>over_100</title>
	</head>
	<body>
		<h1>‡Œv‚ª‰‚ß‚Ä1000‚ð’´‚¦‚é‚Ì‚Í</h1>
		<p>‡Œv’l:<?php echo $total; ?></p>
		<p>ÅŒã‚É‘«‚µ‚½”:<?php echo $i; ?></p>
	</body>
</html>