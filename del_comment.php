<?php
	include "pdo.php";
	if($_COOKIE["user"]==$_GET["user"]):
		$pdo->exec("delete from comment where user='".$_GET["user"]."' and comment='".$_GET["comment"]."'");
		header("Location: index.php");
	else:
		echo "Delete failed!.";
	endif;
?>
