<?php

	include_once('models/db.php');

	function comments_all(){
		$query = db_query("SELECT * FROM comments ORDER BY dt DESC");
		return $query->fetchAll();
	}
	
	function comments_add($name, $text){
		$query = db_query("INSERT INTO comments (name, text) VALUES (:n, :t)", [
				'n' => $name,
				't' => $text
			]);
	
		$db = db_connect();
		return $db->lastInsertId();
	}