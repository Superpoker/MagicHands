<html>
	<title>my php page</title>
	<body>
	<?php
	
	$name = $_REQUEST['name'];
	if ($name == 'Kevin')
	{
		echo 'Welcome, oh glorious leader!';
	}
	
	?>
	</body>
</html>