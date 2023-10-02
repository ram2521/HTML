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
		<title>�X�R�A���v�ƕ��ςƂ̎Z�o</title>
	</head>
	
	<body>
		<h1>�X�R�A���v�ƕ��ϒl�̎Z�o</h1>
		<p>$�X�R�A���v: <?php echo $total; ?>
		</p>
		<p>�X�R�A���ϒl: <?php echo $avarage_formatted; ?></p>
		<p>�X�R�A���v(�ǉ��܂�): <?php echo $total2; ?></p>
		<p>�X�R�A���ϒl�i�ǉ��܂ށj<?php echo $average2 ; ?></p>
	</body>
	
</html>	