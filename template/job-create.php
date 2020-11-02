<?php include 'inc/header.php'; ?>
		<div class="container">
			<div class="row my-3">
				<div class="col-md-10">
				<h2 class="page-header">Добавить вакансию</h2>
				<form method="post" action="create.php">
					<div class="form-group">
						<label for="">Категория:</label>
						<select type="text" class="form-control" name="category_id">
							<option value="0">Выбрать категорию</option>
							 <?php foreach ($categories as $category): ?>
							 <option value="<?= $category->id; ?>"><?php echo $category->catname; ?></option>
							 <?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label>Заголовок:</label>
						<input type="text" class="form-control" name="job_title" placeholder="Введите название вакансии" required>
					</div>
					<div class="form-group">
						<label>Компания:</label>
						<input type="text" class="form-control" name="company" placeholder="Введите название компании" required>
					</div>			
					<div class="form-group">
						<label>Описание:</label>
						<textarea class="form-control" name="description" id="" cols="10" rows="5" placeholder="Введите описание вакансии" required></textarea>
					</div>
					<div class="form-group">
						<label>Местонахождение:</label>
						<input type="text" class="form-control" name="location" placeholder="Введите город или населенный пункт" required>
					</div>
					<div class="form-group">
						<label>Зарплата:</label>
						<input type="text" class="form-control" name="salary" placeholder="Введите уровень зарплаты" required>
					</div>
					<div class="form-group">
						<label>Контактное лицо:</label>
						<input type="text" class="form-control" name="contact_user" placeholder="Введите контактное лицо" required>
					</div>
					<div class="form-group">
						<label>Контактный E-mail:</label>
						<input type="email" class="form-control" name="contact_email" placeholder="Введите контактный  E-mail" required>
					</div>
					<a href="index.php" class="btn btn-outline-primary">Назад</a>
					<input type="submit" class="btn btn-outline-warning" name="submit" value="Опубликовать">
				</form>
				</div>
			</div>
			<hr>
		</div>
<?php include 'inc/footer.php'; ?>