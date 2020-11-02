<?php include 'inc/header.php'; ?>
<main role="main">
		<div class="jumbotron my-3">
			<div class="container">
				<h1 class="display-4">Найти работу</h1>
				<form action="index.php" method="GET">
				<select name="category" class="form-control" id="">
				  <option value="0">Выбрать категорию</option>
				  <?php foreach ($categories as $category): ?>
					<option value="<?= $category->id; ?>"><?php echo $category->catname; ?></option>
				  <?php endforeach; ?>
				</select>
				<br>
				<input type="submit" class="btn btn-lg btn-success text-center" value="Поиск">
			  </form>
			</div>
			
		</div>
		<div class="container">
			<h3><?php echo $title."<hr>"; ?></h3>
			<?php foreach ($jobs as $job): ?>
			<div class="row">
			  <div class="col-md-10">
				<h2><?php echo $job->job_title; ?></h2>
				<p><?= $job->description ?></p>
				<p><a class="btn btn-outline-secondary" href="job.php?id=<?= $job->id; ?>" role="button">Подробнее &raquo;</a></p>
			  </div>
			</div>
			<?php endforeach; ?>
	<hr>
		</div>
	</main>
<?php include 'inc/footer.php'; ?>