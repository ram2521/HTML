<?php
	$a = rand(0, 2);
	$b = rand(0, 2);
	$c = rand(0, 2);
	

	if ($a > $b && $b >= $c) {
		$result = '�ϐ�a���ł��傫��';
	}
	
	elseif($b > $a && $a >= $c){
		$result = '�ϐ�b���ł��傫��';
	}
	
	elseif($c > $a && $a >= $b){
		$result = '�ϐ�c���ł��傫��';
	}
	else{
		if($a < $b && $b == $c){
		$result = '�ϐ�b��c���ł��傫��';
	}
	elseif ($b < $c && $c == $a){
		$result = '�ϐ�a��c���ł��傫��';
	}
	elseif($c < $b && $b == $a){
		$result = '�ϐ�a��b���ł��傫��';
	}
	elseif($a == $b && $b == $c){
		$result = '���ׂē����l�ł�';
	}
}
?>

<!DOCTYPE html>
<html lang="ja">
	
	<head>
		<meta charset="UTF-8">
		<title>�ł��傫���ϐ�</title>
	</head>
	
	<body>
		<h1>�ł��傫���ϐ�</h1>
		<p>$a: <?php echo $a; ?></p>
		<p>$b: <?php echo $b; ?></p>
		<p>$c: <?php echo $c; ?></p>
		<p><?php echo $result ; ?></p>
	</body>
	
</html>	