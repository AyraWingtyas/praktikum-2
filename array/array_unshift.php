<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['ayra', 'ayu', 'rizkika', 'wingtyas'];
	array_unshift($name, 'nara', 'tyas');
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>