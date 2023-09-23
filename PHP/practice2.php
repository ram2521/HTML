<?php
	$number = 1;
	# 変数numberに1を代入
	$sum = 0;
	# 変数sumに0を代入
	while ($number <=10) {
		# numberが10を超えるまで繰り返し
	$sum = $number + $sum;
		# sumにnumberを加算
		$number += 1;
		# numberに1を加算
	}
	echo $sum;
	# 合計値を出力
?>