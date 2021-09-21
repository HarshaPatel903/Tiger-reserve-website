<?php
 
class user{
	private $db;
	function __construct($conn){
		$this->db = $conn;
	}
	
	public function insertuser($uname,$password){
		try{
			$result = $this->getuserbyusername($uname);
			if($result['num'] > 0){
				return false;
			}else{
				$new_password = md5($password.$uname);
			    $sql = "INSERT INTO users (uname,password) VALUES (:uname,:password)";
			    $stmt = $this->db->prepare($sql);
			    $stmt->bindparam(':uname' ,$uname);
			    $stmt->bindparam(':password' ,$new_password);
			    $stmt->execute();
			    return true;
			}
		}catch(PDOException $e){
			echo $e->getmessage();
			return false;
		}
	}
    public function getuser($uname,$password){
		try{
			$sql = "select * from users where uname = :uname AND password = :password";
			$stmt = $this->db->prepare($sql);
			$stmt->bindparam(':uname' ,$uname);
			$stmt->bindparam(':password' ,$password);
			$stmt->execute();
			$result = $stmt->fetch();
			return $result;
		}catch(PDOException $e){
			echo $e->getmessage();
			return false;
		}
	}
	public function getuserbyusername($uname){
		try{
			$sql = "select count(*)as num from users where uname = :uname";
			$stmt = $this->db->prepare($sql);
			$stmt->bindparam(':uname' ,$uname);
			$stmt->execute();
			$result = $stmt->fetch();
			return $result;
		}catch(PDOException $e){
			echo $e->getmessage();
			return false;
		}
	}
	public function getusers(){
		try{
			$sql = "SELECT * FROM users";
			$result = $this->db->query($sql);
			return $result;
		}catch(PDOException $e){
			echo $e->getmessage();
			return false;
		}
	}
	
}
 ?>