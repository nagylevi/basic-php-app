<?php
class Database {
	
		//A function for connecting to the database
        private static function connect() {
            $dbc = mysqli_connect("localhost", "root", "", "database");
			mysqli_set_charset($dbc,"utf8");
            return $dbc;
        }
		
		//A function for queryes
        public static function query($query) {
			$result = mysqli_query(self::connect(), $query);
            return $result;
        }
}