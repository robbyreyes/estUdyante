<?php
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"select * from posts");
	while($row=mysqli_fetch_array($res))
	{
		echo $row["user_name"]." ".$row["body"];
		echo "<br />";
	}

?>