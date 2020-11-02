<?php include 'inc/header.php'; ?>
	<div class="container">
		<div class="row my-3">
			<div class="col-md-10">
				<h2 class="page-header">Авторизация пользователя</h2>
				<form method="post" action="auth.php">
					<div class="form-group">
						<label for="">E-mail:</label>
						<input type="email" class="form-control" name="email" placeholder="Введите действующий E-mail" required>
					</div>
					<div class="form-group">
						<label for="">Пароль:</label>
						<input type="password" class="form-control" name="pass" placeholder="Введите пароль" required>
					</div>
					<a href="index.php" class="btn btn-outline-primary">Назад</a>
					<input type="submit" class="btn btn-outline-warning" name="submit" value="Вход">
				</form>
			</div>
		</div>
		<hr>
	</div>
<?php include 'inc/footer.php'; ?>