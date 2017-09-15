<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>
<h1>My first view in Code Igniter!</h1>
<?php
foreach($fruits as $f){
	echo "<br />$f";
}
?>
</body>
</html>