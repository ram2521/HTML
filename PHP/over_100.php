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
		<h1>���v�����߂�1000�𒴂���̂�</h1>
		<p>���v�l:<?php echo $total; ?></p>
		<p>�Ō�ɑ�������:<?php echo $i; ?></p>
	</body>
</html>