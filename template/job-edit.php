<?php include 'inc/header.php'; ?>
<div class="container">
	<div class="row my-3">
		<div class="col-md-10">
			<h2 class="page-header">Редактор вакансии</h2>
			<form method="post" action="edit.php?id=<?php echo $job->id; ?>">
				<div class="form-group">
					<label for="">Компания:</label>
					<input type="text" class="form-control" name="company" value="<?php echo $job->company; ?>" required>
				</div>
				<div class="form-group">
					<label for="">Категория:</label>
					<select type="text" class="form-control" name="category_id">
						<option value="0">Выбрать категорию</option>
						 <?php foreach ($categories as $category): ?>
							<?php if ($job->category_id == $category->id): ?>
								<option value="<?= $category->id; ?>" selected><?php echo $category->catname; ?></option>
							<?php else: ?>
								<option value="<?= $category->id; ?>"><?php echo $category->catname; ?></option>
							<?php endif ?>
						 <?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label for="">Заголовок:</label>
					<input type="text" class="form-control" name="job_title" value="<?php echo $job->job_title; ?>" required>
				</div>
				<div class="form-group">
					<label for="">Описание:</label>
					<textarea class="form-control" name="description" id="" cols="10" rows="5" required><?php echo $job->description; ?></textarea>
				</div>
				<div class="form-group">
					<label for="">Расположение:</label>
					<input type="text" class="form-control" name="location" value="<?php echo $job->location; ?>" required>
				</div>
				<div class="form-group">
					<label for="">Зарплата:</label>
					<input type="text" class="form-control" name="salary" value="<?php echo $job->salary; ?>" required>
				</div>
				<div class="form-group">
					<label for="">Контактное лицо:</label>
					<input type="text" class="form-control" name="contact_user" value="<?php echo $job->contact_user; ?>" required>
				</div>
				<div class="form-group">
					<label for="">Контактный E-mail:</label>
					<input type="text" class="form-control" name="contact_email" value="<?php echo $job->contact_email; ?>" required>
				</div>
				<a href="job.php?id=<?php echo $job->id; ?>" class="btn btn-outline-primary">Назад</a>
				<input type="submit" class="btn btn-outline-warning" name="submit" value="Опубликовать">
			</form>
			<form method="post" action="job.php">
			<div class="float-right">
				<input type="hidden" name="del_id" value="<?php echo $job->id ?>">
				<input type="submit" class="btn btn-outline-danger" value="Удалить">
			</div>
			</form>
		</div>
	</div>
	<hr>
</div>
<?php include 'inc/footer.php'; ?>