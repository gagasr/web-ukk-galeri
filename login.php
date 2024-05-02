<!DOCTYPE html>
<html>

<head>
	<title>Website Galeri Foto</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container">
			<a class="navbar-brand" href="#">Website Galeri Foto</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
				aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse mt-2 " id="navbarNavAltMarkup">
				<div class="navbar-nav me-auto">

				</div>
				<a href="register.php" class="btn btn-outline-primary m-1">
					Daftar</a>
				<a href="login.php" class="btn btn-outline-success m-1">Masuk</a>

			</div>
		</div>
	</nav>

	<div class="container py-5">
		<div class="row justify-content-center">
			<div class="col-md-3">
				<div class="card">
					<div class="card-body bg-light">
						<div class="text-center">
							<h5>Login Aplikasi</h5>
						</div>
						<form action="config/aksi_login.php" method="POST">
							<label class="form-label">Username</label>
							<input class="text" name="username" class="form-control" required>
							<label class="form-label">Password</label>
							<input class="password" name="password" class="form-control" required>
							<div class="d-grid mt-2">
								<button class="btn btn-primary" type="submit" name="kirim">MASUK</button>
							</div>
						</form>
						<hr>
						<p>Belum punya akun? <a href="register.php">Daftar disini!</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed">
		<p>&copy; UKK RPL 2024 | Gagas Rashad Prakoso</p>
	</footer>

	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>