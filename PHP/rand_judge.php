<?php //あらかじめ奇数か偶数かはPHPで判定しておき、HTML内では出力のみを行うのがポイント
// 1-100の範囲の乱数を取得し、変数＄randに代入する
	$rand = mt_rand(1, 100);
	
	if ($rand % 2 === 0) {
		# $resultに偶数を代入
		$result = '偶数';
	}else {
		#入力値が奇数ならば
		$result = '奇数';
	}
	
	
		
?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<title>奇数・偶数の判定</title>
	</head>
	<body>
		<h1>奇数・偶数の判定</h1>
＾		<p><$rand: <?php echo $rand; ?></p>
		
＼		<p><?php echo $result; ?>です。</p>
	</body>
</html>