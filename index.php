<?php 
include_once 'router.php';
$job = new Job;
$template = new Template('template/frontpage.php');
$category = isset($_GET['category']) ? $_GET['category'] : null;

if ($category) {
	$template->jobs = $job->getByCategory($category);
	$template->title = "Категория: ". $job->getCategory($category)->catname;
}else{
	$template->title = "Последние вакансии";
	$template->jobs = $job->getAllJobs();
}
$template->categories = $job->getCategories();
echo $template;
?>