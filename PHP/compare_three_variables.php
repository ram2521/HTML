<?php
	$a = rand(0, 2);
	$b = rand(0, 2);
	$c = rand(0, 2);
	

	if ($a > $b && $b >= $c) {
		$result = '変数aが最も大きい';
	}
	
	elseif($b > $a && $a >= $c){
		$result = '変数bが最も大きい';
	}
	
	elseif($c > $a && $a >= $b){
		$result = '変数cが最も大きい';
	}
	else{
		if($a < $b && $b == $c){
		$result = '変数bとcが最も大きい';
	}
	elseif ($b < $c && $c == $a){
		$result = '変数aとcが最も大きい';
	}
	elseif($c < $b && $b == $a){
		$result = '変数aとbが最も大きい';
	}
	elseif($a == $b && $b == $c){
		$result = 'すべて同じ値です';
	}
}
?>

<!DOCTYPE html>
<html lang="ja">
	
	<head>
		<meta charset="UTF-8">
		<title>最も大きい変数</title>
	</head>
	
	<body>
		<h1>最も大きい変数</h1>
		<p>$a: <?php echo $a; ?></p>
		<p>$b: <?php echo $b; ?></p>
		<p>$c: <?php echo $c; ?></p>
		<p><?php echo $result ; ?></p>
	</body>
	
</html>	