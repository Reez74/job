<?php 
class User{
	private $db;
	public function __construct(){
		$this->db = new Database;
	}
	
	public function addUser($data){
		$this->db->query("SELECT * FROM users WHERE :email = email");
		$this->db->bind(":email", $data['email']);
		$result = $this->db->resultSet();
		if ($result) {
			return false;
		}else{
			$this->db->query("INSERT INTO users (name, lastname, email, pass) VALUES(:name, :lastname, :email, :pass)");
			$this->db->bind(":name", $data['name']);
			$this->db->bind(":lastname", $data['lastname']);
			$this->db->bind(":email", $data['email']);
			$this->db->bind(":pass", $data['pass']);
			if ($this->db->execute()) {
				return true;
			}else{
				return false;
			}
		}
	}

	public function authUser($data){
		$this->db->query("SELECT * FROM users WHERE :email = email");
		$this->db->bind(":email", $data['email']);
		$result = $this->db->getrow();
		$row = $result->fetch(PDO::FETCH_ASSOC);
		if (password_verify($data['pass'], $row['pass'])) {
			return true;
		}else{
			return false;	
		}
	}		
}
?>








