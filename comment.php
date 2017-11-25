<?php
	include "pdo.php";
	if($_COOKIE["user"]):
		$pdo->exec("insert into comment values('".$_COOKIE["user"]."','".$_POST["comment"]."')");
		header("Location: index.php");
	else:
		echo "You haven't login.";
	endif;
?>
