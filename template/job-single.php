<?php include 'inc/header.php'; ?>
	<div class="container">
		<div class="row my-3">
			<div class="col-md-10">
				<h2 class="page-header"><?php echo $job->job_title; ?><br><h3><?php echo $job->location; ?></h3></h2>
				<small>Опубликовал(а): <?php echo $job->contact_user; ?> <br>Дата: <?php echo $job->post_date; ?></small>
				<hr>
				<p class="lead"><?php echo $job->description; ?></p>
				<ul class="list-group list-group-flush">
					<li class="list-group-item"><strong>Название компании:</strong> <?php echo $job->company ?></li>
					<li class="list-group-item"><strong>Уровень зарплаты:</strong> <?php echo $job->salary ?></li>
					<li class="list-group-item"><strong>Контактные данные:</strong> <?php echo $job->contact_email ?></li>
				</ul>
				<div class="button my-3">
					<a href="index.php" class="btn btn-outline-primary">Назад</a>
					<a href="edit.php?id=<?php echo $job->id; ?>" class="btn btn-outline-warning">Редактировать</a>
				</div>
			</div>
		</div>
	<hr>
	</div>
<?php include 'inc/footer.php'; ?>