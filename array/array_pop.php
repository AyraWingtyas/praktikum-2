<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['ayra', 'ayu', 'rizkika', 'wingtyas'];
	array_pop($name);
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>