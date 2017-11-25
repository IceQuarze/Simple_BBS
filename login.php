<?php
	include "pdo.php";
	$query_result = $pdo->query("select * from account where account='".$_POST["account"]."' and password='".md5($_POST["password"])."'");
	$res=$query_result->fetch();
	if($res[0]==$_POST["account"]):
		echo "Login success";
		setcookie("user",$_POST["account"]);
		header("Location: index.php");
	else:
		echo "Login failed!";
	endif;
?>
