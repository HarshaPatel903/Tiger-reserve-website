<?php 

class crud{
	private $db;
	function __construct($conn){
		$this->db = $conn;
	}
	
	public function insert($fname,$lname,$email,$number,$comment){
		try{
			$sql = "INSERT INTO attendee(fname,lname,email,number,comment)VALUES(:fname,:lname,:email,:number,:comment)";
			$stmt = $this->db->prepare($sql);
			$stmt->bindparam(':fname' ,$fname);
			$stmt->bindparam(':lname' ,$lname);
			$stmt->bindparam(':email' ,$email);
			$stmt->bindparam(':number' ,$number);
			$stmt->bindparam(':comment' ,$comment);
			$stmt->execute();
			return true;
		}catch(PDOException $e){
			echo $e->getmessage();
			return false;
		}
	}
}
?>