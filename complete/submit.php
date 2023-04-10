<?php
	$a = $_POST['udid'] . "\n" . $_POST['name'] . "\n" . $_POST['email'] . "\n" . $_POST['product'];
	mail("zhanyar.store@gmail.com", "UDID", $a);
	header('Location: finished.html');
?>
	
