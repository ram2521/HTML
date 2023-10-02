<?php
	$english_scores = [765, 820, 440, 530, 900, 960, 735];
	$total = 0;
	
	foreach ($english_scores as $score) {
		$total += $score;
	}
	
	//echo $total;
	$average = $total / count($english_scores);
	
	$avarage_formatted = number_format($average, 2);
	//echo $avarage_formatted;
	
	$english_scores[] = 620;
	$english_scores[] = 555;
	$english_scores[] = 590;
	$total2 = 0;
	foreach ($english_scores as $score2) {
		$total2 += $score2;
	}
	$average2 = $total2 / count($english_scores);
	
	$avarage_formatted = number_format($average, 2);

?>

<!DOCTYPE html>
<html lang="ja">
	
	<head>
		<meta charset="UTF-8">
		<title>スコア合計と平均との算出</title>
	</head>
	
	<body>
		<h1>スコア合計と平均値の算出</h1>
		<p>$スコア合計: <?php echo $total; ?>
		</p>
		<p>スコア平均値: <?php echo $avarage_formatted; ?></p>
		<p>スコア合計(追加含む): <?php echo $total2; ?></p>
		<p>スコア平均値（追加含む）<?php echo $average2 ; ?></p>
	</body>
	
</html>	