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
		<h1>合計が初めて1000を超えるのは</h1>
		<p>合計値:<?php echo $total; ?></p>
		<p>最後に足した数:<?php echo $i; ?></p>
	</body>
</html>