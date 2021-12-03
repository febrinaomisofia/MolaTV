<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<title>Buat Akun</title>
</head>
<body>
	<div class="header">
		<h2>Buat Akun</h2>
	</div>

	<form method="post" action="registrasi.php">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" required>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" required>
		</div>
		<div class="input-group">
			<label>Konfirmasi Password</label>
			<input type="password" name="password_2" required>
		</div>
		<div class="input-group">
			<button type="submit" name="registrasi" class="btn">Buat Akun</button>
		</div>
		<div class="input-group">
		<p>
			Sudah punya akun? <a href="login.php" style="color: #ffffff">Login</a>
		</p>
		</div>
	</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>