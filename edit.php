<?php 
include_once 'router.php';
$job = new Job;
$job_id = isset($_GET['id']) ? $_GET['id'] : null;

if (isset($_POST['submit'])) {
	$data = array();
	$data['job_title'] = $_POST['job_title'];
	$data['company'] = $_POST['company'];
	$data['description'] = $_POST['description'];
	$data['location'] = $_POST['location'];
	$data['category_id'] = $_POST['category_id'];
	$data['salary'] = $_POST['salary'];
	$data['contact_email'] = $_POST['contact_email'];
	$data['contact_user'] = $_POST['contact_user'];
	if ($job->update($job_id, $data)) {
		redirect("index.php", "Ваша вакансия обновлена", "success");
	}else{
		redirect("index.php", "Что-то пошло не так", "error");
	}
}
$template = new Template('template/job-edit.php');
$template->job = $job->getJob($job_id);
$template->categories = $job->getCategories();
echo $template;
?>