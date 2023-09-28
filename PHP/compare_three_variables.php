<?php
	$a = rand(0, 2);
	$b = rand(0, 2);
	$c = rand(0, 2);
	

	if ($a > $b && $b >= $c) {
		$result = '•Ï”a‚ªÅ‚à‘å‚«‚¢';
	}
	
	elseif($b > $a && $a >= $c){
		$result = '•Ï”b‚ªÅ‚à‘å‚«‚¢';
	}
	
	elseif($c > $a && $a >= $b){
		$result = '•Ï”c‚ªÅ‚à‘å‚«‚¢';
	}
	else{
		if($a < $b && $b == $c){
		$result = '•Ï”b‚Æc‚ªÅ‚à‘å‚«‚¢';
	}
	elseif ($b < $c && $c == $a){
		$result = '•Ï”a‚Æc‚ªÅ‚à‘å‚«‚¢';
	}
	elseif($c < $b && $b == $a){
		$result = '•Ï”a‚Æb‚ªÅ‚à‘å‚«‚¢';
	}
	elseif($a == $b && $b == $c){
		$result = '‚·‚×‚Ä“¯‚¶’l‚Å‚·';
	}
}
?>

<!DOCTYPE html>
<html lang="ja">
	
	<head>
		<meta charset="UTF-8">
		<title>Å‚à‘å‚«‚¢•Ï”</title>
	</head>
	
	<body>
		<h1>Å‚à‘å‚«‚¢•Ï”</h1>
		<p>$a: <?php echo $a; ?></p>
		<p>$b: <?php echo $b; ?></p>
		<p>$c: <?php echo $c; ?></p>
		<p><?php echo $result ; ?></p>
	</body>
	
</html>	