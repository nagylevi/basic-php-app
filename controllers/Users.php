<?php

class Users extends Controller {
	
	public static function printUsersData(){
		
		//Select all of the existing users in the system
		$result = self::query("SELECT * FROM users");

		while($row = mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['name'] . "</td>";
		echo "</tr>";
		}
		
	}
}

?>