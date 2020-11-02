<?php 
include_once 'router.php';
$user = new User;
if (isset($_POST['submit'])) {
	$data = array();
	$data['name'] = $_POST['name'];
	$data['lastname'] = $_POST['lastname'];
	$data['email'] = mb_strtolower(trim($_POST['email']));
	$data['pass'] = password_hash(trim($_POST['pass']),PASSWORD_DEFAULT);
	if ($user->addUser($data)) {
		redirect("index.php", "Новый пользователь зарегистрирован", "success");
	}else{
		redirect("index.php", "Пользователь с таким E-mail зарегистрирован", "error");
	}
}
$template = new Template('template/user-reg.php');
echo $template;
?>