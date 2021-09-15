<?php

class Advertisements extends Controller {
	
	public static function printAdvertisementsData(){
		
		//Select all of the advertisements and the related user's name
		$result = self::query("SELECT advertisements.id, advertisements.title, users.name
		FROM advertisements
		LEFT JOIN users ON advertisements.userid = users.id");
		
		while($row = mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['title'] . "</td>";
		echo "<td>" . $row['name'] . "</td>";
		echo "</tr>";
		}
	}
}

?>