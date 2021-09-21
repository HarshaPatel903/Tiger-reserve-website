<?php 
    //$host = '127.0.0.1';
	//$db = 'attendence_db';
	//$user = 'root';
	//$pass = '';
	//$charset = 'utf8mb4';
	
	
	$host = 'sql6.freemysqlhosting.net';
	$db = 'sql6438793';
	$user = 'sql6438793';
	$pass = 'gsK2iHfjGZ';
	$charset = 'utf8mb4';
	
	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
	
    try{
		$pdo = new PDO($dsn ,$user ,$pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	} catch(PDOException $e){
		echo $e->getMessage();
	}
    require_once'crud.php';
    $crud = new crud($pdo);
	require_once'user.php';
    $user = new user($pdo);
	
	$user->insertuser("admin","password");
?>