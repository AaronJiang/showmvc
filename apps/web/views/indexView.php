<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title;?></title>
	</head>
	<body>
		<div id="container">
			hello world	

			<?php foreach($users as $user):?>
				<h2><?php echo $user;?></h2>
			<?php endforeach;?>
		</div>
	</body>
</html>
