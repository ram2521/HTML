<?php
	$a = rand(1, 100);
	$b = rand(1, 100);
	$c = rand(1, 100);
	
	$max = $a;
	
	if ($b > $max) {
		$max = $b;
	}
	
	if ($c > $max) {
		$max = $c;
	}
	
?>


<!DOCTYPE html>
<html lang="ja">
	<head>
		<title>最大値の判定</title>
	</head>
	<body>
		<h1>最大値の判定</h1>
		＾		<p><$a: <?php echo $a; ?></p>
		＾		<p><$b: <?php echo $b; ?></p>
		＾		<p><$c: <?php echo $c; ?></p>
		
		
		＼		<p>最大値:<?php echo $max; ?>です。</p>
	</body>
</html>