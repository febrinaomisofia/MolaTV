<?php include ("include/koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<title>MOLA</title>
</head>
<body>
	<div class="header">
		<h2>Login</h2>
		<?php include ("function/functionlogin.php");?>
	</div>
	<form method="post" novalidate>
		<div class="input-group">
			<label for="username">Username</label>
			<input type="text" name="username" required>
		</div>
		<div class="input-group">
			<label for="password">Password</label>
			<input type="password" name="password" required>
		</div>
		<div class="input-group">
			<button type="submit" name="btn-login" class="btn">Login</button>
		</div>
		<p>
			Belum punya akun? <a href="registrasi.php" style="color: #ffffff">Buat Akun</a>
		</p>
	</form>

  <script type="text/javascript">
    // Javascrip bootstrap 4 dismissable alert
    $('.alert').alert();

  // Boottrap 4 validation
  (function() {
          'use strict';
          window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
