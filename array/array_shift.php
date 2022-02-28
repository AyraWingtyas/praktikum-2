<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['ayra', 'ayu', 'rizkika', 'wingtyas'];
	array_shift($name);
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>