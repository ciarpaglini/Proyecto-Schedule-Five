<?php

class Database{
	public static function connect(){
		$db = new mysqli('localhost', 'xxxxxx', 'xxxxxx', 'xxxxxxx');
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}
