<?php 
include_once 'router.php';

$user = new User;
if (isset($_POST['submit'])) {
	$data = array();
	$data['email'] = mb_strtolower(trim($_POST['email']));
	$data['pass'] = password_hash(trim($_POST['pass']),PASSWORD_DEFAULT);
	if ($user->authUser($data)) {
		redirect("index.php", "Пользователь авторизован", "success");
	}else{
		redirect("index.php", "Ошибка входа, неверный логин или пароль", "error");
	}
}
$template = new Template('template/user-auth.php');
echo $template;
?>