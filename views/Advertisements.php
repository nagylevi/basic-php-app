<!DOCTYPE html>
<html>
<title>Advertisements</title>
<head>
  <link rel="stylesheet" href="Styles/style.css">
</head>
<body>
<div id="container">
	<h1>Advertisement list</h1>
	<table>
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>User</th>
		</tr>
	<?php static::printAdvertisementsData(); ?>
	</table>
	<p><a href="./">Go back to the Index page</a></p>
</div>
</body>
</html>