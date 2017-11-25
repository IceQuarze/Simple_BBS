<html>
	<head>
		<title>Easy BBS</title>
	</head>
	<body>
		<?php
			if($_COOKIE["user"]):
				echo "login as ".$_COOKIE["user"]." <a href=\"logout.php\">Logout</a>"."<a href=\"comment.html\"><h4 style=\"text-align:right\">Add comment</h4></a>";
			else:
				echo "<a href=\"login.html\">login</a> or <a href=\"register.html\">register</a>";
			endif
		?>
		<hr>
		<hr>
		<?php
			include "pdo.php";
			$query=$pdo->query("select * from comment");
			while($array=$query->fetch()){
				$comment[++$pos]=$array;
			}
			$pos++;
			while(--$pos){
				echo "<h4 style=\"text-align:center\">".$comment[$pos][1]."</h4>";
				echo "</br>";
				echo "<h5 style=\"text-align:right\">By ".$comment[$pos][0]."</h4>";
				if($comment[$pos][0]==$_COOKIE["user"]){
					echo "<a href=\"del_comment.php?user=".$comment[$pos][0]."&amp;comment=".$comment[$pos][1]."\">Delete</a>";
				}
				echo "<hr>";
			}
		?>
	</body>
</html>
