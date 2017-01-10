<?php
namespace MVC;


class Db
{
	// private internal db variable
	private static $db;
	
	final private function __construct() {}
	final private function __clone() {}
	public static function get() {
		// Connect if not already connected
		if (is_null(self::$db)) {
			// DB connection settings
			//require_once("../../settings.php");
			$servername = getenv('C9_USER') ? getenv('IP') : "localhost";
			$database = getenv('C9_USER') ? "c9" : "todoapp";
			$dbport = 3306;
			$user = getenv('C9_USER') ? getenv('C9_USER') : "root";
			$pass = getenv('C9_USER') ? "" : "root";
			$driverOpts = null;
			$dsn = "mysql:host=$servername;dbname=$database;port=$dbport;charset=utf8";
			self::$db = new \PDO($dsn, $user, $pass, $driverOpts);
		}
		// Return the connection
		return self::$db;
	}
}
