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
		<title>�ő�l�̔���</title>
	</head>
	<body>
		<h1>�ő�l�̔���</h1>
		�O		<p><$a: <?php echo $a; ?></p>
		�O		<p><$b: <?php echo $b; ?></p>
		�O		<p><$c: <?php echo $c; ?></p>
		
		
		�_		<p>�ő�l:<?php echo $max; ?>�ł��B</p>
	</body>
</html>