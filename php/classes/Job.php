<?php 
class Job{
	private $db;
	public function __construct(){
		$this->db = new Database;
	}

	public function getAllJobs(){
		$this->db->query("SELECT jobs.*, categories.catname 
			FROM jobs
			INNER JOIN categories
			ON jobs.category_id = categories.id 
			ORDER BY `id` DESC
			");
		$results = $this->db->resultSet();
		return $results;
	}

	public function getCategories(){
		$this->db->query("SELECT * FROM categories");
		$results = $this->db->resultSet();
		return $results;
	}
	
	public function getByCategory($category){
		$this->db->query("SELECT jobs.*, categories.catname 
			FROM jobs
			INNER JOIN categories
			ON jobs.category_id = categories.id 
			WHERE jobs.category_id = $category
			ORDER BY `id` DESC
			");
		$results = $this->db->resultSet();
		return $results;
	}
	
	public function getCategory($cat){
		$this->db->query("SELECT * FROM categories WHERE id=:category_id");
		$this->db->bind(":category_id", $cat);
		$row = $this->db->single();
		return $row;
	}
	
	public function getJob($job_id){
		$this->db->query("SELECT * FROM jobs WHERE id=:id");
		$this->db->bind(":id", $job_id);
		$row = $this->db->single();
		return $row;
	}
	
	public function create($data){
		$this->db->query("INSERT INTO jobs(category_id, job_title, company, description, location, contact_user, contact_email, salary) VALUES(:category_id, :job_title, :company, :description, :location, :contact_user, :contact_email, :salary)");
		$this->db->bind("category_id", $data['category_id']);
		$this->db->bind(":job_title", $data['job_title']);
		$this->db->bind(":company", $data['company']);
		$this->db->bind(":description", $data['description']);
		$this->db->bind(":location", $data['location']);
		$this->db->bind(":contact_user", $data['contact_user']);
		$this->db->bind(":contact_email", $data['contact_email']);
		$this->db->bind(":salary", $data['salary']);
		if ($this->db->execute()) {
			return true;
		}else{
			return false;
		}
	}
	
	public function delete($del_id){
		$this->db->query("DELETE FROM jobs WHERE id=$del_id");
		if ($this->db->execute()) {
			return true;
		}else{
			return false;
		}
	}
	public function update($job_id, $data){
		$this->db->query("UPDATE jobs SET category_id = :category_id, job_title = :job_title, company = :company, description = :description, location = :location, contact_user = :contact_user, contact_email = :contact_email, salary = :salary WHERE id= $job_id");
		$this->db->bind("category_id", $data['category_id']);
		$this->db->bind(":job_title", $data['job_title']);
		$this->db->bind(":company", $data['company']);
		$this->db->bind(":description", $data['description']);
		$this->db->bind(":location", $data['location']);
		$this->db->bind(":contact_user", $data['contact_user']);
		$this->db->bind(":contact_email", $data['contact_email']);
		$this->db->bind(":salary", $data['salary']);
		if ($this->db->execute()) {
			return true;
		}else{
			return false;
		}
	}
}
 ?>