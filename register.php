<?php
	echo "Connect to mysql";
	include "pdo.php";
	echo "Connect success";
	$query = $pdo->query("select * from account where account='".$_POST["account"]."'");
	$isdup=$query->fetch();;
	if($isdup[0]==$_POST["account"]){
		echo "User exist";
	}
	else{
		$insert_result = $pdo->exec("insert into account values('".$_POST["account"]."','".md5($_POST["password"])."')");
		if($insert_result):
			echo "Register success";
			setcookie("user",$_POST["account"]);
			header("Location: index.php");
		else:
			echo "Register failed!";
		endif;
	}
?>
