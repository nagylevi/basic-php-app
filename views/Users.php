<!DOCTYPE html>
<html>
<title>Users</title>
<head>
  <link rel="stylesheet" href="Styles/style.css">
</head>
<body>
<div id="container">
	<h1>User list</h1>
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th> 
		</tr>
	<?php static::printUsersData(); ?>
	</table>
	<p><a href="./">Go back to the Index page</a></p>
</div>
</body>
</html>