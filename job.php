<?php 
include_once 'router.php';
$job = new Job;
if (isset($_POST['del_id'])) {
	$del_id = $_POST['del_id'];
	if ($job->delete($del_id)) {
		redirect('index.php', 'Вакансия успешно удалена', 'success');
	}else{
		redirect('index.php', 'Вакансия не удалена!', 'error');
	}
}
$template = new Template('template/job-single.php');
$job_id = isset($_GET['id']) ? $_GET['id'] : null;
$template->job = $job->getJob($job_id);
echo $template;
?>